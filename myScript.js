$(document).ready(function(){
    $('.loader').hide();
    var load=2;
    $(window).scroll(function() {
        var $bottomDistance = $(window).scrollTop() - $(document).height() + $(window).height();
        // +/- 1 compensates for when screen is zoomed out/in
        if($bottomDistance == 0 || $bottomDistance == 1 || $bottomDistance == -1) {
            $('.loader').show();
            load++;
            $.post("ajaxInfiScroll.php",{load:load},function(data){
                $('.main-center').append(data);
                $('.loader').hide();
            });
        }
    });
    
    $(".main-center").on("click", ".show-more a", function() {
        event.preventDefault();
        var $this = $(this);
        var $content = $this.parent().prev("div.item-details");
        var linkText = $this.text();
        if(linkText === "SHOW MORE"){
            linkText = "SHOW LESS";
        } else {
            linkText = "SHOW MORE";
        };
        $content.toggleClass("showContent", 500, "easeOutSine");
        $this.text(linkText);
    });
    
    
    // show popup when you click on the link
    $('.main-center').on("click",".show-popup",function(event){
        event.preventDefault(); // disable normal link function so that it doesn't refresh the page
        var docHeight = $(document).height(); //grab the height of the page
        var scrollTop = $(window).scrollTop(); //grab the px value from the top of the page to where you're scrolling
        var windowHeight = $(window).height(); //grab the height of window
        var $this = $(this);
        var $content = $this.parent().next().next().next().next(); //ERROR: if you end up changing location of overlay-bg
        $content.show().css({'height' : docHeight}); //display your popup and set height to the page height
        $('.overlay-content').css({'top': scrollTop+windowHeight/8+'px'}); //set the content 20px from the window top
    });
    // hides the popup if user clicks anywhere outside the container
    $('.main-center').on("click",".overlay-bg",function(){
        $('.overlay-bg').hide();
    });
    // prevents the overlay from closing if user clicks inside the popup overlay
    $('.main-center').on("click",".overlay-content",function(){
        return false;
    });
    //hides when user scrolls
    /*$(window).scroll(function(){
        $('.overlay-bg').hide();
    });*/
    
    $.ajaxSetup({ cache: true });
    $.getScript('//connect.facebook.net/en_UK/all.js', function(){
        FB.init({
            appId: '581555138637928',
            status: true, 
            cookie: true,
            oauth: true,
            xfbml: true,
            version: 'v2.1'
        });
        $('#loginbutton,#feedbutton').removeAttr('disabled');
        FB.getLoginStatus(updateStatusCallback);
    });
});

//share to FB
function shareToFB(myName, myLink) {
    $('.overlay-bg').hide();
    FB.ui({
        method: 'share',
        href: myLink,
        name: myName
        //description: myDescription
        //message: "I've shared " + myName + " using TheWishMaker from www.TheWishMaker.com";
    }, function(response) {
        if (response && response.error_code !== 4201) {
            alert("something");
            //add code for incrementing count async here!!!
        }
    }
    );
}
