<html>
<head>
<title> Start Square</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }>
</script>
<meta name="keywords" content="Groom ui kit Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndriodCompatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--Google Fonts-->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="countries_dropdown.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
<!-- //end-smoth-scrolling -->

<script src="js/snap.svg-min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
			});
		</script>

<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />


<script>$(document).ready(function(c) {
	$('.box-close').on('click', function(c){
		$('.head-close').fadeOut('slow', function(c){
	  		$('.head-close').remove();
		});
	});	  
});
</script>

<script>$(document).ready(function(c) {
	$('.news-close').on('click', function(c){
		$('.newsletter').fadeOut('slow', function(c){
	  		$('.newsletter').remove();
		});
	});	  
});
</script>

<script>$(document).ready(function(c) {
	$('.log-close').on('click', function(c){
		$('.login').fadeOut('slow', function(c){
	  		$('.login').remove();
		});
	});	  
});
</script>
<script>$(document).ready(function(c) {
	$('.temper-cross').on('click', function(c){
		$('.temper').fadeOut('slow', function(c){
	  		$('.temper').remove();
		});
	});	  
});
</script>

</head>
<body>

<?php include 'validate.php'?>
	<div class="simple-btns">
				<div class="simp-bt3"><a href="index.html">Sign In</a></div>
				<div class="clearfix"> </div>
			</div>

		<div class="logo">
			<a href="#"><img src="images/logo.png" alt=""></a>
		</div>
		
		<!--navgation start here-->
		<div class="top-nav">
			   <!--navgation start here-->
		<div class="top-nav">
			    <span class="menu"> <img src="images/icon.png" alt=""/></span>
			<ul class="res">
				<li><a class="active" href="#home"><i class="home"> </i>Step 1 : Registration</a></li>
				<li><a href="account.html"><i class="flag"> </i>Step 2 : Account SetUp</a></li>
			</ul>
			<!-- script-for-menu -->
						 <script>
						   $( "span.menu" ).click(function() {
							 $( "ul.res" ).slideToggle( 300, function() {
							 // Animation complete.
							  });
							 });
						</script>
		<!-- /script-for-menu -->
		</div>
		<div class="container">
	
<div class="header">
<!--header main start here-->
<div class="header-main">
  
<!--header right start here-->



<!--header right blc-3 start here-->
	  
		   	
			
		   		<div class="col-md-6">
		   		<div class="login">
		   		   <div class="login-top">
		   			 <div class="log-input">
					 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

		   			   <input type="text" name="firstname" placeholder="First Name" value="<?php echo $firstname;?>">
		   			 </div>
					 <div class="log-input">
		   			   <input type="text" name="lastname" placeholder="Last Name" value="<?php echo $lastname;?>">
		   			 </div>
					 <div class="log-input">
		   			   <input type="text" name="email" placeholder="Email Address" value="<?php echo $email;?>">
		   			 </div>
					 <div class="log-input">
		   			   <input type="text" name="username" placeholder="User Name" value="<?php echo $username;?>">
		   			 </div>
					 <div class="log-input1">
					 <span>Enter password</span>
					 </div>
		   			  <div class="log-input">
		   			   <input type="password" value="" name="password">
		   			   <i class="log-pass"> </i>
		   			 </div>
					 <div class="log-input1">
					 <span style="text-align:center;">Re-type password</span>
					 </div>
					 <div class="log-input">
					 <input type="password" value="" name="retype">
		   			   <i class="log-pass"> </i>
					 </div>
					 <!-- Script by hscripts.com -->
					  <div class="log-input1">
					  Country:
					  </div>
					 <div class="log-input1">
						<select name=slist>
						<script language="javascript">
						var states = new Array("Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burma", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Central African Republic", "Chad", "Chile", "China", "Colombia", "Comoros", "Congo, Democratic Republic", "Congo, Republic of the", "Costa Rica", "Cote d'Ivoire", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Fiji", "Finland", "France", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Greenland", "Grenada", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, North", "Korea, South", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Mongolia", "Morocco", "Monaco", "Mozambique", "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Norway", "Oman", "Pakistan", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "Qatar", "Romania", "Russia", "Rwanda", "Samoa", "San Marino", " Sao Tome", "Saudi Arabia", "Senegal", "Serbia and Montenegro", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "Spain", "Sri Lanka", "Sudan", "Suriname", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe");
						for(var hi=0; hi<states.length; hi++)
						document.write("<option value=\""+states[hi]+"\">"+states[hi]+"</option>");
						</script>
						</select>
					</div>
<!-- Script by hscripts.com -->

					   <div class="log-input1">
		   			   <table>
<<<<<<< HEAD
=======
					   <tr>
							<td>Account Type</td>
					   </tr>
					   <tr>
						   <td><input type="radio" name="individual" value="individual">individual</td>
						   <td><input type="radio" name="individual" value="company">company</td>
					   </tr>
					   <tr>
								<td>Display Name:</td>
					   </tr>
					   <tr>
							<td><input type="type" name="Display"></td>
						</tr>
					   <tr>
								<td><input type="checkbox" name="Account" value="individual">Display last initial only.</td>
					   </tr>
>>>>>>> origin/master
					   </table>
		   			 </div>
		   		   </div>
		   		   <div class="login-btn">
		   		   	  <input type="submit" value="Register"> 
		   		   </div>
				   </form>
		   		</div>
	   	  <div class="clearfix"> </div>
	   </div>	
	
	
  <div class="clearfix"> </div>
</div>
</div>
</body>
</html>