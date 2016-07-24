<article id="post-<?= $the->id ?>" <?php post_class('clearfix'); ?> role="article"
  itemscope itemtype="http://schema.org/BlogPosting">

  <header class="article-header">
    <h1 class="h2">
      <a href="<?= $the->permalink ?>" rel="bookmark" title="<?= $the->title; ?>"><?= $the->title; ?></a>
    </h1>

    <p class="byline vcard">
      Posted
      <time class="updated" datetime="<?= $the->date('Y-m-j') ?>" pubdate>
        <?= $the->date(get_option('date_format')) ?>
      </time>
      by <span class="author"><?= bones_get_the_author_posts_link() ?></span>
      <span class="amp">&amp;</span> filed under <?= get_the_category_list(', ') ?>.
    </p>
  </header>

  <section class="entry-content clearfix" itemprop="articleBody">
    <? if ($excerpt) : ?>
      <?= $the->excerpt ?>
    <? else : ?>
      <?= $the->content ?>
    <? endif; ?>
  </section>

  <footer class="article-footer">
    <?php the_tags('<p class="tags"><span class="tags-title">Tags:</span> ', ', ', '</p>'); ?>
  </footer>
</article>
