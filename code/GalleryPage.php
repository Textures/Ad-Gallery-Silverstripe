<?php
// /mysite/code/GalleryPage.php
class GalleryPage extends Page
{
    static $has_many = array (
        'ImageResources' => 'ImageResource'
    );
    public static $db = array(
    );
    public static $has_one = array(
    );
 
    public function getCMSFields()
    {
        $f = parent::getCMSFields();
        $manager = new ImageDataObjectManager(
            $this, // Controller
            'ImageResources', // Source name
            'ImageResource', // Source class
            'Attachment', // File name on DataObject
            array(
                'Title' => 'Title', 
                'Caption' => 'Caption'
            ), // Headings 
            'getCMSFields_forPopup' // Detail fields
            // Filter clause
            // Sort clause
            // Join clause
        );
        $f->addFieldToTab("Root.Content.Gallery",$manager);
        return $f;
    }
}
 
class GalleryPage_Controller extends Page_Controller {

	function init() {
           parent::init();

          Requirements::javascript('PatsGallery/javascript/jquery-1.7.2.min.js');
          Requirements::javascript('PatsGallery/javascript/jquery.ad-gallery.js');
          Requirements::javascript('PatsGallery/javascript/gallery.js');
          Requirements::CSS('PatsGallery/css/jquery.ad-gallery.css');
    }
}