
function emailSend(){


	var userName = document.getElementById('name').value;
	var phone = document.getElementById('phone').value;
	var email = document.getElementById('email').value;


	var messageBody = "Name " + userName +
	"<br/> Phone " + phone +
	"<br/> Email " + email;

    email.send({
        Host : "smtp.elasticemail.com",
        Username : "project01@gmail.com",
        Password : "97EEFC0CA2F051842F83D4D5E483C132E3F2",
        To : 'ajayvishu7741@gmail.com',
        From : document.getElementById("email").value,
        Subject : "This is the subject",
        Body : "And this is the body"
    }).then(
      message => alert(message)
    );

}

function emailSend(){

    Email.send({
        Host : "smtp.elasticemail.com",
        Username : "project01@gmail.com",
        Password : "97EEFC0CA2F051842F83D4D5E483C132E3F2",
        To : 'ajayvishu7741@gmail.com',
        From : "ajayvishu7741@gmail.com",
        Subject : "This is the subject",
        Body : "And this is the body"
    }).then(
      message => alert(message)
    );
  
  }