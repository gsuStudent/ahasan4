<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>

	<div>
	<div class="formstyle">
	<form method=post action=hw4pro.php>
		<h1>Contact Us For More Info</h1>
		<p><input type="text" name="name" placeholder="First Name" id="fname"></p>
		<p><input type="text" name="lastname" placeholder="Last Name" id="lname"></p>
        <p><input type="text" name="address" placeholder="Address" id="add"></p>
		<p><input type="text" name="phone" placeholder="Phone Number" id="phonen"></p>
		<p><input type="text" name="email" placeholder="Email" id="ema"></p>
		
		<p>
		<select name="textsize" id="fsize">
		<option disabled="" selected="" value="0" class="ff">Font Size</option>
        <option value="onefifty">150%</option>
        <option value="twohundo">200%</option>
        <option value="twofifty">250%</option>
        <option value="threehundo">300%</option>
        </select>
		</p>
		<p>
		<select name="textstyle" id="fstyle">
		<option disabled="" selected="" value="0" class="ff">Font Style</option>
        <option value="south">Georgia Text</option>
        <option value="grande">Arial Text</option>
        <option value="postman">Courier Text</option>
        <option value="mexico">Palatino Text</option>
        </select>
		</p>
		<p>
		<select name="textcolor" id="fcolor">
		<option disabled="" selected="" value="0" class="ff">Font Color</option>
        <option value="ojsimpson">Orange</option>
        <option value="bluejay">Blue</option>
        <option value="pussycat">Purple</option>
        <option value="yazid">Yellow</option>
        </select>
		</p>
		<p>
			<textarea placeholder="Your FeedBack" rows="15" cols=60" id="text" name="area"></textarea>
				
			
		</p>

    <button type="submit" id="btn">Submit</button>
     <button type="reset" id="btn1">Reset</button>
     </form>
</div>
</div>

</body>
<a href="hw4.php">Part 2</a>
<br>
<a href="http://codd.cs.gsu.edu/~ahasan4/index.html">Home Page Link</a>
</html>