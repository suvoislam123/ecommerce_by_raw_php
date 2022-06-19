<?php
include_once($_SERVER['DOCUMENT_ROOT']."/ecommerce/src/crud/Slider.php");
use crud\Slider;
$slider = new Slider();
$pdo = $slider->connect();
$r = "SELECT * FROM slider";
$all_slider = $slider->read($pdo,$r);
// echo "<pre>";
// print_r($all_slider);
// echo "</pre>";
?>

<div id="hero">
    <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
    <?php foreach($all_slider as $slider){  ?>
    <div class="item" style="background-image:url(<?= "../../assets/images/sliders/".$slider['image']?>);">
        <div class="container-fluid">
        <div class="caption bg-color vertical-center text-left">
            <div class="slider-header fadeInDown-1"><?= $slider['title_short_txt'] ?></div>
            <div class="big-text fadeInDown-1"> <?= $slider['title_large_txt']?> </div>
            <div class="excerpt fadeInDown-2 hidden-xs"> <span><?= $slider['description_txt'] ?></span> </div>
            <div class="button-holder fadeInDown-3"> <a href="<?= $slider['button_url']?>" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div>
        </div>
        <!-- /.caption --> 
        </div>
        <!-- /.container-fluid --> 
    </div>
    <?php } ?>
    <!-- /.item -->


    <!-- /.item --> 

    </div>
    <!-- /.owl-carousel --> 
</div>