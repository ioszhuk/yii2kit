<?php

use common\modules\languages\widgets\LanguageWidget;
use frontend\widgets\HeaderMenuWidget;
use frontend\widgets\SearchFormWidget;
use yii\helpers\Url;

?>
<div class="page-header <?= (Yii::$app->controller->route === 'site/index') ? 'absolute' : 'normal' ?>">
    <div class="container-fluid main-panel">

        <div class="mobile-button-box">
            <button type="button" id="mobile-menu-btn">
                <svg width="26" height="17" viewBox="0 0 26 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="26" height="1" fill="#BDBDBD"></rect>
                    <rect y="8" width="26" height="1" fill="#BDBDBD"></rect>
                    <rect y="16" width="26" height="1" fill="#BDBDBD"></rect>
                </svg>
            </button>
        </div>

        <div class="logotype">
            <a href="<?= Url::to(['site/index']) ?>">
                <img src="/img/logotype/logotype-small-white.png?312" alt="Furly" width="147" height="38">
            </a>
        </div>

        <div class="additional">
            <div class="menu">
                <?= HeaderMenuWidget::widget() ?>
            </div>
            <div class="helpful-features">
                <ul>
                    <li>
                        <button type="button" id="search-btn">
                            <svg width="13" height="16" viewBox="0 0 13 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <path fill-rule="evenodd" clip-rule="evenodd" d="M 11.5061 6.48649C 11.5061 9.49133 9.14709 11.873 6.30298 11.873C 3.45898 11.873 1.09998 9.49133 1.09998 6.48649C 1.09998 3.48165 3.45898 1.1 6.30298 1.1C 9.14709 1.1 11.5061 3.48165 11.5061 6.48649ZM 9.31433 12.1862C 8.41956 12.6879 7.39368 12.973 6.30298 12.973C 2.82202 12.973 0 10.0689 0 6.48649C 0 2.9041 2.82202 0 6.30298 0C 9.78406 0 12.6061 2.9041 12.6061 6.48649C 12.6061 8.54404 11.6752 10.3778 10.2231 11.5662L 12.4475 14.6803L 11.5525 15.3197L 9.31433 12.1862Z" fill="#fff"/></svg>
                        </button>
                    </li>
                    <li>
                        <a href="<?= Url::to(['purchase/cart']) ?>" class="cart-link">
                             <span class="not_empty">
                                <svg width="18" height="19" viewBox="0 0 18 19" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path d="M 0 17L -0.548292 16.9567L -0.595159 17.55L 0 17.55L 0 17ZM 16 17L 16 17.55L 16.5952 17.55L 16.5483 16.9567L 16 17ZM 15.0408 4.85714L 15.5891 4.81383L 15.5491 4.30714L 15.0408 4.30714L 15.0408 4.85714ZM 0.959184 4.85714L 0.959184 4.30714L 0.450916 4.30714L 0.410892 4.81383L 0.959184 4.85714ZM 0 17.55L 16 17.55L 16 16.45L 0 16.45L 0 17.55ZM 16.5483 16.9567L 15.5891 4.81383L 14.4925 4.90045L 15.4517 17.0433L 16.5483 16.9567ZM 0.410892 4.81383L -0.548292 16.9567L 0.548292 17.0433L 1.50748 4.90045L 0.410892 4.81383ZM 4.57143 4.30714L 0.959184 4.30714L 0.959184 5.40714L 4.57143 5.40714L 4.57143 4.30714ZM 5.12143 4.85714C 5.12143 3.9614 5.31497 2.84478 5.78921 1.97343C 6.25236 1.12244 6.94923 0.55 8 0.55L 8 -0.55C 6.43853 -0.55 5.42111 0.348712 4.82304 1.44759C 4.23605 2.52609 4.02143 3.83805 4.02143 4.85714L 5.12143 4.85714ZM 15.0408 4.30714L 11.7551 4.30714L 11.7551 5.40714L 15.0408 5.40714L 15.0408 4.30714ZM 11.7551 4.30714L 4.57143 4.30714L 4.57143 5.40714L 11.7551 5.40714L 11.7551 4.30714ZM 8 0.55C 9.06391 0.55 9.84791 1.13761 10.3914 2.00301C 10.9425 2.88066 11.2051 3.9912 11.2051 4.85714L 12.3051 4.85714C 12.3051 3.80825 11.9962 2.49022 11.3229 1.41801C 10.6419 0.333547 9.54833 -0.55 8 -0.55L 8 0.55ZM 5.12143 7.84615L 5.12143 4.85714L 4.02143 4.85714L 4.02143 7.84615L 5.12143 7.84615ZM 12.3051 7.84615L 12.3051 4.85714L 11.2051 4.85714L 11.2051 7.84615L 12.3051 7.84615Z" transform="translate(1 1)" fill="white"></path>
                                </svg>
                                <div id="cart-counter" class="cart-counter-box"><?= Yii::$app->siteSettingsComponent->getCartSize() ?></div>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="languages">
                <?= LanguageWidget::widget() ?>
            </div>
        </div>
    </div>
    <div class="search-panel">
        <div class="container-fluid">
            <div class="search-panel_wrapper container">
                <div class="search-panel_label"><?= Yii::t('app', 'search_label') ?></div>
                <div class="search-panel_form">
                    <?= SearchFormWidget::widget() ?>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-menu-panel">
        <div class="container-fluid">
            <?= HeaderMenuWidget::widget(['viewType' => 'mobile']) ?>
        </div>
    </div>
</div>