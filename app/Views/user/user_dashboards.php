<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<title>Instructor | Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMb9jK4g9V1IYpVYYdFdYz0E5ZrN1xYO/bXyduZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.10-0/css/ionicons.min.css" integrity="sha384-E1PoVR6uU/4/XM3y8Nj1RHQKRWpODf3zLe4H8Zr+L8zwJ8YYNkh8VOw0kQmeQ+fx" crossorigin="anonymous">
    <style>
        body { font-family: Arial, sans-serif; }
        .wrapper { display: flex; }
        .main { flex: 10; }
        .row {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            text-align: center;
        }
        .col-lg-3, .col-xs-6 {
            flex: 1;
            max-width: 25%;
            padding: 15px;
            box-sizing: border-box;
        }
        .small-box {
            color: #fff;
            margin-bottom: 20px;
            border-radius: 7px;
            position: relative;
            padding: 5px;
            text-align: center;
        }
        .small-box .inner {
            padding: 10px;
        }
        .small-box h3 {
            font-size: 38px;
            margin: 0;
            font-weight: bold;
        }
        .small-box p {
            font-size: 18px;
            margin: 0;
        }
        .small-box .icon {
            position: absolute;
            top: -10px;
            right: 10px;
            z-index: 0;
            font-size: 60px;
            color: rgba(0, 0, 0, 0.15);
        }
        .small-box-footer {
            display: block;
            padding: 10px;
            background: rgba(0, 0, 0, 0.1);
            color: #fff;
            text-decoration: none;
            position: relative;
            border-radius: 5px;
        }
        .bg-aqua { background-color: #00c0ef; }
        .bg-green { background-color: #00a65a; }
        .bg-red { background-color: #dd4b39; }
        
        .underline {
            clear: both;
            border-bottom: 1px solid #adb5bd;
            margin: 10px 0;
        }
    </style>
    <?= $this->include('head') ?>
</head>
<body>
    <div class="wrapper">
        <?= $this->include('./user/user-sidebar') ?>
        <div class="main">
            <?= $this->include('navbar-header') ?>
            <div class="d-flex">
                <main role="main" class="col-md-12 ml-sm-auto col-lg-12 px-4">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1>DASHBOARD</h1>
                        <div class="d-flex align-items-center">
                            <i class="notification-icon fas fa-bell"></i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>40</h3>
                                    <p>Total Students</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-stalker"></i>
                                </div>
                                <a href="student.php" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>37</h3>
                                    <p>Total Present</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="attendance.php" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-6">
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>3</h3>
                                    <p>Total Absent</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-clock"></i>
                                </div>
                                <a href="attendance.php" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="underline"></div>
                    </div>
                </main>
            </div>
        </div>
    </div>


    <script src="js/app.js"></script>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>




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