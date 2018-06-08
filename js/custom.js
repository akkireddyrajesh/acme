console.log('custom.js Imported Sucessfully...');
$(document).ready(function(){
    /*---- scroll top down ---*/
     $(window).scroll(function () {
        if ($(this).scrollTop() < 100) {
            $('#back-to-top').fadeOut();
        } else {
            $('#back-to-top').fadeIn();
        }
    });
    // scroll body to 0px on click
    $('#back-to-top').click(function () {
        $('#back-to-top').tooltip('hide');
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
    
    $('#back-to-top').tooltip('show');
    /*---- /scroll top down ---*/

    // gallery_with_filters starts
        $(".filter-button").click(function(){
            var value = $(this).attr('data-filter');
            
            if(value == "all")
            {
                //$('.filter').removeClass('hidden');
                $('.filter').show('1000');
            }
            else
            {
                // $('.filter[filter-item="'+value+'"]').removeClass('hidden');
                // $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                $(".filter").not('.'+value).hide('3000');
                $('.filter').filter('.'+value).show('3000');
                
            }
        });

        if ($(".filter-button").removeClass("gallery_active")) {
            $(this).removeClass("gallery_active");
        }
            $(this).addClass("gallery_active");

    // gallery_with_filters ends



    
   
});

//Active Page Menu Highlight 
// In Navbar current page li active in all pages 
function navbarCurrentItemActive(listObj){   //console.log('fn_navbarCurrentItemActive() called...', listObj);
    // EX:
    //----
    // navbarCurrentItemActive(listObj){
    //     navBarUlId:'#menuUl',
    // }

    //getting current page path from URL 
    let currentPage=window.location.pathname,
        liList=$(listObj.navBarUlId).map(function() {
            return $(this).attr('href');
        }).get();

    console.log('fn_navbarCurrentItemActive() called...', listObj,'currentpage path', currentPage,' navbar menu list ' ,liList);
}




