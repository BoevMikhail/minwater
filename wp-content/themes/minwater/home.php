<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<main class="page">
        <h1 class="page__title visually-hidden"><?php the_field('logo') ?></h1>
        <section class="first-screen">
            <div class="first-screen__container">
                <div class="first-screen__slider vertical-slider">
                    <h2 class="vertical-slider__text"><?php the_field('slider-text') ?>
                    </h2>
                    <div class="vertical-slider__slides">

                    <?php
                        global $post;

                        $myposts = get_posts([ 
                            'numberposts' => -1,
                            'category_name' => "Вертикальный слайдер"
                        ]);

                        if( $myposts ){
                            foreach( $myposts as $post ){
                                setup_postdata( $post );
                    ?>

                                <div class="vertical-slider__slide">
                                    <?php the_post_thumbnail( ); ?>
                                </div>

                    <?php } } wp_reset_postdata(); ?>

                        
                        <div class="vertical-slider__counter counter"><span>2</span>/4</div>
                        <div class="vertical-slider__navigation"></div>
                    </div>
                    <div class="vertical-slider__preloader preloader">
                        <div class="preloader__progress" style="width: 30%"></div>
                    </div>

                </div>
            </div>
        </section>
        <section class="about-and-prise">
            <div class="about-and-prise__container">
                <div class="about-and-prise__top about">
                    <h2 class="about__title"><?php the_field('about-title') ?></h2>
                    <p class="about__text"><?php the_field('about-text') ?></p>
                    <div class="horizontal-slider__controls">
                        <div class="horizontal-slider__counter counter">2/4</div>
                        <div class="horizontal-slider__preloader preloader">
                            <div class="preloader__progress" style="width: 30%"></div>
                        </div>
                        <button class="horizontal-slider__back horizontal-slider__btn" type="button">
                            <img alt="back" src="<?php bloginfo('template_url'); ?>/assets/img/interface/Arrow.svg">
                        </button>
                        <button class="horizontal-slider__forward horizontal-slider__btn" type="button">
                            <img alt="forward" src="<?php bloginfo('template_url'); ?>/assets/img/interface/Arrow.svg">
                        </button>
                    </div>
                    <div class="about__slider horizontal-slider">
                        <div class="horizontal-slider__slides">                        

                            <?php
                                global $post;

                                $myposts = get_posts([ 
                                    'numberposts' => -1,
                                    'category_name' => "Горизонтальный слайдер"
                                ]);

                                if( $myposts ){
                                    foreach( $myposts as $post ){
                                        setup_postdata( $post );
                            ?>

                                <div class="horizontal-slider__slide slide-card">
                                    <?php the_post_thumbnail(array(86, 86), array('class' => "slide-card__image") ); ?>
                                    <?php the_content(  ); ?>
                                </div>

                            <?php } } wp_reset_postdata(); ?>

                        </div>
                    </div>
                </div>
                <div class="about-and-prise__bottom prise">
                    <div class="prise__leftside">
                        <h2 class="prise__title"><?php the_field('prise-big-text') ?></h2>
                        <p class="prise__text"><?php the_field('prise-small-text') ?></p>
                    </div>
                    <form action="#" class="prise__rightside form-prise">
                        <?php echo do_shortcode( '[contact-form-7 id="36" title="Заявка"]' ); ?>
                    </form>
                </div>
            </div>
        </section>
    </main>    

<?php get_footer(); ?>