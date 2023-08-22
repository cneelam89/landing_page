<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Junction X</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container-main">
        <div class="heading">
            <h2> Contact us</h2>
            <p> Your kids can learn logic, structure, sequence and creative expression</p>
        </div>

        <div class="container">
            <div class="contact-info">
                <div class="image-container">
                    <img src="./master-banner-1x.png" alt="boywithtablet" class="image">
                </div>

            </div>
            <div class="contact-form">
                <div class="form-heading">
                    Contact Form
                </div>
                <form action="" method="post">
                    <div class="input-box">
                        <input type="text" class="input" id="fname" name="fname" required="required">
                        <label for="fname"> Name</label>
                    </div>
                    <div class="input-box">
                        <input type="email" class="input" id="email" name="email" required="required" placeholder="">
                        <label for="email">Email</label>
                    </div>
                    <div class="input-box">
                        <textarea id="message" name="message" rows="4" required="required"></textarea>
                        <label for="message"> Message</label>
                    </div>

                    <div class="input-box">
                        <input type="submit" value="Submit">
                    </div>


                </form>
                <?php


                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $name = $_POST["fname"];
                    $email = $_POST["email"];
                    $message = $_POST["message"];

                    if (empty($name) || empty($email) || empty($message)) {
                        echo "<p style='color: red;'>Kindly fill in all fields.</p>";
                    } elseif (strlen($name) <= 4) {
                        echo "<p style='color: red;'>Name must be longer than 4 characters.</p>";
                    } else {
                        echo "<h3 style='color: green;'>Thank you for your submission</h3>";
                    }
                }
                ?>

            </div>
        </div>
    </div>


</body>

</html>
