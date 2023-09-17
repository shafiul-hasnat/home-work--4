<?php


$students = [
    '$user1' => [
        'name' => 'shafiul hasnat',
        'email' => 'hasnatm7@gmail.com',
        'blood' => 'O+',
        'id'=>1,
        'social' => [
            'facebook'=> 'www.facebook.com',
            'insta'=> 'www.insta.com',
            'twitter'=>'www.twitter',
        ],
        'status' => true
    ],
    '$user2' => [
        'name' => 'shafiul hasnat',
        'email' => 'hasnatm7@gmail.com',
        'blood' => 'O+',
        'id'=>2,
        'social' => [
            'facebook'=> 'www.facebook.com',
            'insta'=> 'www.insta.com',
            'twitter'=>'www.twitter',
        ],
        'status' => true
    ],
    '$user3' => [
        'name' => 'shafiul hasnat',
        'email' => 'hasnatm7@gmail.com',
        'blood' => 'O+',
        'id'=>3,
        'social' => [
            'facebook'=> 'www.facebook.com',
            'insta'=> 'www.insta.com',
            'twitter'=>'www.twitter',
        ],
        'status' => true
    ],
    '$user4' => [
        'name' => 'shafiul hasnat',
        'email' => 'hasnatm7@gmail.com',
        'blood' => 'O+',
        'id'=>4,
        'social' => [
            'facebook'=> 'www.facebook.com',
            'insta'=> 'www.insta.com',
            'twitter'=>'www.twitter',
        ],
        'status' => true
    ]
];



echo '<pre>';
print_r($students);
echo '</pre>';

echo '<br>';

echo '<pre>';
print_r( $students['$user1']['social']);
echo '</pre>';


echo $students['$user1']['name'];




$text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, in!';
echo "<h4>strtolower :</h4>";
echo strtolower($text);
echo '<br>';
echo '<br>';
echo "<h4>strtoupper :</h4>";
echo strtoupper($text);
echo '<br>';
echo '<br>';
echo "<h4>ucwords :</h4>";
echo ucwords($text);
echo '<br>';
echo '<br>';
echo "<h4>strrev:</h4>";
echo strrev($text);
echo '<br>';
echo '<br>';
echo "<h4>strpos:</h4>";
echo strpos($text,'consectetur');
echo '<br>';
echo '<br>';
echo "<h4>stripos:</h4>";
echo stripos($text,'Consectetur');
echo '<br>';
echo '<br>';
echo "<h4>str_replace :</h4>";
echo str_replace(' ','-',$text);
echo '<br>';
echo '<br>';

// password hash start


$user='shafiulhasna';
$dbpass=password_hash($user,PASSWORD_BCRYPT);
$very = password_verify('shafiulhasna',$dbpass);



if($user == $very) {
    echo 'succes!';
}else{
    echo 'failed';
}

// password hash end



$users=['shaful','hasnatm7@gmail.com','O+'];

echo '<br>';
echo '<br>';


echo join(" ",$users);



$str = 'hasnat';

echo str_pad($str,20,'0');







