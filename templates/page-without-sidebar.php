<? /* Template Name: Page without Sidebar */ ?>

<? global $wf; ?>

<?php get_header(); ?>
  <div id="content">
    <? get_template_part('parts/block', 'header') ?>

  	<div class="inner clearfix">
      <div class="section clearfix">
        <?= $wf->the->content ?>
      </div>
    </div>
	</div>
<?php get_footer(); ?>
