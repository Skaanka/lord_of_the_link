
     
function toggle_visibility(sidebarCat) {
    var e = document.getElementById(sidebarCat); 
    if(e.style.display == 'block')
        e.style.display = 'none';
    else 
        e.style.display = 'block';
}



/*$(document).ready(function(){

    
var navbar = $("#menu-nav").offset().top;
    console.log(navbar);

$(".scroll").click(function(){
        var cible = $(this).attr("id");
        switch(cible) {
            case "animated-example":
                $("html, body").animate({scrollTop : 451.43333435058594}, 400);
                return false;
                break;
        }
    })
})*/