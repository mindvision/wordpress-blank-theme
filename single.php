<?php get_header(); ?>
  <div id="content">
    <? get_template_part('parts/block', 'header') ?>

  	<div class="single-post-inner inner clearfix">
      <div class="sidebar">
        <?= get_template_part('sidebar-blog') ?>
      </div>

  		<div id="main" class="clearfix with-sidebar" role="main">
        <? if (have_posts()) : while (have_posts()) : the_post(); ?>
          <? set_query_var('the', $wf->the) ?>
          <? set_query_var('excerpt', true) ?>
          <? get_template_part('parts/block', 'post') ?>
        <? endwhile; endif; ?>
  		</div>
  	</div>
  </div>
<?php get_footer(); ?>
