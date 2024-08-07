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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
    body {
        font-family: Arial, sans-serif;
    }
 
    .table-responsive {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 0 6px 20px rgba(0, 0, 0, 0.1);
            padding: 1rem; /* padding to enhance the shadow effect */
            border-radius: 1rem; /*  rounded corners to the shadow box */
    }
    .button {
        padding: 10px 20px;
        border: none;
        background-color: #898757;
        cursor: pointer;
        color: white;
        border-radius: 5px;
    }
    .button:hover {
        background-color: #4DFF20;
        color: black;
        box-shadow: 5px 0px 10px 5px #90EE90;
    }
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        border: 1px solid #4DFF20;
        padding: 10px;
        text-align: center;
    }

    th {
        background-color: #A76121;
        color: white;
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
        background-color: #93AD47; /* Green color */
        margin: 0 10px;
    }

    .text {
        font-size: 14px;
        color: #333;
    }
    .underline {
        clear: both;
        border-bottom: 2px solid #adb5bd;
        margin: 10px 0;
    } 
    .container {
        display: flex;
        align-items: center;
        margin-top: 25px;
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
                <main role="main" class="col-md-12 ml-sm-auto col-3g-12 px-4">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">View Schedule for Laboratory</h1>
                        <div class="buttons">
                            <button class="button" data-toggle="modal" data-target="#schedulingModal">SCHEDULING</button>
                            <button class="button" data-toggle="modal" data-target="#calendarModal"><i class="fas fa-calendar-alt"></i></button>
                        </div>
                    </div>
                
                    <div class="table-responsive text-center">
                        <table>
                            <thead>
                                <tr>
                                    <th>Time</th>
                                    <th>Monday</th>
                                    <th>Tuesday</th>
                                    <th>Wednesday</th>
                                    <th>Thursday</th>
                                    <th>Friday</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>7:00 - 8:00</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>8:00 - 9:00</td>
                                    <td></td>
                                    <td style="background-color: #4DFF20;">IT 3210<br>Mrs. Lee</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>9:00 - 10:00</td>
                                    <td style="background-color: #93AD47;">ISEC 221<br>Mr. Martinez</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>10:00 - 11:00</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>11:00 - 12:00</td>
                                    <td></td>
                                    <td style="background-color: #93AD47;">IS 225<br>Mrs. Smith</td>
                                    <td></td>
                                    <td></td>
                                    <td style="background-color: #93AD47;">LIS 2210<br>Mr. Wilson</td>
                                </tr>
                                <tr>
                                    <td>12:00 - 1:00</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>1:00 - 2:00</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>2:00 - 3:00</td>
                                    <td style="background-color: #93AD47;">LIS 123<br>Mr. Rodriguez</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>3:00 - 4:00</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="underline"></div>
                        <div class="container">
                            <div class="divider"></div>
                            <div class="text">Your Schedule</div>
                            <div class="dividers"></div>
                            <div class="text">Other</div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <!-- Scheduling Modal -->
<div class="modal fade" id="schedulingModal" tabindex="-1" aria-labelledby="schedulingModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="schedulingModalLabel" >Request Schedule</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="courseName">Course Name</label>
                        <input type="text" class="form-control" id="courseName" required>
                    </div>
                    <div class="form-group">
                        <label for="instructorName">Instructor Name</label>
                        <input type="text" class="form-control" id="instructorName" required>
                    </div>
                    <div class="form-group">
                        <label for="dayOfWeek">Day of the Week</label>
                        <select class="form-control" id="dayOfWeek" required>
                            <option>Monday</option>
                            <option>Tuesday</option>
                            <option>Wednesday</option>
                            <option>Thursday</option>
                            <option>Friday</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="timeSlot">Time Slot</label>
                        <select class="form-control" id="timeSlot" required>
                            <option>7:00 - 8:00</option>
                            <option>8:00 - 9:00</option>
                            <option>9:00 - 10:00</option>
                            <option>10:00 - 11:00</option>
                            <option>11:00 - 12:00</option>
                            <option>12:00 - 1:00</option>
                            <option>1:00 - 2:00</option>
                            <option>2:00 - 3:00</option>
                            <option>3:00 - 4:00</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Calendar Modal -->
<div class="modal fade" id="calendarModal" tabindex="-1" aria-labelledby="calendarModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="calendarModalLabel">Calendar View</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Calendar placeholder -->
                <div id="calendar"></div>
            </div>
        </div>
    </div>
</div>


    <script src="js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />

    <script>
    $(document).ready(function() {
        $('#calendar').fullCalendar({
            // Customize calendar options here
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            defaultDate: moment().format('YYYY-MM-DD'),
            navLinks: true,
            editable: true,
            eventLimit: true,
            events: [
                // Sample events
                {
                    title: 'IT 3210 - Mrs. Lee',
                    start: moment().startOf('week').add(1, 'days').set({ hour: 8, minute: 0 }),
                    end: moment().startOf('week').add(1, 'days').set({ hour: 9, minute: 0 }),
                    color: '#4DFF20'
                },
                {
                    title: 'ISEC 221 - Mr. Martinez',
                    start: moment().startOf('week').add(1, 'days').set({ hour: 9, minute: 0 }),
                    end: moment().startOf('week').add(1, 'days').set({ hour: 11, minute: 0 }),
                    color: '#93AD47'
                },
                {
                    title: 'IS 225 - Mrs. Smith',
                    start: moment().startOf('week').add(2, 'days').set({ hour: 11, minute: 0 }),
                    end: moment().startOf('week').add(2, 'days').set({ hour: 12, minute: 0 }),
                    color: '#93AD47'
                },
                {
                    title: 'LIS 2210 - Mr. Wilson',
                    start: moment().startOf('week').add(4, 'days').set({ hour: 11, minute: 0 }),
                    end: moment().startOf('week').add(4, 'days').set({ hour: 12, minute: 0 }),
                    color: '#93AD47'
                },
                {
                    title: 'LIS 123 - Mr. Rodriguez',
                    start: moment().startOf('week').add(4, 'days').set({ hour: 14, minute: 0 }),
                    end: moment().startOf('week').add(4, 'days').set({ hour: 15, minute: 0 }),
                    color: '#93AD47'
                }
            ]
        });
    });
</script>

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