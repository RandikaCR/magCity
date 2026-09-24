<?php
use Illuminate\Support\Facades\Auth;

function thisUser(){
    $user = Auth::user();
    return !empty($user) ? $user : null;
}

function isAuthUser(){
    $user = thisUser();
    return !empty($user) ? true : false;
}

function isSuperAdmin(){
    $user = thisUser();
    return !empty($user) && $user['user_role_id'] == '1' ? true : false;
}

function isModerator(){
    $user = thisUser();
    return !empty($user) && $user['user_role_id'] == '2' ? true : false;
}



function priceWithCurrency($price){
    $price = str_replace(',', '', $price);
    $price = (float) $price;
    return defaultCurrency() . number_format($price, 2);
}

function priceWithoutCurrency($price){
    $price = str_replace(',', '', $price);
    $price = (float) $price;
    return number_format($price, 2);
}

function defaultCurrency(){
    return 'Rs. ';
}

function rateWithPercentage($rate = 0){
    $rate = (float) $rate;
    return number_format($rate, 2) . '%';
}

function dateTimeFormat($date){
    return date('d-m-Y h:i A', strtotime($date));
}

function dateTimeFullFormat($date){
    return date('d-F-Y h:i A', strtotime($date));
}

function dateFormat($date){
    return date('d-F-Y', strtotime($date));
}


function commonStatus($status){

    $out = [
        'text' => 'Inactive',
        'class' => 'bg-warning',
    ];

    if ($status == 1){
        $out = [
            'text' => 'Active',
            'class' => 'bg-success',
        ];
    }

    return $out;
}


function strLimit($string, $length = 200){
    $out = [];
    if(strlen($string) <= $length) {
        $out = [
            'exceeded' => false,
            'string' => $string
        ];
    } else
    {
        $string = substr($string,0,$length) . '...';
        $out = [
            'exceeded' => true,
            'string' => $string
        ];
    }
    return $out;
}


function generateWhatsAppNumber($number){
    $prefix = '0';
    $number = preg_replace('/^' . preg_quote($prefix, '/') . '/', '', $number);
    $number =  '94' . $number;
    return $number;
}

?>
