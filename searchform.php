<form role="search" method="get" id="searchform" action="<?= get_site_url() ?>" class="full-width-form">
  <div class="item main-item">
    <input class="main-item" type="search" value="<?= get_query_var('s') ?>" name="s" id="s" placeholder="Search the Site...">
  </div>
  <div class="item">
    <input type="submit" id="searchsubmit" value="Search">
  </div>
</form>

