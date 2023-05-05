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