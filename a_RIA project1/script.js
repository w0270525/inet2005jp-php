$(document).ready(function() {



    var i = 0;
    var path = new Array();
    var userlogged = false;
    var options = {};

    // LIST OF IMAGES
    path[0] = "images/RedCastle.jpg";
    path[1] = "images/SnowCountry.jpg";
    path[2] = "images/SnowField.jpg";
    path[3] = "images/Tree.jpg";
    path[4] = "images/WinterLake.jpg";

    //initializes the image
    Image();

    // sets the image, caption(nav) and subtitle.
    function Image() {
        document["photo"].src = path[i];
        document.getElementById("subtitle").innerHTML = path[i];
        document.getElementById("caption").innerHTML = "You are viewing image " + (i + 1) + " out of " + path.length;
        $("img").fadeIn('fast');
    }

    $(".login").click(function(){
        var username = document.getElementById("username").
            if ()

    });








    $(".prev").click(function() {


        if (i > 0) i--;
        else {
            i = path.length - 1;
        }
        $("img").fadeOut();
        Image();
    });
    $(".next").click(function() {

        if (i < path.length - 1) {
            i++;
        } else {
            i = 0;
        }

        //callback function so fadeout completes before running the next line.
        $("img").fadeOut("fast", (function() {
            Image();
        }));

    });

    var loggedIn = false;

    $("effect").hide();//sets the admin panel to hidden on load.
    $("selectImage").hide();

    $(".admin_toggle").click(function(){
        $("effect").toggle();//toggles the admin panel when admin butto
    });

    if(loggedIn===false)
    {
        $("selectImage").hide();
    }
    else if (loggedIn===true)
    {
        $("selectImage").show();
    }






}); //end document.ready