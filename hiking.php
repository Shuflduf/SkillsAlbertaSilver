<?php
require 'db_connect.php'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Banff Gift Shop</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="default.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="jquery/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="jquery/jquery.slidertron-0.1.js"></script>
	<style type="text/css">
		@import "gallery.css";
	</style>
</head>

<body>
	<div id="wrapper">
		<div id="header">
			<div id="logo">
				<h1><a href="#">Banff</a></h1>
				<h2><a>Where every view is a postcard</a></h2>
			</div>
			<div id="menu">
					<div><a href="index.html">Homepage</a></div>
					<div><a href="giftshop.php">Gift Shop</a></div>
					<div><a href="about.html">About</a></div>
          <div class="active"><a href="hiking.php">Hiking</a></div>
					<div><a href="contact.html">Contact</a></div>
			</div>
		</div>
		<div>
			<div id="page">
				<div class="inne_copy"></div>
				<div id="page-bgtop">
					<div id="content">

						<div class="post">
							<div class="post-bgtop">
								<div class="post-bgbtm">
									<h2 class="title"><a href="#">Gift Shop</a></h2>
									
									<div class="entry">
										<?php
										// Fetch hikes
										$sql = "SELECT HIK_ID, HIK_Name FROM HIK_Hikes ORDER BY HIK_Name";
										$result = $conn->query($sql);

                                        // Handle postback
										$selectedHike = "";
										if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['hike_chosen'])) {
											$selectedHike = $_POST['hike_chosen'];
										}
										
										?>
										<form method="post">
											<select name="hike_chosen" onchange="this.form.submit()">
												<option value="">Select a Hike</option>
												<?php
												if ($result->num_rows > 0) {
													while ($row = $result->fetch_assoc()) {
														$selected = ($row["HIK_ID"] == $selectedHike) ? "selected" : "";
														echo '<option value="' . $row["HIK_ID"] . '" ' . $selected . '>' . htmlspecialchars($row["HIK_Name"]) . '</option>';
													}
												}
												?>
											</select>
										</form>
										<br /><br />
										<?php
										if (is_numeric($selectedHike)) {
											$sql = "SELECT * FROM HIK_Hikes WHERE HIK_ID=" . $selectedHike;
											$result = $conn->query($sql);

											if ($result->num_rows > 0) {
												while ($row = $result->fetch_assoc()) {
													echo "Hike : " . $row["HIK_Name"] . "<br>";
												}
											} else {
												echo "No hikes found.";
											}
										} else {
											echo "Choose a hike.";
										}

										
										?>

									</div>

								</div>
							</div>
						</div>
						<div class="post">
							<div class="post-bgtop">
								<div class="post-bgbtm">
									<h2 class="title"><a href="#">Lorem Ipsum Dolor Volutpat</a></h2>
									<p class="byline">Posted by <a href="#">Someone</a> April 22, 2010</p>
									<div class="entry">
										<p>Curabitur tellus. Phasellus tellus turpis, iaculis in, faucibus lobortis, posuere in, lorem. Donec a ante. Donec neque purus, adipiscing id, eleifend a, cursus vel, odio. Vivamus varius justo sit amet leo. Morbi sed libero. Vestibulum blandit augue at mi. Praesent fermentum lectus eget diam. Nam cursus, orci sit amet porttitor iaculis, ipsum massa aliquet nulla, non elementum mi elit a mauris. Praesent fermentum lectus eget diam. Nam cursus, orci sit amet porttitor iaculis, ipsum massa aliquet nulla, non elementum mi elit a mauris. Curabitur tellus. Phasellus tellus turpis, iaculis in, faucibus lobortis, posuere in, lorem. Donec a ante. Donec neque purus, adipiscing cursus vel, odio.</p>
									</div>
									<div class="meta">
										<p><a href="#" class="more">View More</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- sidebar.php -->
					<?php include('metcalculator.php'); ?>
					<div style="clear:both; height: 1px"></div>
				</div>
			</div>
		</div>
		<div id="footer-wrapper">
			<div id="footer">
				<div class="fleft">
					<p>Copyright statement.</p>
				</div>
				<div class="fright">
					<p>My Website</p>
				</div>
				<div class="fcenter">
					<p>Design by: My Website</p>
				</div>
				<div class="fclear"></div>
			</div>
		</div>
</body>

</html>
