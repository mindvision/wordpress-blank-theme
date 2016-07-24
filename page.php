<? global $wf; ?>

<?php get_header(); ?>
  <div id="content">
    <? get_template_part('parts/block', 'header') ?>

  	<div class="inner section clearfix">
      <div class="sidebar">
        <?= get_template_part('sidebar-page') ?>
      </div>

      <div class="clearfix with-sidebar flush-top">
        <?= $wf->the->content ?>
      </div>
    </div>
	</div>
<?php get_footer(); ?>
