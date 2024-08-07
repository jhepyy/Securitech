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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <style>
        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.19);
            background-color: #FFF9D0;
        }

        .card-body {
            display: flex;
            align-items: center;
            height: 100%;
        }

        .back-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: gray;
            border-radius: 50%;
            color: white;
            text-decoration: none;
        }

        .back-icon:hover {
            background-color: #6AD003;
            color: white;
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
            background-color: lightgreen;
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

        .underline {
            clear: both;
            border-bottom: 2px solid #adb5bd;
            margin: 10px 0;
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
                        <div class="d-flex align-items-center">
                            <a href="admin_AttendanceLogs" class="back-icon mr-3">
                                <i class="fas fa-arrow-left"></i> <!-- Back icon -->
                            </a>
                            <h1 class="h2">Mrs. Lee Class Attendance</h1>
                        </div>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                    <div class="card" style="width: 23rem; height: 6rem; border: 2px solid lightgreen; border-radius: 10px;">
                        <div class="card-body d-flex align-items-center custom-right-align">
                            <div class="text-center mr-3">
                                <img src="img/photos/Mrs. Lee.png" alt="Profile Picture" class="rounded-circle" style="width: 50px; height: 50px; ">
                                <strong>Mrs. Lee</strong>
                            </div>
                            <div class="vertical-line"></div>
                            <div class="cards ">
                                <h5 class="card-titles" style="color: #0182AB;">Time Duration</h5>
                                <h4 class="card-time text-bold-black">7:00 AM - 10:00 AM</h4>
                                <h7 class="text-lightgreen">IN SESSION</h7>
                            </div>
                        </div>
                    </div>

                    <div class="underline" style=" height: 1rem;"></div>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" style=" text-align: center;">
                            <thead style="background-color: #898757; color: white;">
                                <tr>
                                    <th>SUBJECT ID</th>
                                    <th>INSTRUCTOR</th>
                                    <th>DATE</th>
                                    <th>STUDENT NAME</th>

                                    <th>IN-TIME</th>
                                    <th>END-TIME</th>
                                    <th>YEAR & SECTION</th>
                                    <th>REMARKS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>IT 3210</td>
                                    <td>Mrs. Lee</td>
                                    <td>4/17/2024</td>
                                    <td style="text-align: left;">John Phillip Navelino</td>

                                    <td class="text-success">7:02 AM</td>
                                    <td class="text-danger">10:00 AM</td>
                                    <td>3C</td>
                                    <td>PRESENT</td>
                                </tr>
                                <tr>
                                    <td>IT 3210</td>
                                    <td>Mrs. Lee</td>
                                    <td>4/17/2024</td>
                                    <td style="text-align: left;">Jesus Pastoral</td>

                                    <td class="text-success">7:05 AM</td>
                                    <td class="text-danger">10:00 AM</td>
                                    <td>3C</td>
                                    <td>PRESENT</td>
                                </tr>
                                <tr>
                                    <td>IT 3210</td>
                                    <td>Mrs. Lee</td>
                                    <td>4/17/2024</td>
                                    <td style="text-align: left;">Cyrus David Sandrino</td>

                                    <td class="text-success">7:30 AM</td>
                                    <td class="text-danger">10:00 AM</td>
                                    <td>3C</td>
                                    <td>LATE</td>
                                </tr>
                                <tr>
                                    <td>IT 3210</td>
                                    <td>Mrs. Lee</td>
                                    <td>4/17/2024</td>
                                    <td style="text-align: left;">Ralph Dexter Pidoc</td>

                                    <td class="text-success">7:01 AM</td>
                                    <td class="text-danger">10:00 AM</td>
                                    <td>3C</td>
                                    <td>PRESENT</td>
                                </tr>
                                <tr>
                                    <td>IT 3210</td>
                                    <td>Mrs. Lee</td>
                                    <td>4/17/2024</td>
                                    <td style="text-align: left;">Ed Jim Buquid</td>

                                    <td class="text-success">----</td>
                                    <td class="text-danger">----</td>
                                    <td>3C</td>
                                    <td>ABSENT</td>
                                </tr>
                                <tr>
                                    <td>IT 3210</td>
                                    <td>Mrs. Lee</td>
                                    <td>4/17/2024</td>
                                    <td style="text-align: left;">Monica Bondoy</td>

                                    <td class="text-success">7:00 AM</td>
                                    <td class="text-danger">10:00 AM</td>
                                    <td>3C</td>
                                    <td>PRESENT</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="underline"></div>
                    </div>
                </main>

            </div>
        </div>
    </div>
    <script src="js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/rowreorder/1.5.0/js/dataTables.rowReorder.js"></script>
    <script src="https://cdn.datatables.net/rowreorder/1.5.0/js/rowReorder.bootstrap5.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.2/js/dataTables.responsive.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.2/js/responsive.dataTables.js"></script>

    <script>
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