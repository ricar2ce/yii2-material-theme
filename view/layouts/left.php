<?php
    $menu = $img = "";
    $config = new rce\material\Config();
    if (class_exists('common\models\Menu')) {
        // advence template
        $menu = common\models\Menu::getMenu();
        // echo $menu;die;
    }
    if (class_exists('app\models\Menu')) {
        // basic template
        $menu = app\models\Menu::getMenu();
    }
    if(empty($config::sidebarBackgroundImage())) {
        $img = $directoryAsset.'/img/sidebar-1.jpg';
    }else {
        $img = $config::sidebarBackgroundImage();
    }
?>
<div class="sidebar" data-color="<?= $config::sidebarColor()  ?>" data-background-color="<?= $config::sidebarBackgroundColor()  ?>">
    <div class="logo">
        <a href="#" class="simple-text logo-mini">
            <?php
            if(empty($config::logoMini())) { ?>
                <img src="<?=$directoryAsset;?>/img/favicon.png" style="max-width: 30px;">
            <?php } else {
                echo $config::logoMini();
            }
            ?>
        </a>
        <a href="#" class="simple-text logo-normal">
            <?= $config::siteTitle()  ?>
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="/">
              <i class="material-icons">home</i>
              <p>Home</p>
            </a>
          </li>
        </ul>
        <?= $menu ?>
    </div>
    <div class="sidebar-background" style="background-image: url(<?= $img ?>) "></div>
</div>
