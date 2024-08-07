<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SecuriTech - Admin User Management</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
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
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center mb-4 pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">User Management - Students</h1>
                <button type="submit" class="btn btn-outline-danger" data-toggle="modal" data-target="#staticBackdrop">Logout</button>

                <!-- logout modal -->
                <div class="modal" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Ready to Leave?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                <p>Select "Logout" below if you are ready to end your current session.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <form class="form-inline my-3 my-lg-0" method="post" action="<?= site_url('logout'); ?>">
                                    <button class="btn btn-primary" type="submit">Logout</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- search form -->
            <form class="form-inline my-3 my-lg-0" method="get" action="admin_Students">
                <input type="text" name="search" class="form-control mr-sm-2" value="<?= esc($search) ?>" placeholder="Search by Student Number">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>

            <div class="mb-3">
                <input type="file" class="file" id="csvFile" accept=".csv">
                <button type="button" class="btn btn-primary" onclick="importCSV()">Import</button>
                <button class="btn btn-success" type="button" data-toggle="modal" data-target="#addStudent">+ New Student</button> <!-- Button trigger modal -->

                <!-- add new student modal -->
                <div class="modal fade" id="addStudent" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title font-weight-bold" id="staticBackdropLabel">Register New Student</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group col-auto">

                                    <div class="modal-body">
                                        <form id="save" action="<?= site_url('admin_Students/save'); ?>" method="post" enctype="multipart/form-data">
                                            <div class="form-group row">
                                                <label for="sn" class="col-sm-3 col-form-label"><b>Student Number</b></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="sn" placeholder="Enter Student Number" name="sn" required>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="picture" class="col-sm-3 col-form-label"><b>Picture</b></label>
                                                <div class="col-sm-9">
                                                    <input type="file" class="form-control-file" id="picture" name="picture" required>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="fname" class="col-sm-3 col-form-label"><b>First Name</b></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="fname" placeholder="First Name" name="fname" required>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="mname" class="col-sm-3 col-form-label"><b>Middle Name</b></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="mname" placeholder="Middle Name" name="mname" required>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-3 col-form-label"><b>Last Name</b></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="lname" placeholder="Last Name" name="lname" required>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="course" class="col-sm-3 col-form-label"><b>Course</b></label>
                                                <div class="col-sm-9">
                                                    <select class="custom-select" id="course" name="course" required>
                                                        <option selected>Choose...</option>
                                                        <option value="BSIT">BSIT</option>
                                                        <option value="BSCS">BSCS</option>
                                                        <option value="BSIS">BSIS</option>
                                                        <option value="BLIS">BLIS</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="year_section" class="col-sm-3 col-form-label"><b>Year & Section</b></label>
                                                <div class="col-sm-9">
                                                    <select class="custom-select" id="year_section" name="year_section" required>
                                                        <option selected>Choose...</option>
                                                        <option value="3A">3A</option>
                                                        <option value="3B">3B</option>
                                                        <option value="3C">3C</option>
                                                        <option value="3D">3D</option>
                                                        <option value="3E">3E</option>
                                                        <option value="3F">3F</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label"><b>Sex</b></label>
                                                <div class="col-sm-9">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" id="male" name="sex" value="Male" required>
                                                        <label class="custom-control-label" for="male">Male</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" id="female" name="sex" value="Female" required>
                                                        <label class="custom-control-label" for="female">Female</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" form="save" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-responsive text-center">

                    <?php if (session()->getFlashdata('message')) : ?>
                        <div class="alert alert-success">
                            <?= session()->getFlashdata('message') ?>
                        </div>
                    <?php endif; ?>

                    <table class="table table-striped table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Student Number</th>
                                <th>Picture</th>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Last Name</th>
                                <th>Course</th>
                                <th>Year & Section</th>
                                <th>Sex</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (count($user_students) > 0) : ?>
                                <?php foreach ($user_students as $user) : ?>
                                    <tr>
                                        <td><?= esc($user['id']); ?></td>
                                        <td><?= esc($user['sn']); ?></td>
                                        <td><img src="data:image/jpeg;base64,<?= base64_encode($user['picture']); ?>" alt="User Picture" width="50"></td>
                                        <td><?= esc($user['fname']); ?></td>
                                        <td><?= esc($user['mname']); ?></td>
                                        <td><?= esc($user['lname']); ?></td>
                                        <td><?= esc($user['course']); ?></td>
                                        <td><?= esc($user['year_section']); ?></td>
                                        <td><?= esc($user['sex']); ?></td>
                                        <td>
                                            <div class="d-flex flex-column">
                                                <button class="btn btn-primary btn-sm edit-btn d-flex align-items-center mb-2" type="button" data-toggle="modal" data-target="#editStudent<?= esc($user['id']); ?>" value="<?= esc($user['id']); ?>">
                                                    <span class="material-symbols-outlined me-1">edit</span>
                                                    Edit
                                                </button>


                                                <!-- The Modal -->
                                                <div class="modal fade" id="editStudent<?= $user['id'] ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title font-weight-bold" id="staticBackdropLabel">Edit Student</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form id="edit" action="<?= base_url('admin_Students/edit/' . $user['id']); ?>" method="POST" enctype="multipart/form-data">

                                                                    <input type="hidden" name="id" id="id">

                                                                    <div class="form-group row">
                                                                        <label for="sn" class="col-sm-3 col-form-label"><b>Student Number</b></label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" class="form-control" value="<?= $user['sn'] ?>" id="sn" placeholder="Enter Student Number" name="sn" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="picture" class="col-sm-3 col-form-label"><b>Picture</b></label>
                                                                        <div class="col-sm-9">
                                                                            <input type="file" class="form-control-file" id="picture" name="picture">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="fname" class="col-sm-3 col-form-label"><b>First Name</b></label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" class="form-control" id="fname" placeholder="First Name" name="fname" value="<?= $user['fname'] ?>" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="mname" class="col-sm-3 col-form-label"><b>Middle Name</b></label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" class="form-control" id="mname" placeholder="Middle Name" name="mname" value="<?= $user['mname'] ?>" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="lname" class="col-sm-3 col-form-label"><b>Last Name</b></label>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" class="form-control" id="lname" placeholder="Last Name" name="lname" value="<?= $user['lname'] ?>" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="course" class="col-sm-3 col-form-label"><b>Course</b></label>
                                                                        <div class="col-sm-9">
                                                                            <select class="custom-select" id="course" name="course" required>
                                                                                <option value="">Choose...</option>
                                                                                <option value="BSIT" <?= $user['course'] == 'BSIT' ? 'selected' : '' ?>>BSIT</option>
                                                                                <option value="BSCS" <?= $user['course'] == 'BSCS' ? 'selected' : '' ?>>BSCS</option>
                                                                                <option value="BSIS" <?= $user['course'] == 'BSIS' ? 'selected' : '' ?>>BSIS</option>
                                                                                <option value="BLIS" <?= $user['course'] == 'BLIS' ? 'selected' : '' ?>>BLIS</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="year_section" class="col-sm-3 col-form-label"><b>Year & Section</b></label>
                                                                        <div class="col-sm-9">
                                                                            <select class="custom-select" id="year_section" name="year_section" required>
                                                                                <option value="" <?= empty($user['year_section']) ? 'selected' : '' ?>>Choose...</option>
                                                                                <option value="3A" <?= $user['year_section'] == '3A' ? 'selected' : '' ?>>3A</option>
                                                                                <option value="3B" <?= $user['year_section'] == '3B' ? 'selected' : '' ?>>3B</option>
                                                                                <option value="3C" <?= $user['year_section'] == '3C' ? 'selected' : '' ?>>3C</option>
                                                                                <option value="3D" <?= $user['year_section'] == '3D' ? 'selected' : '' ?>>3D</option>
                                                                                <option value="3E" <?= $user['year_section'] == '3E' ? 'selected' : '' ?>>3E</option>
                                                                                <option value="3F" <?= $user['year_section'] == '3F' ? 'selected' : '' ?>>3F</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-3 col-form-label"><b>Sex</b></label>
                                                                        <div class="col-sm-9">
                                                                            <div class="custom-control custom-radio">
                                                                                <input type="radio" class="custom-control-input" id="male" name="sex" value="Male" <?= $user['sex'] == 'Male' ? 'checked' : '' ?> required>
                                                                                <label class="custom-control-label" for="male">Male</label>
                                                                            </div>
                                                                            <div class="custom-control custom-radio">
                                                                                <input type="radio" class="custom-control-input" id="female" name="sex" value="Female" <?= $user['sex'] == 'Female' ? 'checked' : '' ?> required>
                                                                                <label class="custom-control-label" for="female">Female</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="submit" form="edit" class="btn btn-primary">Save</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <button class="btn btn-danger btn-sm delete-btn d-flex align-items-center">
                                                    <span class="material-symbols-outlined me-1">delete</span>
                                                    Delete
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="8" class="text-center">No users found</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                    <?= $pager->links() ?>
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

        // function editStudent(id) {
        //     $.ajax({
        //         url: '<?= base_url('updateStudent') ?>/' + id,
        //         method: 'GET',
        //         success: function(response) {
        //             console.log(response);
        //             $('#id').val(response.id);
        //             $('#sn').val(response.sn);
        //             $('#fname').val(response.fname);
        //             $('#mname').val(response.mname);
        //             $('#lname').val(response.lname);
        //             $('#course').val(response.course);
        //             $('#year_section').val(response.year_section);
        //             if (response.sex === 'Male') {
        //                 $('#male').prop('checked', true);
        //             } else if (response.sex === 'Female') {
        //                 $('#female').prop('checked', true);
        //             }
        //             $('#editStudent').modal('show');
        //         }
        //     });
        // }

        $(document).on('click', '.edit-btn', function(e) {
            e.preventDefault();
            var id = $(this).val();
            // console.log(userID);
            // // alert(userID);

            $.ajax({
                type: "GET",
                url: "/editUser/" + id,
                success: function(response) {
                    // console.log(response);
                    if (response.status == 404) {
                        Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: "No User Found!!!",
                        });
                        $("#updateUserModal .close").click()
                    } else {
                        // console.log(response.student.name);
                        $('#id').val(response.id);
                        $('#sn').val(response.sn);
                        $('#fname').val(response.fname);
                        $('#mname').val(response.mname);
                        $('#lname').val(response.lname);
                        $('#course').val(response.course);
                        $('#year_section').val(response.year_section);
                    }
                }
            });
        });
    </script>

</body>

</html>