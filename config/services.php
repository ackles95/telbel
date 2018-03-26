<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => '463172394098632',
        'client_secret' => '7d4dd6bfcd6f43b1f7d939f6fc311e95',
        'redirect' => 'https://telefoniabellini.it/login/facebook/callback',
    ],

    'google' => [
        'client_id' => '514243671569-054g6r2ju469blo1a95fij8vdrjkuvb5.apps.googleusercontent.com',
        'client_secret' => 'dUAbbcgdq4UR-DGaVOd5z_cn',
        'redirect' => 'https://telefoniabellini.it/login/google/callback',
    ],

    'twitter' => [
        'client_id' => 'JmpZ7F9n3nZDhD3vcxZS1nhbC',
        'client_secret' => 'NLfizFc23fUGWkNK7cuFJzX0dzN489GgHQZ7NQSs0dvQy',
        'redirect' => 'https://telefoniabellini.it/login/twitter/callback',
    ],

];
