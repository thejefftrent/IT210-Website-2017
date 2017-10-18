$(document).ready(function(){
  $("#email").keyup(function(){
    if(validateEmail(document.getElementById("email").value))
    {
      $("#email").css("border", "3px solid green");
    } else
    {
      $("#email").css("border", "3px solid red");
    }
  });
});

function validateEmail(sEmail) {
    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    if (filter.test(sEmail)) {
        return true;
    }
    else {
        return false;
    }
}

function sendContact() {
  if(validateEmail(document.getElementById("email").value))
  {
    document.getElementById("cform").submit();
    document.getElementById("cform").reset();
  }
  else
  {
    $("#cerror").html("Make sure your your email is valid");
  }
}
