<div class="sidebar">

				<?php if(is_active_sidebar('sidebar')) : ?>
					<?php dynamic_sidebar('sidebar'); ?>
				<?php endif; ?>
				
			</div> <!-- sidebar -->

			<div class="clr"></div>


</div> <!-- container -->


<footer>
	<div class="container">
		<p>&copy; <?php echo get_the_date('Y'); ?> - <?php bloginfo('name'); ?></p>
	<?php //echo get_the_date('F j, Y'); ?>
	</div> <!-- container -->
	
</footer>

<?php wp_footer(); ?>

</body>
</html>