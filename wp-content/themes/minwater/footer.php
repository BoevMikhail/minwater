<footer class="footer">
	<div class="footer__top top-footer">
		<div class="footer__container">
			<a href="#" class="footer__logo logo"><?php the_field('logo') ?></a>
			<?php wp_nav_menu( [            
				'menu'            => 'Главная навигация',
				'container'       => 'nav',
				'container_class' => 'navigation footer__navigation',
				'menu_class'      => 'navigation__list',
				'echo'            => true,
				'fallback_cb'     => '',
				'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
				'depth'           => 0,
				'add_li_class'    => 'navigation__item',
				'add_a_class'    => 'navigation__link',
        	] ); ?>
			<div class="footer__socials">
				<a href="<?php the_field('vk__link') ?>"><picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/interface/socials/VK.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/interface/socials/VK.png" alt="ВКонтакте"></picture></a>
				<a href="<?php the_field('fb__link') ?>"><picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/interface/socials/FB.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/interface/socials/FB.png" alt="Фейсбук"></picture></a>
				<a href="<?php the_field('inst__link') ?>"><picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/interface/socials/INST.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/interface/socials/INST.png" alt="Инстаграм"></picture></a>
			</div>
			<div class="footer__bottom bottom-footer">
					<p class="bottom-footer__copyright"><?php the_field('copyright') ?></p>
					<a href="<?php the_field('policy-link') ?>" class="bottom-footer__policy"><?php the_field('policy-text') ?></a>
					<div class="bottom-footer__author">Сделано в <span>BorodaDigital</span></div>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</div>
</body>
</html>
