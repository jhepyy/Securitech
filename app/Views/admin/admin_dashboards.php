<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<title>Admin | Dashboard</title>
    <link href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" rel="stylesheet">

    <style>
    .card-body {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        border-radius: 5px;
        padding-top: 50px; 
        position: relative; 
    }
    .underline {
        clear: both;
        border-bottom: 1px solid #adb5bd;
        margin: 10px 0;
        
    }
    .title {
        font-weight: bold;
        
    }
    .card {
        margin: 35px;
    }
    .d-flex {
        justify-content: center;
        flex-wrap: wrap;
    }
    .circle-oneANDtwo {
        position: absolute;
        top: -40px; /* Position the image above the card body */
        left: 50%;
        transform: translateX(-50%);
        width: 50px;
        height: 50px;
        border-radius: 50%;
        border: 5px solid #6372FA;
    }
    .circle-instructorLee {
        position: absolute;
        top: -40px; /* Position the image above the card body */
        left: 50%;
        transform: translateX(-50%);
        width: 50px;
        height: 50px;
        border-radius: 50%;
        border: 5px solid #8BCC01;
    }
    .circle-request {
        position: absolute;
        top: -40px; /* Position the image above the card body */
        left: 50%;
        transform: translateX(-50%);
        width: 50px;
        height: 50px;
        border-radius: 50%;
        border: 5px solid #FDA3A3;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 10px;
    
    }

    th {
        background-color: #F15A24;
        color: white;
        text-align: center;
    }

    .popup {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 20px;
        background-color: white;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    form {
        display: flex;
        flex-direction: column;
        gap: 10px;
        margin-bottom: 20px;
    }

    label {
        margin-right: 5px;
    }

    input, select, button {
        padding: 5px;
        font-size: 16px;
    }

    .circle-btn {
        background-color: #f4f4f4;
        border: none;
        border-radius: 50%;
        cursor: pointer;
        font-size: 16px;
        height: 50px;
        width: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background-color 0.3s;
        float: right;
    }

    .circle-btn:hover {
        background-color: #ddd;
    }
</style>
<?= $this->include('head') ?>

</head>

<body>
    <div class="wrapper">
        <?= $this->include('./admin/admin-sidebar') ?>

        <div class="main">
            <?= $this->include('navbar-header') ?>

            <main class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="card-header">
                            <h2>DASHBOARD</h2>
                        </div>
                        <div class="underline"></div>
                        <div class="d-flex" style="text-align: center;">
                            <div class="card text-center">
                                <div class="card-body student-card" style="background-color: #6372FA;">
                                    <img src="img/photos/student-image.jpg" alt="Student Image" class="circle-oneANDtwo">
                                    <h5 class="title">Total Student</h5>
                                    <a href="#" class="card-text-button">
                                        <h1 class="card-text" style="background-color: white; border-radius: 7px; border: 1px solid black;">614</h1>
                                    </a>
                                </div>
                            </div>
                            <div class="card text-center">
                                <div class="card-body instructor-card" style="background-color: #6372FA;">
                                    <img src="img/photos/instructor.png" alt="Instructor Image" class="circle-oneANDtwo">
                                    <h5 class="title">Total Instructor</h5>
                                    <a href="#" class="card-text-button">
                                        <h1 class="card-text" style="background-color: white; border-radius: 7px; border: 1px solid black;">5</h1>
                                    </a>
                                </div>
                            </div>
                            <div class="card text-center">
                                <div class="card-body lee-card" style="background-color: #8BCC01;">
                                    <img src="img/photos/teacher-lee.png" alt="Mrs. Lee Image" class="circle-instructorLee ">
                                    <h5 class="title">Mrs. Lee</h5>
                                    <a href="#" class="card-text-button">
                                        <h5 class="card-text" style="background-color: white; border-radius: 7px; border: 1px solid black; color: black;">On Duty</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="card text-center">
                                <div class="card-body request-card" style="background-color: #FDA3A3;">
                                    <img src="img/photos/request.png" alt="Request Image" class="circle-request">
                                    <h5 class="title">Request</h5>
                                    <a href="#" class="card-text-button">
                                        <h1 class="card-text" style="background-color: white; border-radius: 7px; border: 1px solid black;">1</h1>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="underline" style="border-bottom: 2px solid gray;"></div>
                        <h3>Laboratory Use Schedule</h3>
                        <button id="edit-btn" class="circle-btn">✏️</button></td>
                            <table id="schedule">
                                <thead>
                                    <tr>
                                        <th>Time</th>
                                        <th>Monday</th>
                                        <th>Tuesday</th>
                                        <th>Wednesday</th>
                                        <th>Thursday</th>
                                        <th>Friday</th>
                                        <th>Saturday</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>7:00 - 7:30</td>
                                        <td id="mon1"></td>
                                        <td id="tue1"></td>
                                        <td id="wed1"></td>
                                        <td id="thu1"></td>
                                        <td id="fri1"></td>
                                        <td id="sat1"></td>
                                        
                                    </tr>
                                    <tr>
                                        <td>7:30 - 8:00</td>
                                        <td id="mon2"></td>
                                        <td id="tue2"></td>
                                        <td id="wed2"></td>
                                        <td id="thu2"></td>
                                        <td id="fri2"></td>
                                        <td id="sat2"></td>
                                    </tr>
                                    <tr>
                                        <td>8:00 - 8:30</td>
                                        <td id="mon3"></td>
                                        <td id="tue3"></td>
                                        <td id="wed3"></td>
                                        <td id="thu3"></td>
                                        <td id="fri3"></td>
                                        <td id="sat3"></td>
                                    </tr>
                                    <tr>
                                        <td>8:30 - 9:00</td>
                                        <td id="mon4"></td>
                                        <td id="tue4"></td>
                                        <td id="wed4"></td>
                                        <td id="thu4"></td>
                                        <td id="fri4"></td>
                                        <td id="sat4"></td>
                                    </tr>
                                    <tr>
                                        <td>9:00 - 9:30</td>
                                        <td id="mon5"></td>
                                        <td id="tue5"></td>
                                        <td id="wed5"></td>
                                        <td id="thu5"></td>
                                        <td id="fri5"></td>
                                        <td id="sat5"></td>
                                    </tr>
                                </tbody>
                            </table>

                            <div id="addClassPopup" class="popup">
                                <h2>Add/Edit Class</h2>
                                <form id="addClassForm">
                                    <label for="day">Day:</label>
                                    <select id="day">
                                        <option value="mon">Monday</option>
                                        <option value="tue">Tuesday</option>
                                        <option value="wed">Wednesday</option>
                                        <option value="thu">Thursday</option>
                                        <option value="fri">Friday</option>
                                        <option value="sat">Saturday</option>
                                    </select>
                                    <label for="startTime">Start Time:</label>
                                    <select id="startTime">
                                        <option value="1">7:00 AM</option>
                                        <option value="2">7:30 AM</option>
                                        <option value="3">8:00 AM</option>
                                        <option value="4">8:30 AM</option>
                                        <option value="5">9:00 AM</option>
                                    </select>
                                    <label for="endTime">End Time:</label>
                                    <select id="endTime">
                                        <option value="2">7:30 AM</option>
                                        <option value="3">8:00 AM</option>
                                        <option value="4">8:30 AM</option>
                                        <option value="5">9:00 AM</option>
                                        <option value="6">9:30 AM</option>
                                    </select>
                                    <label for="class">Subject Name:</label>
                                    <input type="text" id="class" required>
                                    <button type="submit">Add Class</button>
                                    <button type="button" id="closePopup">Cancel</button>
                                </form>
                            </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="js/app.js"></script>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    
    <script src="https://cdn.datatables.net/rowreorder/1.5.0/js/dataTables.rowReorder.js"></script>
    <script src="https://cdn.datatables.net/rowreorder/1.5.0/js/rowReorder.bootstrap5.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.2/js/dataTables.responsive.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.2/js/responsive.dataTables.js"></script>
   
   

    <!-- this is for laboratory use schedule / button  -->
    <script>
       document.getElementById('edit-btn').addEventListener('click', function() {
        document.getElementById('addClassPopup').style.display = 'block';
    });

    document.getElementById('addClassForm').addEventListener('submit', function(event) {
        event.preventDefault();
        
        const day = document.getElementById('day').value;
        const timeSlot = document.getElementById('time').value;
        const className = document.getElementById('class').value;
        
        const cellId = day + timeSlot;
        const cell = document.getElementById(cellId);
        
        if (cell) {
            cell.textContent = className;
            document.getElementById('addClassPopup').style.display = 'none';
        } else {
            alert('Invalid time slot');
        }
    });

//     document.getElementById('closePopup').addEventListener('click', function() {
//         document.getElementById('addClassPopup').style.display = 'none';
//     });

//     const express = require('express');
// const mysql = require('mysql');
// const app = express();
// const port = 3000;

// app.use(express.json());

// // Create a connection to the database
// const connection = mysql.createConnection({
//     host: 'localhost',
//     user: 'root',
//     password: 'password',
//     database: 'schedule_db'
// });

// connection.connect();

// // Endpoint to get all classes
// app.get('/classes', (req, res) => {
//     connection.query('SELECT * FROM classes', (error, results) => {
//         if (error) throw error;
//         res.json(results);
//     });
// });

// // Endpoint to add a class
// app.post('/classes', (req, res) => {
//     const { day, time_slot, class_name } = req.body;
//     connection.query('INSERT INTO classes (day, time_slot, class_name) VALUES (?, ?, ?)', [day, time_slot, class_name], (error, results) => {
//         if (error) throw error;
//         res.json({ id: results.insertId, day, time_slot, class_name });
//     });
// });

// // Start the server
// app.listen(port, () => {
//     console.log(`Server running at http://localhost:${port}`);
// });

       

        function updateTime() {
            var now = new Date();
            var hours = now.getHours();
            var minutes = now.getMinutes();
            var seconds = now.getSeconds();
            var ampm = hours >= 12 ? 'PM' : 'AM';
            hours = hours % 12;
            hours = hours ? hours : 12; // the hour '0' should be '12'
            minutes = minutes < 10 ? '0' + minutes : minutes;
            seconds = seconds < 10 ? '0' + seconds : seconds;
            var strTime = hours + ':' + minutes + ':' + seconds + ' ' + ampm;
            document.getElementById('time').textContent = strTime;

            var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
            var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
            var day = days[now.getDay()];
            var month = months[now.getMonth()];
            var date = now.getDate();
            var year = now.getFullYear();
            var fullDate = day + ', ' + month + ' ' + date + ', ' + year;
            document.getElementById('date').textContent = fullDate;
        }

        setInterval(updateTime, 1000);
        updateTime(); // initial call to display time immediately
    </script>
</body>

</html>