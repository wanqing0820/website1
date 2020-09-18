<!-- info forms for both photographers and users -->

<?php
include("includes/init.php");
$title = "Info";
$target3 = "Info";
$email = "";

$show_email_feedback = FALSE;
$show_password_feedback = FALSE;
$show_name_feedback = FALSE;
$show_username_feedback = FALSE;

$show_form = TRUE;

// Form default values

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $is_order_valid = TRUE;
  $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
  $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
  $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
  $password = trim($_POST['password']);

  if (empty($email)){
    $is_order_valid = FALSE;
    $show_email_feedback = TRUE;
  }

  if (empty($password)){
    $is_order_valid = FALSE;
    $show_password_feedback = TRUE;
  }

  if (empty($name)){
    $is_order_valid = FALSE;
    $show_name_feedback = TRUE;
  }

  if (empty($username)){
    $is_order_valid = FALSE;
    $show_username_feedback = TRUE;
  }

  $show_form = !$is_order_valid;

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <title>Phone wallpaper</title>
</head>
<body>
    <header>
    <?php
    include("includes/navbar.php");
    ?>
    </header>

    <?php
    if ($show_form) { ?>
    <section id="container">
    <div class="info-img">
        <img src="./images/userSignUp.jpg" alt="">
    </div>
    <div class="info-title">
        <h2>Sign Up</h2><br>
        <h3> Allow the world to see through your lens</h3><br>
        <h4> Been here before? Log in instead</h4>

        <!-- email address box-->
        <form id="signUpPhotographer" method="post" action="info.php" type = "submit" >

        <p class="form_feedback" <?php echo ($show_name_feedback) ? '' : 'hidden'; ?>>Name is required.</p>

        <div class="input_fields">
          <input name="name" placeholder = "Name" id="name" type="text" value= "<?php echo htmlspecialchars($name); ?>" />
        </div>

        <p class="form_feedback" <?php echo ($show_username_feedback) ? '' : 'hidden'; ?>>Username is required.</p>

        <div class="input_fields">
          <input name="username" placeholder = "Username" id="username" type="text" value= "<?php echo htmlspecialchars($username); ?>" />
        </div>

        <p class="form_feedback" <?php echo ($show_email_feedback) ? '' : 'hidden'; ?>>Email address is required.</p>

        <div class="input_fields">
          <input name="email" placeholder = "Email address" id="email" type="email" value= "<?php echo htmlspecialchars($email); ?>" />
        </div>

        <p class="form_feedback" <?php echo ($show_password_feedback) ? '' : 'hidden'; ?>>Password is required.</p>

        <div class="input_fields">
          <input name="password" placeholder = "Password" id="password" type="password" value= "<?php echo htmlspecialchars($password); ?>" />
        </div>

        <div class="input_fields">
          <span></span>
            <input type="submit" id="submit" value="Submit"/>
        </div>

      </form>

      </div>
      </section>

    <?php } else { ?>
        <section id="container">
        <div class="confirmation-pic">
            <img src="./images/confirmation.jpg" alt="girl reading book">
        </div>
        <div class="confirmation-text">
            <h2> Thank you! <?php echo $name ?> / <?php echo $username ?></h2>
            <h3>Your email address is <?php echo $email ?></h3>
            <h3> Begin Your Search </h3>
            <p> In our massive library of pictures.   For your perfect wallpaper.   It's never too frequent to change your device wallpaper.</p>
            <span><!---------spacing ------> </span>
            <p>They wear off pretty often. Psssh also for hygiene purposes. :p </p>
        </div>
        </section>

    <?php } ?>

  </main>
    </form>


    <footer>
    <?php
    include("includes/footer.php");
    ?>
    </footer>
</body>
</html>
