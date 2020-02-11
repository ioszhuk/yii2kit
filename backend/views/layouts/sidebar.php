<?php

use \backend\widgets\MetronicSidebar;
use yii\helpers\Html;

?>
<!-- BEGIN: Left Aside -->
<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
    <i class="la la-close"></i>
</button>

<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">

    <!-- BEGIN: Aside Menu -->
    <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark "
         m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">

        <!-- SIDEBAR START -->
        <?= MetronicSidebar::widget([
            'items' => [
                [
                    'label' => 'Главная',
                    'icon' => 'fab fa-fort-awesome',
                    'template' => 'single',
                    'url' => ['/home/index'],
                ],
                [
                    'label' => 'Настройки',
                    'icon' => 'fa fa-cog',
                    'template' => 'submenu',
                    'url' => ['#'],
                    'items' => [
                        ['label' => 'Соц. сети', 'url' => ['/settings/social-group-settings']],
                        ['label' => 'Email и контакты', 'url' => ['/settings/site-config-settings']],
                        ['label' => 'Управление пользователями', 'url' => ['/user/admin/index']],
                    ]
                ],
            ]
        ]) ?>
        <!-- SIDEBAR END -->

    </div>
    <!-- END: Aside Menu -->

</div>
<!-- END: Left Aside -->