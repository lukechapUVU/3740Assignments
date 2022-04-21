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

$( ".menu-item-86" ).click(function() {
    toggleSubMenu();
});

function toggleSubMenu() {
    var subMenuList = document.getElementsByClassName("sub-menu");
    console.log(subMenuList[0].style.display);
    if(subMenuList[0].style.display == 'block') {
        subMenuList[0].style.display = 'none';
    }
    else if(subMenuList[0].style.display == '' || 'none') {
        subMenuList[0].style.display = 'block';
    }
}
function checkRequired() {
    var nameID = document.getElementById("name");
    if(nameID.value != (null || '')) {
        nameID.classList.remove('required-field');
    }
    else {
        nameID.classList.add('required-field');
    }
    var emailID = document.getElementById("email");
    if(emailID.value != (null || '')) {
        emailID.classList.remove('required-field');
    }
    else {
        emailID.classList.add('required-field');
    }
}

var urlString = document.location.href;
var urlArray = urlString.split('/');
var pageHREF = urlArray[urlArray.length-1];
var menu = document.querySelectorAll('ul#nav-list li a');

if(pageHREF !=='') {
    var i;

    for(i=0; i < menu.length; i++) {
        var currentURL = (menu[i].getAttribute("href"));
    
        if (currentURL === pageHREF) {
            menu[i].parentNode.className="active";
            if(menu[i].parentNode.parentNode.parentNode.tagName === 'LI') {
                menu[i].parentNode.parentNode.parentNode.className = 'parent active';
            }
        }
        else {
            menu[i].parentNode.className='';
        }
    }
}
else {
    menu[0].parentNode.className = 'active';
}