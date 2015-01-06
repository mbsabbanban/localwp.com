<ul class="wptreehouse-badges">

	<?php for( $i = 0; $i < 20; $i++ ): ?>
	<li>
		<ul>
			<li>
				<img class="wptreehouse-gravatar" width="120px" src="<?php echo $plugin_url . '/images/wp-badge.png'; ?>">								
			</li>										
			<li class="wptreehouse-badge-name">
				<a href="#">Badge Name</a>
			</li>
			<li class="wptreehouse-project-name">
				<a href="#">Project Name</a>
			</li>
		</ul>									
	</li>								
	<?php endfor; ?>

</ul>