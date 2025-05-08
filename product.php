<?php
require 'scripts/db_connect.php';
require_once 'components/header.php';
?>

			<div id="page">
				<div class="inne_copy"></div>
				<div id="page-bgtop">
					<div id="content">

						<div class="post">
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
                      <form class="review-form" action="forms/submit_review.php" method="POST">
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
                </div><br>
              </div>

								</div>
							</div>
						</div>

						<div class="post">
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

						<div class="post">
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
					<!-- sidebar.php -->
					<?php include ('components/sidebar.php'); ?>
					<div style="clear:both; height: 1px"></div>
				</div>
			</div>
		</div>

<?php require_once 'components/footer.php'; ?>
