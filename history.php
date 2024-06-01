<?php
$userId = $_COOKIE['userid'] ?? '';

if ($userId && file_exists("History/$userId.json")) {
    $data = json_decode(file_get_contents("History/$userId.json"), true);
} else {
    $data = [];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload History</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000;
            color: #fff;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .container {
            background-color: rgba(0, 0, 0, 0.8);
            padding: 20px;
            border-radius: 10px;
            max-width: 800px;
            width: 100%;
            box-shadow: 0 0 15px #00f;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            color: #00f;
        }

        .image-container {
            margin-bottom: 20px;
            animation: fadeIn 1s ease-in-out;
        }

        .image {
            max-width: 100%;
            max-height: 300px;
            border: 2px solid #00f;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        p {
            word-wrap: break-word;
            margin: 0;
            color: #ccc;
        }

        .separator {
            width: 100%;
            height: 1px;
            background-color: #333;
            margin: 20px 0;
        }

        a {
            color: #00f;
            text-decoration: none;
            padding: 10px 20px;
            border: 1px solid #00f;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        a:hover {
            background-color: #00f;
            color: #000;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Your Upload History</h2>
        <?php if (!empty($data)): ?>
            <?php foreach ($data as $imageUrl): ?>
                <div class="image-container">
                    <img src="<?php echo htmlspecialchars($imageUrl); ?>" alt="Uploaded Image" class="image">
                    <p><?php echo htmlspecialchars($imageUrl); ?></p>
                </div>
                <div class="separator"></div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No images uploaded yet.</p>
        <?php endif; ?>
        <a href="index.php">Go Back</a>
    </div>
</body>
</html>