<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
</head>
<body>

<form id="myForm" method="post" action="#" enctype="multipart/form-data">
    <fieldset>
        <legend><b>DATE OF BIRTH</b></legend>
        dd <input type="text" id="dayInput" name="day" value="" size="2" /> / 
        mm <input type="text" id="monthInput" name="month" value="" size="2" /> /
        yyyy <input type="text" id="yearInput" name="year" value="" size="4" />  <br><hr>
        <input type="submit" name="submit" value="Submit" />
    </fieldset>
</form>


    <script>
        // Function to validate the form
        function validateForm(event) {
            event.preventDefault(); // Prevent form submission
            
            // Get the input values
            var day = parseInt(document.getElementById("dayInput").value.trim());
            var month = parseInt(document.getElementById("monthInput").value.trim());
            var year = parseInt(document.getElementById("yearInput").value.trim());

            // Validation rules
            if (isNaN(day) || isNaN(month) || isNaN(year)) {
                alert("Date of birth cannot be empty");
                return false;
            }

            if (day < 1 || day > 31 || month < 1 || month > 12 || year < 1900 || year > 2016) {
                alert("Please enter a valid date of birth (dd: 1-31, mm: 1-12, yyyy: 1900-2016)");
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
