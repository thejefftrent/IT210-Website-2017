/*Checks for local JSON, and if it doesn't exist, creates ones*/
function localJSONCheck() {
  if (localStorage.getItem("endorsements"))
  {
    var document.endorsements = JSON.parse(localStorage.getItem("endorsements"));
  }
  else
  {
      localStorage.setItem("endorsements", []);
  }
}

/*Saves user input fields to local storage*/
function saveComments() {
  localStorage.name = document.getElementByID("nameField").innerHTML;
  localStorage.comment = document.getElementByID("commentField").innerHTML;
}


/*Takes nameField and commentField, adds it the the JSON, saves and then updates the page*/
function commitNewEndorsement() {
  document.endorsements.push({"name":document.getElementByID("nameField").innerHTML
                            , "comment":document.getElementByID("commentField").innerHTML
                            , "date":Date.now()};

  localStorage.endorsements = JSON.stringify(document.endorsements);

  /*NEED TO ADD CHILD WITH NEW COMMENT AFTER SUBMITTED*/
}
