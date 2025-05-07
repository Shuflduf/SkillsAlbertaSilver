<div class="post">
  <div class="post-bgtop">
    <div class="post-bgbtm">

      <!-- <h2 class="title"><a href="#">Latest Reviews</a></h2> -->
      <!-- <div class="entry"> -->
      <!--   <p>you suck</p> -->
      <!-- </div> -->
      <!-- <div class="meta"> -->
      <!--   <p><a href="#" class="more">View More</a></p> -->
      <!-- </div> -->
    </div>
  </div>
</div>

SELECT EXTRA, TIME, STARS 
FROM prd_reviews
WHERE PRD_ID=49 AND NOT EXTRA=''
LIMIT 5;

