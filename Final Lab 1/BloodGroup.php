<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
</head>
<body>

    <form id="myForm" method="post" action="#" enctype="multipart/form-data">
        <fieldset>
            <legend><b>BLOOD GROUP</b></legend>
            <select id="bloodGroupSelect" name="bloodGroup"> 
                <option value=""></option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
            </select><br><hr>
            <input type="submit" name="submit" value="Submit" />
        </fieldset>
    </form>

    <script>
        // Function to validate the form
        function validateForm(event) {
            event.preventDefault(); // Prevent form submission
            
            // Get the selected value from the dropdown menu
            var bloodGroup = document.getElementById("bloodGroupSelect").value;

            // Validation rule
            if (bloodGroup === "") {
                alert("Please select a blood group");
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
