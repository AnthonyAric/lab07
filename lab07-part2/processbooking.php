<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>
    <?php
        if (isset($_POST['firstname'])) {
            echo "<p>Welcome " . $_POST['firstname'] . " " . $_POST['lastname'] . "!</p>";
        }

        $tours = array();
        if (isset($_POST['4day'])) {
            $tours[] = "Four-day tour";
        }
        if (isset($_POST['10day'])) {
            $tours[] = "Ten-day tour";
        }
        if (count($tours) > 0) {
            echo "<p>You are now booked on the " . implode(" and ", $tours) . "</p>";
        }

        if (isset($_POST['species'])) {
            echo "<p>Species: " . $_POST['species'] . "</p>";
        }
        if (isset($_POST['age'])) {
            echo "<p>Age: " . $_POST['age'] . "</p>";
        }
        if (isset($_POST['accom'])) {
            echo "<p>Accommodation: " . $_POST['accom'] . "</p>";
        }
        if (isset($_POST['food'])) {
            echo "<p>Menu preference: " . $_POST['food'] . "</p>";
        }
        if (isset($_POST['bookday'])) {
            echo "<p>Date: " . $_POST['bookday'] . "</p>";
        }
        if (isset($_POST['partysize'])) {
            echo "<p>Number of travellers: " . $_POST['partysize'] . "</p>";
        }
    ?>
</body>
</html>