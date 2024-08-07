<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SecuriTech - Admin Schedule</title>
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

        .form-popup {
            display: none;
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            border: 3px solid #f1f1f1;
            z-index: 9;
            background-color: white;
            padding: 20px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
        }

        .form-container {
            max-width: 500px;
        }

        .form-container input,
        .form-container select {
            width: 100%;
            margin: 10px 0;
            padding: 15px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        .form-container .btn {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            width: 100%;
            margin-bottom: 10px;
            opacity: 0.8;
        }

        .form-container .btn:hover {
            opacity: 1;
        }

        .form-group label {
            display: block;
            text-align: left;
            /* or right */
            margin-bottom: .5rem;
        }
    </style>
</head>
<body>
    <div class="d-flex">

            <!-- Main -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Schedule</h1>
                    <button class="btn btn-outline-danger" href= "#">Logout</button>
                </div>

                <div class="mb-3">
                    <button type="button" class="btn btn-secondary btn-lg btn-block" data-toggle="modal" data-target="#staticBackdrop">SCHEDULING</button> <!-- Button trigger modal -->

                    <!-- modal body -->
                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">     
                        <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title font-weight-bold" id="staticBackdropLabel">Schedule</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>
                                <div class="modal-body">
                                    <div class="form-group col-auto">

                                        <label class="my-1 mr-2" for="startTime"><b>Start-Time</b></label>
                                        <select class="custom-select my-1 mr-sm-2" id="startTime">
                                            <option selected>Choose...</option>
                                            <option value="1">7:00 AM</option>
                                            <option value="2">8:00 AM</option>
                                            <option value="3">9:00 AM</option>
                                            <option value="4">10:00 AM</option>
                                            <option value="5">11:00 AM</option>
                                            <option value="6">12:00 PM</option>
                                            <option value="7">1:00 PM</option>
                                            <option value="8">2:00 PM</option>
                                            <option value="9">3:00 PM</option>
                                            <option value="10">4:00 PM</option>
                                            <option value="11">5:00 PM</option>
                                            <option value="12">6:00 PM</option>
                                            <option value="13">7:00 PM</option>
                                            <option value="14">8:00 PM</option>
                                            </select>

                                        <label class="my-1 mr-2" for="endtTime"><b>End-Time</b></label>
                                        <select class="custom-select my-1 mr-sm-2" id="endTime">
                                            <option selected>Choose...</option>
                                            <option value="1">7:00 AM</option>
                                            <option value="2">8:00 AM</option>
                                            <option value="3">9:00 AM</option>
                                            <option value="4">10:00 AM</option>
                                            <option value="5">11:00 AM</option>
                                            <option value="6">12:00 PM</option>
                                            <option value="7">1:00 PM</option>
                                            <option value="8">2:00 PM</option>
                                            <option value="9">3:00 PM</option>
                                            <option value="10">4:00 PM</option>
                                            <option value="11">5:00 PM</option>
                                            <option value="12">6:00 PM</option>
                                            <option value="13">7:00 PM</option>
                                            <option value="14">8:00 PM</option>
                                        </select>

                                        <label for="subjectCode" class="my-1 mr-2"><b>Subject Code</b></label>
                                        <input type="text" class="form-control" placeholder="Enter Subject Code" name="subjectCode">

                                        <label for="fullName" class="my-1 mr-2"><b>Instructor Name</b></label>
                                        <input type="text" class="form-control" placeholder="Enter Full Name" name="fullName">

                                        <label class="my-1 mr-2" for="day"><b>Day</b></label>
                                        <select class="custom-select my-1 mr-sm-2" id="day">
                                            <option selected>Choose...</option>
                                            <option value="1">Monday</option>
                                            <option value="2">Tuesday</option>
                                            <option value="3">Wednesday</option>
                                            <option value="4">Thursday</option>
                                            <option value="5">Friday</option>
                                            <option value="6">Saturday</option>
                                            <option value="7">Sunday</option>
                                        </select>

                                        <label class="my-1 mr-2" for="course"><b>Course</b></label>
                                        <select class="custom-select my-1 mr-sm-2" id="course">
                                            <option selected>Choose...</option>
                                            <option value="1">BSIT</option>
                                            <option value="2">BSCS</option>
                                            <option value="3">BSIS</option>
                                            <option value="4">BLIS</option>
                                        </select>

                                        <label for="yearSection" class="my-1 mr-2"><b>Year & Section</b></label>
                                        <input type="text" class="form-control" placeholder="Enter Year & Section" name="yearSection">
                                    </div>  
                                 </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save</button>
                                </div>
                                </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                    <!-- for line only -->
                </div>

                <table class="table table-bordered text-center">
                <thead class="thead-dark">
                <tr>
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
                    <td>8:00 AM</td>
                    <td>11:00 AM</td>
                    <td>ISEC 221</td>
                    <td>Mr. Martínez</td>
                    <td>Monday</td>
                    <td>BSIS</td>
                    <td>2C</td>
                </tr>
                <tr>
                    <td>1:00 PM</td>
                    <td>4:00 PM</td>
                    <td>LIS 123</td>
                    <td>Mr. Rodríguez</td>
                    <td>Monday</td>
                    <td>BLIS</td>
                    <td>1A</td>
                </tr>
                <tr>
                    <td>7:00 AM</td>
                    <td>10:00 AM</td>
                    <td>IT 3210</td>
                    <td>Mrs. Lee</td>
                    <td>Wednesday</td>
                    <td>BSIT</td>
                    <td>3C</td>
                </tr>
                <tr>
                    <td>10:00 AM</td>
                    <td>1:00 PM</td>
                    <td>IS 225</td>
                    <td>Mrs. Smith</td>
                    <td>Tuesday</td>
                    <td>BSIS</td>
                    <td>2A</td>
                </tr>
                <tr>
                    <td>10:00 AM</td>
                    <td>1:00 PM</td>
                    <td>LIS 2210</td>
                    <td>Mr. Wilson</td>
                    <td>Friday</td>
                    <td>BLIS</td>
                    <td>2A</td>
                </tr>
                </tbody>
            </table>
                <button class="btn btn-success my-2 my-sm-0 align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                    </svg>Edit
                </button>
            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
    <script>
       
    </script>

</body>
</html>