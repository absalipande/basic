<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

// Test with hardcoded values first
$config = [
    'dsn' => 'pgsql:host=localhost;port=5432;dbname=yii2basic',
    'username' => 'postgres',
    'password' => 'qwerty',
    'charset' => 'utf8',
];

try {
    echo "Attempting to connect to database...\n";
    echo "Configuration details:\n";
    echo "DSN: " . $config['dsn'] . "\n";
    echo "Username: [HIDDEN]\n";
    echo "Password: [HIDDEN]\n";
    
    $db = new yii\db\Connection($config);
    $db->open();
    echo "Database connection successful!\n";
    $db->close();
} catch (\Exception $e) {
    echo "Connection failed: " . $e->getMessage() . "\n";
    echo "Error details: " . $e->getTraceAsString() . "\n";
} 