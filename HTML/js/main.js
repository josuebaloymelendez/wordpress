const modulePremiumVideo = document.getElementById("module_premium"),
    modulePremiumDescription = document.querySelector("#module_premium .tabs-group .items-list"),
    moduleCallAction = document.querySelector(".call-to-action"),
    moduleCallActionContent = document.querySelector(".call-to-action-content");

modulePremiumVideo.addEventListener("mouseover", function() {   
    document.querySelector("video").pause();
    document.querySelector(".video-container").style.zIndex = 2;
})

modulePremiumVideo.addEventListener("mouseout", function() {   
    document.querySelector("video").play();
    document.querySelector(".video-container").style.zIndex = 10;
})

modulePremiumDescription.addEventListener("mouseover", function() {   
    document.querySelector(".third-line").classList.add("hidden");
})

modulePremiumDescription.addEventListener("mouseout", function() {   
    document.querySelector(".third-line").classList.remove("hidden");
})

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
var topnavButton = document.getElementById('sitenav_main_mobile_toggle');
var topnavDisplay = document.getElementById('sitenav_main');

function init() {
    topnavButton.onclick = toggleNav;
}

function toggleNav(){
    topnavDisplay.classList.toggle("open");
    topnavButton.classList.toggle("open");
}


