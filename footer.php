<footer id="site-footer">

	<p class="to-the-top">
		<a href="#site-top">Volver arriba <i class="fa fa-arrow-up"></i></a>
	</p>

	<div class="footer-buttons">

		<p>
			<?php if (get_privacy_policy_url()) :?>
			<a href="<?=get_privacy_policy_url()?>" class="tooltip" data-tooltip-text="Política de privacidad">
				<i class="fa fa-user-secret"></i>
			</a>
			<?php endif; ?>

			<?php if (get_page_by_path("/contact")) :?>
			<a href="/contact" class="tooltip" data-tooltip-text="Contacto">
				<i class="fa fa-envelope"></i>
			</a>
			<?php endif; ?>
		</p>
	</div>

	<p>
		<i class="fa fa-copyright"></i> 
		<strong><?=date('Y')?></strong> 
		Hecho con <a href="https://wordpress.org" target="_blank">Wordpress</a> y <a href="https://github.com/SantiMora/myWpLightTheme" target="_blank">mi tema</a>
	</p>
</footer>
<?php wp_footer();?>
</body>
</html>