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

    'firebase' => [
        'api_key' => 'AIzaSyA3qFMzsDqwz6y6KWi1_2E8PrflC6BVNxY',
        'auth_domain' => 'xmltojson-a7975.firebaseapp.com',
        'database_url' => 'https://xmltojson-a7975.firebaseio.com',
        'project_id' => 'xmltojson-a7975',
        'storage_bucket' => 'xmltojson-a7975.appspot.com',
        'messaging_sender_id' => '902881034820',
        'app_id' => '1:902881034820:web:ddd617478237697831b211',
        'measurement_id' => 'G-2H999H40NF',
    ],

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

];
