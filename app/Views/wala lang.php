 <!-- Add New Student Modal -->
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
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" form="save" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- This is the Student List Table -->
                <div class="table-responsive text-center">
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
                            <?php if (count($user_students) > 0): ?>
                                <?php foreach ($user_students as $user): ?>
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
                                            <button class="btn btn-primary btn-sm edit-btn" type="button" data-toggle="modal" data-target="#editStudent"
                                                data-id="<?= $user['id'] ?>" 
                                                data-sn="<?= $user['sn'] ?>" 
                                                data-fname="<?= $user['fname'] ?>" 
                                                data-mname="<?= $user['mname'] ?>" 
                                                data-lname="<?= $user['lname'] ?>" 
                                                data-course="<?= $user['course'] ?>" 
                                                data-year_section="<?= $user['year_section'] ?>" 
                                                data-sex="<?= $user['sex'] ?>">
                                                Edit
                                            </button>
                                            <button class="btn btn-danger btn-sm delete-btn" data-id="<?= $user['id'] ?>">
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="10" class="text-center">No users found</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                    <?= $pager->links() ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Student Modal -->
    <div class="modal fade" id="editStudent" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold" id="staticBackdropLabel">Edit Student</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="edit" action="<?= base_url('admin_Students/edit'); ?>" method="post" enctype="multipart/form-data">
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
                    <button type="submit" form="edit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

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

       //call modal in new student here!

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
                console.log(Row ${index + 1}: ${columns});
            });
        }
        

        $(document).ready(function() {
        // Edit button handler
        $('.edit-btn').click(function() {
            var id = $(this).data('id');
            var sn = $(this).data('sn');
            var fname = $(this).data('fname');
            var mname = $(this).data('mname');
            var lname = $(this).data('lname');
            var course = $(this).data('course');
            var year_section = $(this).data('year_section');
            var sex = $(this).data('sex');

            $('#edit-id').val(id);
            $('#edit-sn').val(sn);
            $('#edit-fname').val(fname);
            $('#edit-mname').val(mname);
            $('#edit-lname').val(lname);
            $('#edit-course').val(course);
            $('#edit-year_section').val(year_section);
            if(sex == 'Male') {
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