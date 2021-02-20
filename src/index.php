<?php

use Rules\Alphabetical;
use Rules\Numeric;
use Rules\Required;

require_once '../vendor/autoload.php';

$attributes = ['name' => '', 'age' => 'gf'];

$rules = [
    'name' => [new Required, new Alphabetical],
    'age' => [new Required, new Numeric],
];

try
{
    $validator = Validator::make($rules, $attributes);
}
catch (Exceptions\UndefinedRuleException $ex)
{
    echo $ex->getMessage();
}

print_r($validator->getErrors());