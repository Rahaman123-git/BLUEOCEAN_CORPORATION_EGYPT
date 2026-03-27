<?php

if (!function_exists('extractModuleFullName')) {
    function extractModuleFullName($moduleTitle) {
        // Split the input based on " / "
        $parts = explode(" / ", $moduleTitle);

        // The first part is the base name
        $baseName = array_shift($parts);

        // Array to store the separated names
        $separateNames = [$baseName];

        // Loop through each additional part and append it correctly
        foreach ($parts as $suffix) {
            // Remove the last word of the base name
            $baseWords = explode(" ", $baseName);
            array_pop($baseWords); // Remove last word
            $modifiedBase = implode(" ", $baseWords); // Reconstruct base name without last word

            // Append the suffix correctly
            $separateNames[] = trim($modifiedBase . " " . $suffix);
        }

        return $separateNames;
    }
}

if (!function_exists('extractHtmlContent')) {
    function extractHtmlContent($html, $mode = 'pUlLiP') {
        // Normalize input & wrap to ensure <html><body> exist
        $raw = (string) ($html ?? '');
        $wrapped = '<!doctype html><html><head><meta charset="utf-8"></head><body>' . $raw . '</body></html>';

        // Load HTML into DOMDocument safely
        $dom = new \DOMDocument('1.0', 'UTF-8'); // Use global namespace
        libxml_use_internal_errors(true);
        $ok = $dom->loadHTML($wrapped, LIBXML_NOWARNING | LIBXML_NOERROR);
        libxml_clear_errors();

        // String fix helper
        $fix = static function ($s) {
            return str_replace(['â', 'â'], ['—', "'"], trim((string) $s));
        };

        // If DOM failed to load, return sensible empty results per mode
        if (!$ok) {
            if ($mode === 'pUlLiP' || $mode === 'pTableP') {
                return ['uppertext' => '', 'bulletpoints' => [], 'lowertext' => ''];
            }
            if ($mode === 'pUlLiPR' || $mode === 'pTableColumnsWithHeaders') {
                return [];
            }
            return [];
        }

        if ($mode == 'pUlLiP') {
            // Initialize result array
            $result = [
                'uppertext' => '',
                'bulletpoints' => [],
                'lowertext' => ''
            ];

            $pCount = 0;

            // Loop through all elements
            foreach ($dom->getElementsByTagName('*') as $node) {
                if ($node->nodeName === 'p') {
                    $text = $fix($node->textContent);
                    if ($pCount == 0) {
                        $result['uppertext'] = $text; // First <p> as uppertext
                    } else {
                        $result['lowertext'] = $text; // Any subsequent <p> as lowertext
                    }
                    $pCount++;
                } elseif ($node->nodeName === 'ul') {
                    foreach ($node->getElementsByTagName('li') as $li) {
                        $result['bulletpoints'][] = $fix($li->textContent);
                    }
                }
            }

            return $result;

        } elseif ($mode == 'pTableP') {
            // Initialize result array
            $result = [
                'uppertext' => '',
                'bulletpoints' => [],
                'lowertext' => ''
            ];

            // Extract first paragraph as uppertext
            $pTags = $dom->getElementsByTagName('p');
            if ($pTags && $pTags->length > 0) {
                $result['uppertext'] = $fix($pTags->item(0)->textContent);
            }

            $xpath = new \DOMXPath($dom);
            $rows = $xpath->query('//table//tr');

            $currentSection = null;
            $currentSubKey = null;

            if ($rows) {
                foreach ($rows as $row) {
                    if (!($row instanceof \DOMElement)) continue;

                    $cells = $row->getElementsByTagName('td');
                    if (!$cells || $cells->length === 0) continue;

                    // Skip rows with more than 3 columns
                    if ($cells->length > 3) continue;

                    // If there are 1, 2, or 3 columns, process the row
                    $left   = $cells->length > 0 ? $fix($cells->item(0)->textContent) : '';
                    $middle = $cells->length > 1 ? $fix($cells->item(1)->textContent) : '';
                    $right  = $cells->length > 2 ? $fix($cells->item(2)->textContent) : '';

                    // If left cell has text, it means a new section has started
                    if ($left !== '' && $middle === '' && $right === '') {
                        // Handle new section
                        $currentSection = $left;
                        if (!isset($result['bulletpoints'][$currentSection])) {
                            $result['bulletpoints'][$currentSection] = [];
                        }
                        $currentSubKey = null; // Reset sub-key for new section
                    }
                    elseif ($middle !== '' && $right === '') {
                        // Treat middle as a sub-key
                        if ($currentSection) {
                            $currentSubKey = $middle;
                            $result['bulletpoints'][$currentSection][$currentSubKey] = [];
                        }
                    }
                    elseif ($right !== '') {
                        // Add to the section or sub-section based on the presence of currentSubKey
                        if ($currentSection) {
                            if ($currentSubKey) {
                                $result['bulletpoints'][$currentSection][$currentSubKey][] = $right;
                            } else {
                                $result['bulletpoints'][$currentSection][] = $right;
                            }
                        }
                    }
                }
            }

            return $result;

        } elseif ($mode == 'pUlLiPR') {
            $result = [
                'bulletpoints' => []
            ];

            $body = $dom->getElementsByTagName('body')->item(0);
            if (!$body) {
                return $result; // defensively bail if body isn't present
            }

            $nodes = $body->childNodes;
            if (!$nodes) {
                return $result;
            }

            $currentKey = null;

            foreach ($nodes as $node) {
                if (!($node instanceof \DOMNode)) continue;

                if ($node->nodeName === 'p') {
                    $currentKey = $fix($node->textContent);
                    if ($currentKey !== '') {
                        $result['bulletpoints'][$currentKey] = [];
                    }
                } elseif ($node->nodeName === 'ul' && $currentKey !== null) {
                    $items = [];
                    /** @var \DOMNode $li */
                    foreach ($node->getElementsByTagName('li') as $li) {
                        $items[] = $fix($li->textContent);
                    }
                    $result['bulletpoints'][$currentKey] = $items;
                    $currentKey = null; // Reset key so it doesn't apply to future <ul> without <p>
                }
            }

            return $result;

        } elseif ($mode == 'pTableColumnsWithHeaders') {
            // Initialize result array
            $result = [];

            $xpath = new \DOMXPath($dom);

            // Get the header row (the first row)
            $headerRow = $xpath->query('//table//tr[1]');
            if (!$headerRow || $headerRow->length === 0) {
                return $result;
            }

            $firstRow = $headerRow->item(0);
            if (!($firstRow instanceof \DOMElement)) {
                return $result;
            }

            // Prefer <th>, fall back to <td>
            $headerCells = $firstRow->getElementsByTagName('th');
            if (!$headerCells || $headerCells->length === 0) {
                $headerCells = $firstRow->getElementsByTagName('td');
            }
            if (!$headerCells || $headerCells->length === 0) {
                return $result;
            }

            // Extract the column headers
            $headers = [];
            foreach ($headerCells as $cell) {
                $headerText = $fix($cell->textContent);
                $headers[] = $headerText;
            }

            // Get the data rows (rows after the header)
            $rows = $xpath->query('//table//tr[position() > 1]'); // Skip the first row
            if (!$rows || $rows->length === 0) {
                return $result;
            }

            // Iterate over the rows and extract data
            foreach ($rows as $row) {
                if (!($row instanceof \DOMElement)) continue;

                // Prefer <td> cells; if none, try <th>
                $cells = $row->getElementsByTagName('td');
                if (!$cells || $cells->length === 0) {
                    $cells = $row->getElementsByTagName('th');
                }
                if (!$cells || $cells->length === 0) {
                    continue;
                }

                // Iterate over each cell and extract its content
                foreach ($cells as $colIndex => $cell) {
                    // If the cell contains a <ul>, extract the list items; otherwise use text
                    $ul = $cell->getElementsByTagName('ul');
                    if ($ul && $ul->length > 0) {
                        $listItems = [];
                        foreach ($ul->item(0)->getElementsByTagName('li') as $li) {
                            $listItems[] = $fix($li->textContent);
                        }
                        $content = $listItems;
                    } else {
                        $content = $fix($cell->textContent);
                    }

                    // Assign the content to the appropriate header key
                    if (isset($headers[$colIndex])) {
                        $header = $headers[$colIndex];
                        if (!isset($result[$header])) {
                            $result[$header] = [];
                        }
                        $result[$header][] = $content;
                    }
                }
            }

            return $result;
        }

        // Fallback
        return [];
    }
}

