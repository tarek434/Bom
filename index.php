<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Simple Web App</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to My Simple Web Application</h1>
        <p>This is a sample PHP-based web application for practicing SBOM generation.</p>

        <form action="submit.php" method="POST">
            <label for="name">Enter your name:</label>
            <input type="text" id="name" name="name" required>
            <button type="submit">Submit</button>
        </form>

        <div id="message"></div>
    </div>

    <script src="script.js"></script>
	<script src="node_modules/jquery/dist/jquery.min.js"></script>
</body>
</html>
