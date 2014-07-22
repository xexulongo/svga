 $(document).ready(function(){
 $('#image_container img').click(function(){
    //remove border on any images that might be selected
    $('#image_container img').removeClass("img_border")
    // set the img-source as value of image_from_list
    //$('[name="Post[image]"]').val( $(this).attr("src") );
      $('[name="Post[image]"]').val( $(this).attr("id") );
     // $('#data_value').val( $(this).data("options").color );

    //add border to a clicked image
    $(this).addClass("img_border")
});
 })