window.addEventListener('scroll', function () {
    var navbar = document.querySelector('.navbar');
    var scrolled = window.scrollY > 0;
    navbar.classList.toggle('scrolled', scrolled);
});

