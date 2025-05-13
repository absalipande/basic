<?php
$localConfig = [];
if (file_exists(__DIR__ . '/db-local.php')) {
    $localConfig = require __DIR__ . '/db-local.php';
}

return [
    'class' => 'yii\db\Connection',
    'dsn' => $localConfig['dsn'] ?? 'pgsql:host=localhost;port=5432;dbname=yii2basic',
    'username' => $localConfig['username'] ?? 'postgres',
    'password' => $localConfig['password'] ?? '',
    'charset' => $localConfig['charset'] ?? 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
