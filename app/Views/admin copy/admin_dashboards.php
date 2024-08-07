<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SecuriTech - Admin Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
          body {
            font-family: Arial, sans-serif;
        }
        .main-content {
            margin-left: 200px;
        }
        .card {
            margin: 20px 0;
        }
        .nav-link {
            color: black;
        }
        .lab-schedule {
            margin: 20px 0;
        }
        .lab-schedule td {
            width: 14%;
            text-align: center;
        }
        .lab-schedule .time {
            width: 10%;
        }
        .time-slot {
            background-color: lightgreen;
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                    <button class="btn btn-outline-danger" href= "#">Logout</button>
                </div>
                <div class="d-flex justify-content-around">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Total Student</h5>
                        <h1 class="card-text">614</h1>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Total Instructor</h5>
                        <h1 class="card-text">5</h1>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Mrs. Lee</h5>
                        <p class="card-text">On Duty</p>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Request</h5>
                        <h1 class="card-text">1</h1>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
             <!-- for line only -->
            </div>

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Laboratory Use Schedule</h1>
            </div>

            <div class="lab-schedule table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark ">
                        <tr>
                            <th class="time">Time</th>
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
                            <td class="time">7-8</td>
                            <td class="time-slot"></td>
                            <td class
                            class="time-slot"></td>
                            <td class="time-slot"></td>
                            <td class="time-slot"></td>
                            <td class="time-slot"></td>
                        </tr>
                        <tr>
                            <td class="time">8-9</td>
                            <td class="time-slot"></td>
                            <td class="time-slot"></td>
                            <td class="time-slot"></td>
                            <td class
                            class="time-slot"></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
    <script>
       
    </script>
</body>
</html>
