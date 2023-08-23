function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

window.addEventListener('scroll', function() {
    const sections = document.querySelectorAll('main section');
    sections.forEach((section) => {
        if (isInViewport(section)) {
            const navLinks = document.querySelectorAll('nav a');
            navLinks.forEach(link => link.classList.remove('current'));

            const navLink = document.querySelector(`nav a[href="#${section.id}"]`);
            if (navLink) {
                navLink.classList.add('current');
            }
        }
    });
});
