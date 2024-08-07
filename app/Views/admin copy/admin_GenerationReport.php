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
              
        <!-- Main content -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Generation Reports</h1>
                    <button class="btn btn-outline-danger" href= "#">Logout</button>
                </div>

                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>

                <div class="table-responsive text-center">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
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
                                <td>Mr. Martínez</td>
                                <td>------</td>
                                <td>8:00 AM</td>
                                <td>11:00 AM</td>
                                <td>2C</td>
                                <td><button class="download-btn btn-success">DOWNLOAD</button></td>
                            </tr>
                            <tr>
                                <td>LIS 123</td>
                                <td>Mr. Rodríguez</td>
                                <td>------</td>
                                <td>1:00 PM</td>
                                <td>4:00 PM</td>
                                <td>1A</td>
                                <td><button class="download-btn btn-success">DOWNLOAD</button></td>
                            </tr>
                            <tr>
                                <td>IS 225</td>
                                <td>Mrs. Smith</td>
                                <td>------</td>
                                <td>10:00 AM</td>
                                <td>1:00 PM</td>
                                <td>2A</td>
                                <td><button class="download-btn btn-success">DOWNLOAD</button></td>
                            </tr>
                            <tr>
                                <td>IT 3210</td>
                                <td>Mrs. Lee</td>
                                <td>------</td>
                                <td>7:00 AM</td>
                                <td>10:00 AM</td>
                                <td>3C</td>
                                <td><button class="download-btn btn-success">DOWNLOAD</button></td>
                            </tr>
                            <tr>
                                <td>LIS 2210</td>
                                <td>Mr. Wilson</td>
                                <td>------</td>
                                <td>10:00 AM</td>
                                <td>1:00 PM</td>
                                <td>2A</td>
                                <td><button class="download-btn btn-success">DOWNLOAD</button></td>
                            </tr>
                            <tr>
                            <td>LIS 2356</td>
                                <td>Mr. Anderson</td>
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
    <script>
       
    </script>
</body>
</html>
