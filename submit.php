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
    <title>Form Submission Results</title>
    <link rel="stylesheet" href="styles.css?v=2">
</head>

<body>

    <nav class="navbar">
        <div class="nav-brand">SEBASS</div>

        <div class="nav-links">
            <a href="index.html">Home</a>
            <a href="form.html">Contact</a>
            <button id="dorkToggle" class="dork-button">&#129299; Dork Mode</button>
        </div>
    </nav>

    <main class="form-wrapper">

        <div class="form-card">

            <p class="section-label">SUCCESS</p>
            <h1>Message Submitted</h1>

            <p>
                Your form data was successfully sent to the PHP page.
            </p>

            <div class="result-row">
                <div class="result-label">Name</div>
                <div><?php echo $name; ?></div>
            </div>

            <div class="result-row">
                <div class="result-label">Email</div>
                <div><?php echo $email; ?></div>
            </div>

            <div class="result-row">
                <div class="result-label">Message</div>
                <div><?php echo nl2br($message); ?></div>
            </div>

            <div class="form-actions">

                <a class="button primary-button" href="form.html">
                    Send Another Message
                </a>

                <a class="button secondary-button" href="index.html">
                    Back Home
                </a>

            </div>

        </div>

    </main>

    <footer>
        <p>CS333 Lab 1 &bull; Sebastian Echeverria</p>
    </footer>

    <script>
        const dorkToggle = document.getElementById("dorkToggle");

        if (localStorage.getItem("dorkMode") === "on") {
            document.body.classList.add("dork-mode");
            dorkToggle.textContent = "Normal Mode";
        }

        dorkToggle.addEventListener("click", function () {
            document.body.classList.toggle("dork-mode");

            if (document.body.classList.contains("dork-mode")) {
                localStorage.setItem("dorkMode", "on");
                dorkToggle.textContent = "Normal Mode";
            } else {
                localStorage.setItem("dorkMode", "off");
                dorkToggle.textContent = "Dork Mode";
            }
        });
    </script>

</body>
</html>