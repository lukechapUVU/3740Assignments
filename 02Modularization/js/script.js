function handleImageSlider() {
    $(document).ready(function() {
        $('.img-slider').slick({
            dots: true,
            arrows: false,
            infinite: true,
            speed: 100,
            cssEase: 'ease-out',
            autoplay: true,
            autoplaySpeed: 8000  
        })
    })
}
function toggleMenu() {
    document.getElementById("nav-list").classList.toggle("hide-small");
}
function toggleSubMenu() {
    console.log('test')
    document.getElementById("subnav-list").classList.toggle("hide-sub");
}