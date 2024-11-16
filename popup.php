

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Popup Form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
  <style>
 
</style>

</head>
<body>


<!-- Popup Modal -->
<div class="modal fade" id="loginPopup" tabindex="-1" aria-labelledby="popupLabel" aria-hidden="true">
  <div class="modal-dialog" style=" width: 400px; height: 300px;">
    <div class="modal-content" style="height:auto;">
    <img class="nav-logo" src="images/logo/DakshLogo.png" alt="" style="width:100px; height:90px;">
  
      <div class="modal-header" >
      
     <h5 class="modal-title" id="popupLabel" style="" >Enquiry Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form id="loginForm" action="https://api.web3forms.com/submit" method="POST">
          <div class="form-group">
          <input type="hidden" name="access_key" value="c81183e7-f4f3-4444-9179-9ef7aa08a1e5">
            <label >Fill the details </label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
          </div>
          <div class="row mb-4">
          <div class="form-group col-lg-6">
												<input type="text"  id="email" name="email" class="form-control" placeholder="Email Address*" required>
											</div>
          <div class="form-group col-lg-6">
						<input type="text"  id="phone" name="Phone" class="form-control" placeholder="Your phone*" required>
						</div>
									
                      </div>   
           <div class="form-group">
            <textarea name="message" id="message" class="form-control" rows="3" placeholder="Type Message..." required></textarea>
          </div>
          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://smtpjs.com/v3/smtp.js" ></script>

<script>
  // Check if user is logged in (replace with actual backend check)
  const isLoggedIn = <?php echo isset($_SESSION['logged_in']) ? 'true' : 'false'; ?>;
  
  // Show the modal with a delay if the user is not logged in
  $(document).ready(function() {
    if (!isLoggedIn) {
      setTimeout(function() {
        $('#loginPopup').modal('show');
      }, 1000); // Delay of 5000 milliseconds (5 seconds)
    }

 
  });



</script>

</body>
</html>
