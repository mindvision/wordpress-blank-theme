<? /* Template Name: No Padding with Header */ ?>
<? global $wf; ?>

<?php get_header(); ?>
  <div id="content">
    <? get_template_part('parts/block', 'header') ?>
    <?= $wf->the->content ?>
	</div>
<?php get_footer(); ?>
