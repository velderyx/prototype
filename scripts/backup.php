<?php

$dbName = getenv('DB_DATABASE');
$username = getenv('DB_USERNAME');
$password = getenv('DB_PASSWORD');
$host = getenv('DB_HOST');
$backupPath = __DIR__ . '/../storage/backups/' . date('Y-m-d_H-i-s') . '_backup.sql';

$command = "mysqldump --user={$username} --password={$password} --host={$host} {$dbName} > {$backupPath}";

exec($command, $output, $returnVar);

if ($returnVar !== 0) {
    echo 'The backup process failed.' . PHP_EOL;
    exit(1);
}

echo 'The backup has been created successfully.' . PHP_EOL;
