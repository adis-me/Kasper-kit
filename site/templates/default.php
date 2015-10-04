<?php snippet('header') ?>

    <div class="site-wrapper">

        <header class="main-header no-cover"
                style="background-image:<?php if ($image = $page->image()) {
                    echo "url(" . $image->url() . ")";
                } else {
                    echo "no-cover";
                } ?>">
            <nav class="main-nav overlay clearfix">
                <a class="blog-logo" href="<?php echo $site->url() ?>"><?php echo $site->title() ?></a>
                <a class="menu-button icon-menu" href="#"><span class="word">Menu</span></a>
            </nav>

        </header>

        <main id="content" class="content" role="main">

            <article class="post">
                <header class="post-header">
                    <h1 class="post-title">
                        <?php echo $page->title() ?>
                    </h1>
                </header>

                <section class="post-content">

                    <?php echo $page->text()->kirbytext() ?>

                </section>

            </article>
        </main>

        <?php snippet('site-footer') ?>
    </div>

<?php snippet('footer') ?>