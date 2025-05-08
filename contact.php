<?php
$page = 'contact';
require_once 'components/header.php';
?>
<div id="page">
    <div class="inne_copy"></div>
    <div id="page-bgtop">
        <div id="content">
            <div class="post">
                        <h2 class="title"><a href="#">Contact Us</a></h2>
                        <div class="entry">
                            <form action="submit_form.php" method="POST" class="contact-form">
                                <label for="name">Name:</label><br>
                                <input type="text" id="name" name="name" class="contact-form-line" required><br><br>

                                <label for="email">Email:</label><br>
                                <input type="email" id="email" name="email" class="contact-form-line" required><br><br>

                                <label for="message">Message:</label><br>
                                <textarea id="message" name="message" rows="4" cols="50" class="contact-form-multiline"
                                    required></textarea><br><br>

                                <input type="submit" value="Submit" class="contact-form-submit">
                            </form>
                </div>
            </div>
            <div class="post">
                        <h2 class="title"><a href="#">Lorem Ipsum Dolor Volutpat</a></h2>
                        <p class="byline">Posted by <a href="#">Someone</a> April 22, 2010</p>
                        <div class="entry">
                            <p>Curabitur tellus. Phasellus tellus turpis, iaculis in, faucibus lobortis,
                                posuere in, lorem. Donec a ante. Donec neque purus, adipiscing id, eleifend
                                a, cursus vel, odio. Vivamus varius justo sit amet leo. Morbi sed libero.
                                Vestibulum blandit augue at mi. Praesent fermentum lectus eget diam. Nam
                                cursus, orci sit amet porttitor iaculis, ipsum massa aliquet nulla, non
                                elementum mi elit a mauris. Praesent fermentum lectus eget diam. Nam cursus,
                                orci sit amet porttitor iaculis, ipsum massa aliquet nulla, non elementum mi
                                elit a mauris. Curabitur tellus. Phasellus tellus turpis, iaculis in,
                                faucibus lobortis, posuere in, lorem. Donec a ante. Donec neque purus,
                                adipiscing cursus vel, odio.</p>
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
