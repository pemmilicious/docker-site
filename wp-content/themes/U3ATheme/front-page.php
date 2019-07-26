<?php get_header();?>
<?php $hero = get_field('hero');?>
<?php $content = get_field('front-page-content');?>
<section id="showcase">

    <div class="carousel-container">
        <div class="carousel-slide">
          <img src="<?php bloginfo('template_directory');?>/img/IMG_3197.JPG" id="lastClone">
          <img src="<?php bloginfo('template_directory');?>/img/IMG_3079.JPG">
          <img src="<?php bloginfo('template_directory');?>/img/IMG_3332.jpg">
          <img src="<?php bloginfo('template_directory');?>/img/IMG_3133.JPG" id="firstClone">
        </div>
    </div>
  <div class="container">
    <div class="heroText">
      <h2><?php echo $hero['main_title'];?></h2>
      <h1>
          <?php echo $hero['small_title'];?>
      </h1>
        <p>
            <?php echo $hero['hero_text'];?>
      </p>
      <br>
          <button ><?php echo $hero['btn_text'];?></button>
    </div>
  </div>
</section>

<section id="content">
    <div class="container">
      <img src="<?php bloginfo('template_directory');?>/img/IMG_3079.JPG">
            <div class="box">
                <h3>
                    <?php echo $content['content-title'];?>
                </h3>
                <p>
                    <?php echo $content['content-text'];?>

                </p>
                <hr>
            </div>
        </div>
</section>

<section id="poster">
    <div class="container">
        <div class="box">
                <img src="<?php bloginfo('template_directory');?>/img/MagneticIslandTaiChi001.JPG">
                <p><?php echo $content['poster1'];?></p>
        </div>
        <div class="box">
                <img src="<?php bloginfo('template_directory');?>/img/BushWalking003.JPG">
                <p><?php echo $content['poster2'];?></p>

        </div>
        <div class="box">
                <img src="<?php bloginfo('template_directory');?>/img/U3A Spanish Magnetic Island.jpg">
                <p><?php echo $content['poster3'];?></p>
        </div>
    </div>
</section>

<section id="video">
  <div class="container">
    <iframe width="420" height="315"
      src="https://www.youtube.com/embed/svfiNGuv8MY">
    </iframe>
    <br>
    <br>
    <button id="join"><?php echo $hero['btn_text'];?></button>
  </div>
</section>
<?php get_footer();?>
