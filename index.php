<?php
// Form submission script
include_once 'submit.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Contact Form</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<div class="container">
    <div class="wrapper">
        <h2>Contact Us</h2>
        <div class="contactFrm">
            <!-- Status message -->
            <?php if(!empty($statusMsg)){ ?>
                <div class="status-msg <?php echo $status; ?>"><?php echo $statusMsg; ?></div>
            <?php } ?>
            
            <!-- Form fields -->
            <form action="" method="post">
                <div class="form-input">
                    <label for="name">Name</label>
                    <input type="text" name="name" placeholder="Enter your name" value="<?php echo !empty($postData['name'])?$postData['name']:''; ?>" required="">
                </div>
                <div class="form-input">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Enter your email" value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>" required="">
                </div>
                <div class="form-input">
                    <label for="subject">Subject</label>
                    <input type="text" name="subject" placeholder="Enter subject" value="<?php echo !empty($postData['subject'])?$postData['subject']:''; ?>" required="">
                </div>
                <div class="form-input">
                    <label for="message">Message</label>
                    <textarea name="message" placeholder="Type your message here" required=""><?php echo !empty($postData['message'])?$postData['message']:''; ?></textarea>
                </div>
                
                <input type="submit" name="submit" class="btn" value="Submit">
            </form>
        </div>
    </div>
    
</div>
</body>
</html>