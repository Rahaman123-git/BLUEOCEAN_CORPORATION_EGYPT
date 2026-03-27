<?php

if (!function_exists('extractModuleFullName')){
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

if (!function_exists('extractHtmlContent')){
    function extractHtmlContent($html, $mode = 'pUlLiP'){
        // Load HTML into DOMDocument
        $dom = new \DOMDocument(); // Use backslash for global namespace
        libxml_use_internal_errors(true); // Prevents warnings from malformed HTML
        $dom->loadHTML($html);
        libxml_clear_errors();

        if($mode == 'pUlLiP') {
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
                    $text = trim($node->textContent);
                    if ($pCount == 0) {
                        $result['uppertext'] = $text; // First <p> as uppertext
                    } else {
                        $result['lowertext'] = $text; // Any subsequent <p> as lowertext
                    }
                    $pCount++;
                } elseif ($node->nodeName === 'ul') {
                    foreach ($node->getElementsByTagName('li') as $li) {
                        $result['bulletpoints'][] = trim($li->textContent);
                    }
                }
            }
        } elseif($mode == 'pTableP') {
            // Initialize result array
            $result = [
                'uppertext' => '',
                'bulletpoints' => [],
                'lowertext' => ''
            ];

            // Extract first paragraph as uppertext
            $pTags = $dom->getElementsByTagName('p');
            if ($pTags->length > 0) {
                $upperText = trim($pTags->item(0)->textContent);

                // Replace encoded characters
                $upperText = str_replace(['â', 'â'], ['—', "'"], $upperText);
                $result['uppertext'] = $upperText; //trim($pTags->item(0)->textContent);
            }

            $xpath = new \DOMXPath($dom);
            $rows = $xpath->query('//table//tr');

            $currentSection = null;
            $currentSubKey = null;

            foreach ($rows as $row) {
                $cells = $row->getElementsByTagName('td');
                
                // Skip rows with more than 3 columns
                if ($cells->length > 3) continue;
                
                // If there are 1, 2, or 3 columns, process the row
                $left = $cells->length > 0 ? trim($cells->item(0)->textContent) : '';
                $middle = $cells->length > 1 ? trim($cells->item(1)->textContent) : '';
                $right = $cells->length > 2 ? trim($cells->item(2)->textContent) : '';

                // Replace encoded characters
                $left = str_replace(['â', 'â'], ['—', "'"], $left);
                $middle = str_replace(['â', 'â'], ['—', "'"], $middle);
                $right = str_replace(['â', 'â'], ['—', "'"], $right);

                // If left cell has text, it means a new section has started
                if (!empty($left) && empty($middle) && empty($right)) {
                    // Handle new section
                    $currentSection = $left;
                    if (!isset($result['bulletpoints'][$currentSection])) {
                        $result['bulletpoints'][$currentSection] = [];
                    }
                    $currentSubKey = null; // Reset sub-key for new section
                }
                elseif (!empty($middle) && empty($right)) {
                    // If there is a middle value and no right value, treat it as a sub-key (e.g., Framework)
                    if ($currentSection) {
                        $currentSubKey = $middle;
                        $result['bulletpoints'][$currentSection][$currentSubKey] = [];
                    }
                }
                elseif (!empty($right)) {
                    // Add to the section or sub-section based on the presence of currentSubKey
                    if ($currentSection) {
                        if ($currentSubKey) {
                            // If there is a sub-key, append to it
                            $result['bulletpoints'][$currentSection][$currentSubKey][] = $right;
                        } else {
                            // Otherwise, just add directly under the current section
                            $result['bulletpoints'][$currentSection][] = $right;
                        }
                    }
                }
            }
        } elseif($mode == 'pUlLiPR') {
            $result = [
                'bulletpoints' => []
            ];

            $nodes = $dom->getElementsByTagName('body')->item(0)->childNodes;

            $currentKey = null;

            foreach ($nodes as $node) {
                if ($node->nodeName === 'p') {
                    $currentKey = trim(str_replace(['â', 'â'], ['—', "'"], $node->textContent));
                    $result['bulletpoints'][$currentKey] = [];
                } elseif ($node->nodeName === 'ul' && $currentKey !== null) {
                    $items = [];
                    foreach ($node->getElementsByTagName('li') as $li) {
                        $items[] = trim(str_replace(['â', 'â'], ['—', "'"], $li->textContent));
                    }
                    $result['bulletpoints'][$currentKey] = $items;
                    $currentKey = null; // Reset key so it doesn't apply to future <ul> without <p>
                }
            }
        }
        
        return $result;
    }
}

if (!function_exists('breakBy13Chars')){
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

if (!function_exists('breakByChars')){
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

if (!function_exists('truncateText')){
    function truncateText($text, $maxChars = 100) {
        if (strlen($text) <= $maxChars) {
            return $text;
        }
        return substr($text, 0, $maxChars) . '...';
    }
}