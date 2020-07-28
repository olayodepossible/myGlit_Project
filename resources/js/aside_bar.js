$(document).ready(function(){
    $(".svg_menu").click(function(){
        // show hide paragraph on button click
        $(".left-side-bar").toggle("slow", function(){
            // check paragraph once toggle effect is completed
            if($("p").is(":visible")){
                console.log("The paragraph  is visible.");
            } else{
                console.log("The paragraph  is hidden.");
            }
        });
    });
});

