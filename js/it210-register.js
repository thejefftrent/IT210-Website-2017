function passwordCheck() {
  if(document.getElementById("pwd").value === document.getElementById("pwd2").value)
  {
    console.log("passwords match");
    // make green
    return true;
  }
  else
  {
    console.log("they dont match");
    //make red and give message
    return false;
  }
}

$(document).ready(function(){
  $(".password").keyup(function(){
    var p1 = document.getElementById("pwd").value;
    var p2 = document.getElementById("pwd2").value;
    if(p1 === p2 && (p1.length > 0 && p2.length > 0))
    {
      $(".password").css("border", "3px solid green");
      // make green

    }
    else if(p2.length !== 0)
    {
      $(".password").css("border", "3px solid red");
    }
  });

});
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
function testpassword()
{
  var p1 = document.getElementById("pwd").value;
  var p2 = document.getElementById("pwd2").value
  if(p1 === p2 && (p1.length > 0 && p2.length > 0))
  {
    return true;
  }
  else
  {
    return false;
  }
}

function validateEmail(sEmail) {
    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    if (filter.test(sEmail)) {
        return true;
    }
    else {
        return false;
    }
}

function register() {
  if(testpassword() && validateEmail(document.getElementById("email").value))
  {
    document.getElementById("rform").submit();
    document.getElementById("rform").reset();
  }
  else
  {
    $("#rerror").html("Make sure your password matches and your email is valid");
  }
}
