<!DOCTYPE html>
<html>
<head>
    <title>Circle Calculator</title>
</head>
<body>
    <h2>Circle Calculator</h2>
    <form method="post" action="">
        <label for="radius">Radius:</label>
        <input type="number" id="radius" name="radius" step="0.01" required>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $radius = $_POST['radius'];

        if ($radius > 0) {
            $circumference = 2 * pi() * $radius;
            $area = pi() * pow($radius, 2);
            $volume = (4/3) * pi() * pow($radius, 3);

            echo "<h3>Results:</h3>";
            echo "Circumference: " . number_format($circumference, 2) . " units<br>";
            echo "Area: " . number_format($area, 2) . " square units<br>";
            echo "Volume: " . number_format($volume, 2) . " cubic units<br>";
        } else {
            echo "<p>Please enter a positive radius.</p>";
        }
    }
    ?>
</body>
</html>
