<?php
echo "Hello php";

$user_name = 'Sohel Mia';
echo "<br/>";

echo "<pre>";
var_dump($user_name);

$user_id = 23234.00;

var_dump($user_id);

$role = '32323434';
var_dump((int)$role);


echo $user_name;

echo "<br/>";

//() [] {} <> = =

//array

$users = [
    'jon doe', 'sabuj', 'rana',
];


//for
//for ($i = 0; $i <= 2; $i++) {
//    var_dump($users[$i]);
//    if (is_array($users[$i])) {
//        for ($j = 0; $j < count($users[$i]); $j++) {
//            echo $users[$i][$j];
//        }
//    } else {
//        echo $users[$i];
//    }
//
//
//}

$i = 0;

while ($i < count($users)) {
    echo $users[$i];
    $i++;
}
//die();
$users = [
    [
        'name' => 'Jon Doe',
        'email' => 'hello@gmail.com',
        'role' => 434234,
        'mobile' => [
            '0177014619',
            '0177014619',
            '0177014619',
            '0177014619',
        ]
    ],
    [
        'name' => 'Hello Doe',
        'email' => 'hello@gmail.com',
        'role' => 434234,
        'mobile' => [
            '0177014619',
            '0177014619',
            '0177014619',
            '0177014619',
        ]
    ],
    [
        'name' => 'sadia',
        'email' => 'hello@gmail.com',
        'role' => 434234,
        'mobile' => [
            '0177014619',
            '0177014619',
            '0177014619',
            '0177014619',
        ]
    ],
    [
        'name' => 'shvuo',
        'email' => 'hello@gmail.com',
        'role' => 434234,
        'mobile' => [
            '0177014619',
            '0177014619',
            '0177014619',
            '0177014619',
        ]
    ],
];

//$country = explode(' ', "B a n g l a d e s h");
//var_dump($country);
//die();
//
//for ($i = 0; $i < count_chars($country); $i++) {
//    echo $country[$i];
//}


echo "</pre>";

// + - * /

//increment operator
//++

$i = 0;

echo ++$i;
echo ++$i;

$first_name = 1;
$last_name = 1;
$full_name = $first_name . '  ' . $last_name;

echo $full_name;

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User List</title>
</head>
<body>
<table border="1" width="600px">

    <tr>
        <th>Name</th>
        <th>Role</th>
        <th>Email</th>
        <th>Mobile</th>
    </tr>

    <?php foreach ($users as $user) { ?>
        <tr>
            <td><?php echo $user['name'] ?></td>
            <td><?php echo $user['role'] ?></td>
            <td><?php echo $user['email'] ?></td>
            <td><?php echo implode(',', $user['mobile']) ?></td>
        </tr>

    <?php } ?>
</table>
</body>
</html>
