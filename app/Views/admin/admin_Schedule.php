<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<title>Admin | Schedule</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
            font-family: Arial, sans-serif;
        }
        .scheduling-button {
            background-color: #898757;
            font-size: 17px;
            font-weight: bold;
            color: white;
            border: none;
            padding: 10px 90px;
            border-radius: 10px;
            cursor: pointer;
            float: inline-start;
            transition: background-color 0.3s, color 0.3s;
        }
        .scheduling-button:hover {
            background-color: #4DFF20;
            color: black;
            box-shadow: 5px 0px 10px 5px #90EE90;
        }
        .button-wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 10px;
        }
        .underline {
            width: 100%;
            border-bottom: 2px solid #adb5bd;
            margin: 10px 0;
        }
        .table-responsive {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 0 6px 20px rgba(0, 0, 0, 0.1);
            padding: 1rem;
            border-radius: 1rem;
        }
        .container {
            display: flex;
            align-items: center;
        }
        .edit-button {
            display: block;
            margin: 15px auto;
            padding: 10px 20px;
            background-color: #898757;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            float: right;
        }
        .edit-button:hover{
            background-color: #4DFF20;
            color: black;
            box-shadow: 5px 0px 10px 5px #90EE90;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }
        .modal-content {
            background-color: #d3d3d3;
            margin:5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 40%;
            border-radius: 10px;
            position: relative;
        }
        .modal-header {
            display: flex;
            justify-content: center; 
            align-items: center;
            background-color: #898757;
            padding: 5px 90px;
            border-radius: 10px 10px 0 0;
            position: relative; 
        }

        .modal-header h2 {
            margin: 0;
            color: white;
            text-align: center;
            font-size: 25px;
            flex: 1;
        }

        .close {
            color: white;
            font-size: 30px;
            font-weight: bold;
            cursor: pointer;
            position: absolute;
            right: 10px;
            top: 80%;
            transform: translateY(-50%);
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        .form-group {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }
        .form-group label {
            width: 35%;
            margin-right: 10px;
            text-align: right;
        }
        .form-group input,
        .form-group select {
            width: calc(50% - 10px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .submit-button {
            background-color: #898757;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
            transition: background-color 0.3s, color 0.3s;
            display: block;
            width: 20%;
            margin: 20px auto 0;
        }
        .submit-button:hover {
            background-color: #4DFF20;
            color: black;
        }
        .highlight-time {
            background-color: #D5F6BB;
            color: #4DFF20;
        }
        .personnel {
            text-align: left;
        }
    </style>
    <?= $this->include('head') ?>
<body>
    <div class="wrapper">
        <?= $this->include('./admin/admin-sidebar') ?>
        <div class="main">
            <?= $this->include('navbar-header') ?>
            <div class="d-flex">
                <!-- Main content -->
                <main role="main" class="col-md-12 ml-sm-auto col-lg-12 px-4">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">LABORATORY SCHEDULE</h1>
                    </div>
                    <div class="button-wrapper">
                        <button class="scheduling-button" type="button" onclick="openModal()">SCHEDULING</button>
                        <div class="underline"></div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered " style="text-align: center;">
                            <thead style="background-color: #898757;">
                                <tr >
                                    <th>START-TIME</th>
                                    <th>END-TIME</th>
                                    <th>SUBJECT CODE</th>
                                    <th>INSTRUCTOR</th>
                                    <th>DAY</th>
                                    <th>COURSE</th>
                                    <th>YEAR/SEC</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="highlight-time">8:00 AM</td>
                                    <td class="highlight-time">11:00 AM</td>
                                    <td>ISEC 221</td>
                                    <td class="personnel">Mr. Martinez</td>
                                    <td>Monday</td>
                                    <td>BSIS</td>
                                    <td>2C</td>
                                </tr>
                                <tr>
                                    <td class="highlight-time">1:00 PM</td>
                                    <td class="highlight-time">4:00 PM</td>
                                    <td>LIS 123</td>
                                    <td class="personnel">Mr. Rodriguez</td>
                                    <td>Monday</td>
                                    <td>BLIS</td>
                                    <td>1A</td>
                                </tr>
                                <tr>
                                    <td class="highlight-time">7:00 AM</td>
                                    <td class="highlight-time">10:00 AM</td>
                                    <td>IT 3210</td>
                                    <td class="personnel">Mrs. Lee</td>
                                    <td>Wednesday</td>
                                    <td>BSIT</td>
                                    <td>3C</td>
                                </tr>
                                <tr>
                                    <td class="highlight-time">10:00 AM</td>
                                    <td class="highlight-time">1:00 PM</td>
                                    <td>IS 225</td>
                                    <td class="personnel">Mrs. Smith</td>
                                    <td>Tuesday</td>
                                    <td>BSIS</td>
                                    <td>2A</td>
                                </tr>
                                <tr>
                                    <td class="highlight-time">10:00 AM</td>
                                    <td class="highlight-time">1:00 PM</td>
                                    <td>LIS 2210</td>
                                    <td class="personnel">Mr. Wilson</td>
                                    <td>Friday</td>
                                    <td>BLIS</td>
                                    <td>2A</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="underline"></div>
                        <button class="edit-button">EDIT ✏️</button>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <!-- Modal of Scheduling -->
    <div id="schedulingModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>SET NEW SCHEDULE</h2>
                <span class="close" onclick="closeModal()">&times;</span>
            </div>
            <br>
            <form id="schedulingForm">
                <div class="form-group">
                    <label for="subject-code">Subject code:</label>
                    <input type="text" id="subject-code" name="subject-code" required>
                </div>
                <div class="form-group">
                    <label for="instructor">Instructor Name:</label>
                    <input type="text" id="instructor" name="instructor" required>
                </div>
                <div>
                    <label>Set available Day and Time</label>
                </div>
                <div class="form-group">
                    <label for="day">Day:</label>
                    <select id="day" name="day" required>
                        <option value="">Select a day</option>
                        <option value="Monday">Monday</option>
                        <option value="Tuesday">Tuesday</option>
                        <option value="Wednesday">Wednesday</option>
                        <option value="Thursday">Thursday</option>
                        <option value="Friday">Friday</option>
                        <option value="Saturday">Saturday</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="start-time">Start Time:</label>
                    <select id="start-time" name="start-time" required>
                        <option value="">Select a time</option>
                        <option value="8:00 AM">8:00 AM</option>
                        <option value="9:00 AM">9:00 AM</option>
                        <option value="10:00 AM">10:00 AM</option>
                        <option value="11:00 AM">11:00 AM</option>
                        <option value="12:00 PM">12:00 PM</option>
                        <option value="1:00 PM">1:00 PM</option>
                        <option value="2:00 PM">2:00 PM</option>
                        <option value="3:00 PM">3:00 PM</option>
                        <option value="4:00 PM">4:00 PM</option>
                        <option value="5:00 PM">5:00 PM</option>
                    </select>
                
                    <label for="end-time">End Time:</label>
                    <select id="end-time" name="end-time" required>
                        <option value="">Select a time</option>
                        <option value="8:00 AM">8:00 AM</option>
                        <option value="9:00 AM">9:00 AM</option>
                        <option value="10:00 AM">10:00 AM</option>
                        <option value="11:00 AM">11:00 AM</option>
                        <option value="12:00 PM">12:00 PM</option>
                        <option value="1:00 PM">1:00 PM</option>
                        <option value="2:00 PM">2:00 PM</option>
                        <option value="3:00 PM">3:00 PM</option>
                        <option value="4:00 PM">4:00 PM</option>
                        <option value="5:00 PM">5:00 PM</option>
                    </select>
                </div>
               
                <div class="form-group">
                    <label for="course">Course Handle:</label>
                    <select id="course" name="course" required>
                        <option value="">Select a course</option>
                        <option value="BSIS">BSIS</option>
                        <option value="BLIS">BLIS</option>
                        <option value="BSIT">BSIT</option>
                    </select>
                    <label for="year-sec">Year & Section:</label>
                    <select id="year-sec" name="year-sec" required>
                        <option value="">Select a year/section</option>
                        <option value="1A">1A</option>
                        <option value="2A">2A</option>
                        <option value="2C">2C</option>
                        <option value="3C">3C</option>
                    </select>
                </div>
                <button type="submit" class="submit-button">+ADD</button>
            </form>
        </div>
    </div>


    <script src="js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
         // Get the modal
         var modal = document.getElementById("schedulingModal");
        //  opens the modal
        var btn = document.querySelector(".scheduling-button");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // ito naman para sa close button
        span.onclick = function() {
            modal.style.display = "none";
        }

        // Form submission handler
        document.getElementById("schedulingForm").onsubmit = function(event) {
            event.preventDefault();
            // once we add the schedule table should be updated
            modal.style.display = "none";
        }

        function updateTime() {
            var now = new Date();
            var hours = now.getHours();
            var minutes = now.getMinutes();
            var seconds = now.getSeconds();
            var ampm = hours >= 12 ? 'PM' : 'AM';
            hours = hours % 12;
            hours = hours ? hours : 12;
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
        updateTime();
    </script>
</body>

</html>