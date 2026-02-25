<?php
// 1. Include the Composer Autoloader
require 'vendor/autoload.php';

try {
    // 2. Connect to MongoDB
    $client = new MongoDB\Client("mongodb://localhost:27017");

    // 3. Select a database and collection
    $collection = $client->sudoschool_db->users;

    // 4. Insert a test document
    $insertResult = $collection->insertOne([
        'username' => 'raj-kumar',
        'role' => 'admin',
        'setup_date' => date('Y-m-d H:i:s')
    ]);

    echo "<h3>Success!</h3>";
    echo "Inserted ID: " . $insertResult->getInsertedId() . "<br>";

    // 5. Retrieve the document to verify
    $user = $collection->findOne(['username' => 'raj-kumar']);
    echo "Retrieved User: " . $user['username'];

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
