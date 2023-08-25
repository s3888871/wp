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

document.addEventListener('DOMContentLoaded', function() {
    const dropdowns = document.querySelectorAll('select');
    dropdowns.forEach(dropdown => {
        dropdown.addEventListener('change', calculateTotal);
    });

    function calculateTotal() {
        let totalPrice = 0.0;
        const    pricingPolicy = document.querySelector('[data-pricing-policy]').getAttribute('data-pricing-policy');

        dropdowns.forEach(dropdown => {
            if (dropdown.getAttribute('name').includes('seat')) {
                const seatCount = parseInt(dropdown.value, 10);
                const unitPrice = parseFloat(dropdown.getAttribute(`data-price-${pricingPolicy}`));
                totalPrice += seatCount * unitPrice;
            }
        });
        const daySelected = document.querySelector('select[name="day"]').value;
        const totalPriceDisplay = document.querySelector('#totalPrice');

        if (totalPrice > 0 && daySelected) {
            totalPriceDisplay.textContent = `$${totalPrice.toFixed(2)}`;
        } else {
            totalPriceDisplay.textContent = '';
        }
        const form = document.querySelector('form');
        form.addEventListener('submit', function(event) {
            if (totalPrice === 0 || !daySelected) {
                event.preventDefault();
                alert('Please select a day and at least one seat.');
            }
        });
    }

});

