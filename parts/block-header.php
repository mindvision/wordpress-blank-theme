<? global $wf; ?>

<div class="page-header">
  <div class="inner">
    <h1>
      <? $page_for_posts = get_option('page_for_posts') ?>

      <? if (is_category()) : ?>
        <? single_cat_title(); ?>
      <? elseif (is_tag()) : ?>
          <span>Posts Tagged:</span> <? single_tag_title(); ?>
      <? elseif (is_author()) : ?>
        <? global $post; ?>
        <? $author_id = $post->post_author; ?>
          <span>Posts By:</span> <? the_author_meta('display_name', $author_id); ?>
      <? elseif (is_day()) : ?>
          <span>Daily Archives:</span> <? the_time('l, F j, Y'); ?>
      <? elseif (is_month()) : ?>
          <span>Monthly Archives:</span> <? the_time('F Y'); ?>
      <? elseif (is_year()) : ?>
          <span>Yearly Archives:</span> <? the_time('Y'); ?>
      <? elseif (is_home() && $page_for_posts) : ?>
        <?= $wf->post($page_for_posts)->title ?>
      <? elseif (is_search()) : ?>
        Search
      <? else : ?>
        <?= $wf->the->title ?>
      <? endif; ?>
    </h1>
  </div>
</div>

<? if (function_exists('yoast_breadcrumb')) : ?>
  <div class="breadcrumbs-wrapper">
    <div class="inner">
      <? yoast_breadcrumb('<p id="breadcrumbs">','</p>'); ?>
    </div>
  </div>
<? endif; ?>
