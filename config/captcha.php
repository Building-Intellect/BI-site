<?php
/*
 * Secret key and Site key get on https://www.google.com/recaptcha
 * */
return [
    'secret' => '6Ldby2cUAAAAAJCeNbDi3vOwh5rzH2LEpkqsTQDc',
    'sitekey' => '6Ldby2cUAAAAAMVAy-_wp_PfmJGFiE2QWJzSclt0',
    /**
     * @var string|null Default ``null``.
     * Custom with function name (example customRequestCaptcha) or class@method (example \App\CustomRequestCaptcha@custom).
     * Function must be return instance, read more in folder ``examples``
     */
    'request_method' => null,
    'options' => [
        'multiple' => false,
        'lang' => app()->getLocale(),
    ],
    'attributes' => [
        'theme' => 'light'
    ],
];
