<?php
class CImage {
    var $filename; 
    var $image;
    var $type;
    
    function __construct($filename) {
        $this->filename = $filename;    
        $info = getimagesize($filename);
        $this->type = $info[2];
        
        if( $this->type == IMAGETYPE_JPEG ){        
            $this->image = imagecreatefromjpeg($filename);
        } elseif( $this->type == IMAGETYPE_GIF ){        
            $this->image = imagecreatefromgif($filename);
        } elseif( $this->type == IMAGETYPE_PNG ){        
            $this->image = imagecreatefrompng($filename);
        }
    }
    function save($compression=100){        
        if( $this->type == IMAGETYPE_JPEG ){        
            imagejpeg($this->image,$this->filename,$compression);
        } elseif( $this->type == IMAGETYPE_GIF ){        
            imagegif($this->image,$this->filename);
        } elseif( $this->type == IMAGETYPE_PNG ){ 
            imagepng($this->image,$this->filename);
        }
    }
    function getWidth(){    
        return imagesx($this->image);
    }
    function getHeight(){    
        return imagesy($this->image);
    }
    function resizeToHeight($height) {    
        $ratio = $height / $this->getHeight();
        $width = $this->getWidth() * $ratio;
        $this->resize($width,$height);
    }    
    function resizeToWidth($width) {
        $ratio = $width / $this->getWidth();
        $height = $this->getheight() * $ratio;
        $this->resize($width,$height);
    }    
    function scale($scale) {
        $width = $this->getWidth() * $scale/100;
        $height = $this->getheight() * $scale/100;
        $this->resize($width,$height);
    }    
    function resize($width=null,$height=null) {
        if($width==null) $width = $this->getWidth();
        if($height==null) $height = $this->getHeight();
        
        $new_image = imagecreatetruecolor($width, $height);        
        if( $this->type == IMAGETYPE_GIF || $this->type == IMAGETYPE_PNG){
            imagealphablending($new_image, false);
            imagesavealpha($new_image,true);
            $transparent = imagecolorallocatealpha($new_image, 255, 255, 255, 127);
            imagefilledrectangle($new_image, 0, 0, $this->getWidth(), $this->getHeight(), $transparent);
        }                    
        imagecopyresampled($new_image, $this->image, 0, 0, 0, 0, $width, $height, $this->getWidth(), $this->getHeight());
        $this->image = $new_image;
    } 
    function resizeSmall(){
        $this->resizeTo(64);
    }
    function resizeMedium(){
        $this->resizeTo(128);
    }
    function resizeTo($size){
        $width = $this->getWidth();
        $height = $this->getheight();
        if($width > $height)
            $this->resizeToWidth($size);
        else
            $this->resizeToHeight($size);
    }
}
?>