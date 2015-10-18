<?php snippet('header', array('bodyClass' => "post-template")) ?>
<div class="site-wrapper">

    <header class="main-header post-head"
            style="background-image:<?php if ($image = $page->image()) {
                echo "url(" . $image->url() . ")";
            } else {
                echo "no-cover";
            } ?>">
        <nav class="main-nav overlay clearfix">
            <a class="blog-logo" href="<?php echo $site->url() ?>"><?php echo $site->title() ?></a>
            <a class="menu-button icon-menu" href="#"><span class="word">Menu</span></a>
        </nav>
        <div class="vertical">
    </header>

    <main class="content" role="main">
        <article class="post">

            <header class="post-header">
                <h1 class="post-title"><?php echo html($page->title()) ?></h1>
                <section class="post-meta">
                    <time class="post-date"
                          datetime="<?php echo $page->date('d-m-y') ?>"><?php echo $page->date('d-m-y'); ?></time>
                    <?php if ($page->tags() != ''): ?> on
                        <?php foreach (str::split($page->tags()) as $tag): ?>
                            <a href="<?php echo url('tag:' . urlencode($tag)) ?>">#<?php echo $tag; ?></a>
                        <?php endforeach ?>
                    <?php endif ?>
                </section>
            </header>


            <section class="post-content">
                <p><?php echo kirbytext($page->text()->kirbytext()) ?></p>
            </section>

            <?php snippet('post-footer') ?>

            <?php snippet('disqus', array('disqus_shortname' => $site->owner()->text(), 'disqus_developer' => true)) ?>

        </article>
    </main>

    <?php snippet('site-footer') ?>

</div>

</main>

<?php snippet('footer') ?>
