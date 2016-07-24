<? /* Template Name: Search Page */ ?>

<?php get_header(); ?>
	<div id="content">
    <?= get_template_part('parts/block', 'header') ?>

    <div class="inner">
      <? get_search_form() ?>
    </div>
	</div>
<?php get_footer(); ?>