if (!function_exists('breakBy13Chars')) {
    function breakBy13Chars(string $text): string
    {
        $words = explode(' ', $text);
        $lines = [];
        $charCount = 0;

        foreach ($words as $index => $word) {
            $charCount += strlen($word) + ($index > 0 ? 1 : 0); // add space between words
            $lines[] = $word;

            // Break after total char count exceeds 13 or max 2 words
            if ($charCount >= 13 || count($lines) == 2) {
                break;
            }
        }

        $firstPart = implode('<br>', $lines);
        $remaining = array_slice($words, count($lines));
        $secondPart = implode(' ', $remaining);

        return $secondPart ? $firstPart . '<br>' . $secondPart : $firstPart;
    }
}

if (!function_exists('breakByChars')) {
    function breakByChars(string $text, int $breakLength): string
    {
        $words = explode(' ', $text);  // Split the input into words
        $lines = [];                   // Array to store lines
        $charCount = 0;                // To keep track of the character count
        $line = [];                    // To collect words for the current line

        // Loop through the words
        foreach ($words as $index => $word) {
            $wordLength = strlen($word);
            $nextCharCount = $charCount + $wordLength + (count($line) > 0 ? 1 : 0); // Add space if it's not the first word

            // If adding this word makes the line exceed $breakLength characters and the line already has content
            if ($nextCharCount > $breakLength && count($line) > 0) {
                $lines[] = implode(' ', $line);  // Add current line to lines
                $line = [$word];  // Start a new line with the current word
                $charCount = $wordLength;  // Reset char count for new line with the current word
            } else {
                $line[] = $word;  // Add word to current line
                $charCount = $nextCharCount;  // Update char count
            }
        }

        // Add any remaining words as the last line
        if (!empty($line)) {
            $lines[] = implode(' ', $line);
        }

        // Return final result by joining lines with <br /> for line breaks
        return implode('<br />', $lines);
    }
}

if (!function_exists('truncateText')) {
    function truncateText($text, $maxChars = 100) {
        if (strlen($text) <= $maxChars) {
            return $text;
        }
        return substr($text, 0, $maxChars) . '...';
    }
}
