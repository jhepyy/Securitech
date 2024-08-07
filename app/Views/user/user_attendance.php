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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        font-family: Arial, sans-serif;
    }
    .generate-button {
        background-color: #898757;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        float: right;
        transition: background-color 0.3s, color 0.3s;
    }
    .generate-button:hover {
        background-color: #4DFF20;
        color: black;
        box-shadow: 5px 0px 10px 5px #90EE90;
    }
    .underline {
        clear: both;
        border-bottom: 2px solid #adb5bd;
        margin: 10px 0;
    } 
    .table-responsive {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 0 6px 20px rgba(0, 0, 0, 0.1);
        padding: 1rem; /* padding to enhance the shadow effect */
        border-radius: 1rem; /*  rounded corners to the shadow box */
    }
    .divider {
        height: 20px;
        width: 4px;
        background-color: #00FF00; /* Green color */
        margin: 0 10px;
    }
    .dividers {
        height: 20px;
        width: 4px;
        background-color: #BC0000; /* Green color */
        margin: 0 10px;   
    }
        .container {
        display: flex;
        align-items: center;
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

                <!-- Main content -->
                <main role="main" class="col-md-12 ml-sm-auto col-lg-12 px-4">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Class Attendance</h1>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>

                   
                        <div class="card-body text-center" style="width: 12rem; height: 2.7rem; background-color: #D9D9D9; border-radius: 5px;">
                            <h6 class="card-title" >Time Duration</h6>
                            <div class="container">
                            <div class="divider"></div>
                            <div class="text">7:00 AM</div>
                            <div class="dividers"></div>
                            <div class="text">10:00 AM</div>
                            </div>
                        </div>
                    


                    <button class="generate-button" type="submit">Generate Attendance</button>
                    <div class="underline" style=" height: 1rem;"></div>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" style=" text-align: center;">
                            <thead style="background-color: #898757; color: white;">
                                <tr>
                                    <th>SUBJECT ID</th>
                                    <th>STUDENT NAME</th>
                                    <th>YEAR & SECTION</th>
                                    <th>IN-TIME</th>
                                    <th>END-TIME</th>
                                    <th>REMARKS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>IT 3210</td>
                                    <td style="text-align: left;">John Phillip Navelino</td>
                                    <td>3C</td>
                                    <td class="text-success">7:02 AM</td>
                                    <td class="text-danger">10:00 AM</td>
                                    <td>Present</td>
                                </tr>
                                <tr>
                                    <td>IT 3210</td>
                                    <td style="text-align: left;">Jesus Pastoral</td>
                                    <td>3C</td>
                                    <td class="text-success">7:05 AM</td>
                                    <td class="text-danger">10:00 AM</td>
                                    <td>Present</td>
                                </tr>
                                <tr>
                                    <td>IT 3210</td>
                                    <td style="text-align: left;">Cyrus David Sandrino</td>
                                    <td>3C</td>
                                    <td class="text-success">7:30 AM</td>
                                    <td class="text-danger">10:00 AM</td>
                                    <td>Late</td>
                                </tr>
                                <tr>
                                    <td>IT 3210</td>
                                    <td style="text-align: left;">Ralph Dexter Pidoc</td>
                                    <td>3C</td>
                                    <td class="text-success">7:01 AM</td>
                                    <td class="text-danger">10:00 AM</td>
                                    <td>Present</td>
                                </tr>
                                <tr>
                                    <td>IT 3210</td>
                                    <td style="text-align: left;">Ed Jim Buquid</td>
                                    <td>3C</td>
                                    <td class="text-success">----</td>
                                    <td class="text-danger">----</td>
                                    <td>Absent</td>
                                </tr>
                                <tr>
                                    <td>IT 3210</td>
                                    <td style="text-align: left;">Monica Bondoy</td>
                                    <td>3C</td>
                                    <td class="text-success">7:00 AM</td>
                                    <td class="text-danger">10:00 AM</td>
                                    <td>Present</td>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    

  

    <script>
        $('#example').ready(function() {
            $('#example').DataTable({
                // scrollX: true,
                // "searching": false, order: [[0, 'asc']],
                rowReorder: true,
                pagingType: "simple_numbers",
                responsive: true,
                rowReorder: {
                    selector: "td:nth-child(2)",
                },
                // stateSave: false,
                mark: true,
                language: {
                    searchPlaceholder: "Search Here",
                },
            });

            // Highlight search term
            table.on("draw", function() {
                var body = $(table.table().body());
                var searchTerm = table.search();

                // Clear previous highlights
                body.unmark();

                if (searchTerm) {
                    // Highlight new search term in specific columns (excluding the Actions column)
                    body.find("td").each(function() {
                        var cell = $(this);
                        // Highlight in all columns except the last one (assuming it's the Actions column)
                        if (!cell.hasClass("action-cell")) {
                            cell.mark(searchTerm);
                        }
                    });
                }
            });
        });

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