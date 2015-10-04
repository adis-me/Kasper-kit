<?php snippet('header') ?>

    <div class="site-wrapper">

        <header class="main-header"
                style="background-image:<?php if ($image = $page->image()) {
                    echo "url(" . $image->url() . ")";
                } else {
                    echo "no-cover";
                } ?>">
            <nav class="main-nav overlay clearfix">
                <a class="blog-logo" href="<?php echo $page->url() ?>"><?php echo $site->title() ?></a>
                <a class="menu-button icon-menu" href="#"><span class="word">Menu</span></a>
            </nav>
            <div class="vertical">
                <div class="main-header-content inner">
                    <h1 class="page-title"><?php echo $page->headerText()->html() ?></h1>

                    <h2 class="page-description"><?php echo $page->text()->kirbytext() ?></h2>
                </div>
            </div>
            <a class="scroll-down icon-arrow-left" href="#content" data-offset="-45"><span
                    class="hidden">Scroll Down</span></a>
        </header>

        <main id="content" class="content" role="main">
            <?php if (param('tag')): // show tag results ?>
                <?php $tag = urldecode(param('tag'));
                $articles = $pages->find('blog')
                    ->children()
                    ->visible()
                    ->filterBy('tags', $tag, ',')
                    ->flip()
                    ->paginate(10);
                ?>
                <article class="post">
                    <h3>Filter for <a href="<?php echo url('tag:' . urlencode($tag)) ?>">#<?php echo $tag; ?></a>
                    | <a href="<?php echo $page->url() ?>">Show all posts</a>
                    </h3>
                </article>
            <?php else: ?>
                <?php $articles = $page->children()->visible()->flip(); ?>
            <?php endif; ?>
            <?php foreach ($articles as $article): ?>

                <article class="post">
                    <header class="post-header">
                        <h2 class="post-title">
                            <a href="<?php echo $article->url(); ?>">
                                <?php echo $article->title()->html() ?></a>
                        </h2>
                    </header>
                    <section class="post-excerpt">
                        <p>
                            <?php echo $article->text()->excerpt(300) ?>
                            <a class="read-more" href="<?php echo $article->url() ?>">&raquo;</a>
                        </p>
                    </section>
                    <footer class="post-meta">

                        <?php if ($article->tags() != ''): ?>

                            <?php foreach (str::split($article->tags()) as $tag): ?>

                                <a href="<?php echo url('tag:' . urlencode($tag)) ?>">#<?php echo $tag; ?></a>

                            <?php endforeach ?>

                        <?php endif ?>

                        <time class="post-date"
                              datetime="<?php echo $article->date('c') ?>"><?php echo $article->date('d-M-Y'); ?></time>

                    </footer>

                </article>

            <?php endforeach ?>

            <?php if ($articles = $page->children()->visible()->flip()->paginate(10)): // pagination ?>
                <?php if ($articles->pagination()->hasPrevPage()): ?>
                    <nav class="pagination" role="navigation">
                        <a class="newer-posts" href="<?php echo $articles->pagination()->prevPageURL() ?>">&lsaquo;&lsaquo;
                            Newer posts</a>
                    </nav>
                <?php endif ?>
                <?php if ($articles->pagination()->hasNextPage()): ?>
                    <nav class="pagination" role="navigation">
                        <a class="older-posts" href="<?php echo $articles->pagination()->nextPageURL() ?>">Older
                            posts &rsaquo;&rsaquo;</a>
                    </nav>
                <?php endif ?>
                </nav>
            <?php endif ?>

        </main>

        <?php snippet('site-footer') ?>
    </div>

<?php snippet('footer') ?>