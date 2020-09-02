<footer id="site-footer">

	<div class="footer-feats">
		<i class="fa fa-copyright"></i> <?=date('Y')?> con <a href="https://wordpress.org" target="_blank"><i class="fab fa-wordpress-simple"></i></a> y <a href="https://github.com/SantiMora/myWpLightTheme" target="_blank">mi tema</a>
	</div>

	<div class="footer-buttons">

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

		<a href="#site-top" class="tooltip" data-tooltip-text="Volver arriba" style="margin-left: 30px;"> 
			<i class="fa fa-arrow-up"></i>
		</a>

	</div>
	
</footer>
<?php wp_footer();?>
</body>
</html>