<?php

use yii\helpers\Url;
use frontend\widgets\FooterMenuWidget;
use frontend\widgets\SubscribeFormWidget;

$preloader = 'data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==';

$social_networks = Yii::$app->siteSettingsComponent->getSocialNetwork();

?>
<footer class="footer">
    <div class="page-content">
        <div class="container">
            <div class="row">
                <?= FooterMenuWidget::widget() ?>
                <div class="col-sm-4 col-lg-5 offset-lg-1 subscribe_form_box">
                    <?php if($phones = Yii::$app->siteSettingsComponent->getPhones()) : ?>
                        <?php foreach($phones as $phone) : ?>
                            <div class="col-12 footer-phone">
                                <a href="tel:<?= $phone['phone_link'] ?>" class="tel"><?= $phone['phone_anchor'] ?></a>
                            </div>
                        <?php endforeach ?>
                    <?php endif ?>
                    <div class="form-title"><?= Yii::t('app', 'footer_summary') ?></div>
                    <?= SubscribeFormWidget::widget() ?>
                    <div class="policy_links"><?= Yii::t('app', 'approve_agreement_summary') ?></div>
                </div>
            </div>
        </div>
    </div>
</footer>

<section class="footer_bottom">
    <div class="page-content">
        <div class="container">
            <div class="row">

                <div class="main_part">
                    <div class="logotype">
                        <a href="<?= Url::to(['site/index']) ?>">
                            <img class="b-lazy" src="<?= $preloader ?>" data-src="/img/logotype/logotype-black.png" alt="Furly" width="160" height="39">
                        </a>
                    </div>
                    <div class="our-office">
                        <p><?= Yii::$app->siteSettingsComponent->getAddress() ?></p>
                    </div>
                </div>

                <div class="additional_part">

                    <div class="payment-systems">
                        <img class="b-lazy" src="<?= $preloader ?>" data-src="/img/systems/payments-new.jpg" width="209" height="48">
                    </div>

                    <?php if($social_networks) : ?>
                        <div class="social-networks">
                            <?php foreach($social_networks as $single_social) : ?>
                                <?php if($single_social['link_type'] === 'instagram') : ?>
                                    <a href="<?= $single_social['link_url'] ?>" target="_blank" rel="nofollow">
                                        <svg viewBox="0 0 512.00096 512.00096" xmlns="http://www.w3.org/2000/svg"><path d="m373.40625 0h-234.8125c-76.421875 0-138.59375 62.171875-138.59375 138.59375v234.816406c0 76.417969 62.171875 138.589844 138.59375 138.589844h234.816406c76.417969 0 138.589844-62.171875 138.589844-138.589844v-234.816406c0-76.421875-62.171875-138.59375-138.59375-138.59375zm108.578125 373.410156c0 59.867188-48.707031 108.574219-108.578125 108.574219h-234.8125c-59.871094 0-108.578125-48.707031-108.578125-108.574219v-234.816406c0-59.871094 48.707031-108.578125 108.578125-108.578125h234.816406c59.867188 0 108.574219 48.707031 108.574219 108.578125zm0 0"/><path d="m256 116.003906c-77.195312 0-139.996094 62.800782-139.996094 139.996094s62.800782 139.996094 139.996094 139.996094 139.996094-62.800782 139.996094-139.996094-62.800782-139.996094-139.996094-139.996094zm0 249.976563c-60.640625 0-109.980469-49.335938-109.980469-109.980469 0-60.640625 49.339844-109.980469 109.980469-109.980469 60.644531 0 109.980469 49.339844 109.980469 109.980469 0 60.644531-49.335938 109.980469-109.980469 109.980469zm0 0"/><path d="m399.34375 66.285156c-22.8125 0-41.367188 18.558594-41.367188 41.367188 0 22.8125 18.554688 41.371094 41.367188 41.371094s41.371094-18.558594 41.371094-41.371094-18.558594-41.367188-41.371094-41.367188zm0 52.71875c-6.257812 0-11.351562-5.09375-11.351562-11.351562 0-6.261719 5.09375-11.351563 11.351562-11.351563 6.261719 0 11.355469 5.089844 11.355469 11.351563 0 6.257812-5.09375 11.351562-11.355469 11.351562zm0 0"/></svg>
                                    </a>
                                <?php endif ?>
                                <?php if($single_social['link_type'] === 'vk') : ?>
                                    <a href="<?= $single_social['link_url'] ?>" target="_blank" rel="nofollow">
                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 511.998 511.998" style="enable-background:new 0 0 511.998 511.998;" xml:space="preserve"> <g> <g> <path d="M489.25,335.681c-11.137-13.347-23.719-25.264-35.888-36.789c-4.276-4.051-8.7-8.24-12.96-12.399 c-0.001-0.001-0.002-0.002-0.003-0.003c-5.73-5.589-8.535-9.556-8.828-12.486c-0.288-2.88,1.68-7.153,6.207-13.469 c6.769-9.5,13.984-19.016,20.964-28.218c6.204-8.18,12.618-16.639,18.766-25.146l1.38-1.91 c11.995-16.602,24.397-33.769,31.043-54.689c1.898-5.998,3.869-14.874-0.885-22.666c-4.756-7.794-13.573-10.104-19.787-11.162 c-3.035-0.52-5.915-0.563-8.595-0.563l-77.806-0.069c-13.452-0.224-22.784,6.152-27.87,18.956 c-4.07,10.226-8.877,22.077-14.446,33.319c-10.655,21.703-24.194,46.7-43.818,67.527l-0.872,0.928 c-1.336,1.426-3.519,3.758-4.64,4.293c-2.126-1.336-4.579-8.977-4.467-12.98c0.003-0.099,0.004-0.197,0.004-0.295l-0.069-89.903 c0-0.457-0.032-0.914-0.093-1.367c-1.745-12.826-5.147-25.684-25.447-29.69c-0.651-0.129-1.313-0.193-1.975-0.193h-80.935 c-15.227,0-23.281,6.973-29.738,14.533c-1.869,2.204-6.835,8.056-4.305,15.21c2.56,7.239,10.188,8.684,12.692,9.158 c8.82,1.674,13.381,6.659,14.793,16.189c2.791,18.517,3.133,38.326,1.078,62.309c-0.573,6.439-1.639,11.333-3.359,15.403 c-0.476,1.127-0.894,1.825-1.186,2.236c-0.466-0.188-1.191-0.548-2.195-1.235c-6.198-4.241-10.869-10.834-15.386-17.208 c-18.042-25.473-33.218-53.607-46.401-86.022c-5.429-13.283-15.635-20.702-28.719-20.894c-24.928-0.415-47.983-0.405-70.459,0.032 c-10.601,0.184-18.035,3.521-22.099,9.92c-4.069,6.411-3.92,14.585,0.444,24.299c31.196,69.37,59.522,119.834,91.842,163.628 c22.757,30.832,45.665,52.234,72.092,67.354c27.766,15.885,59.08,23.67,95.408,23.669c4.131,0,8.334-0.101,12.593-0.304 c22.413-1.021,31.532-9.936,32.527-31.765c0.558-11.537,1.842-20.883,6.297-29.003c1.246-2.273,2.652-3.797,3.76-4.076 c1.178-0.294,3.267,0.427,5.59,1.936c4.247,2.758,7.904,6.498,10.911,9.781c3.048,3.337,6.128,6.784,9.109,10.117 c6.343,7.097,12.902,14.436,19.774,21.436c15.543,15.844,33.461,23.11,53.278,21.588l71.205,0.033c0.002,0,0.003,0,0.004,0 c0.226,0,0.452-0.007,0.678-0.022c8.213-0.547,15.314-5.094,19.484-12.478c5.021-8.892,4.945-20.155-0.207-30.14 C502.359,352.01,495.384,343.075,489.25,335.681z M490.181,382.502c-0.982,1.739-2.193,2.056-2.818,2.132l-71.19-0.033 c-0.002,0-0.004,0-0.007,0c-0.281,0-0.562,0.011-0.841,0.035c-14.025,1.168-25.946-3.762-37.474-15.512 c-6.539-6.662-12.937-13.819-19.124-20.741c-3.015-3.373-6.132-6.862-9.264-10.29c-3.884-4.242-8.685-9.117-14.854-13.123 c-9.236-5.995-16.89-5.814-21.683-4.606c-4.743,1.195-11.485,4.605-16.66,14.049c-6.704,12.219-8.183,25.401-8.785,37.854 c-0.348,7.616-1.636,9.628-2.174,10.139c-0.705,0.67-3.061,1.848-10.922,2.207c-37.776,1.776-69.478-4.989-96.931-20.696 c-23.882-13.664-44.794-33.291-65.809-61.762c-31.425-42.579-59.075-91.887-89.65-159.877c-1.108-2.463-1.45-4-1.549-4.823 c0.78-0.256,2.304-0.593,4.976-0.642c22.248-0.431,45.062-0.443,69.765-0.031c3.382,0.05,7.233,1.065,10.149,8.2 c13.774,33.869,29.685,63.344,48.645,90.112c5.034,7.105,11.3,15.949,20.509,22.25c8.435,5.776,15.28,5.5,19.538,4.252 c4.26-1.249,10.172-4.719,14.154-14.147c2.569-6.077,4.122-12.92,4.891-21.566c2.197-25.653,1.807-46.981-1.225-67.098 c-2.137-14.413-9.579-24.825-21.302-30.142c2.082-1.084,4.428-1.536,7.686-1.536h79.877c4.494,1.008,5.384,2.192,5.689,2.597 c1.294,1.721,2.034,5.792,2.486,8.973l0.068,89.074c-0.18,8.539,3.97,27.477,18.1,32.67c0.116,0.043,0.233,0.083,0.35,0.121 c12.864,4.204,21.373-4.877,25.941-9.756l0.814-0.866c21.496-22.815,35.971-49.473,47.28-72.508 c5.894-11.895,10.886-24.199,15.107-34.805c2.112-5.319,4.034-6.195,8.62-6.098c0.063,0.002,0.125,0.002,0.189,0.002l77.905,0.069 c1.812,0,3.703,0.021,5.17,0.272c3.712,0.632,5.241,1.402,5.745,1.721c0.052,0.591,0.04,2.291-1.082,5.839 c-5.651,17.789-16.572,32.903-28.133,48.905l-1.381,1.913c-6.007,8.312-12.35,16.675-18.483,24.764 c-7.07,9.321-14.378,18.958-21.307,28.684c-14.814,20.669-13.512,34.385,4.975,52.417c4.369,4.265,8.847,8.507,13.179,12.609 c12.281,11.633,23.882,22.62,34.235,35.026c5.42,6.534,11.564,14.381,16.042,23.029 C491.954,376.286,491.381,380.376,490.181,382.502z"/> </g> </g> <g> <g> <path d="M74.382,169.635c-1.498-2.964-2.983-5.936-4.454-8.914c-2.496-5.049-8.608-7.123-13.661-4.627 c-5.05,2.495-7.122,8.611-4.627,13.661c1.499,3.034,3.012,6.062,4.537,9.081c1.795,3.552,5.386,5.6,9.11,5.6 c1.546,0,3.117-0.353,4.592-1.098C74.908,180.796,76.923,174.662,74.382,169.635z"/> </g> </g> <g> <g> <path d="M138.353,275.441c-16.724-22.659-32.37-47.27-47.83-75.239c-2.725-4.93-8.931-6.716-13.86-3.992 c-4.929,2.725-6.717,8.931-3.992,13.86c15.896,28.756,32.013,54.102,49.271,77.485c2,2.71,5.087,4.143,8.214,4.143 c2.104,0,4.226-0.648,6.048-1.995C140.735,286.359,141.697,279.974,138.353,275.441z"/> </g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg>
                                    </a>
                                <?php endif ?>
                            <?php endforeach ?>
                        </div>
                    <?php endif ?>

                </div>

            </div>
        </div>
    </div>
</section>