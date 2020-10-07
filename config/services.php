<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'firebase' => [
        'api_key' => 'AIzaSyB6LMS0SbGS-tvTW4BLloaSKuMyoZwEKJw',
        'auth_domain' => 'dsys-721ca.firebaseapp.com',
        'database_url' => 'https://dsys-721ca.firebaseio.com',
        'project_id' => 'dsys-721ca',
        'storage_bucket' => 'dsys-721ca.appspot.com',
        'messaging_sender_id' => '79512194642',
        'app_id' => '1:79512194642:web:a16b183333a4c4dfb1998b',
        'measurement_id' => 'G-K32K8Q7MPC',
    ],
];
