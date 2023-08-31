document.addEventListener("DOMContentLoaded", function() {
    const sections = document.querySelectorAll("section");
    const navLinks = document.querySelectorAll(".nav-link");

    function resetLinks() {
        navLinks.forEach(link => link.classList.remove("current"));
    }

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                resetLinks();
                const id = entry.target.getAttribute("id");
                const activeLink = document.querySelector(`.nav-link[href="#${id}"]`);
                if (activeLink) {
                    activeLink.classList.add("current");
                }
            }
        });
    }, {
        threshold: 0.5
    });

    sections.forEach(section => observer.observe(section));

    navLinks.forEach(link => {
        link.addEventListener("click", function(e) {
            e.preventDefault();
            resetLinks();
            this.classList.add("current");
            const targetSection = document.querySelector(this.getAttribute("href"));
            if (targetSection) {
                targetSection.scrollIntoView({ behavior: "smooth" });
            }
        });
    });
});


function selectMovie(movieCode) {
    document.getElementById('selectedMovieInput').value = movieCode;
}


document.addEventListener("DOMContentLoaded", function() {
    // Event listeners to listen for changes in the radio buttons or drop downs
    let radios = document.querySelectorAll('input[name="day"]');

    radios.forEach(function(radio) {
        radio.addEventListener('change', calculateTotal);
    });

    let selects = document.querySelectorAll('select');
    selects.forEach(function(select) {
        select.addEventListener('change', calculateTotal);
    });

    function calculateTotal() {
        let total = 0;
        let pricingPolicy = getSelectedPricingPolicy();
        if (!pricingPolicy) {
            document.getElementById('totalPrice').textContent = '$0';
            return;
        }

        selects.forEach(function(select) {
            if (select.value !== "") {  // Check if a value is selected
                let price = parseFloat(select.getAttribute(pricingPolicy));
                let qty = parseInt(select.value, 10);
                total += price * qty;
            }
        });

        if (total > 0) {
            document.getElementById('totalPrice').textContent = '$' + total.toFixed(2);
        } else {
            document.getElementById('totalPrice').textContent = '';
        }

        checkFormSubmission();
    }

    function getSelectedPricingPolicy() {
        let selectedRadio = [...radios].find(radio => radio.checked);
        if (!selectedRadio) return null;

        return selectedRadio.getAttribute('data-pricing') === 'fullprice' ? 'data-price-full' : 'data-price-discount';
    }

    function checkFormSubmission() {
        let total = parseFloat(document.getElementById('totalPrice').textContent.replace('$', '')) || 0;
        let submitButtons = document.querySelectorAll('button[type="submit"]');
        submitButtons.forEach(button => {
            button.disabled = !getSelectedPricingPolicy() || total === 0;
        });
    }
});





