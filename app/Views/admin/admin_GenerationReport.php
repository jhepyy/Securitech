<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SecuriTech - Admin Generation Reprts</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .form-inline {
            float: right;
            padding: 6px;
            border: 100%;
            margin-top: 8px;
            margin-right: 16px;
            font-size: 17px;
        }

        .table-responsive {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 0 6px 20px rgba(0, 0, 0, 0.1);
            padding: 1rem;
            border-radius: 1rem;
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
                        <h1 class="h2">GENERATION REPORTS</h1>
                    </div>

                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>

                    <div class="table-responsive text-center">
                        <table class="table table-bordered">
                            <thead style="background-color: #898757;">
                                <tr>
                                    <th>SUBJECT CODE</th>
                                    <th>INSTRUCTOR</th>
                                    <th>DATE</th>
                                    <th>START-TIME</th>
                                    <th>END-TIME</th>
                                    <th>YEAR & SECTION</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ISEC 221</td>
                                    <td style="text-align: left;"> Mr. Martínez </td>
                                    <td>------</td>
                                    <td>8:00 AM</td>
                                    <td>11:00 AM</td>
                                    <td>2C</td>
                                    <td><button class="download-btn btn-success">DOWNLOAD</button></td>
                                </tr>
                                <tr>
                                    <td>LIS 123</td>
                                    <td style="text-align: left;"> Mr. Rodríguez </td>
                                    <td>------</td>
                                    <td>1:00 PM</td>
                                    <td>4:00 PM</td>
                                    <td>1A</td>
                                    <td><button class="download-btn btn-success">DOWNLOAD</button></td>
                                </tr>
                                <tr>
                                    <td>IS 225</td>
                                    <td style="text-align: left;"> Mrs. Smith </td>
                                    <td>------</td>
                                    <td>10:00 AM</td>
                                    <td>1:00 PM</td>
                                    <td>2A</td>
                                    <td><button class="download-btn btn-success">DOWNLOAD</button></td>
                                </tr>
                                <tr>
                                    <td>IT 3210</td>
                                    <td style="text-align: left;"> Mrs. Lee </td>
                                    <td>------</td>
                                    <td>7:00 AM</td>
                                    <td>10:00 AM</td>
                                    <td>3C</td>
                                    <td><button class="download-btn btn-success">DOWNLOAD</button></td>
                                </tr>
                                <tr>
                                    <td>LIS 2210</td>
                                    <td style="text-align: left;"> Mr. Wilson </td>
                                    <td>------</td>
                                    <td>10:00 AM</td>
                                    <td>1:00 PM</td>
                                    <td>2A</td>
                                    <td><button class="download-btn btn-success">DOWNLOAD</button></td>
                                </tr>
                                <tr>
                                    <td>LIS 2356</td>
                                    <td style="text-align: left;"> Mr. Anderson </td>
                                    <td>------</td>
                                    <td>1:00 pM</td>
                                    <td>3:00 PM</td>
                                    <td>4A</td>
                                    <td><button class="download-btn btn-success">DOWNLOAD</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </main>
            </div>
        </div>
    </div>


    <script src="js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

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

    <script>

    </script>
</body>

</html>