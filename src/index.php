<?php

use Rules\Alphabetical;
use Rules\Required;

require_once '../vendor/autoload.php';

$attributes = ['name' => ''];

$rules = [
    'name' => [new Required, new Alphabetical]
];

$validator = Validator::make($rules, $attributes);

print_r($validator->getErrors());