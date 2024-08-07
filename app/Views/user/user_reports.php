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
    .pdf-button{
        background: transparent;
        color: #FF0000;
        border: 2px solid #FF0000;
        font-size: 15px;
        float: right;
        letter-spacing: 1px;
        cursor: pointer;
        padding: 5px 15px;
        border-radius: 7px;
        
    }
    .pdf-button:hover {
        background-color: #FF0000;
        color: white;
        -webkit-transition: all 0.4s;
        -moz-transition: all 0.4s;
        transition: all 0.4s;
    }
    .dropdown-row {
        display: flex;
        align-items: center;
        background-color: #898757;
        padding: 5px;
        border-radius: 5px;
        color: white;
        }

        .dropdown-row select {
            margin-right: 10px;
            background-color: #FEFFD2;
            color: block;
            border: 1px solid block;
        }

        .dropdown-row label {
            margin-right: 10px;
            font-weight: bold;
            text-align: center;
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
                        <h1 class="h2">Generate Attendance Reports</h1>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                    
                    <div class="dropdown-row mb-3">
                        <label for="record_month"><b>Find Records</b></label>
                        <select class="form-select" id="record_month" name="record_month" required>
                            <option selected disabled>Choose Month...</option>
                            <option value="#">January</option>
                            <option value="#">February</option>
                            <option value="#">March</option>
                            <option value="#">April</option>
                            <option value="#">May</option>
                            <option value="#">June</option>
                            <option value="#">July</option>
                            <option value="#">August</option>
                            <option value="#">September</option>
                            <option value="#">October</option>
                            <option value="#">November</option>
                            <option value="#">December</option>
                        </select>

                        <select class="form-select " id="record_day" name="record_day" required>
                            <option selected disabled>Choose Day...</option>
                            <option value="#">1</option>
                            <option value="#">2</option>
                            <option value="#">3</option>
                            <option value="#">4</option>
                            <option value="#">5</option>
                            <option value="#">6</option>
                            <option value="#">7</option>
                            <option value="#">8</option>
                            <option value="#">9</option>
                            <option value="#">10</option>
                            <option value="#">11</option>
                            <option value="#">12</option>
                            <option value="#">13</option>
                            <option value="#">14</option>
                            <option value="#">15</option>
                            <option value="#">16</option>
                            <option value="#">17</option>
                            <option value="#">18</option>
                            <option value="#">19</option>
                            <option value="#">20</option>
                            <option value="#">21</option>
                            <option value="#">22</option>
                            <option value="#">23</option>
                            <option value="#">24</option>
                            <option value="#">25</option>
                            <option value="#">26</option>
                            <option value="#">27</option>
                            <option value="#">28</option>
                            <option value="#">29</option>
                            <option value="#">30</option>
                            <option value="#">31</option>
                        </select>

                        <select class="form-select" id="record_year" name="record_year" required>
                            <option selected disabled>Choose Year...</option>
                            <option value="#">2021</option>
                            <option value="#">2022</option>
                            <option value="#">2023</option>
                            <option value="#">2024</option>
                        </select>
                    </div>
                        
                       

                    <button id="generatePDF" class="pdf-button">
                        <i class="fas fa-file-pdf"></i> PDF
                    </button>
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
   

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script>
    document.getElementById('generatePDF').addEventListener('click', function () {
        const { jsPDF } = window.jspdf;
        const doc = new jsPDF();

        // to get the table content
        var table = document.getElementById('dataTable');
        var rows = table.querySelectorAll('tr');

        let y = 10;
        rows.forEach(function (row) {
            let cells = row.querySelectorAll('th, td');
            let x = 10;
            cells.forEach(function (cell) {
                doc.text(cell.innerText, x, y);
                x += 35; 
            });
            y += 10; 
        });

        doc.save('table.pdf');
    });
</script>


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