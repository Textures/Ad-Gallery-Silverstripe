    
$.noConflict();
jQuery(document).ready(function($) {
    $('.ad-gallery').adGallery(
    {
        effect: 'fade',
        loader_image: 'PatsGallery/images/ad-gallery/loader.gif',
        hooks:
        {

            displayDescription: function(image)
            {
                $('.ad-description-container').text(image.desc);
            }
        }
    });
});