<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SecuriTech - Admin User Management</title>
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
                    <h1 class="h2">User Management - Instructor</h1>
                    <button class="btn btn-outline-danger" href= "#">Logout</button>
                </div>

                <!-- <div class="mb-3">
                        <input type="file" class="file" id="csvFile" accept=".csv">
                        <button type="button" class="btn btn-primary" onclick="importCSV()">Import</button>
                        <button class="btn btn-success" type="button" onclick="openForm()">+ New Instructor</button>
                </div> -->

             <!-- <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    for line only!
                 </div> -->
  
                 <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>

                <div class="mb-3">
                    <input type="file" class="file" id="csvFile" accept=".csv">
                    <button type="button" class="btn btn-primary" onclick="importCSV()">Import</button>
                    <button class="btn btn-success" type="button" data-toggle="modal" data-target="#staticBackdrop">+ New Instructor</button> <!-- Button trigger modal -->

                    <!-- modal body -->
                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">     
                        <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title font-weight-bold" id="staticBackdropLabel">Register New Instructor</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>
                                <div class="modal-body">
                                    <div class="form-group col-auto">
                                        <label for="instructorId" class="my-1 mr-2"><b>ID</b></label>
                                        <input type="text" class="form-control" placeholder="Enter Instructor ID" name="instructorId">

                                        <label for="fullName" class="my-1 mr-2"><b>Full Name</b></label>
                                        <input type="text" class="form-control" placeholder="Enter Full Name" name="fullName">

                                        <label class="my-1 mr-2" for="position"><b>Position</b></label>
                                        <select class="custom-select my-1 mr-sm-2" id="position">
                                            <option selected>Choose...</option>
                                            <option value="1">Instructor</option>
                                        </select>

                                        <label><b>Sex</b></label><br>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="male" name="gender" required>
                                            <label class="custom-control-label" for="male">Male</label>
                                        </div>

                                        <div class="custom-control custom-radio mb-3">
                                            <input type="radio" class="custom-control-input" id="female" name="gender" required>
                                            <label class="custom-control-label" for="female">Female</label>
                                        </div>
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

              <!--  <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                        List of Users
                    </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Student</a>
                            <a class="dropdown-item" href="#">Instructor</a>
                            <a class="dropdown-item" href="#">Staff</a>
                    </div>
                </div> -->

                <div class="table-responsive text-center">
                    <table class="table table-striped table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>ID</th>
                                <th>Picture</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Sex</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>C1233</td>
                                <td><img src="https://via.placeholder.com/50" alt="Picture" class="img-thumbnail"></td>
                                <td>John Phillip Navelino</td>
                                <td>Instructor</td>
                                <td>Male</td>
                                <td>
                                    <button class="btn btn-primary btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                        </svg>Edit
                                    </button>
                                    <button class="btn btn-danger btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                        </svg>Delete
                                    </button>
                                </td>
                            </tr>
                            <tr>
                            <td>2</td>
                                <td>C1233</td>
                                <td><img src="https://via.placeholder.com/50" alt="Picture" class="img-thumbnail"></td>
                                <td>Jesus Patoral</td>
                                <td>Instructor</td>
                                <td>Male</td>
                                <td>
                                <button class="btn btn-primary btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                        </svg>Edit
                                    </button>
                                    <button class="btn btn-danger btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                        </svg>Delete
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>C1233</td>
                                <td><img src="https://via.placeholder.com/50" alt="Picture" class="img-thumbnail"></td>
                                <td>Cyrus David Sandrino</td>
                                <td>Instructor</td>
                                <td>Male</td>
                                <td>
                                <button class="btn btn-primary btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                        </svg>Edit
                                    </button>
                                    <button class="btn btn-danger btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                        </svg>Delete
                                    </button>
                                </td>
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

        function importCSV() {
            const input = document.getElementById('csvFileInput');
            const file = input.files[0];

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const text = e.target.result;
                    parseCSV(text);
                }
                reader.readAsText(file);
            } else {
                alert("Please select a CSV file to import.");
            }
        }

        function parseCSV(csvText) {
            const rows = csvText.split('\n');
            rows.forEach((row, index) => {
                const columns = row.split(',');
                console.log(`Row ${index + 1}: ${columns}`);
            });
        }
    </script>

</body>
</html>