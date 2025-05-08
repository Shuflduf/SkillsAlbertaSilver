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
                      <form action="forms/submit_form.php" method="POST" class="contact-form">
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
        </div>
        <?php require_once 'components/sidebar.php'; ?>
        <div style="clear:both; height: 1px"></div>
    </div>
</div>
<?php require_once 'components/footer.php'; ?>
