<!-- Menu -->
<div class="menu">
    <ul class="list">
        <li class="header">MENU ADMIN</li>
        <?php foreach ($menu as $m) : ?>
            <li class="<?= in_array($this->uri->segment(2), $m[1]) ? 'active' : '' ?>">
                <a href="<?php echo base_url() ?>admin/<?= $m[0] ?>">
                    <i class="material-icons"><?= $m[2] ?></i>
                    <span><?= $m[3] ?></span>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
</div>
<!-- #Menu -->