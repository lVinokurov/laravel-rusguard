<?php

return [
    'upload' => true,
    'group_father' => '',
    'log_stack' => [],

    'options' => [
        'url' => env('RUSGUARD_URL', 'http://127.0.0.1'),
        'login' => env('RUSGUARD_LOGIN', 'Admin'),
        'password' => env('RUSGUARD_PASSWORD', ''),
        'authentication' => SOAP_AUTHENTICATION_DIGEST,
        'cache_wsdl' => WSDL_CACHE_NONE,
        'soap_version' => SOAP_1_1,
        'stream_context' => stream_context_create([
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signer' => true
            ]
        ]),
    ]

];
