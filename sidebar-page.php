<div id="page-sidebar" class="page-sidebar">
  <? if (is_active_sidebar('page-sidebar')) : ?>
    <? dynamic_sidebar('page-sidebar'); ?>
  <? else : ?>
    <? // This content shows up if there are no widgets defined in the backend. ?>
    <div class="alert alert-help">
      <p>Please activate some Widgets</p>
    </div>
  <? endif; ?>
</div>

