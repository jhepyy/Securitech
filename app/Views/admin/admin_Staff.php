<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SecuriTech - Admin User Management</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
       .student-form {
    width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.form-row {
    display: flex;
    margin-bottom: 10px;
}

label {
    width: 120px;
    margin-right: 10px;
}

input[type="text"],
select {
    width: 100%;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}
    </style>
</head>
<body>
<div class="student-form">
        <h2>Student Details</h2>
        <div class="form-row">
            <label for="student-id">Student ID:</label>
            <input type="text" id="student-id" name="student-id" required>
        </div>
        <div class="form-row">
            <label for="full-name">Full   
 Name:</label>
            <input type="text" id="full-name" name="full-name" required>
        </div>
        <div class="form-row">
            <label for="course">Course:</label>
            <select id="course" name="course">
                <option value="BSIT">BSIT</option>
                <option value="BSCS">BSCS</option>
                </select>
        </div>
        <div class="form-row">
            <label for="year-section">Year & Section:</label>
            <select id="year-section" name="year-section">
                <option value="3A">3A</option>
                <option value="3B">3B</option>
                </select>
        </div>
        <div class="form-row">
            <label for="gender">Gender:</label>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label>
            <input type="radio"   
 id="female" name="gender" value="female">
            <label for="female">Female</label>
        </div>
        <div class="form-row">
            <label for="image">Image:</label>   

            <input type="file" id="image" name="image">
        </div>
        <button type="submit">Submit</button>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
    <script>

        function importCSV() {
            const input = document.getElementById('csvFileInput');
            const file = input.files[0];

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const text = e.target.result;
                    parseCSV(text);
                }
                reader.readAsText(file);
            } else {
                alert("Please select a CSV file to import.");
            }
        }

        function parseCSV(csvText) {
            const rows = csvText.split('\n');
            rows.forEach((row, index) => {
                const columns = row.split(',');
                console.log(`Row ${index + 1}: ${columns}`);
            });
        }
    </script>

</body>
</html>