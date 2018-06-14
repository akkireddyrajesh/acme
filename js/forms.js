console.log('form.js imported');
/*
$('form').submit(function (e) {
    var data;
    e.preventDefault();

    data = new FormData();
    data.append('file', $('#contactForm')[0].files[0]);
    alert(data);

    $.ajax({
        url: 'acmeServices.php',
        data: data,
        processData: false,
        type: 'POST',

        // This will override the content type header, 
        // regardless of whether content is actually sent.
        // Defaults to 'application/x-www-form-urlencoded'
        contentType: 'multipart/form-data', 

        //Before 1.5.1 you had to do this:
        // beforeSend: function (x) {
        //     if (x && x.overrideMimeType) {
        //         x.overrideMimeType("multipart/form-data");
        //     }
        // },
        // Now you should be able to do this:
        mimeType: 'multipart/form-data',    //Property added in 1.5.1

        success: function (data) {
            alert(data);
        }
    });

});
*/

$(function() {

    //Contact Form
    $('#contactForm').submit(function (e) {
        e.preventDefault();
        let formData=$('#contactForm').serialize();
        console.log('contact form', formData);

        $.ajax({
            url: 'acmeFunctions.php',
            type: 'post',
            //dataType: 'json',
            data: formData,
            success: function(data) {
                console.log('ajax data', data);
                $('#contactForm').hide();
                $('#mailSuccess').removeClass('hidden');
            }
        });


    });

    //Career Job apply
    // $('#applyJobForm').submit(function (e) {
    //     e.preventDefault();
    //     // Get form
    //     var  formData= $('#applyJobForm')[0];

	// 	// Create an FormData object 
    //     var jobFormData = new FormData(formData);

    //     // disabled the submit button
    //     $("#applyJobFormBtn").prop("disabled", true);

    //     console.log('Apply Job form', jobFormData);

    //     $.ajax({
    //         type: "POST",
    //         enctype: 'multipart/form-data',
    //         url: 'acmeFunctions.php',            
    //         data: jobFormData,
    //         processData: false,
    //         contentType: false,
    //         cache: false,
    //         timeout: 600000,
    //         success: function(data) {
    //             console.log('ajax data', data);
                
    //         }
    //     });


    // });


});