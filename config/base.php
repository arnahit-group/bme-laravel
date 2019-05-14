<?php


return [

    'data_types' => [
        'hotel' => 1,
        'room' => 2,
        'website' => 3,
        'application' => 4,
        'coffee-shop' => 5,
        'restaurant' => 6,
        'map' => 7,
        'map-location' => 8,
        'conversation' => 9,
        'message' => 10,
        'comment' => 11,


    ],
    'user_types' => [
        'user' => 1,
        'customer' => 2,
    ],
    'service_types' => [
        'reserve' => 1,
        'customer' => 2,
    ],

    'relation_types' => [
        'general' => 1,
        'offer' => 2,
        'price' => 5,
    ],

    'document_types' => [
        'gallery' => 1,
        'general' => 2,
        'main-slide-show' => 3,
        'second-slide-show' => 4,
        'pages' => 5,
        'contact-us' => 6,
        'about-us' => 7,
        'rules' => 8,
        'check' => 9,
        'complaints' => 10,
    ],

    'object_types' => [
        'data' => 1,
        'user' => 2,
        'service' => 3,
        'document' => 4,
        'relation' => 5,
        'data_assigned_property' => 6,
        'service_assigned_property' => 7,
        'user_assigned_property' => 8,
    ],

    'tables' => [
        'data_assigned_properties' => 'data_assigned_properties',
        'service_assigned_properties' => 'service_assigned_properties',

    ],

    'locales' => [
        'en',
        'ar'
    ],


    'rtl_locales' => [
        'ar',
        'dv',
        'he',
        'fa',
        'ur',
        'ku',
    ],

];
