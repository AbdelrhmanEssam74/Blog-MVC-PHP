// Get the button
let top_btn = document.querySelector(".btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
    ) {
        top_btn.style.bottom = "-35px"; // Corrected 'bottom' spelling
    } else {
        top_btn.style.bottom = "-100px";
    }
}

// When the user clicks on the button, scroll to the top of the document
top_btn.addEventListener("click", backToTop);

function backToTop() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE, and Opera
}

// toggling active class
const navLinks = document.querySelectorAll('.nav-item.nav-link');

navLinks.forEach(link => {
    link.addEventListener('click', function (event) {
        navLinks.forEach(link => link.classList.remove('active'));
        this.classList.add('active');
    });
});