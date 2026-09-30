<?php
$name = htmlspecialchars($_GET['name'] ?? '');
$email = htmlspecialchars($_GET['email'] ?? '');
$message = htmlspecialchars($_GET['message'] ?? '');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <p><a href="index.html">Back to Home</a></p>
        <p><a href="form.html">Back to Form</a></p>

        <h1>Form Submission Results</h1>

        <div id="result">
            <p><strong>Name:</strong> <?php echo $name; ?></p>
            <p><strong>Email:</strong> <?php echo $email; ?></p>
            <p><strong>Message:</strong> <?php echo $message; ?></p>
        </div>
    </div>
</body>

</html>