<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
</head>
<body>

    <form id="myForm" method="post" action="#" enctype="multipart/form-data">
           
    <fieldset>
        <legend><b>GENDER</b></legend>
        <input type="radio" id="maleRadio" name="gender" value="male" /> Male
        <input type="radio" id="femaleRadio" name="gender" value="female" /> Female
        <input type="radio" id="otherRadio" name="gender" value="other" /> Other <br>
        <input type="submit" name="submit" value="Submit" />
        </fieldset>
        
    </form>

    <script>
        // Function to validate the form
        function validateForm(event) {
            event.preventDefault(); // Prevent form submission
            
            // Check if at least one radio button is selected
            var maleRadio = document.getElementById("maleRadio").checked;
            var femaleRadio = document.getElementById("femaleRadio").checked;
            var otherRadio = document.getElementById("otherRadio").checked;

            if (!maleRadio && !femaleRadio && !otherRadio) {
                alert("Please select your gender");
                return false;
            }

            // If validation passes, you can submit the form
            alert("Form submitted successfully!");
            return true;
        }

        // Attach the validateForm function to the form's submit event
        document.getElementById("myForm").addEventListener("submit", validateForm);
    </script>
</body>
</html>
