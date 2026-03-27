const searchButton = document.querySelector('.traning-search');
const searchInput = document.getElementById('traning-search'); 

// Declare filterSelected outside the courseFilter function
const filterSelected = {
    keyword: '',
    schedule: '',
    category: [],
    certification: [],
    language: [],
    format: [],
    location: []
};

document.addEventListener('DOMContentLoaded', function () {
    let bannerSection = document.querySelector('.page-banner-section');

    if (!bannerSection) return;
    window.onscroll = function() {
        let scrollPosition = window.scrollY; // Get current scroll position
        let bannerSection = document.querySelector('.page-banner-section'); // Target the element

        if (scrollPosition > 100) { // Change 100 to the scroll position you want
            bannerSection.classList.add('hiddenn'); // Add 'hidden' class to hide the element
        } else {
            bannerSection.classList.remove('hiddenn'); // Remove the 'hidden' class to show the element
        }
    };
});

if (searchButton) {
    searchButton.addEventListener('click', function(event){
        event.preventDefault();
        redirectToSearch();
    });
}

if (searchInput) {
    searchInput.addEventListener('keydown', function(event){
        if(event.key === 'Enter'){
            event.preventDefault();
            redirectToSearch();
        }
    }); 
}

// let courseSlider = document.querySelector(".course-slider-js");
// if (courseSlider) {
//   var slider = tns({
//     container: courseSlider,
//     items: 1,
//     slideBy: "page",
//     autoplay: true,
//     autoplayButtonOutput: false,
//     nav: false,
//     controls: false,
//     speed: 2000,
//     autoplayTimeout: 6000,
//     mode: "carousel",
//     speed: 0,
//   });
// }

let affiliateTabButton = document.querySelector(".tab-button");
if(affiliateTabButton) {
    document.querySelectorAll('.tab-button').forEach(button => {
        button.addEventListener('click', () => {
            const tabId = button.dataset.tab;

            // Update button active state
            document.querySelectorAll('.tab-button').forEach(btn => {
                btn.classList.remove('border-blue-500', 'text-blue-500', 'active');
                btn.classList.add('text-gray-600');
            });
            button.classList.add('border-blue-500', 'text-blue-500');
            button.classList.remove('text-gray-600');

            // Show the corresponding panel
            document.querySelectorAll('.tab-panel').forEach(panel => panel.classList.add('hidden'));
            document.getElementById(tabId).classList.remove('hidden');
        });
    });

    const buttons = document.querySelectorAll('.tab-button');

    buttons.forEach(button => {
        button.addEventListener('click', function () {
            this.classList.toggle('active');
        });
    });
}

let affiliateSlider = document.querySelector(".affiliate-slider");
if(affiliateSlider) {
    var slider = tns({
        container: affiliateSlider,
        items: 1,
        loop: true,
        autoplay: false,
        autoplayTimeout: 3000,
        speed: 1000,
        gutter: 20,
        controls: false,
        nav: false,
        mouseDrag: true,
        autoplayButton: false,
        autoplayButtonOutput: false,
        responsive: {
            1024: {
                items: 2,
            },
            1200: {
                items: 3,
            },
            1300: {
                items: 4,
            }
        }
    });
}

let videoTestimonialSlider = document.querySelector(".video-t-slider");
if (videoTestimonialSlider) {
    tns({
        container: '.video-t-slider',
        loop: true,
        items: 1,
        slideBy: 'page',
        nav: false,
        autoplay: false,
        speed: 400,
        autoplayButtonOutput: false,
        mouseDrag: true,
        lazyload: true,
        mode: 'carousel',
        controlsContainer: "#custom-control",
        controls: true,
    });
}

document.querySelectorAll(".affiliation-course").forEach(el => {
    el.addEventListener("click", function () {
        this.classList.toggle("active"); // Replace 'active' with any class you want to toggle
    });
});

document.querySelectorAll('.calendarswitch').forEach(function(radio) {
    radio.addEventListener('click', function() {
        if (this.value === 'sixmonth') {
            document.querySelector('.sixmonthblock')?.classList.remove('hidden');
            document.querySelector('.twelvemonthblock')?.classList.add('hidden');
        } else if (this.value === 'twelvemonth') {
            document.querySelector('.sixmonthblock')?.classList.remove('hidden');
            document.querySelector('.twelvemonthblock')?.classList.remove('hidden');
        }
    });
});

const phoneInput = document.querySelector("#phone");
if(phoneInput){
    const iti = window.intlTelInput(phoneInput, {
        initialCountry: "ae", // 🇦🇪 United Arab Emirates
        nationalMode: false,  // Includes the +971 prefix in the value
        separateDialCode: false,
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@17/build/js/utils.js"
    });
}

