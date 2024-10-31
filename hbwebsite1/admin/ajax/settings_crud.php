<?php

require('../inc/db_config.php');
require('../inc/essentials.php');
adminLogin();

if (isset($_POST['action']) && $_POST['action'] == 'get_general') {
    $q = "SELECT * FROM `settings` WHERE `sr_no`=?";
    $values = [1];
    $res = select($q, $values, "i");
    $data = mysqli_fetch_assoc($res);
    echo json_encode($data);
}

if (isset($_POST['action']) && $_POST['action'] == 'upd_general') {
    $frm_data = filteration($_POST);

    $q = "UPDATE `settings` SET `site_title`=?, `site_about`=? WHERE `sr_no`=?";
    $values = [$frm_data['site_title'], $frm_data['site_about'], 1];
    $res = update($q, $values, 'ssi');

    echo $res ? 'success' : 'error';
}

if (isset($_POST['shutdown'])) {
    // Get the value from POST; it's expected to be either 0 or 1
    $shutdown_value = $_POST['shutdown'];

    // Prepare the SQL query to update the shutdown state
    $q = "UPDATE `settings` SET `shutdown`=? WHERE `sr_no`=?";
    $values = [$shutdown_value, 1]; // Update to the new shutdown value
    $res = update($q, $values, 'ii'); // Execute the update function

    // Return the result of the update
    echo $res; // This should return 1 for success or 0 for failure

}
