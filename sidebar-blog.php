<div id="blog-sidebar" class="blog-sidebar">
  <? if (is_active_sidebar('blog-sidebar')) : ?>
    <? dynamic_sidebar('blog-sidebar'); ?>
  <? else : ?>
    <?php // This content shows up if there are no widgets defined in the backend. ?>
    <div class="alert alert-help">
      <p>Please activate some Widgets</p>
    </div>
  <? endif; ?>
</div>
