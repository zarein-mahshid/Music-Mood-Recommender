<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact me</title>
<link rel="stylesheet" href="<?php echo base_url('assets/css/styleContactme.css');?>">
</head>
<body>
		<header class="site-header">
		<nav>
			<a href="<?php echo base_url()?>index.php/Main_cntrl/index/">صفحه اصلی</a>
<!--			<a href="<?php echo base_url()?>index.php/Main_cntrl/contactme">ارتباط با من</a>-->
			<a href="<?php echo base_url()?>index.php/Main_cntrl/aboutme">درباره من</a>
			<a href="<?php echo base_url()?>index.php/Main_cntrl/musicFacts">دانستنی‌ها</a>
		</nav>

	</header>
	<main class="contact-page">
		<div class="container-container">
        <div class="contact-info">
            <h3>راه های ارتباطی</h3>
            <ul>
				<li><strong>تلفن:</strong> <a href="tel:12345678-021">12345678-021</a> </li>
				<li><strong>ایمیل:</strong> <a href="mailto:info@gmail.com">info@example.com</a> </li>
              	<li><strong>آدرس:</strong> <span>تهران، خیابان آزادی پلاک 123</span> </li>
            </ul>
		</div>
           
        </div>

        <div class="contact-form">
            <h3>پیام خود را برای ما بفرستید</h3>
            
            <?php echo form_open('Main_cntrl/contactme');?>

                <div class="form-group">
                    <label for="name">نام:</label>
                    <input type="text" id="name" name="name" value="<?php echo set_value('name'); ?>" required>
					 <?php if (isset($validation_errors['name'])): ?>
                        <span class="error-message"><?php echo $validation_errors['name']; ?></span>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="email">ایمیل:</label>
                    <input type="email" id="email" name="email" value="<?php echo set_value('email'); ?>" required>
                    <?php if (isset($validation_errors['email'])): ?>
                        <span class="error-message"><?php echo $validation_errors['email']; ?></span>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="subject">موضوع:</label>
                    <input type="text" id="subject" name="subject" value="<?php echo set_value('subject'); ?>" required>
                     <?php if (isset($validation_errors['subject'])): ?>
                        <span class="error-message"><?php echo $validation_errors['subject']; ?></span>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="message">پیام شما:</label>
                    <textarea id="message" name="message" required><?php echo set_value('message'); ?></textarea>
                     <?php if (isset($validation_errors['message'])): ?>
                        <span class="error-message"><?php echo $validation_errors['message']; ?></span>
                    <?php endif; ?>
                </div>

                <button type="submit" class="submit-btn">ارسال پیام</button>

            <?php echo form_close();?>
        </div>

    </div>

</div>
</main>

</body>
</html>