<?php get_header(); ?>

	<div id="content">
    <?= get_template_part('parts/block', 'header') ?>

		<div class="search-inner inner">
      <? get_search_form() ?>

      <? if (have_posts()) : while (have_posts()) : the_post(); ?>
        <? set_query_var('the', $wf->the) ?>
        <? set_query_var('excerpt', true) ?>
        <? get_template_part('parts/block', 'post') ?>
      <? endwhile; ?>
        <?= get_template_part('parts/block', 'pagination') ?>
      <? else : ?>
        <?= get_template_part('parts/block', 'post-not-found') ?>
      <? endif; ?>
		</div>
	</div>

<?php get_footer(); ?>
