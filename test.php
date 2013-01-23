<?php
echo "hi <br /> <p>inside the quotes</p>";
echo "hello world";

// variables! Comments denote PHP data types
$x = 5;		// integer
$y = 10;	// integer
$z = 25;	//float
$xyz = "This is a string.";      // string

$abc = array('apple', 'orange', 'banana', 'grapefruit');  //numerically indexed array
$more_food = array('meat' => 'steak', 'veggies' => 'carrots', 'dairy' => 'ice-cream', 'servings' => 3);  // associative array

?>
<div id="my-page">
	<?php if (!empty($x)) { ?>
		<p>More stuff - <?php echo $x; ?></p>
	<?php } ?>
</div>








