<?php
require_once("C:/xampp/php_7_2_34/vendor/kissdigital-com/apple-sign-in-client-secret-generator/src/ClientSecret.php");
use Kissdigitalcom\AppleSignIn\ClientSecret;

function includeIfExists($file)
{
    if (file_exists($file)) {
        return include $file;
    }
}

includeIfExists(__DIR__.'/vendor/autoload.php');

$clientId = 'com.theginsystem.TutorMatchingService';
$teamId   = 'teamId';
$keyId    = 'keyId';
$certPath = 'certPath' . '/AuthKey_.p8';

$clientSecret = new ClientSecret($clientId, $teamId, $keyId, $certPath);

echo $clientSecret->generate();