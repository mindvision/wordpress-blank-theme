<? global $wf ?>

<?php get_header(); ?>
  <div id="content">
    <? get_template_part('parts/block', 'header') ?>

  	<div class="inner section clearfix">
      <div class="sidebar">
        <?= get_template_part('sidebar-blog') ?>
      </div>

  		<div id="main" class="clearfix with-sidebar" role="main">
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
  </div>
<?php get_footer(); ?>
