<?php theme_include('header'); ?>
<h1 class="no-margin-top"><?php echo article_title(); ?></h1>
<article>
	<?php echo article_markdown(); ?>
</article>
<?php if(comments_open()): ?>
	<?php if(has_comments()): ?>
		<hr>
		<h2>Comments</h2>
		<?php while(comments()): ?>
			<div class="media">
				<div class="media-body">
					<h4 class="media-heading"><?php echo comment_name(); ?> commented <time><?php echo relative_time(comment_time()); ?></time></h4>
					<p><?php echo comment_text(); ?></p>
				</div>
			</div>
			<hr>
		<?php endwhile; ?>
	<?php endif; ?>
	<h2>Add a comment</h2>
	<form id="comment" class="commentform wrap" method="post" action="<?php echo comment_form_url(); ?>#comment">
		<?php if($x = comment_form_notifications()): ?>
			<div class="alert alert-success" role="alert">
				<?php echo $x; ?>
			</div>
		<?php endif ?>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<p class="name">
						<label for="name">Your name:</label>
						<?php echo comment_form_input_name('placeholder="Your name" class="form-control"'); ?>
					</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<p class="email">
						<label for="email">Your email address:</label>
						<?php echo comment_form_input_email('placeholder="Your email (won’t be published)" class="form-control"'); ?>
					</p>
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<p class="textarea">
						<label for="text">Your comment:</label>
						<?php echo comment_form_input_text('placeholder="Your comment" class="form-control"'); ?>
					</p>
				</div>
				<p class="submit">
					<?php echo comment_form_button(); ?>
				</p>
			</div>
		</div>
	</form>
<?php endif; ?>
<?php theme_include('footer'); ?>