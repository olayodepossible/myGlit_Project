$(document).ready(function () {
    $('.pagination_section a').click( function(e){
        e.preventDefault();
        let page = $(this).attr('href').split('page')[1];
        fetch_data(page);
    });

    function fetch_data(page) {
        $.ajax({
            url: "/jobs/search/?page="+page,
            success: function(data) {
                console.log(`Page ${page} data was successful`);

            }


        });
    }
})
