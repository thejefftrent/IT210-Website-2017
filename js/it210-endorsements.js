/*Checks for local JSON, and if it doesn't exist, creates ones*/
var endorsements = new Array();

function localJSONCheck() {
  if (localStorage.getItem("endorsements") && localStorage.getItem("endorsements") !== "undefined" )
  {
    var temp = JSON.parse(localStorage.endorsements);
    for(var i = 0; i < temp.length; i++)
    {
      endorsements.push(temp[i]);
    }
  }
  if (localStorage.getItem("name"))
  {
    document.getElementById("nameField").value = localStorage.name;
  }
  if (localStorage.getItem("comment"))
  {
    document.getElementById("commentField").value = localStorage.comment;
  }
}

/*Saves user input fields to local storage*/
function saveComments() {
  localStorage.name = document.getElementById("nameField").value;
  localStorage.comment = document.getElementById("commentField").value;
}


/*Takes nameField and commentField, adds it the the JSON, saves and then updates the page*/
function commitNewEndorsement() {

    endorsements.push({"name":document.getElementById("nameField").value
                              , "comment":document.getElementById("commentField").value
                              , "date":new Date().toLocaleString(), "timestamp":Date.now()});
  localStorage.endorsements = JSON.stringify(endorsements);




  document.getElementById("AllEndor").innerHTML = "<h4>" + document.getElementById("nameField").value + " at <i>just now.</i></h4>"
                                                + "<p>" + document.getElementById("commentField").value + "</p>"
                                                + document.getElementById("AllEndor").innerHTML;

  localStorage.comment = "";
  localStorage.name = "";
  document.getElementById("commentField").value = "";
  document.getElementById("nameField").value = "";

}

function sortByKey(key) {
  endorsements = endorsements.sort(function(a,b){

    var x = a[key];

    var y = b[key];

    return ((x<y) ?-1:((x>y)?1:0));
});
}

function endorOnload() {
  if(localStorage.getItem("endorsements") && localStorage.getItem("endorsements") !== "undefined")
  {
    for(var i = 0; i < endorsements.length; i++)
    {
      document.getElementById("AllEndor").innerHTML += "<h4>" + endorsements[i].name + " at <i>" + endorsements[i].date + "</i></h4>"
                                                    +  "<p>" + endorsements[i].comment + "</p> <hr>";
    }
  }
  else
  {
    document.getElementById("AllEndor").innerHTML = "<p>Looks like no one has endorsed me yet... Why not be the first?</p>";
  }
}
