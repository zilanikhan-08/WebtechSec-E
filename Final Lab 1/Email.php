<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
</head>
<body>

    <form id="myForm" method="post" action="#" enctype="multipart/form-data">
        
        Email:     <br> <input type="email" id="emailInput" name="email" value="" /> <br>
                        <input type="submit" name="submit" value="Submit" />

    </form>

    <script>
// Function to validate the form
function validateForm(event) {
    event.preventDefault(); // Prevent form submission
    
    // Get the input value
    var email = document.getElementById("emailInput").value.trim();

    // Validation rules
    if (email === "") {
        alert("Email cannot be empty");
        return false;
    }

    // Check if the email contains '@' and '.' characters
    if (email.indexOf('@') === -1 || email.indexOf('.') === -1) {
        alert("Please enter a valid email address");
        return false;
    }

    // Check if the '@' character appears before the '.' character
    if (email.indexOf('@') >= email.lastIndexOf('.')) {
        alert("Please enter a valid email address");
        return false;
    }

    // If all validation passes, you can submit the form
    alert("Form submitted successfully!");
    return true;
}

// Attach the validateForm function to the form's submit event
document.getElementById("myForm").addEventListener("submit", validateForm);

    </script>
</body>
</html>
