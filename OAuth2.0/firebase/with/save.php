<?php
require __DIR__ . '/../../../vendor/autoload.php';

use Google\Cloud\Firestore\FirestoreClient;

try {
    $firestore = new FirestoreClient([
        'keyFilePath' => __DIR__ . '/service-account.json',
        'projectId' => 'sudoschool-46dbb',
        // This forces the client to use REST and points it to the correct endpoint
        'transport' => 'rest',
        'apiEndpoint' => 'firestore.googleapis.com' 
    ]);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = [
            'name' => $_POST['name'] ?? 'Anonymous',
            'email' => $_POST['email'] ?? 'No Email',
            'created_at' => new \DateTime()
        ];

        $docRef = $firestore->collection('students')->add($data);
        echo "Successfully saved with ID: " . $docRef->id();
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Firestore Test</title>
</head>
<body>
    <?php if ($message): ?>
        <p style="color: blue;"><strong>Status:</strong> <?php echo $message; ?></p>
    <?php endif; ?>

    <form action="" method="POST"> <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <button type="submit">Save to Firestore</button>
    </form>
</body>
</html>