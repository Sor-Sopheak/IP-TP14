<?php
    require "vendor/autoload.php";

    use Intervention\Image\ImageManagerStatic as Image;

    $Image = Image::make("testUpload/image.png")->resize(200, 200)->save("img/thumbnail.png" ,100);
?>