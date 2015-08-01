<?php theme_include('header'); ?>

<h1 class="no-margin-top">You searched for &ldquo;<?php echo search_term(); ?>&rdquo;.</h1>
<?php if(has_search_results()): ?>
	<ul class="items">
		<?php while(search_results()): ?>
		<li>
			<article class="wrap">
				<h2>
					<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
				</h2>
			</article>
		</li>
		<?php endwhile; ?>
	</ul>

	<?php if(has_pagination()): ?>
		<ul class="pager">
			<li class="previous">
				<?php echo search_prev(); ?>
			</li>
			<li class="next">
				<?php echo search_next(); ?>
			</li>
		</ul>
	<?php endif; ?>

<?php else: ?>
	<p class="wrap">Unfortunately, there's no results for &ldquo;<?php echo search_term(); ?>&rdquo;. Did you spell everything correctly?</p>
<?php endif; ?>

<?php theme_include('footer'); ?>