document.querySelectorAll('[data-modal-toggle]').forEach(button => {
    button.addEventListener('click', function () {
        const modaltype = this.getAttribute('data-modal-type');
        const courseId = this.getAttribute('data-course-id');
        const modaltitle = this.getAttribute('data-modal-title');
        const shorttitle = this.getAttribute('data-course-short-title');
        const title = this.getAttribute('data-course-title');

        document.getElementById('modal-type').innerText = modaltitle;
        document.getElementById('modal-title').innerHTML = `<strong class="font-semibold">${shorttitle}</strong> | ${title}`;
        document.getElementById('lead-source').value = modaltype; 
        document.getElementById('lead-source-id').value = courseId;
    });
});

document.addEventListener('DOMContentLoaded', function () {
    let leadRegistrationForm = document.querySelector("#lead-registration-form");
    if (leadRegistrationForm) {
        const form = document.getElementById('lead-registration-form');

        form.addEventListener('submit', async function (e) {
            e.preventDefault();

            const submitBtn = document.getElementById('submitBtn');
            const submitSpinner = document.getElementById('submitSpinner');

            submitSpinner.classList.remove('hidden');
            submitBtn.disabled = true;

            const fullNumber = iti.getNumber();
            document.getElementById('full_phone').value = fullNumber;

            const formData = new FormData(form);
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            try {
                const response = await fetch(window.location.origin + "/leads/register", {
                    method: "POST",
                    headers: {
                        'X-CSRF-TOKEN': csrfToken,
                        'Accept': 'application/json',
                    },
                    body: formData
                });

                const result = await response.json();

                if (response.ok) {
                    form.reset();
                    document.getElementById('registration-form-modal').classList.add('hidden');
                    document.getElementById('registration-form-modal').classList.remove('flex', 'block');

                    if (result.source === 'courseRegistration') {
                        document.getElementById('thankyoumessage').innerText = 'Thank you for Registering for The Course';
                    } else if (result.source === 'courseBrochure') {
                        document.getElementById('thankyoumessage').innerText = 'Thank you for Download Course Brochure';
                        document.getElementById('downloadlink').innerHTML = 'Download Course Training Brochure <img src="/assets/frontend/images/icons/arrow-right.svg">';
                        document.getElementById('downloadlink').href = result.url;
                        document.getElementById('downloadlink').classList.remove('hidden');
                    } else if (result.source === 'courseCalendar') {
                        document.getElementById('thankyoumessage').innerText = 'Thank you for Download Course Training Calendar';
                        document.getElementById('downloadlink').innerHTML = 'Download Course Training Calendar <img src="/assets/frontend/images/icons/arrow-right.svg">';
                        document.getElementById('downloadlink').href = result.url;
                        document.getElementById('downloadlink').classList.remove('hidden');
                    }

                    const thankYouModal = document.getElementById('thankyou-modal');
                    thankYouModal.classList.remove('hidden');
                    thankYouModal.classList.add('flex');
                    thankYouModal.removeAttribute('aria-hidden');
                    thankYouModal.focus();
                } else {
                    let errors = result.errors;
                    let errorMsg = 'Please fix the following:\n';
                    for (let key in errors) {
                        errorMsg += '- ' + errors[key][0] + '\n';
                    }
                    alert(errorMsg);
                }
            } catch (error) {
                alert("Something went wrong. Please try again.");
                console.error(error);
            } finally {
                submitSpinner.classList.add('hidden');
                submitBtn.disabled = false;
            }
        });

        /* form.addEventListener('submit', async function (e) {
            e.preventDefault();

            const loader = document.getElementById('form-loader');
            loader.classList.remove('hidden'); // Show loader

            const fullNumber = iti.getNumber(); // E.164 format (e.g., +971501234567)
            document.getElementById('full_phone').value = fullNumber;

            const formData = new FormData(form);
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            try {
                const response = await fetch(window.location.origin+"/leads/register", {
                    method: "POST",
                    headers: {
                        'X-CSRF-TOKEN': csrfToken,
                        'Accept': 'application/json',
                    },
                    body: formData
                });
                
                const result = await response.json();
                
                if (response.ok) {
                    form.reset();

                    document.getElementById('registration-form-modal').classList.add('hidden');
                    document.getElementById('registration-form-modal').classList.remove('flex', 'block'); // if applicable

                    if(result.source == 'courseRegistration'){
                        document.getElementById('thankyoumessage').innerText = 'Thank you for Registering for The Course';
                    }else if(result.source == 'courseBrochure'){
                        document.getElementById('thankyoumessage').innerText = 'Thank you for Download Course Brochure';
                        document.getElementById('downloadlink').innerHTML = 'Download Course Training Brochure <img src="/assets/frontend/images/icons/arrow-right.svg">';
                        document.getElementById('downloadlink').href = result.url;
                        document.getElementById('downloadlink').classList.remove('hidden');
                    }else if(result.source == 'courseCalendar'){
                        document.getElementById('thankyoumessage').innerText = 'Thank you for Download Course Training Calendar';
                        document.getElementById('downloadlink').innerHTML = 'Download Course Training Calendar <img src="/assets/frontend/images/icons/arrow-right.svg">';
                        document.getElementById('downloadlink').href = result.url;
                        document.getElementById('downloadlink').classList.remove('hidden');
                    }

                    // Open thank you modal
                    const thankYouModal = document.getElementById('thankyou-modal');
                    thankYouModal.classList.remove('hidden');
                    thankYouModal.classList.add('flex'); // Or 'block', depending on your modal style

                    // Important: Remove aria-hidden to allow screen readers and focus
                    thankYouModal.removeAttribute('aria-hidden');

                    // Optionally: Manage focus for accessibility
                    thankYouModal.focus();  // Only if the element has `tabindex="-1"` or is focusable
                } else {
                    let errors = result.errors;
                    let errorMsg = 'Please fix the following:\n';
                    for (let key in errors) {
                        errorMsg += '- ' + errors[key][0] + '\n';
                    }
                }
            } catch (error) {
                alert("Something went wrong. Please try again.");
                console.error(error);
            } finally {
                loader.classList.add('hidden'); // Hide loader
            }
        }); */
    }

    let thankyouModal = document.querySelector('[data-modal-hide="thankyou-modal"]');
    if (thankyouModal) {
        document.querySelector('[data-modal-hide="thankyou-modal"]').addEventListener('click', function () {
            const modal = document.getElementById('thankyou-modal');

            // Hide modal
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            modal.setAttribute('aria-hidden', 'true');

            // Remove backdrop (based on class used by Flowbite)
            const backdrops = document.querySelectorAll('.fixed.inset-0.z-40');

            backdrops.forEach(backdrop => {
                // Only remove if it looks like a modal overlay (optional sanity check)
                if (backdrop.classList.contains('bg-gray-900/50') || backdrop.classList.contains('dark:bg-gray-900/80')) {
                    backdrop.remove();
                }
            });

            // Optional: remove body scroll lock if applied
            document.body.classList.remove('overflow-hidden');
        });
    }
});

