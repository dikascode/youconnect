<?php

include("../../config.php");
include("../admin_functions.php");


    if(isset($_GET['delete_order_id'])) {

        $query = query("DELETE FROM orders WHERE order_id =" . escape_string($_GET['delete_order_id']) ."");
        confirm($query);


        set_message("Order Deleted");
        redirect("index.php?orders");


    }else {
        set_message("No Order Deleted");
        redirect("index.php?orders");

    }

?>