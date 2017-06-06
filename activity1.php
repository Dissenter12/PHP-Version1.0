<!DOCTYPE html>
<html>
<head>
	<title>Eto na!</title>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<body>

	<?php  
	$name1 = array('kevin','ray','mavs','pids','mark');
	$name2 = array('jograd','roberto','gaguar','number51','pedro');

	echo "<ul>
			<li>$name1[0]</li>
			<li>$name1[1]</li>
			<li>$name1[2]</li>
			<li>$name1[3]</li>
			<li>$name1[4]</li>
		</ul>";
	echo "<br>";
	echo "<ul>
			<li class='name2'>".$name2[0]."</li>
			<li>".$name2[1]."</li>
			<li>".$name2[2]."</li>
			<li>".$name2[3]."</li>
			<li>".$name2[4]."</li>
		</ul>";

		$string = "the lazy brown fox jumps over the lazy daug!";

		echo strtoupper($string)."<hr>";
		echo strtolower($string)."<hr>";
		echo ucfirst($string)."<hr>";
		echo ucwords($string)."<hr>";

		echo strpos($string, 'o');
		echo ucwords($string)."<hr>";
		echo strrev($string);
		echo ucwords($string)."<hr>";

		
		$lower = strtolower($string);
		echo $lower;
		echo "<br>";
		$reversed = strrev($lower);

		echo $reversed;
		echo "<br>";
		if ($lower == $reversed){
				echo "palindrome";
		}
		else {
			echo "not a palindrome";
		}
		echo "<hr>";

		$asan = strpos($string, "brown");
		echo substr($string, $asan);

		echo "<hr>";

		$asan = strpos($string, "brown fox");
		echo substr($string,0,$asan);
		echo "quick ".substr($string,$asan);
		
		echo "<hr>";

		$a = 3;
		$b = 4;
		//find the other side of the triangle
		//formula is square root of a2 + b2 = c
				
		echo $c = sqrt($a*$a + $b*$b);
		// or $c = sqrt(pow($a,2)+pow($b,2));
		echo "<hr>";

		$a = 4;
		$b = 3;
		echo "A = ".$a."<br>";
		echo "B = ".$b."<br>";
		echo "A + B = ".$c = $a+$b."<br>";
		echo "A - B = ".$c = $a-$b."<br>";
		echo "A * B = ".$c = $a*$b."<br>";
		echo "A / B = ".$c = $a/$b."<br>";
		echo "A % B = ".$c = $a%$b."<br>";
		echo "++B = ".$c = ++$b."<br>";
		echo "--A = ".$c = --$a."<br>";

		echo "<hr>";
		$a = 4;
		$b = 3;

		echo "a = ".$a = $b."<br>";
		$a = 4;
		$b = 3;
		echo "b = ".$b = $a ."<br>";
		//or $c=$a; $a=$b; $b=$c;
		echo "<hr>";

		$colors = array(85,90,90,95,80,100);

		echo array_sum($colors);
		$sum = array_sum($colors);
		echo "<br>";
		echo count($colors);
		echo "<br>";
		$num = count($colors);
		$ave = $sum / $num;
		echo $ave;
echo "<hr>";
		$a = 5;
		$b= $a%2;
		if ($a%2 == 0){
			echo "even multiple of 3";
		}elseif ($b != 0 AND $a%3 == 0) {
			echo "not a multiple of 3";
		}
		else {
			echo $b."<br>";
			echo"odd";
		}
echo "<hr>";
		echo "<form>
  				<input type='value' name='a' min='1' max='7'>
  				
  			</form>";
		$a = $_GET['a'];

		if ($a%7 == 1){
			echo "Monday <br>";
		}
		else if ($a%7 == 2){
			echo "Tuesday <br>";
		}
		else if ($a%7 == 3){
			echo "Wednesday <br>";
		}
		else if ($a%7 == 4){
			echo "Thor's Day <br>";
		}
		else if ($a%7 == 5){
			echo "Friday <br>";
		}
		else if ($a%7 == 6){
			echo "Saturday <br>";
		}
		else if ($a%7 == 0){
			echo "Sunday <br>";
		}
		// else{
		// 	echo "Monday <br>";
		// }


	?>
		                          <ul>
			<li class="name2"><?php echo $name1[0]; ?></li>
			<li class="name2"><?php echo $name1[1]; ?></li>
			<li class="name2"><?php echo $name1[2]; ?></li>
			<li class="name2"><?php echo $name1[3]; ?></li>
			<li class="name2"><?php echo $name1[4]; ?></li>
		</ul>

<script type="text/javascript">
	$('.name2').click( function(){
			$('.name2').animate({
				opacity: '0.6',
				color: 'blue',
				fontsize: '50',
				height: 'toggle'
			},3000);
		});


</script>
</body>
</html>