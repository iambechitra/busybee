function validateForm() {

    var fname = document.forms["rform"]["fname"].value;

    var lname = document.forms["rform"]["lname"].value;

    var email = document.forms["rform"]["email"].value;

    var pass = document.forms["rform"]["pass"].value;
    
    if(fname == "" || lname == "" || email == "" || pass == "") {

        alert("not a single field will be null");

        return false;

    }

}
