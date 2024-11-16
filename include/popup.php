<?php 
include("config.php");
$error="";
$msg="";
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	
	if(!empty($name) && !empty($email) && !empty($phone) && !empty($subject) && !empty($message))
	{
		
		$sql="INSERT INTO contact (name,email,phone,subject,message) VALUES ('$name','$email','$phone','$subject','$message')";
		   $result=mysqli_query($con, $sql);
		   if($result){
			   $msg = "<p class='alert alert-success'>Message Send Successfully</p> ";
		   }
		   else{
			   $error = "<p class='alert alert-warning'>Message Not Send Successfully</p> ";
		   }
	}else{
		$error = "<p class='alert alert-warning'>Please Fill all the fields</p>";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Popup Form </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<!-- Popup Modal -->
<div class="modal fade" id="loginPopup" tabindex="-1" aria-labelledby="popupLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="popupLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Popup Contact Form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<!-- Trigger button for popup form -->
<div class="text-center mt-5">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#contactPopup">
    Get In Touch
  </button>
</div>

<!-- Popup Modal -->
<div class="modal fade" id="contactPopup" tabindex="-1" aria-labelledby="popupLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="text-secondary double-down-line text-center mb-2">Get In Touch</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <?php echo $msg; ?><?php echo $error; ?>
          <form class="w-100" action="#" method="post">
            <div class="row">
              <div class="form-group col-lg-6">
                <input type="text" name="name" class="form-control" placeholder="Your Name*" required>
              </div>
              <div class="form-group col-lg-6">
                <input type="text" name="email" class="form-control" placeholder="Email Address*" required>
              </div>
              <div class="form-group col-lg-6">
                <input type="text" name="phone" class="form-control" placeholder="Phone" maxlength="10">
              </div>
              <div class="form-group col-lg-6">
                <input type="text" name="subject" class="form-control" placeholder="Subject">
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <textarea name="message" class="form-control" rows="5" placeholder="Type Comments..." required></textarea>
                </div>
              </div>
            </div>
            <button type="submit" name="send" class="btn btn-primary">Send Message</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>

 // Check if user is logged in (you can replace this with actual backend check)
 const isLoggedIn = <?php echo isset($_SESSION['logged_in']) ? 'true' : 'false'; ?>;
  

  // Show the modal with a delay if the user is not logged in
  $(document).ready(function() {
    if (!isLoggedIn) {
      setTimeout(function() {
        $('#loginPopup').modal('show');
      }, 2000); // Delay of 5000 milliseconds (5 seconds)
    }
  });
    // After form submission, you could make an AJAX request to login and update the session
    $('#loginForm').on('submit', function(event) {
    event.preventDefault();
    // Add login logic here or redirect to the login page

    // After successful login, hide the modal
    $('#loginPopup').modal('hide');
  });
</script>

</body>
</html>
