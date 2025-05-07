<?php
require 'db_connect.php';
?>

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
				<ul>
					<li class="active"><a href="index.html">Homepage</a></li>
					<li><a href="giftshop.php">Gift Shop</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="hiking.html">Hiking</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
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
                    <?php
                    $id = $_POST['id'];

                    $sql = 'SELECT * from prd_products WHERE PRD_ID=' . $id;
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($onlyRow = $result->fetch_assoc()) {
                            $name = $onlyRow['PRD_Name'];
                            $row = $onlyRow;
                        }
                    } else {
                        echo 'no';
                    }
                    ?>
                    <h2 class="title"><a href="#">Item purchased</a></h2>
									
                    <div class="entry">
                      <?php
echo '<div class="product-entry">';
echo '<img src="' . $row['PRD_ImagePath'] . '">';
echo '<div class="product-details">';
echo '<h1>' . $row['PRD_Name'] . '</h1>';
echo '<h2>' . $row['PRD_Description'] . '</h2>';
echo '<div class="latest-review">';
echo '<p>Leave a review?<p>';
?>
                      <form class="review-form" action="submit_review.php" method="POST">
                        <select name="stars">
                          <option value="1">1 Star</option>
                          <option value="2">2 Stars</option>
                          <option value="3">3 Stars</option>
                          <option value="4">4 Stars</option>
                          <option value="5" selected>5 Stars</option>
                        </select>
                        <br>
                        <textarea placeholder="Explain your rating (optional)" rows="3" name="extra" maxlength="255"></textarea>
                        <br>
                        <br>
                        <input type="hidden" name="id" value="<?php echo $row['PRD_ID']; ?>"></input>
                        <button type="submit">Submit</button>
                      </form>
                    </div>

                  </div>
                </div><br>
              </div>

								</div>
							</div>
						</div>

						<div class="post">
							<div class="post-bgtop">
								<div class="post-bgbtm">
									<h2 class="title"><a href="#">Latest Reviews</a></h2>
                  
              <?php
              $sql = "
              SELECT EXTRA, TIME, STARS 
              FROM prd_reviews
              WHERE PRD_ID=$id AND NOT EXTRA=''
              ORDER BY TIME DESC
              ";

                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    echo '<ul class="review-list">';
                    while ($row = $result->fetch_assoc()) {
                        $stars = $row['STARS'];
                        $extra = $row['EXTRA'];
                        $timeRaw = $row['TIME'];
                        $timeData = getdate($timeRaw);
                        $time = $timeData['year'].'-'.$timeData['mon'].'-'.$timeData['mday'];
                        echo '<li>';
                          echo '<b>'.$stars.'/5</b> - '.$extra; 
                          echo '<p class="time">'.$time.'</p>';
                        echo '</li>';
                    }
                    echo '</ul>';
                } else {
                    echo 'no';
                }
                    ?>

									<div class="entry">
									</div>
									<div class="meta">
										<p><a href="#" class="more">View More</a></p>
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
					<?php include ('sidebar.php'); ?>
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

