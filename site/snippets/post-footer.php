<?php if($site->owner() && $site->owner()->isNotEmpty()): ?>
<footer class="post-footer">


    <?php if($avatar = $site->user($site->owner()->text())->avatar()): ?>
    <figure class="author-image">
        <a class="img" href="<?php echo $site->url() ?>" style="background-image: url(<?php echo gravatar($site->user($site->owner()->text())->email()) ?>)"><span class="hidden"><?php echo $site->title() ?>'s Picture</span></a>
    </figure>
    <?php endif; ?>

    <section class="author">
        <h4><a href="<?php echo $site->url() ?>"><?php echo $site->user($site->owner()->text())->firstName() . " " . $site->user($site->owner()->text())->lastName() ?></a></h4>

        <div class="author-meta">
            <span class="author-location icon-location">The Netherlands</span>
            <span class="author-link icon-link"><a href="<?php echo $site->url() ?>"><?php echo $site->url() ?></a></span>
        </div>
    </section>

    <section class="share">
        <h4>Share this post</h4>
        <a class="icon-twitter" href="https://twitter.com/intent/tweet?text={{encode title}}&amp;url={{url absolute="true"}}"
        onclick="window.open(this.href, 'twitter-share', 'width=550,height=235');return false;">
        <span class="hidden">Twitter</span>
        </a>
        <a class="icon-facebook" href="https://www.facebook.com/sharer/sharer.php?u={{url absolute="true"}}"
        onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;">
        <span class="hidden">Facebook</span>
        </a>
        <a class="icon-google-plus" href="https://plus.google.com/share?url={{url absolute="true"}}"
        onclick="window.open(this.href, 'google-plus-share', 'width=490,height=530');return false;">
        <span class="hidden">Google+</span>
        </a>
    </section>

</footer>
<?php endif; ?>