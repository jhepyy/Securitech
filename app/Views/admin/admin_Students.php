<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>Admin | User Management</title>

    <link href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/rowreorder/1.5.0/css/rowReorder.bootstrap5.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/3.0.2/css/responsive.dataTables.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->

    <style>
        
    </style>
    <?= view('head') ?>


</head>

<body>
    <div class="wrapper">

        <?= view('/admin/admin-sidebar') ?>

        <div class="main">

            <?= view('navbar-header') ?>

            <main class="content">
                <div class="container-fluid p-0">
                    <div class="card-body shadow">

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h2>User Management | Student</h2>
                                        <hr>

                                        <div class="row">
                                            <!-- Import Form -->
                                            <div class="col-md-6 mb-3">
                                                <form id="importForm" action="<?= base_url('admin_Students/import'); ?>" method="post" enctype="multipart/form-data">
                                                    <div class="mb-3">
                                                        <label for="csvFile" class="form-label"><b>CSV File</b></label>
                                                        <input type="file" class="form-control" id="csvFile" name="csvFile" accept=".csv" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <button type="submit" class="btn btn-primary" id="importButton" disabled>Import</button>

                                                        <!-- + New Student Button -->
                                                        <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#addStudent">+ New Student</button>

                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <?php if (session()->getFlashdata('message')) : ?>
                                                <div class="alert alert-success">
                                                    <?= session()->getFlashdata('message') ?>
                                                </div>
                                            <?php endif; ?>

                                            <table id="dataTbale" class="table table-striped" style="width:100%">
                                                <thead style="background-color: #898757">
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
                                                                <button class="btn btn-primary btn-sm edit-btn" type="button" data-toggle="modal" data-target="#editStudent" data-id="<?= $user['id'] ?>" data-sn="<?= $user['sn'] ?>" data-fname="<?= $user['fname'] ?>" data-mname="<?= $user['mname'] ?>" data-lname="<?= $user['lname'] ?>" data-course="<?= $user['course'] ?>" data-year_section="<?= $user['year_section'] ?>" data-sex="<?= $user['sex'] ?>">
                                                                    Edit
                                                                </button>
                                                                <form action="<?= base_url('admin_Students/delete'); ?>" method="post" style="display:inline-block;">
                                                                    <input type="hidden" name="id" value="<?= $user['id'] ?>">
                                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>

                                                </tbody>
                                            </table>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </main>
        </div>
    </div>

    <!-- logout modal -->
    <div class="modal" id="logout" data-backdrop="static" data-keyboard="false" tabindex="-1">
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

    <!-- Add Student -->
    <div class="modal fade" id="addStudent" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="addStudent" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold" id="addStudent">Register New Student</h5>
                    <button type="button" class="close" id="upClose" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="save" action="<?= base_url('admin_Students/save'); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="sn" class="col-sm-3 col-form-label"><b>ID</b></label>
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="downClose" data-dismiss="modal">Close</button>
                    <button type="submit" form="save" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Student Modal -->
    <div class="modal fade" id="editStudent" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="editStudent" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold" id="editStudent">Edit Student</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="edit-form" action="<?= base_url('admin_Students/update'); ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" id="edit-id" name="id">
                        <div class="form-group row">
                            <label for="sn" class="col-sm-3 col-form-label"><b>Student No.</b></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="edit-sn" placeholder="Enter Student Number" name="sn" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 col-form-label"><b>First Name</b></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="edit-fname" placeholder="First Name" name="fname" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mname" class="col-sm-3 col-form-label"><b>Middle Name</b></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="edit-mname" placeholder="Middle Name" name="mname" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 col-form-label"><b>Last Name</b></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="edit-lname" placeholder="Last Name" name="lname" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="course" class="col-sm-3 col-form-label"><b>Course</b></label>
                            <div class="col-sm-9">
                                <select class="custom-select" id="edit-course" name="course" required>
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
                                <select class="custom-select" id="edit-year_section" name="year_section" required>
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
                                    <input type="radio" class="custom-control-input" id="edit-male" name="sex" value="Male" required>
                                    <label class="custom-control-label" for="edit-male">Male</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="edit-female" name="sex" value="Female" required>
                                    <label class="custom-control-label" for="edit-female">Female</label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" form="edit-form" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>

    

    <script src="js/app.js"></script>

    <!-- Scripts -->
    <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/rowreorder/1.5.0/js/dataTables.rowReorder.js"></script>
    <script src="https://cdn.datatables.net/rowreorder/1.5.0/js/rowReorder.bootstrap5.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.2/js/dataTables.responsive.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.2/js/responsive.dataTables.js"></script>

    <!-- Include DataTables Search Highlight Plugin -->
    <script src="https://cdn.datatables.net/plug-ins/1.10.21/features/searchHighlight/dataTables.searchHighlight.min.js"></script>
    <!-- Include Mark.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mark.js/8.11.1/mark.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mark.js/8.11.1/jquery.mark.min.js"></script>


    <script>
        $('#dataTbale').ready(function() {
            $('#dataTbale').DataTable({
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
    </script>

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

        document.getElementById('csvFile').addEventListener('change', function() {
            const importButton = document.getElementById('importButton');
            if (this.files.length > 0) {
                importButton.removeAttribute('disabled');
            } else {
                importButton.setAttribute('disabled', 'disabled');
            }
        });

        // add student script
        $(document).ready(function() {
            $('#save').on('submit', function(e) {
                e.preventDefault(); // Prevent the default form submission

                var formData = new FormData(this); // Create a FormData object from the form

                $.ajax({
                    url: "<?= base_url('admin_Students/save'); ?>", // URL to your controller's save method
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.status === 'success') {
                            $('#addStudent').modal('hide'); // Hide the modal
                            location.reload(); // Optionally, reload the page or update the table
                        } else {
                            alert('An error occurred: ' + response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        alert('An error occurred: ' + error);
                    }
                });
            });
        });


        // edit student or update script
        $(document).ready(function() {
            $('.edit-btn').on('click', function() {
                // Get data from the clicked button
                var id = $(this).data('id');
                var sn = $(this).data('sn');
                var fname = $(this).data('fname');
                var mname = $(this).data('mname');
                var lname = $(this).data('lname');
                var course = $(this).data('course');
                var year_section = $(this).data('year_section');
                var sex = $(this).data('sex');

                // Set data in the modal fields
                $('#edit-id').val(id);
                $('#edit-sn').val(sn);
                $('#edit-fname').val(fname);
                $('#edit-mname').val(mname);
                $('#edit-lname').val(lname);
                $('#edit-course').val(course);
                $('#edit-year_section').val(year_section);

                // Set the radio button for sex
                if (sex == 'Male') {
                    $('#edit-male').prop('checked', true);
                } else {
                    $('#edit-female').prop('checked', true);
                }
            });

            // Delete button handler
            $('.delete-btn').click(function() {
                var id = $(this).data('id');
                if (confirm('Are you sure you want to delete this student?')) {
                    $.ajax({
                        url: '<?= base_url('admin_Students/delete'); ?>/' + id,
                        type: 'POST',
                        success: function(response) {
                            alert('Student deleted successfully!');
                            location.reload();
                        },
                        error: function(xhr, status, error) {
                            alert('An error occurred while deleting the student.');
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>