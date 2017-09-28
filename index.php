<DOCTYPE html>
<html>
<body>
<?php
echo"<h1> welcome to array functions </h1>";
echo "<h2> indexed array</h2>";
 $flowers = array ("aster","marigold","lavender","crocus");
   echo " everyone love "  .  $flowers[2]  .  " and " . $flowers[1] . ".";
    $flowers[0] = " aster";
    $flower[1] = "marigold";
    $flowers[2] = "lavender";
    $flower[3] = " crocus";
   echo '<hr>';
    
    echo "<h2> asort array </h2>";
    $fruits = array ("b"=>" banana " , "c"=>" apple " , "a"=>" orange ");
    arsort($fruits);
    foreach($fruits as $key => $val) 
    { echo "$key = $val\n";
    }
 
    echo '<hr>';

    echo "<h2> sort array </h2>";
    $number = array (4,6,8,12,14,31);
    sort($number);
    $arrlength = count($number);
    for ($x = 0; $x<$arrlength; $x++) {
    echo $number [$x];
    echo "<br>";
    }
   echo '<hr>';
    
    echo "<h2> associative array </h2>";
     $price = array("tires"=>100, "oil"=>10, "spark plugs"=>4 );
     echo "tires's price is " . $price['tires'] . " dollor.";
      echo '<hr>';


      echo"<h2> multidimention array </h2>";
     $shop = array(array ("rose", 1.75 , 18),
                    array ("daisy", 0.79 , 27),
		    array ("orchid", 1.99 , 8),
		    );
         echo $shop[0][0].":price: ". $shop[0][1].", number:
	 ".$shop[0][2].".<br>";
	 echo $shop[1][0].":price: ". $shop[1][1].",
	 number:".$shop[1][2].".<br>";
	 echo $shop[2][0].":price: ". $shop[2][1].", number:"
	 .$shop[2][2].".<br>";

	 echo '<hr>';

	 echo '<h2> array values </h2>';
	 $array = array("size" => "m", "color" => "black");
	 print_r(array_values($array));
	 echo '<hr>';

        
	echo '<h2> delete the last elements of an array </h2>';
	$color = array("yellow","green","blue");
	array_pop ($color);
	print_r($color);

        echo '<hr>';

	echo '<h2> replace the value of the first array with value from
	following array </h2>';
	$a = array("book","pen");
	$b = array("bike","shoes");
	print_r(array_replace($a,$b));
	echo '<hr>';
	
	echo '<h2> returns selected part of an array </h2>';
	$a = array("blue","yellow","red","green");
	print_r(array_slice($a ,1 ));
	echo '<hr>';

	echo '<h2> remove the first elements from array and give the value of
	the removed elements </h2>';
	$number = array("a" => "1" , "b" => "2" , "c" => "3" ,"d" => "4");
	echo array_shift($number). "<br>";
	print_r($number);
	 echo '<hr>';

	echo '<h2> sum of an values </h2>';
	$number = array (2,4,6,8,16);
	echo array_sum($number);
	echo'<hr>';
	
	echo '<h2> compare arrays and return the difference </h2>';
	function myfunction($a,$b)
	{ 
	  if($a===$b)
	  {
	  return 0;
	  }
	  return ($a>$b)?1:-1;
	  }
	  $c = array("a" => "18" ,"b" => "22" , "c" => "25");
	  $d = array("a" => "22" ,"b" => "34" , "c" => "8");
	  $result = array_udiff($c,$d,"myfunction");
	  print_r($result);




?>
 
   </body>
   </html>

