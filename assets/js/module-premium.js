(function($) {
    $(document).ready(function(){
        const figure = $("#module_premium").hover( hoverVideo, hideVideo )

        function hoverVideo(e) {  
            $('video', this).get(0).pause()             
            $(".video-container").css("z-index", "2")
        }

        function hideVideo(e) {
            $('video', this).get(0).play()          
            $(".video-container").css("z-index", "10")
        }
        
        $("#module_premium .tabs-group .items-list").hover(
            function () {
                $(this).parents("#module_premium").addClass("description-hidden");
            }, function () {
                $(this).parents("#module_premium").removeClass("description-hidden");
        })

        $("#module_premium").tabs({
            // event: "mouseover",
            collapsible: true, 
            active: false
        })
    })
}(jQuery))