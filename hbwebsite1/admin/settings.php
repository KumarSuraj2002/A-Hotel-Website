<?php
require('inc/essentials.php');
adminLogin();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Settings</title>
    <?php require('inc/links.php') ?>
</head>

<body class="bg-light">
    <?php require('inc/header.php') ?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">Settings</h3>

                <!-- General Settings Section -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">General Settings</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#general-s">
                                <i class="bi bi-pencil-square"></i> Edit
                            </button>
                        </div>
                        <h6 class="card-subtitle mb-1 fw-bold">Site Title</h6>
                        <p class="card-text" id="site_title"></p>
                        <h6 class="card-subtitle mb-1 fw-bold">About Us</h6>
                        <p class="card-text" id="site_about"></p>
                    </div>
                </div>

                <!-- General Settings Modal -->
                <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form>
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">General Settings</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Site Title</label>
                                        <input type="text" id="site_title_inp" name="site_title" class="form-control shadow-none">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">About Us</label>
                                        <textarea id="site_about_inp" name="site_about" class="form-control shadow-none" rows="6"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" onclick="upd_general()" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>



                <!-- Shutdown Section-->
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Shutdown Website</h5>
                            <div class="form-check form-switch">
                                <input onchange="upd_shutdown(this.checked ? 1 : 0)" class="form-check-input" type="checkbox" id="shutdown-toggle">
                            </div>
                        </div>
                        <p class="card-text">
                            No customers will be allowed to book hotel rooms when shutdown mode is turned on.
                        </p>
                    </div>
                </div>













            </div>
        </div>
    </div>

    <?php require('inc/scripts.php') ?>
    <script>
        let general_data;

        function get_general() {
            let site_title = document.getElementById('site_title');
            let site_about = document.getElementById('site_about');
            let site_title_inp = document.getElementById('site_title_inp');
            let site_about_inp = document.getElementById('site_about_inp');
            let shutdown_toggle = document.getElementById('shutdown-toggle');

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (this.status == 200) {
                    general_data = JSON.parse(this.responseText);
                    site_title.innerText = general_data.site_title;
                    site_about.innerText = general_data.site_about;

                    // Set input values
                    site_title_inp.value = general_data.site_title;
                    site_about_inp.value = general_data.site_about;

                    // Initialize shutdown toggle based on the general_data
                    shutdown_toggle.checked = general_data.shutdown == 1;
                    shutdown_toggle.value = general_data.shutdown; // 1 or 0
                }
            };
            xhr.send('action=get_general');
        }

        function upd_shutdown(value) {
            let shutdown_value = value ? 1 : 0; // Convert checkbox state to 1 or 0
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (this.status == 200) {
                    if (this.responseText == 1 && general_data.shutdown==0) {
                        alert('Success: Shutdown state updated successfully.'); // Fixed alert
                    } else {
                        alert('Info: Shutdown mode is off.'); // Fixed alert
                    }
                    get_general();
                }
            };
            xhr.send('action=upd_shutdown&shutdown=' + shutdown_value);
        }



        function upd_general() {
            let site_title_val = document.getElementById('site_title_inp').value;
            let site_about_val = document.getElementById('site_about_inp').value;

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (this.status === 200) {
                    if (this.responseText == 1) {
                        console.log('data updated');
                        get_general(); // Refresh displayed data
                    } else {
                        console.log("no changes made");
                    }
                    // Close modal after submission
                    var myModal = document.getElementById('general-s');
                    var modal = bootstrap.Modal.getInstance(myModal);
                    modal.hide();
                }
                if (this.responseText == 1) {
                    alert('success', 'Changes saved!');
                } else {
                    alert('error', 'No Changes made');

                }
            };
            xhr.send('site_title=' + encodeURIComponent(site_title_val) + '&site_about=' + encodeURIComponent(site_about_val) + '&action=upd_general');
        }



        window.onload = function() {
            get_general();
        }
    </script>
</body>

</html>