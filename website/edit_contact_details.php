<!DOCTYPE HTML>
<?php
$myFile=fopen("mydata.txt","r") or exit("Can’t open file!");
// read each line of text from the text file
$lastname = fgets($myFile);
$firstname = fgets($myFile);
$address01 = fgets($myFile);
$address02 = fgets($myFile);
$town = fgets($myFile);
$postcode = fgets($myFile);
$telephone = fgets($myFile);
$email = fgets($myFile);
fclose($myFile);
?>
<html>
	<head>
		<title>Generic - Alpha by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1><a href="index.html">Edit Contact</a> by Samuel Sarginson</h1>
					<nav id="nav">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li>
								<a href="#" class="icon fa-angle-down">Layouts</a>
								<ul>
									<li><a href="screen.html">P2 System Checker</a></li>
									<li><a href="upload.html">P3 File Handling</a></li>
                                    <li><a href="#">P5 Guest Book</a></li>
									<li><a href="create_contact.html">M2 Edit Text File</a></li>
                                    <li><a href="#"></a>M4 Error Handling</li>
									<li><a href="#">D2 Web Stats</a></li>
									<li>
										<a href="#">Submenu</a>
										<ul>
											<li><a href="#">Option One</a></li>
											<li><a href="#">Option Two</a></li>
											<li><a href="#">Option Three</a></li>
											<li><a href="#">Option Four</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="loginpage.php" class="button">Sign Up</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<section id="main" class="container">
                    <h1>My Contact Details</h1>
                    <p>
                    The contact details on file are as shown below.<br>
                    Edit the data and save your changes to file.
                    </p>
                    <form action="save_contact_details.php" method="post">
                    <table>
                    <tr>
                    <td align="right">Last name: </td><td>
                    <?php echo "<input size=\"20\" type=\"text\" name=\"lastname\" value=\"$lastname\">"?>
                    </td>
                    </tr>
                    <tr>
                    <td align="right">First name: </td><td>
                    <?php echo "<input size=\"20\" type=\"text\" name=\"firstname\" value=\"$firstname\">"?>
                    </tr>
                    <tr>
                    <td align="right">Address 01: </td><td>
                    <?php echo "<input size=\"30\" type=\"text\" name=\"address01\" value=\"$address01\">"?>
                    </td>
                    </tr>
                    <tr>
                    <td align="right">Address 02: </td><td>
                    <?php echo "<input size=\"30\" type=\"text\" name=\"address02\" value=\"$address02\">"?>
                    </td>
                    </tr>
                    <tr>
                    <td align="right">Town / city: </td><td>
                    <?php echo "<input size=\"20\" type=\"text\" name=\"town\" value=\"$town\">"?>
                    </td>
                    </tr>
                    <tr>
                    <td align="right">Post code: </td><td>
                    <?php echo "<input size=\"10\" type=\"text\" name=\"postcode\" value=\"$postcode\">"?>
                    </td>
                    </tr>
                    <tr>
                    <td align="right">Telephone: </td><td>
                    <?php echo "<input size=\"15\" type=\"text\" name=\"telephone\" value=\"$telephone\">"?>
                    </td>
                    </tr>
                    <tr>
                    <td align="right">E-mail: </td><td>
                    <?php echo "<input size=\"50\" type=\"text\" name=\"email\" value=\"$email\">"?>
                    </td>
                    </tr>
                    <tr>
                    <td> </td>
                    <td colspan="2" align="left"><input type="submit" value="Save changes"></td>
                    </tr>
                    </table>
                    </form>
					</div>
				</section>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>