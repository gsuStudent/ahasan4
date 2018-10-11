<?php
date_default_timezone_set('US/Eastern');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Calendar</title>
  <link rel="stylesheet" type="text/css" href="hw4.css">
</head>
<body>
  <div class="container">
   <h1 class="today"> Today is <?php echo date("m-d-Y")?></h1>

  <h1 class="today">The CURRENT TIME IS <?php echo date('h:i A');?><h1>
  <h1 class="today">The CURRENT DAY IS <?php echo date('l');?><h1>

    <form method="POST" action="hw4.php">
    <input type="submit" name="Randomize" value="Randomize" class="button">
    </form>

	<table style="border-collapse: collapse">
		<?php
		$x='h:00';
    

function get_hour_string($x){
  $hours_to_show=12;
  if (isset($_POST['Randomize'])){
 $hours_to_show=rand(0,12);
}
  $set=date("a");
for($i=0;$i<=$hours_to_show;$i++){
  $color="";
  if($i%2==0){
    $color='#BCE4FE';
  }
  else{
    $color='#86cefd';
  }
echo "<tr>";
echo "<td bgcolor=$color width=200 height=50 style=border:none>";
  if($i==0){
      if(date("a")=="am"){
              echo date($x)."am";
              echo"<br>";
            }
      if(date("a")=="pm"){
              echo date($x)."pm";
              echo"<br>";
            }
    }
 
    else{
   $time = date($x, strtotime($time.'+ 1 hour '));
          if($time==12&&date('a')=="am"){
                      $set="pm";
                    }
          if($time==12&&date('a')=="pm"){
                      $set="am";
                    }
   echo $time."".$set;
  echo "<br>";
            }
         echo"</td>";
         echo"<td width=200 bgcolor=$color height=50 style=border:none>";
           if($i==0){
            echo "John is available";
           }
           echo "</td>";
         echo"<td width=200 bgcolor=$color height=50 style=border:none>";
         if($i==4){
            echo "Mary is available";
           }
         echo"</td>";
         echo"<td width=200 bgcolor=$color height=50 style=border:none>";
          if($i==6){
            echo "Bob is available";
           }
         echo "</td>";

         
    echo "</tr>";
 
}

}

get_hour_string($x);

		?>
	</table>
  
  </div>
  <a href="hw4_1.php">Part 1</a>
<br>
<a href="http://codd.cs.gsu.edu/~ahasan4/index.html">Home Page Link</a>
</body>
</html>