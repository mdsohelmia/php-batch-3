<?php

require './helper.php';

//function

//callback,anounymouse,closer.

//oop
//class,inheritance,polymorphose,trait.

//Html Form data.

//DB Connection

//Resource Share.

function user_create($data)
{
    foreach ($data as $item) {
        $data['name'] = strtolower($data['name']);
    }

    return $data;
}


//var_dump(user_create([
//    'name' => 'SOHEL',
//    'email' => 'sohel@gmail.com'
//]));
////user_create();
//user_create();
//user_create();

$user_data = [
    [
        'name' => 'Munna',
        'email' => 'munna@gmail.com',
        'role' => 'employee.'
    ],
    [
        'name' => 'Munna1',
        'email' => 'munna1@gmail.com',
        'role' => 'employee.'
    ], [
        'name' => 'Munna2',
        'email' => 'mun2na@gmail.com',
        'role' => 'employee.'
    ]
];

//$create_user_data = user_create();

$mapdata = array_map(function ($item) {
    $temp = [];
    $temp['name'] = strtolower($item['name']) == 'munna1' ? 'Munna hobe' : 'valo lage na';
    $temp['email'] = strtoupper($item['email']);
    return $temp;
}, $user_data);

//var_dump($mapdata);


function greeting($callback, $username)
{
    return $callback($username);
}


$data = greeting(function ($username) {
    $time = '10.00';

    if ($time == '10.00') {
        return 'Good mooring';
    }

}, 'Sohel');

//dd($data);







