<?php
namespace App\Library\Pay\Youzan\Open; class Protocol { const SIGN_KEY = 'sign'; const VERSION_KEY = 'v'; const APP_ID_KEY = 'app_id'; const METHOD_KEY = 'method'; const FORMAT_KEY = 'format'; const TOKEN_KEY = 'access_token'; const TIMESTAMP_KEY = 'timestamp'; const SIGN_METHOD_KEY = 'sign_method'; const ALLOWED_DEVIATE_SECONDS = 600; const ERR_SYSTEM = -1; const ERR_INVALID_APP_ID = 40001; const ERR_INVALID_APP = 40002; const ERR_INVALID_TIMESTAMP = 40003; const ERR_EMPTY_SIGNATURE = 40004; const ERR_INVALID_SIGNATURE = 40005; const ERR_INVALID_METHOD_NAME = 40006; const ERR_INVALID_METHOD = 40007; const ERR_INVALID_TEAM = 40008; const ERR_PARAMETER = 41000; const ERR_LOGIC = 50000; public static function sign($sp900996, $sp342eea, $spb769a1 = 'md5') { if (!is_array($sp342eea)) { $sp342eea = array(); } ksort($sp342eea); $spcce599 = ''; foreach ($sp342eea as $sp783862 => $spce84f3) { $spcce599 .= $sp783862 . $spce84f3; } return self::hash($spb769a1, $sp900996 . $spcce599 . $sp900996); } private static function hash($spb769a1, $spcce599) { switch ($spb769a1) { case 'md5': default: $spa9d06c = md5($spcce599); break; } return $spa9d06c; } public static function allowedSignMethods() { return array('md5'); } public static function allowedFormat() { return array('json'); } }