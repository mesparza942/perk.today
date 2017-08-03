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

    'mailgun'   => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses'       => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe'    => [
        'model'  => App\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook'  => [
        'client_id'     => '302504886864911',
        'client_secret' => '8cc9becac6a46c2fb4e1c9d9705408e6',
        'redirect'      => 'http://localhost/examen/public/auth/facebook/callback',
    ],

    'google'    => [
        'client_id'     => '256397667673-c4qk1nhhbj0c77o484758kldn0quccp9.apps.googleusercontent.com',
        'client_secret' => 'dN0qSU9xGK0BjyKnnruel4j_',
        'redirect'      => 'http://localhost/auth/google/callback',
    ],

];
