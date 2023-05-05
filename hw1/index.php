<html>
    <head>
        <title>Hw2</title>
        <style type="text/css">
            .circle {
                position: absolute;
                border-radius: 50%;
            }
        </style>
    </head>
    <body>
        <!-- <h1>Task 2</h1>
        <?php
        $array = [];
        for ($i = 0; $i < 20; $i++) {
            $array[] = rand(-20, 20);
        }

        echo "Масив: " . implode(", ", $array) . "<br>";
        
        $even = [];
        $odd = [];
        foreach ($array as $number) {
            if ($number % 2 === 0) {
                $even[] = $number;
            } else {
                $odd[] = $number;
            }
        }
        echo "Парні: " . implode(", ", $even) . "<br>";
        echo "Непарні: " . implode(", ", $odd) . "<br>";
        
        $max = max($array);
        $min = min($array);
        echo "Максимальний елемент: $max<br>";
        echo "Мінімальний елемент: $min<br>";
        
        sort($array);
        echo "Масив (відсортований за зростанням): " . implode(", ", $array) . "<br>";
        ?> -->
        <!-- <h1>Task 3</h1>
        <?php
        $numbers = array();
        for ($i = 0; $i < 50; $i++) {
            $numbers[] = rand(1, 20);
        }

        echo "Масив: ";
        echo implode(", ", $numbers);
        echo "<br>";

        echo "<table>";
        echo "<tr><th>Значення</th><th>Кількість</th></tr>";

        $counts = array_count_values($numbers);

        for ($i = 1; $i <= 20; $i++) {
            if (!isset($counts[$i])) {
                $bg_color = "gray";
                $text_color = "white";
            } elseif ($counts[$i] <= 3) {
                $bg_color = "blue";
                $text_color = "green";
            } else {
                $bg_color = "black";
                $text_color = "red";
            }

            echo "<tr style='background-color: $bg_color; color: $text_color;'>";
            echo "<td>$i</td><td>" . (isset($counts[$i]) ? $counts[$i] : 0) . "</td>";
            echo "</tr>";
        }

        echo "</table>";
        ?> -->
        <!-- <h1>Task 4</h1>
        <?php
        $countries = array("Україна", "Росія", "США", "Китай", "Іспанія", "Німеччина", "Франція", "Італія", "Канада");

        echo "<select>";
        foreach ($countries as $country) {
            echo "<option value='$country'>$country</option>";
        }
        echo "</select>";        
        ?> -->
        <!-- <h1>Task 5</h1>
        <?php
        for ($i=0; $i<50; $i++) {
			$size = rand(10, 50); 
			$red = rand(0, 255); 
			$green = rand(0, 255);
			$blue = rand(0, 255);
			$left = rand(0, 1800);
			$top = rand(0, 900);
			echo "<div class='circle' style='width:{$size}px;height:{$size}px;background-color:rgb({$red},{$green},{$blue});left:{$left}px;top:{$top}px;'></div>";
		} 
        ?> -->
        <h1>Task 6</h1>
        <?php
        $today = date("d-m-Y");

        $month = date("m");
        $year = date("Y");
        $days_in_month = cal_days_in_month(CAL_GREGORIAN, $month, $year);
        $first_day = mktime(0, 0, 0, $month, 1, $year);
        $first_day_weekday = date("N", $first_day);

        echo "<h2>Календар на " . date("F Y") . "</h2>";

        echo "<table>";
        echo "<tr><th>Пн</th><th>Вт</th><th>Ср</th><th>Чт</th><th>Пт</th><th style='color:red;'>Сб</th><th style='color:red;'>Нд</th></tr>";

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
        <!-- <h1>Task 7</h1>
        <?php
        $data = [
            [
                'image' => 'https://via.placeholder.com/150',
                'title' => 'Title 1',
            ],
            [
                'image' => 'https://via.placeholder.com/150',
                'title' => 'Title 2',
            ],
            [
                'image' => 'https://via.placeholder.com/150',
                'title' => 'Title 3',
            ],
            [
                'image' => 'https://via.placeholder.com/150',
                'title' => 'Title 4',
            ],
            [
                'image' => 'https://via.placeholder.com/150',
                'title' => 'Title 5',
            ],
            [
                'image' => 'https://via.placeholder.com/150',
                'title' => 'Title 6',
            ],
            [
                'image' => 'https://via.placeholder.com/150',
                'title' => 'Title 7',
            ],
            [
                'image' => 'https://via.placeholder.com/150',
                'title' => 'Title 8',
            ],
            [
                'image' => 'https://via.placeholder.com/150',
                'title' => 'Title 9',
            ],
            [
                'image' => 'https://via.placeholder.com/150',
                'title' => 'Title 10'
            ],
        ];

        echo '<table>';
        $i = 0;
        foreach ($data as $item) {
            if ($i % 5 == 0) {
                echo '<tr>';
            }

            echo '<td>';
            echo '<img src="' . $item['image'] . '" width="150">';
            echo '<div>' . $item['title'] . '</div>';
            echo '</td>';
        
            if ($i % 5 == 4) {
                echo '</tr>';
            }
            $i++;
        }
        
        echo '</table>';
        ?> -->
    </body>
</html>
