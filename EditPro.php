<html>
<head>
<title>EditPro</title>
<style> 
#borderimg { 
    border: 20px solid transparent;
    padding: 15px;
    border-image: url(galaxy.jpg) 30 stretch;
}
body{
	background-color:rgb(255,247,250);
}
#para1{
	padding-right:100px;
	font-size:17px;
}
#para{
	font-size:22px;
}
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
<script>
function Add(){
	document.getElementById('Add').innerHTML="<textarea rows='10' cols='90'></textarea>";
}
function OTP(){
	alert(Math.floor((Math.random() * 10000) + 1));
}
</script>
</head>
<body>
<div id="borderimg">
<form method="post" action="">
<p style="font-size:37px; color:rgb(210,0,105); text-shadow: 0 0 8px white,0 0 2px black"><b><i>Edit your profile so we can help choose better options for you !!!</i></b></p>
<fieldset>
<p id="para">Select your preferences of fashion and get the best that suits you</p><br>
<input type="checkbox" name="western" value="Western"/><span id="para1">Western</span>
<input type="checkbox" name="traditional" value="Traditional"/><span id="para1">Traditional</span>
<input type="checkbox" name="hangout" value="Hangout"/><span id="para1">Hang Out</span>
<input type="checkbox" name="denim" value="Denim"/><span id="para1">Denim</span>
<input type="checkbox" name="denim" value="Denim"/><span id="para1">Printed</span><br><br>
<input type="checkbox" name="denim" value="Denim"/><span id="para1">Floral</span>
<input type="checkbox" name="denim" value="Denim"/><span id="para1">Bell-sleeved</span>
<input type="checkbox" name="denim" value="Denim"/><span id="para1">Sarees</span>
<input type="checkbox" name="denim" value="Denim"/><span id="para1">Overcoats</span>
<input type="checkbox" name="denim" value="Denim"/><span id="para1">Lavender</span><br><br>
<input type="checkbox" name="denim" value="Denim"/><span id="para1">Kurtas</span>
<input type="checkbox" name="denim" value="Denim"/><span id="para1">Trousers</span>
<input type="checkbox" name="denim" value="Denim"/><span id="para1">Shirts</span>
<input type="checkbox" name="denim" value="Denim"/><span id="para1">Blazers</span><br><br>
<input type="checkbox" name="denim" value="Denim"/><span id="para1">Polo tshirts</span>
<input type="checkbox" name="denim" value="Denim"/><span id="para1">Casuals</span>
<input type="checkbox" name="denim" value="Denim"/><span id="para1">Formals</span>
<input type="checkbox" name="denim" value="Denim"/><span id="para1">Indian</span>
<input type="checkbox" name="denim" value="Denim"/><span id="para1">Fusion</span><br><br>
<input type="checkbox" name="denim" value="Denim"/><span id="para1">Vero Moda</span>
<input type="checkbox" name="denim" value="Denim"/><span id="para1">Lifestyle</span>
<input type="checkbox" name="denim" value="Denim"/><span id="para1">Lavender</span>
<input type="checkbox" name="denim" value="Denim"/><span id="para1">Brand Factory</span>
<input type="checkbox" name="denim" value="Denim"/><span id="para1">Nike</span><br><br>
<input type="checkbox" name="denim" value="Denim"/><span id="para1">Levi's</span>
<input type="checkbox" name="denim" value="Denim"/><span id="para1">Prada</span>
</fieldset><br><br>
<fieldset>
<p id="para">Change the delivery location</p><br>
<textarea cols="90" rows="10" name="address"></textarea><br><br>
<b>You can also add an alternate delivery location :</b><button type="button" onclick="Add()" style="font-size:15px; margin-left:25px">Add +</button>
<p id="Add"></p>
</fieldset><br><br>
<p id="para">Turn on the notifications to keep updated with the latest trends and fashion.</p>
<div style="font-size:20px; float:left; padding-right:30px; font-style:italic">Turn on the notifications?</div>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label><br><br>
<fieldset style="background-color:rgba(192,192,192,0.3)">
	<div >
	Choose your payment option : 
	<input type="radio" name="payment" value="payment">Credit card
	<input type="radio" name="payment" value="payment">Debit card<br><br>
	Enter your name:<br><br>
	<input type="text" name="name"><br><br>
	Enter your Account/Credit/Debit Card number :<br><br>
	<input type="text" name="credit"><br><br>
	Enter your mobile number to get an OTP :<br><br>
	<input type="tel" name="tel"><br><br>
	<button type="button" onclick="OTP()" style="background-color:#2196F3; width:85px; height:33px; float:left; color:white; border-radius:5px;">Send OTP</button>
	<button type="button" onclick="OTP()" style="background-color:#2196F3; width:85px; height:33px; color:white; margin-left:10px; border-radius:5px;">Resend OTP</button><br><br>
	Enter the expiry details of your card :<br><br>
	<select value="Expiry MM">
	<option>January</option>
	<option>February</option>
	<option>March</option>
	<option>April</option>
	<option>May</option>
	<option>June</option>
	<option>July</option>
	<option>August</option>
	<option>September</option>
	<option>October</option>
	<option>November</option>
	<option>December</option>
	</select>
	<input type="text" value="Expiry YY"><br><br>
	</div>
</fieldset>
<br>Sign in with a different account :<button type="button" style="background-color:#2196F3; width:85px; height:33px; margin-left:10px; border-radius:5px;"><a href="Shopping.php" style=" color:white; text-decoration:none">Sign Up</a></button><br><br>
<br>Log Out :<button type="button" onclick="logout()" style="background-color:#2196F3; width:85px; height:33px; margin-left:10px; border-radius:5px; color:white;">Log Out</button><br><br>
<br><input type="submit" style="width:85px; height:33px; background-color:rgb(40,255,40); border-radius:5px; color:white" value="Confirm"/>
<input type="reset" value="Clear" style="width:85px; height:33px; background-color:rgb(40,255,40); border-radius:5px; color:white; margin-left:10px"/>
</form>
</div>
</body>
</html>