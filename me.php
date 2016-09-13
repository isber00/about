<?php
include_once 'about.php';

$attr = array(
    'name'      => '叶永俊',
    'age'       => 22,
    'sex'       => '男',
    'phone'     => '14718442269',
    'place'     => '广东梅州',
    'email'     => 'infeeling@yeah.net',
    'address'   => '广州天河',
    'money'     => 8000,
    'work'      => '广州天河',
    'education' => '大专',
    'img'       => 'img.jpg',
    'position'  => 'PHP开发工程师',
    'color'     => '#E53935'
);

$about = new about($attr);
$about->run();