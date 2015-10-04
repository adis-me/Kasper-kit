<div class="nav">
    <h3 class="nav-title">Menu</h3>
    <a href="#" class="nav-close">
        <span class="hidden">Close</span>
    </a>
    <ul>
        <?php foreach ($pages->visible() as $p): ?>
            <li class="nav- <?php e($p->isOpen(), ' nav-current') ?>">
                <a <?php e($p->isOpen(), ' class="active"') ?>
                    href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
            </li>
        <?php endforeach ?>
    </ul>
</div>
<span class="nav-cover"></span>
