<!DOCTYPE html>
<html>
<head>
    <title>Display Name</title>
</head>
<body>

   <h2>Enter Your Name</h2>
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <input type="submit" value="Submit">
    </form>
<?php
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    echo "<h2>Hello, $name!</h2>";
}
?>
</body>
</html>
