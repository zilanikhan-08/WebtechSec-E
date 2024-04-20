<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
</head>
<body>

    <form id="myForm" method="post" action="#" enctype="multipart/form-data">
        <fieldset>
            <legend><b>DEGREE</b></legend>
            <input type="checkbox" id="sscCheckbox" name="degree" value="ssc" /> SSC
            <input type="checkbox" id="hscCheckbox" name="degree" value="hsc" /> HSC
            <input type="checkbox" id="bscCheckbox" name="degree" value="bsc" /> BSc <br><hr>
            <input type="submit" name="submit" value="Submit" />
        </fieldset>
    </form>

    <script>
        // Function to validate the form
        function validateForm(event) {
            event.preventDefault(); // Prevent form submission
            
            // Check if at least one checkbox is selected
            var sscChecked = document.getElementById("sscCheckbox").checked;
            var hscChecked = document.getElementById("hscCheckbox").checked;
            var bscChecked = document.getElementById("bscCheckbox").checked;

            if (!sscChecked && !hscChecked && !bscChecked) {
                alert("Please select at least one degree");
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
