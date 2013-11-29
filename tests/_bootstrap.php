<?php


defined('DS') or define('DS', DIRECTORY_SEPARATOR);
defined('YII_ENABLE_EXCEPTION_HANDLER') or define('YII_ENABLE_EXCEPTION_HANDLER', false);
defined('YII_ENABLE_ERROR_HANDLER') or define('YII_ENABLE_ERROR_HANDLER', false);
defined('YII_DEBUG') or define('YII_DEBUG', true);

$_SERVER['SCRIPT_NAME']     = '/' . basename(__FILE__);
$_SERVER['SCRIPT_FILENAME'] = __FILE__;

defined('ROOT') or define('ROOT', realpath(__DIR__.DS.'..'));
require_once ROOT.'/vendor/autoload.php';
require ROOT. '/vendor/yiisoft/yii2/yii/Yii.php';

$app = new \yii\web\Application([
    'id'       => 'cookie-app',
    'basePath' => __DIR__,
    'components' => [
        'request' => [
            'enableCookieValidation' => false,
        ],
    ],
]);