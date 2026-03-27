    document.addEventListener('DOMContentLoaded', function () {
        const tabList = document.getElementById('default-styled-tab');
        const tabButtons = tabList.querySelectorAll('button[data-tabs-target]');
        const dropdown = document.getElementById('mobile-tabview');
        const tabPanels = document.querySelectorAll('[role="tabpanel"]');

        function initTabs() {
            // Clear existing options to avoid duplicates
            dropdown.innerHTML = '';

            const isMobile = window.innerWidth <= 768;
            dropdown.style.display = isMobile ? 'block' : 'none';
            tabList.style.display = isMobile ? 'none' : 'flex';

            if (isMobile) {
                tabButtons.forEach((btn, index) => {
                    const label = btn.textContent.trim();
                    const target = btn.getAttribute('data-tabs-target');

                    if (label && target) {
                        const option = document.createElement('option');
                        option.textContent = label;
                        option.value = target;
                        if (btn.getAttribute('aria-selected') === 'true') {
                            option.selected = true;
                        }
                        dropdown.appendChild(option);
                    }
                });
            }
        }

        // Handle dropdown change on mobile
        dropdown.addEventListener('change', function () {
            const selected = this.value;

            // Update panels
            tabPanels.forEach(panel => {
                panel.classList.add('hidden');
            });
            const showPanel = document.querySelector(selected);
            if (showPanel) showPanel.classList.remove('hidden');

            // Update button active state (optional for sync)
            tabButtons.forEach(btn => {
                const isMatch = btn.getAttribute('data-tabs-target') === selected;
                btn.setAttribute('aria-selected', isMatch);
            });
        });

        // Desktop tab button click
        tabButtons.forEach(btn => {
            btn.addEventListener('click', function () {
                const target = btn.getAttribute('data-tabs-target');

                tabButtons.forEach(b => b.setAttribute('aria-selected', 'false'));
                this.setAttribute('aria-selected', 'true');

                tabPanels.forEach(panel => panel.classList.add('hidden'));
                document.querySelector(target).classList.remove('hidden');

                // Sync dropdown (if visible)
                if (window.innerWidth <= 768) {
                    dropdown.value = target;
                }
            });
        });

        // Initial run
        initTabs();

        // Optional: re-check on resize
        window.addEventListener('resize', () => {
            initTabs();
        });
    });

    const selectElement = document.getElementById("mobile-tabview");
    const outputDiv = document.getElementById("option-value");

    selectElement.addEventListener("change", () => {
        const selectedText = selectElement.options[selectElement.selectedIndex].text;
        outputDiv.textContent = `${selectedText}`;
    });