function redirectToSearch() {
    const searchKeyword = searchInput.value.trim();
    
    if (searchKeyword) {
      const searchUrl = window.location.origin + `/training/certification-programs?keyword=${encodeURIComponent(searchKeyword)}`;
      window.location.href = searchUrl;
    }
}

function toggleCollapse(affiliationId) {
    const collapseContent = document.getElementById(`collapse-${affiliationId}`);
    const arrowIcon = document.querySelector(`button[data-collapse-target="collapse-${affiliationId}"] img`);

    if (!collapseContent) return;

    collapseContent.classList.toggle('hidden');

    if (arrowIcon) {
        arrowIcon.classList.toggle('rotate-180');
    }
}

function courseFilter(label, options){
    return {
        open: false,
        options: options, // The options should now be an object with key-value pairs
        filterSelected: filterSelected,
        previousSelected: {
            keyword: '',
            schedule: '',
            category: [],
            certification: [],
            language: [],
            format: [],
            location: []
        }, // Store previous selection for comparison
        // Dropdown container class
        dropdown: {
            class: "relative"
        },
        // Button that toggles the dropdown visibility
        toggleButton: {
            type: "button",
            class: "w-full flex justify-between items-center bg-white text-sm text-black font-medium border border-[#757575] px-4 py-2 shadow-sm focus:ring-2 focus:ring-blue-500",
            "@click": "open = !open"
        },

        // Dropdown menu visibility and click-away behavior
        menu: {
            "x-show": "open",
            "@click.away": "open = false",
            class: "absolute z-10 w-full mt-2 bg-white border border-gray-300 rounded-lg shadow-lg max-h-48 overflow-y-auto"
        },

        // Menu item style
        menuItem: {
            class: "flex items-center space-x-2 px-2 py-2 hover:bg-gray-100 cursor-pointer"
        },

        // Initialize selected values based on the URL query parameters
        initSelectedValues(){
            const urlParams = new URLSearchParams(window.location.search);
            const selectedValues = urlParams.get(label.toLowerCase());
            
            if(selectedValues){
                if(label.toLowerCase() == 'keyword'){
                    this.filterSelected.keyword = selectedValues;
                }else if(label.toLowerCase() == 'schedule'){
                    this.filterSelected.schedule = this.getMonthInputValue(selectedValues);
                }else if(label.toLowerCase() == 'category'){
                    this.filterSelected.category = selectedValues.split(',');
                }else if(label.toLowerCase() == 'certification'){
                    this.filterSelected.certification = selectedValues.split(',');
                }else if(label.toLowerCase() == 'language'){
                    this.filterSelected.language = selectedValues.split(',');
                }else if(label.toLowerCase() == 'format'){
                    this.filterSelected.format = selectedValues.split(',');
                }else if(label.toLowerCase() == 'location'){
                    this.filterSelected.location = selectedValues.split(',');
                }
            }
        },

        handleKeywordChange(event){
            const selectedKeyword = event.target.value;
            this.filterSelected.keyword = selectedKeyword;
            this.updateURL('keyword', [selectedKeyword]);
        },

        handleCalendarChange(event){
            const selectedMonthYear = event.target.value;

            // Convert to a date object (add day to make it a valid date)
            const date = new Date(`${selectedMonthYear}-01`);
            const formattedMonthYear = new Intl.DateTimeFormat('en-US', { year: 'numeric', month: 'long' }).format(date);

            this.filterSelected.schedule = selectedMonthYear;
            this.updateURL('schedule', [formattedMonthYear]);
        },

        getMonthInputValue(monthYearString){
            const date = new Date(`${monthYearString} 1`); // e.g., "July 2025 1"
            const year = date.getFullYear();
            const month = String(date.getMonth() + 1).padStart(2, '0'); // Months are 0-based
        
            return `${year}-${month}`;
        },

        // Method to toggle the selection of "Select All"
        toggleAll(event, field){
            if (event.target.checked) {
                this.filterSelected[field] = Object.keys(this.options);
            } else {
                this.filterSelected[field] = [];
            }

            this.renderSelectedTags();
        },

        // Update URL and trigger AJAX request if selection changed
        updateURL(name, selectedValues){
            if (this.areSelectionsChanged(name, selectedValues)) {
                // Update the previous selected values
                if(name == 'keyword'){
                    this.previousSelected.keyword = [...selectedValues];
                }else if(name == 'schedule'){
                    this.previousSelected.schedule = [...selectedValues];
                }else if(name == 'category'){
                    this.previousSelected.category = [...selectedValues];
                }else if(name == 'certification'){
                    this.previousSelected.certification = [...selectedValues];
                }else if(name == 'language'){
                    this.previousSelected.language = [...selectedValues];
                }else if(name == 'format'){
                    this.previousSelected.format = [...selectedValues];
                }else if(name == 'location'){
                    this.previousSelected.location = [...selectedValues];
                }
                
                let params = new URLSearchParams(window.location.search);
                
                if (name === 'coursetitle' || name === 'coursemonth') {
                    if (selectedValues) {
                        params.set(name.toLowerCase(), selectedValues);
                    } else {
                        params.delete(name.toLowerCase());
                    }
                } else {
                    if (selectedValues.length) {
                        params.set(name.toLowerCase(), selectedValues.join(','));
                    } else {
                        params.delete(name.toLowerCase());
                    }
                }
                
                // Build the new URL, ensuring only one `?` and use `&` for additional parameters
                let newUrl = window.location.pathname;
                const queryString = params.toString();
                
                if (queryString) {
                    newUrl += '?' + queryString;
                }
                
                // Ensure the final URL is correctly formatted
                if (newUrl.endsWith('?') || newUrl.endsWith('&')) {
                    newUrl = newUrl.slice(0, -1); // Remove the trailing ? or & if any
                }
                
                // Update the URL without reloading the page
                window.history.replaceState(null, '', newUrl);

                // Trigger AJAX request with the final URL
                this.triggerAjaxRequest(newUrl);
                
                // Re-render the tags after the update
                this.renderSelectedTags();
            }
        },

        // Check if selections have changed
        areSelectionsChanged(name, selectedValues){
            if(name == 'keyword'){
                return JSON.stringify(selectedValues) !== JSON.stringify(this.previousSelected.keyword);
            }else if(name == 'schedule'){
                return JSON.stringify(selectedValues) !== JSON.stringify(this.previousSelected.schedule);
            }else if(name == 'category'){
                return JSON.stringify(selectedValues) !== JSON.stringify(this.previousSelected.category);
            }else if(name == 'certification'){
                return JSON.stringify(selectedValues) !== JSON.stringify(this.previousSelected.certification);
            }else if(name == 'language'){
                return JSON.stringify(selectedValues) !== JSON.stringify(this.previousSelected.language);
            }else if(name == 'format'){
                return JSON.stringify(selectedValues) !== JSON.stringify(this.previousSelected.format);
            }else if(name == 'location'){
                return JSON.stringify(selectedValues) !== JSON.stringify(this.previousSelected.location);
            }
        },

        renderSelectedTags(){
            const tagContainer = document.querySelector('#filter-tags');
            if (!tagContainer) return;

            tagContainer.innerHTML = ''; // Clear previous tags

            const params = new URLSearchParams(window.location.search);
            params.forEach((value, key) => {
                if (key == 'page' || !value) return;
                let tags = value.split(',');
                
                tags.forEach(tag => {
                    const button = document.createElement('button');
                    button.type = 'button';
                    button.className = 'bg-[#2C2C2C] p-2 rounded-md text-white flex items-center gap-1 text-sm lg:text-base';
                    /* button.innerHTML = `
                        ${this.formatTagName(key, tag)}
                        <img src="/assets/frontend/images/icons/close-white.svg" width="16" height="16" />
                    `; */
                    button.innerHTML = `
                        ${tag}
                        <img src="/assets/frontend/images/icons/close-white.svg" width="16" height="16" />
                    `;
                    button.addEventListener('click', () => this.removeTag(key, tag));
                    tagContainer.appendChild(button);
                });
            });
        },

        removeTag(key, value){
            // Check if the key exists in the URL parameters
            const params = new URLSearchParams(window.location.search);
            if (!params.has(key)) return;
        
            // Remove the tag from URL parameters
            if (key === 'keyword' || key === 'schedule') {
                params.delete(key);
            } else {
                let currentValues = params.get(key).split(',');
                currentValues = currentValues.filter(v => v !== value);
                if (currentValues.length) {
                    params.set(key, currentValues.join(','));
                } else {
                    params.delete(key);
                }
            }
        
            // Rebuild the URL with the updated query string
            let newUrl = window.location.pathname;
            const queryString = params.toString();
            if (queryString) {
                newUrl += '?' + queryString;
            }
            if (newUrl.endsWith('?') || newUrl.endsWith('&')) {
                newUrl = newUrl.slice(0, -1);
            }

            if (key === 'keyword') {
                this.filterSelected.keyword = '';
            }else if (key === 'schedule') {
                this.filterSelected.schedule = '';
            }else if (key === 'category') {
                this.filterSelected.category = this.filterSelected.category.filter(item => item !== value);
            }else if (key === 'certification') {
                this.filterSelected.certification = this.filterSelected.certification.filter(item => item !== value);
            }else if (key === 'language') {
                this.filterSelected.language = this.filterSelected.language.filter(item => item !== value);
            }else if (key === 'format') {
                this.filterSelected.format = this.filterSelected.format.filter(item => item !== value);
            }else if (key === 'location') {
                this.filterSelected.location = this.filterSelected.location.filter(item => item !== value);
            }
        
            // Update the URL with the new query parameters
            window.history.replaceState(null, '', newUrl);
        
            // Trigger the AJAX request for content refresh based on the updated URL
            this.triggerAjaxRequest(newUrl);
        
            // Re-render the tags after the update
            this.renderSelectedTags();
        },

        resetFilter(){
            // this.filterSelected.keyword = '';
            // this.filterSelected.schedule = '';
            // this.filterSelected.category = [];
            // this.filterSelected.certification = [];
            // this.filterSelected.language = [];
            // this.filterSelected.format = [];
            // this.filterSelected.location = [];

            // let newUrl = window.location.origin + window.location.pathname;
            // window.history.replaceState(null, '', newUrl);

            window.location.href = window.location.origin + window.location.pathname;
        },

        // Trigger an AJAX request with the final URL
        triggerAjaxRequest(url){
            fetch(url, {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                    // Add any other headers if needed
                }
            })
            .then(response => response.json())
            .then(data => {
                if(data.courses){
                    document.querySelector('.courses').innerHTML = data.courses;
                }

                if(data.pagination){
                    document.querySelector('.pagination').innerHTML = data.pagination;
                }else{
                    document.querySelector('.pagination').innerHTML = '';
                }

                if(data.calendar){
                    document.querySelector('.calendar').innerHTML = data.calendar;
                }
            })
            .catch(error => {
                console.error('AJAX error:', error);
            });
        },
    };
}