<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    echo "<h2>Hello, $name! Thanks for submitting the form.</h2>";
}
?>
