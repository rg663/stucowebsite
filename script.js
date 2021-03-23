function validateForm() {
  var a = document.forms["joinform"]["first-name"].value;
	var b = document.forms["joinform"]["last-name"].value;
	var c = document.forms["joinform"]["email-address"].value;
	var f = document.forms["joinform"]["A"].value;
	var g = document.forms["joinform"]["B"].value;
	var h = document.forms["joinform"]["C"].value;
	var i = document.forms["joinform"]["committee"].value;

  if (a == "") {
    alert("first name must be filled out");
    return false;
  }
	if (b == "") {
		alert("last name must be filled out");
		return false;
	}
	if (c == "null") {
		alert("email address must be filled out");
		return false;
	}
	if (e == "") {
		alert("grade must be filled out");
		return false;
	}
	if (f == "" or g == "" or h =="") {
		alert("cohort must be filled out");
		return false;
	}
	if (i == "") {
		alert("committee must be filled out");
		return false;
	}
}

function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}