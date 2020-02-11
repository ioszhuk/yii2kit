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
                    'label' => 'Заказы',
                    'icon' => 'flaticon-cart',
                    'template' => 'single',
                    'url' => ['/purchase/index'],
                ],
                [
                    'label' => 'Индив. заказы',
                    'icon' => 'flaticon-cart',
                    'template' => 'single',
                    'url' => ['/individual-product-purchase/index'],
                ],
                [
                    'label' => 'Скидочные коды',
                    'icon' => 'flaticon-gift',
                    'template' => 'single',
                    'url' => ['/discount/index'],
                ],
                [
                    'label' => 'Подписки',
                    'icon' => 'fab fa fa-at',
                    'template' => 'single',
                    'url' => ['/subscribe/index'],
                ],

//                [
//                    'label'    => 'Обратная связь',
//                    'icon'     => 'fab fa fa-at',
//                    'template' => 'single',
//                    'url'      => [ '/question/index' ],
//                ],
                [
                    'label' => 'Главная',
                    'icon' => 'fab fa-fort-awesome',
                    'template' => 'single',
                    'url' => ['/home/index'],
                ],
                [
                    'label' => 'Коллекция',
                    'icon' => 'flaticon-black',
                    'template' => 'single',
                    'url' => ['/shop-collection/index'],
                ],
                [
                    'label' => 'Страницы',
                    'icon' => 'fa fa-info-circle',
                    'template' => 'single',
                    'url' => ['/page/index'],
                ],
                [
                    'label' => 'Категории товаров',
                    'icon' => 'flaticon-map',
                    'template' => 'submenu',
                    'url' => ['#'],
                    'items' => [
                        ['label' => 'Главная категория', 'url' => ['/product-category/main-category']],
                        ['label' => 'Категории товаров', 'url' => ['/product-category/index']],
                    ]
                ],
                [
                    'label' => 'Товары',
                    'icon' => 'flaticon-eye',
                    'template' => 'single',
                    'url' => ['/product/index'],
                ],
                [
                    'label' => 'Таблица размеров',
                    'icon' => 'flaticon-imac',
                    'template' => 'single',
                    'url' => ['/settings/product-size-table-settings'],
                ],
                [
                    'label' => 'Цвета товаров',
                    'icon' => 'flaticon-star',
                    'template' => 'single',
                    'url' => ['/product-color/index'],
                ],
                [
                    'label' => 'Размеры товаров',
                    'icon' => 'flaticon-star',
                    'template' => 'single',
                    'url' => ['/product-size/index'],
                ],
                [
                    'label' => 'Группы товаров',
                    'icon' => 'flaticon-star',
                    'template' => 'single',
                    'url' => ['/product-group/index'],
                ],
                [
                    'label' => 'Контакты стр.',
                    'icon' => 'flaticon-menu-button',
                    'template' => 'single',
                    'url' => ['/settings/contacts-settings'],
                ],
                [
                    'label' => 'Настройки',
                    'icon' => 'fa fa-cog',
                    'template' => 'submenu',
                    'url' => ['#'],
                    'items' => [
                        ['label' => 'Верхнее меню', 'url' => ['/menu/index']],
                        ['label' => 'Нижнее меню', 'url' => ['/footer-menu/index']],
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