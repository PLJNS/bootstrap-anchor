		</div>
	</div>
</div>
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-xs-5 text-left">
				<p id="footer-copyright">&copy; <?php echo date('Y'); ?> <?php echo site_name(); ?>. All rights reserved.</p>
			</div>
			<div class="col-xs-7 text-right">
				<ul class="list-inline">
			<li><a href="<?php echo rss_url(); ?>">RSS</a></li>
			<?php if(twitter_account()): ?>
			<li><a href="<?php echo twitter_url(); ?>">@<?php echo twitter_account(); ?></a></li>
			<?php endif; ?>
			<li><a href="<?php echo base_url('admin'); ?>" title="Administer your site!">Admin area</a></li>
			<li><a href="/" title="Return to my website.">Home</a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>

		<script src="<?php echo theme_url('/js/jquery.min.js'); ?>"></script>
		<script src="<?php echo theme_url('/js/main.js'); ?>"></script>
		<script src="<?php echo theme_url('/js/bootstrap.min.js'); ?>"></script>
	</body>
</html>