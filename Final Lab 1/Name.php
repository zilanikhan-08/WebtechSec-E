<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
</head>
<body>

    <form id="myForm" method="post" action="#" enctype="multipart/form-data">
        Name:       <br><input type="text" id="nameInput" name="name" value="" /> <br>
                        <input type="submit" name="submit" value="Submit" />

    </form>

    <script>
function validateForm(event) {
    event.preventDefault(); // Prevent form submission
    
    // Get the input value
    var name = document.getElementById("nameInput").value.trim();

    // Validation rules
    if (name === "") {
        alert("Name cannot be empty");
        return false;
    }

    // Check if the name starts with a letter
    var firstLetter = name.charAt(0);
    if (!isLetter(firstLetter)) {
        alert("Name must start with a letter");
        return false;
    }

    // Check if the name contains at least two words
    var words = name.split(/\s+/);
    if (words.length < 2) {
        alert("Name must contain at least two words");
        return false;
    }

    // Check if the name contains only allowed characters
    for (var i = 0; i < name.length; i++) {
        var currentChar = name.charAt(i);
        if (!(isLetter(currentChar) || currentChar === '.' || currentChar === '-' || currentChar === ' ')) {
            alert("Name can contain only letters, dots, dashes, and spaces");
            return false;
        }
    }

    // If all validation passes, you can submit the form
    alert("Form submitted successfully!");
    return true;
}

// Function to check if a character is a letter
function isLetter(char) {
    return /[A-Za-z]/.test(char);
}

// Attach the validateForm function to the form's submit event
document.getElementById("myForm").addEventListener("submit", validateForm);

    </script>
</body>
</html>
