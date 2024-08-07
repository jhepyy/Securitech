<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
    <title>SecuriTech - Admin Attendance Log</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-8zr/5mDdyLJFLV1KoOmP6w7cb2XK0yS9Ypgy7MjayNT/p10e8KP+Q4E4m4lEJ5B6b/8JaqXzj2PqViV4W6N2/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .card-body {
            display: flex;
            align-items: center;
            height: 100%;
        }

        .rounded-circle {
            border-radius: 50%;
        }

        .custom-right-align {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .custom-right-align .text-right {
            text-align: right;
        }

        .text-center {
            display: flex;
            flex-direction: column;
            align-items: center;

        }

        .vertical-line {
            width: 4px;
            height: 100%;
            background-color: #6AD003;
            margin-right: 4rem;
        }

        .cards {
            text-align: center;
        }

        .text-blue {
            color: blue;
        }

        .text-bold-black {
            color: black;
            font-weight: bold;
        }

        .text-lightgreen {
            color: #03BC2C;
            font-weight: bold;
        }

        .text-red {
            color: #F50808;
            font-weight: bold;
        }

        .row {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            text-align: center;
            gap: 30px;
        }

        .status {
            display: flex;
            align-items: center;
            gap: 30px;
        }
    </style>
    <?= $this->include('head') ?>
</head>

<body>
    <div class="wrapper">
        <?= $this->include('./admin/admin-sidebar') ?>

        <div class="main">
            <?= $this->include('navbar-header') ?>

            <div class="d-flex">

                <!-- Main content -->
                <main role="main" class="col-md-12 ml-sm-auto col-lg-12 px-4">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">DAILY ATTENDANCE</h1>
                    </div>

                    <div class="row">
                        <div class="card" style="width: 24rem; height: 9rem; border: 2px solid lightgreen; border-radius: 10px; background-color:#DFD2A2">
                            <div class="card-body d-flex align-items-center custom-right-align">
                                <div class="text-center mr-3">
                                    <img src="img/photos/Mr. Martinez.png" alt="Profile Picture" class="rounded-circle" style="width: 50px; height: 50px; ">
                                    <strong>Mr. Martinez</strong>
                                </div>
                                <div class="vertical-line"></div>
                                <div class="cards ">
                                    <h5 class="card-titles" style="color: #0182AB;">Time Duration</h5>
                                    <h5 class="card-time text-bold-black">8:00 AM - 11:00 AM</h5>
                                    <h5 class="text-bold-black">BLIS-2C</h5>
                                    <div class="status">
                                        <h7 class="text-red">NO CLASSES</h7>
                                        <i class="show-attendance" data-feather="eye" onclick="redirectToAdminAttendanceLog()"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card" style="width: 24rem; height: 9rem; border: 2px solid lightgreen; border-radius: 10px; background-color:#DFD2A2">
                            <div class="card-body d-flex align-items-center custom-right-align">
                                <div class="text-center mr-3">
                                    <img src="img/photos/Mr. Rodriquez.png" alt="Profile Picture" class="rounded-circle" style="width: 50px; height: 50px; ">
                                    <strong>Mr. Rodriguez</strong>
                                </div>
                                <div class="vertical-line"></div>
                                <div class="cards ">
                                    <h5 class="card-titles" style="color: #0182AB;">Time Duration</h5>
                                    <h5 class="card-time text-bold-black">1:00 PM - 4:00 PM</h5>
                                    <h5 class="text-bold-black">BSIT-1A</h5>
                                    <div class="status">
                                        <h7 class="text-red">END SESSION</h7>
                                        <i class="show-attendance" data-feather="eye" onclick="redirectToAdminAttendanceLog()"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card" style="width: 24rem; height: 9rem; border: 2px solid lightgreen; border-radius: 10px; background-color:#DFD2A2">
                            <div class="card-body d-flex align-items-center custom-right-align">
                                <div class="text-center mr-3">
                                    <img src="img/photos/Mrs. Smith.png" alt="Profile Picture" class="rounded-circle" style="width: 50px; height: 50px; ">
                                    <strong>Mrs. Smith</strong>
                                </div>
                                <div class="vertical-line"></div>
                                <div class="cards ">
                                    <h5 class="card-titles" style="color: #0182AB;">Time Duration</h5>
                                    <h5 class="card-time text-bold-black">10:00 AM - 1:00 PM</h5>
                                    <h5 class="text-bold-black">BSIS-2A</h5>
                                    <div class="status">
                                        <h7 class="text-red">NO CLASSES</h7>
                                        <i class="show-attendance" data-feather="eye" onclick="redirectToAdminAttendanceLog()"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card" style="width: 24rem; height: 9rem; border: 2px solid lightgreen; border-radius: 10px; background-color:#DFD2A2">
                            <div class="card-body d-flex align-items-center custom-right-align">
                                <div class="text-center mr-3">
                                    <img src="img/photos/Mrs. Lee.png" alt="Profile Picture" class="rounded-circle" style="width: 50px; height: 50px; ">
                                    <strong>Mrs. Lee</strong>
                                </div>
                                <div class="vertical-line"></div>
                                <div class="cards ">
                                    <h5 class="card-titles" style="color: #0182AB;">Time Duration</h5>
                                    <h5 class="card-time text-bold-black">7:00 AM - 10:00 AM</h5>
                                    <h5 class="text-bold-black">BSIT-3C</h5>
                                    <div class="status">
                                        <h7 class=" text-lightgreen">IN SESSION</h7>
                                        <i class="show-attendance" data-feather="eye" onclick="redirectToAdminAttendanceLog()"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="card" style="width: 24rem; height: 9rem; border: 2px solid lightgreen; border-radius: 10px; background-color:#DFD2A2">
                            <div class="card-body d-flex align-items-center custom-right-align">
                                <div class="text-center mr-3">
                                    <img src="img/photos/Mr. Wilson.png" alt="Profile Picture" class="rounded-circle" style="width: 50px; height: 50px;">
                                    <strong>Mr. Wilson</strong>
                                </div>
                                <div class="vertical-line"></div>
                                <div class="cards">
                                    <h5 class="card-titles" style="color: #0182AB;">Time Duration</h5>
                                    <h5 class="card-time text-bold-black">10:00 AM - 1:00 PM</h5>
                                    <h5 class="card-time text-bold-black">BLIS-2A</h5>
                                    <div class="status">
                                        <h7 class="text-red">NO CLASSES</h7>
                                        <i class="show-attendance" data-feather="eye" onclick="redirectToAdminAttendanceLog()"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

            </div>
        </div>
    </div>

    <script src="js/app.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>

    <script>
        function redirectToAdminAttendanceLog() {
            window.location.href = "admin_AttendanceLog";
        }

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