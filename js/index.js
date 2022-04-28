var slideIndex = 0;
showSlides();


function plusSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    slideIndex += n;
    if (slideIndex > slides.length) {slideIndex = 1}
    if (slideIndex < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" slideShow1active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " slideShow1active";

}

function currentSlide(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    slideIndex = n;
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" slideShow1active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " slideShow1active";

}


function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" slideShow1active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " slideShow1active";
    setTimeout(showSlides, 7000); // Change image every 2 seconds
}

function switchPage() {
    window.location = '../php/kategori_a.php';
}

function switchPageTop() {
    window.location = '../php/toppen.php';
}

$(document).ready(function() {
    $('div.overlay').click(function(){
        window.location.href = this.id + '.php';
    });
});



