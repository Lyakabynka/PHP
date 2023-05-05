<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        $countries = ['Україна', 'США', 'Канада', 'Німеччина', 'Іспанія', 'Франція', 'Італія', 'Великобританія'];

        function search_countries($keyword) {
            global $countries;
            if ($keyword == '') {
                return $countries;
            } else {
                $matching_countries = [];
                foreach ($countries as $country) {
                    if (stripos($country, $keyword) !== false) {
                        $matching_countries[] = $country;
                    }
                }
                return $matching_countries;
            }
        }
    ?>
</head>
<body>
    <?php
        $_GET['year'];
        $_GET['month'];
    ?><?php

    $month = $_GET['month'];
    $year = $_GET['year'];
    $days_in_month = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    $first_day = mktime(0, 0, 0, $month, 1, $year);
    $first_day_weekday = date("N", $first_day);

    echo "<h2>Календар на " . $month . "." . $year . "</h2>";

    echo "<table>";
    echo "<tr><th>Mo</th><th>Tu</th><th>Wd</th><th>Th</th><th>Fr</th><th style='color:red;'>Sa</th><th style='color:red;'>Su</th></tr>";

    $day_count = 1;
    echo "<tr>";
    for ($i = 1; $i < $first_day_weekday; $i++) {
    echo "<td></td>";
    }
    while ($day_count <= $days_in_month) {
    for ($i = $first_day_weekday; $i <= 7; $i++) {
        if ($day_count > $days_in_month) {
        break;
        }
        if ($i == 6 || $i == 7) {
        echo "<td style='color:red;'>$day_count</td>";
        } else {
        echo "<td>$day_count</td>";
        }
        $day_count++;
    }
    if ($day_count <= $days_in_month) {
        echo "</tr><tr>";
    }
    $first_day_weekday = 1;
    }
    echo "</tr>";
    echo "</table>";
    
    ?>

    <form method="POST">
		<label for="search">Search:</label>
		<input type="text" id="search" name="search">
		<button type="submit">Search</button>
	</form>

    <?php
        if (isset($_POST['search'])) {
            $keyword = $_POST['search'];
            $matching_countries = search_countries($keyword);
        } else {
            $matching_countries = $countries;
        }
	?>

    <ul>
		<?php foreach ($matching_countries as $country): ?>
			<li><?php echo $country; ?></li>
		<?php endforeach; ?>
	</ul>
</body>
</html>