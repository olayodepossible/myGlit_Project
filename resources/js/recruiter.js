$(document).ready(function(){

    $('.card-header').on('click', function(e) {
        e.preventDefault();
        if ($(e.target).hasClass('mdi-minus')) {
            $(this).find(".mdi").removeClass("mdi-minus").addClass("mdi-plus");
        }
        else{
            $(this).find(".mdi").removeClass("mdi-plus").addClass("mdi-minus");
        }
    })
});




