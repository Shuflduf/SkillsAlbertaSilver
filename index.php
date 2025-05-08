<?php
$page = 'index';
require_once 'components/header.php';
?>
<div id="page">
    <div id="page-bgtop">
        <div id="content">
            <div id="foobar">
                <div class="navigation">
                    <a href="#" class="previous">‹</a>
                    <a href="#" class="next">›</a>
                </div>
                <div class="viewer">
                    <div class="reel">
                        <div class="slide"> <img src="images/img17.jpg" alt="">
                            <span>Moose</span> </div>
                        <div class="slide"> <img src="images/img18.jpg" alt="">
                            <span>Brown Bear</span> </div>
                        <div class="slide"> <img src="images/img19.jpg" alt="">
                            <span>Bison</span> </div>
                        <div class="slide"> <img src="images/img20.jpg" alt="">
                            <span>Moose</span> </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $('#foobar').slidertron({
                    viewerSelector: '.viewer',
                    reelSelector: '.viewer .reel',
                    slidesSelector: '.viewer .reel .slide',
                    navPreviousSelector: '.navigation .previous',
                    navNextSelector: '.navigation .next',
                    advanceDelay: 3000,     
                    advanceResume: 3000,   
                    speed: 600            
                });
            </script>
            <div class="post">
                <h2 class="title"><a href="#">Coming Soon: Our New Jasper Location!</a></h2>
                <p class="byline">Posted by <a href="#">Management</a> May 8, 2025</p>
                <div class="entry">
                    <p>We're thrilled to announce that <strong>Banff Gift Shop</strong> is expanding to beautiful Jasper, Alberta! Our new location, set to open this summer, will be nestled in the heart of downtown Jasper at <em>Patricia Street</em>. Like our Banff store, the Jasper location will feature our full range of locally-sourced products, mountain-inspired gifts, and authentic Canadian merchandise. The new space will also include a dedicated gallery showcasing works from <strong>local Jasper artists</strong>, celebrating the unique beauty of the northern Rockies. We can't wait to bring our commitment to quality and mountain culture to the Jasper community.</p>
                </div>
                <div class="meta">
                    <p><a href="#" class="more">View More</a></p>
                </div>
            </div>
            <div class="post">
                        <h2 class="title"><a href="#">Lorem Ipsum Dolor Volutpat</a></h2>
                        <p class="byline">Posted by <a href="#">Someone</a> April 22, 2010</p>
                        <div class="entry">
                            <p>This is <strong>Vertebrate </strong>, a free, fully standards-compliant CSS template design by <a>Free CSS Templates</a>. The slideshow uses photos from <a>PDPhoto.org</a> and is powered by Slidertron (a jQuery plugin by <a>NodeThirtyThree</a>). This free template is released under a <a>Creative Commons Attributions</a> license, so you're pretty much free to do whatever you want with it (even use it commercially) provided you keep the links in the footer intact. Aside from that, have fun with it :)</p>
                        </div>
                        <div class="meta">
                            <p><a href="#" class="more">View More</a></p>
                        </div>
            </div>
        </div>
        <?php require_once 'components/sidebar.php'; ?>
        <div style="clear:both; height: 1px"></div>
    </div>
</div>
<?php require_once 'components/footer.php'; ?>
