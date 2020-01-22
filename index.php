<?php
/**
 * Created by PhpStorm.
 * User: sunweibo
 * Date: 20-1-22
 * Time: 下午2:33
 */
require 'vendor/autoload.php';

use Intervention\Image\ImageManager;
$fontPath = "font/free.ttf";
$string = "豆豆";
$manager = new ImageManager(array('driver' => 'gd'));

$image = $manager->make('origin/icome.jpg');
$image->resize(200,200)->text($string,10,10,function ($font) use ($fontPath) {
    $font->file($fontPath);
    $font->size(30);
    $font->color("#ffffff");
    $font->align("left");
    $font->valign('top');
});
$image->save('result/iout.jpg');
