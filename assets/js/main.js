const moduleCallAction = document.querySelector(".call-to-action"),
moduleCallActionContent = document.querySelector(".call-to-action-content"),
topnavButton = document.getElementById('sitenav_main_mobile_toggle'),
topnavDisplay = document.getElementById('nav_top');

moduleCallAction.addEventListener("click", function() {   
    this.classList.toggle("btn-active");
})

window.addEventListener('scroll', function() {
    var toggleButton = document.querySelector('.call-to-action');
    var toggleHeader = document.querySelector('#header_main');
    var watchHeight = 10;

    if ( window.pageYOffset >= watchHeight ) {
        toggleButton.classList.add('scrolled');
        toggleHeader.classList.add('scrolled');
        return;
    } else {
        toggleButton.classList.remove('scrolled');
        toggleHeader.classList.remove('scrolled');
        return;
    }
});

window.onload = init;

function init() {
    topnavButton.onclick = toggleNav;
}

function toggleNav(){
    topnavDisplay.classList.toggle("open");
    topnavButton.classList.toggle("open");
}

if( window.innerWidth > 1023 ) {
    var msnry = new Masonry( '.grid', {
        itemSelector: '.grid-item'
    })
}

(function($) {
    $(document).ready(function(){    
        $('#logos .items-list').slick();
    });
}(jQuery))

