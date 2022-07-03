// Defining a function to display error message
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

// Defining a function to validate form 
function validateForm() {
    // Retrieving the values of form elements 
    var name = document.contactForm.name.value;
    var email = document.contactForm.email.value;
    var mobile = document.contactForm.mobile.value;
    var destination = document.contactForm.destination.value;
    var gender = document.contactForm.gender.value;
    var date = document.contactForm.date.value;
    var services = [];
    var checkboxes = document.getElementsByName("services[]");
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i].checked) {
            // Populate hobbies array with selected values
            services.push(checkboxes[i].value);
        }
    }

    // Defining error variables with a default value
    var nameErr = emailErr = mobileErr = genderErr = destinationErr = dateErr = true;

    // Validate name
    if (name == "") {
        printError("nameErr", "Please enter your name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;
        if (regex.test(name) === false) {
            printError("nameErr", "Please enter a valid name");
        } else {
            printError("nameErr", "");
            nameErr = false;
        }
    }

    // Validate email address
    if (email == "") {
        printError("emailErr", "Please enter your email address");
    } else {
        // Regular expression for basic email validation
        var regex = /^\S+@\S+\.\S+$/;
        if (regex.test(email) === false) {
            printError("emailErr", "Please enter a valid email address");
        } else {
            printError("emailErr", "");
            emailErr = false;
        }
    }

    // Validate mobile number
    if (mobile == "") {
        printError("mobileErr", "Please enter your mobile number");
    } else {
        var regex = /^[1-9]\d{9}$/;
        if (regex.test(mobile) === false) {
            printError("mobileErr", "Please enter a valid 10 digit mobile number");
        } else {
            printError("mobileErr", "");
            mobileErr = false;
        }
    }

    // Validate country
    if (destination == "Select") {
        printError("destinationErr", "Please select your country");
    } else {
        printError("destinationErr", "");
        destinationErr = false;
    }

    // Validate gender
    if (gender == "") {
        printError("genderErr", "Please select your gender");
    } else {
        printError("genderErr", "");
        genderErr = false;
    }
    if (date == "") {
        printError("dateErr", "Please select a date to travel");
    } else {
        printError("dateErr", "");
        dateErr = false;
    }
    // Prevent the form from being submitted if there are any errors
    if ((nameErr || emailErr || mobileErr || genderErr || destinationErr || dateErr) == true) {
        return false;
    } else {
        // Creating a string from input data for preview
        var dataPreview = "You've entered the following details: \n" +
            "Full Name: " + name + "\n" +
            "Email Address: " + email + "\n" +
            "Mobile Number: " + mobile + "\n" +
            "Country: " + country + "\n" +
            "Gender: " + gender + "\n" +
            "Destination: " + destination + "\n" +
            "Date: " + date + "\n";
        if (services.length) {
            dataPreview += "Services: " + services.join(", ");
        }
        // Display input data in a dialog box before submitting the form
        alert(dataPreview);
    }
};