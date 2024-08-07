<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>SecuriTech - Admin Inventory</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .manage-button {
            background-color: #F2DE95;
            color: black;
            border: 3px solid #C1BEBE;
            border-radius: 5px;
            padding: 10px 20px;
            margin: 0 10px;
            cursor: pointer;
        }

        .barrow-button {
            background-color: #898757;
            color: white;
            border: none;
            border-radius: 2px;
            padding: 10px 20px;
            margin: 0 10px;
            cursor: pointer;
        }

        .barrow-button:hover {
            background-color: #F2DE95;
            color: black;
            border-radius: 5px;
            border: 3px solid #C1BEBE;
        }

        .newItem-button {
            background-color: #898757;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            float: right;
            transition: background-color 0.3s, color 0.3s;
        }

        .newItem-button:hover {
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
            padding: 1rem;
            border-radius: 1rem;
        }

        .dropdown-content {
            display: none;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            position: relative;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown {
            position: relative;
            display: inline-block;
            width: 100%;
            text-align: left;
        }

        .arrow-button {
            background: none;
            border: none;
            cursor: pointer;
            float: right;
        }

        .arrow-icon {
            width: 16px;
            height: 16px;
            transition: transform 0.3s;
        }

        .arrow-icon.down {
            transform: rotate(180deg);
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
<<<<<<< HEAD
=======
            background-color: rgb(0, 0, 0);
>>>>>>> b9644395677148fc936ebf4b5a476cb5c60f3ccd
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
<<<<<<< HEAD
            margin: 100px auto;
            padding: 20px;
            border: 1px solid #888;
            width: 50%;
            max-width: 600px;
            border-radius: 10px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
            text-align: center;
        }

        .form-group label {
            display: inline-block;
            margin-bottom: 5px;
        }

        .form-group label {
            display: inline-block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: calc(70% - 10px);
            padding: 5px;


        }

        .quantity-group {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
        }

        .quantity-group label {
            margin-right: 5px;
        }

        .quantity-group input {
            width: 60px;
            padding: 5px;
            text-align: center;
            margin: 0 10px;
        }

        .quantity-button {
            background-color: #898757;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            margin: 0 5px;
            border-radius: 5px;
            font-size: 12px;

        }

        .quantity-button:hover {
            background-color: #F2DE95;
            color: black;
            border: 3px solid #C1BEBE;
        }

        .button-group {
            display: flex;
            justify-content: center;
            /* Center the buttons horizontally */
        }

        .modal-button {
            background-color: #898757;
            color: white;
            border: none;
            padding: 10px 20px;
            margin: 5px;
            cursor: pointer;
            border-radius: 5px;
        }

        .modal-button.cancel {
            background-color: #b4aa5e;
        }

        .modal-button.add {
            background-color: #4DFF20;
            margin-left: 50px;
        }

        .modal-button:hover {
            opacity: 0.7;
=======
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            border-radius: 10px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
>>>>>>> b9644395677148fc936ebf4b5a476cb5c60f3ccd
        }
    </style>
    <?= $this->include('head') ?>
</head>

<body>
    <div class="wrapper">
        <?= $this->include('./admin/admin-sidebar') ?>

        <div class="main">
            <?= $this->include('navbar-header') ?>

            <div class="d-flex">
                <!-- Main content -->
                <main role="main" class="col-md-12 ml-sm-auto col-lg-12 px-4">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">EQUIPMENT INVENTORY</h1>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>

                    <div>
                        <button class="manage-button">Manage Inventory</button>
                        <button class="barrow-button">Borrow Request</button>
                    </div>

                    <button class="newItem-button" id="newItemButton" type="button">+ New Item</button>

                    <div class="underline" style="height: 1rem;"></div>

                    <div class="table-responsive text-center">
                        <table class="table table-bordered">
                            <thead style="background-color: #898757;">
                                <tr>
                                    <th>Equipment Name</th>
                                    <th>Serial no.</th>
                                    <th>Quantity</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="background-color: #DCDCDC">
                                        <div class="dropdown">
                                            Monitor
                                            <button class="arrow-button" onclick="toggleDropdown(this)">
                                                <img class="arrow-icon" src="img/photos/arrow-right.png" alt="Arrow">
                                            </button>
                                            <div class="dropdown-content">
                                                <a href="#" onclick="showSerial('Dell', 'monitor-serial', 'monitor-quantity')">Dell</a>
                                                <a href="#" onclick="showSerial('LG', 'monitor-serial', 'monitor-quantity')">LG</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td id="monitor-serial"></td>
                                    <td id="monitor-quantity"></td>
                                    <td><button class="edit-btn btn-success">Edit</button></td>
                                </tr>
                                <tr>
                                    <td style="background-color: #DCDCDC">
                                        <div class="dropdown">
                                            Keyboard
                                            <button class="arrow-button" onclick="toggleDropdown(this)">
                                                <img class="arrow-icon" src="img/photos/arrow-right.png" alt="Arrow">
                                            </button>
                                            <div class="dropdown-content">
                                                <a href="#" onclick="showSerial('Logitech', 'keyboard-serial', 'keyboard-quantity')">Logitech</a>
                                                <a href="#" onclick="showSerial('Microsoft', 'keyboard-serial', 'keyboard-quantity')">Microsoft</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td id="keyboard-serial"></td>
                                    <td id="keyboard-quantity"></td>
                                    <td><button class="edit-btn btn-success">Edit</button></td>
                                </tr>
                                <tr>
                                    <td style="background-color: #DCDCDC">
                                        <div class="dropdown">
                                            Mouse
                                            <button class="arrow-button" onclick="toggleDropdown(this)">
                                                <img class="arrow-icon" src="img/photos/arrow-right.png" alt="Arrow">
                                            </button>
                                            <div class="dropdown-content">
                                                <a href="#" onclick="showSerial('inphic', 'mouse-serial', 'mouse-quantity')">inphic</a>
                                                <a href="#" onclick="showSerial('SteelSeries', 'mouse-serial', 'mouse-quantity')">SteelSeries</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td id="mouse-serial"></td>
                                    <td id="mouse-quantity"></td>
                                    <td><button class="edit-btn btn-success">Edit</button></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="underline"></div>
                    </div>
                </main>
            </div>
        </div>
    </div>

<<<<<<< HEAD
    <!-- Add New Equipment Modal -->
    <div class="modal" id="newItemModal">
        <div class="modal-content">
            <h2>Add New Equipment</h2>
            <form id="newItemForm">
                <div class="form-group">
                    <label for="itemName">Equipment Name:</label>
                    <input type="text" id="itemName" name="itemName" required>
                </div>
                <div class="form-group">
                    <label for="itemSerial">Serial no.:</label>
                    <input type="text" id="itemSerial" name="itemSerial" required>
                </div>
                <div class="form-group quantity-group">
                    <label for="itemQuantity">Quantity:</label>
                    <button type="button" class="quantity-button" onclick="updateQuantity(-1)">-</button>
                    <input type="number" id="itemQuantity" name="itemQuantity" value="1" min="1" required>
                    <button type="button" class="quantity-button" onclick="updateQuantity(1)">+</button>
                </div>

                <div class="form-group button-group">
                    <button type="button" class="modal-button cancel" onclick="closeModal()">Cancel</button>
                    <button type="submit" class="modal-button add">Add</button>
                </div>

=======
    <!-- Modal HTML -->
    <div id="newItemModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Add New Item</h2>
            <form id="newItemForm">
                <label for="itemName">Item Name:</label>
                <input type="text" id="itemName" name="itemName" required><br><br>
                <label for="itemSerial">Serial Number:</label>
                <input type="text" id="itemSerial" name="itemSerial" required><br><br>
                <label for="itemQuantity">Quantity:</label>
                <input type="number" id="itemQuantity" name="itemQuantity" required><br><br>
                <button type="submit">Add Item</button>
>>>>>>> b9644395677148fc936ebf4b5a476cb5c60f3ccd
            </form>
        </div>
    </div>

    <script src="js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    <script>
        function toggleDropdown(button) {
            const arrowIcon = button.querySelector('.arrow-icon');
            const dropdownContent = button.nextElementSibling;

            dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' : 'block';
            arrowIcon.classList.toggle('down');
        }

        function showSerial(brand, serialId, quantityId) {
            const serialNo = {
                'Dell': 'SE2422H',
                'LG': '123ABCD4A123',
                'Logitech': 'GK1G5JJ',
                'Microsoft': '1HJN2DHD',
                'inphic': '70HGED31',
                'SteelSeries': 'DHR24F7B3'
            };

            const quantities = {
                'Dell': 10,
                'LG': 10,
                'Logitech': 15,
                'Microsoft': 15,
                'inphic': 20,
                'SteelSeries': 20

            };

            document.getElementById(serialId).textContent = serialNo[brand] || '';
            document.getElementById(quantityId).textContent = quantities[brand] || '';
        }

<<<<<<< HEAD
        // Modal functionality
        document.getElementById('newItemButton').addEventListener('click', function() {
            document.getElementById('newItemModal').style.display = 'block';
        });

        document.getElementById('newItemForm').addEventListener('submit', function(event) {
            event.preventDefault();
            alert('New item successfully added!');
            closeModal();
        });

        function updateQuantity(amount) {
            var quantityInput = document.getElementById('itemQuantity');
            var currentQuantity = parseInt(quantityInput.value);
            if (currentQuantity + amount > 0) {
                quantityInput.value = currentQuantity + amount;
            }
        }

        function closeModal() {
            document.getElementById('newItemModal').style.display = 'none';
        }

        function toggleDropdown(button) {
            var dropdownContent = button.nextElementSibling;
            dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' : 'block';
            var arrowIcon = button.querySelector('.arrow-icon');
            arrowIcon.classList.toggle('down');
        }

        function showSerial(serialNumber, serialId, quantityId) {
            document.getElementById(serialId).innerText = serialNumber;
            document.getElementById(quantityId).innerText = '1'; // You can set the quantity dynamically based on your logic
        }

        // Search modal
=======
        // Get the modal
        var modal = document.getElementById("newItemModal");

        // Get the button that opens the modal
        var btn = document.getElementById("newItemButton");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        // Optional: Handle form submission
        document.getElementById("newItemForm").onsubmit = function(event) {
            event.preventDefault();
            // Add logic to handle form data
            alert("New item added!");
            modal.style.display = "none";
        }
>>>>>>> b9644395677148fc936ebf4b5a476cb5c60f3ccd
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