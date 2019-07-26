<?php get_header();?>


<?php $about = get_field('about-us');?>
    <section id="about-content">
      <div class="container">
        <!-- <h3><?php echo $contact['contact-title'];?></h3> -->
        <h3><?php echo $about['about-h3'];?></h3>
        <img src="<?php echo $about['history-img'];?>"/>
        <p><?php echo $about['about-p'];?></p>

      </div>
    </section>


    <section id="poster">
        <div class="container">
            <h3><?php echo $about['about-admin-h3'];?></h3>
            <p>
                    <h2><b><?php echo $about['h2_const'];?></h2> </b><p><?php echo $about['const_p'];?><a><?php echo $about['const_a'];?></a></p>
                    <h2><b><?php echo $about['h2_laws'];?></h2></b><p><?php echo $about['laws_p'];?><a><?php echo $about['laws_a'];?></a></p><br>
                    <h2><b><?php echo $about['h2_tutor'];?></h2></b><p><?php echo $about['tutor_p'];?><a> <?php echo $about['tutors_a'];?></a></p>
                    <h2><b><?php echo $about['h2_strat'];?></h2></b><p><?php echo $about['strat_p'];?><a><?php echo $about['strat_a'];?></a></p>
                    <h2><b><?php echo $about['h2_comit'];?></h2></b><p><?php echo $about['comit_p'];?><a><?php echo $about['comit_a'];?></a></p>
        </div>
    </section>




<?php $contact = get_field('contact');?>
    <section id="content">
      <div class="container">

        <div class="mapouter"><div class="gmap_canvas"><?php echo $contact['map'];?></div></div>




      </div>

    </section>
    <?php get_footer();?>
