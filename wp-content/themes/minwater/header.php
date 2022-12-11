<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php echo wp_get_document_title(); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta content="telephone=no" name="format-detection">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="favicon.ico" rel="shortcut icon">    

    <?php wp_head(  ); ?>

</head>
<body>
<div class="wrapper">
    <header class="header">
	<div class="header__container">
		<a href="<?php home_url() ?>" class="header__logo logo"><?php the_field('logo') ?></a>
        <?php wp_nav_menu( [            
            'menu'            => 'Главная навигация',
            'container'       => 'nav',
            'container_class' => 'navigation header__navigation',
            'menu_class'      => 'navigation__list',
            'echo'            => true,
            'fallback_cb'     => '',
            'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
            'depth'           => 0,
            'add_li_class'    => 'navigation__item',
            'add_a_class'    => 'navigation__link',
        ] ); ?>
		<a href="tel:<?php the_field('phone-number') ?>" class="header__phone"><?php the_field('phone') ?></a>
		<button type="button" class="header__callback btn"><?php the_field('callback') ?></button>
		<div class="icon-menu"><span></span></div>
	</div>
</header>