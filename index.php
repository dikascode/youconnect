<?php

ob_start();
    //start session 
    session_start();
    //include config
    include('config.php');

   
    // require("admin/index.php");
    // require("admin/admin_functions.php");

    include("classes/meRaviQr/qrlib.php");
    include('classes/Messages.php');
    include('classes/Mail.php');
    include('classes/Bootstrap.php');
    include('classes/Controller.php');
    include('classes/Model.php');

    include('controllers/home.php');
    include('controllers/events.php');
    include('controllers/transactions.php');
    // include('controllers/about.php');
    // include('controllers/team.php');
    include('controllers/contact.php');
    include('controllers/category.php');

    include('models/home.php');
    include('models/event.php');
    include('models/transaction.php');
    // include('models/about.php');
    // include('models/team.php');
    include('models/contact.php');
    include('models/category.php');



    $bootstrap = new Bootstrap($_GET);

    //print_r($_GET);

    $controller = $bootstrap->createController();

    if($controller) {
        $controller->executeAction();
    }


    // flutter wave api
function flutter_wave (){
  
if (isset($_SESSION['total_price']) && $_SESSION['total_price'] > 0 ){

$rave = <<<DELIMETER
<input type="submit" class="btn btn-primary flutter_btn" style="cursor:pointer;" value="Pay Now" id="submit" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://ravesandboxapi.flutterwave.com/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
<script type="text/javascript">
 
  document.addEventListener("DOMContentLoaded", function(event) {
    document.getElementById('submit').addEventListener('click', function () {
        let cust_email      = document.getElementById('email').value;
        let cust_number     = document.getElementById('number').value;
        let cust_name       = document.getElementById('name').value;
    


    var flw_ref = "", chargeResponse = "", trxref = "UCONNECT"+ Math.random(), API_publicKey = "FLWPUBK_TEST-d6f4e974028b46334e8689fa520f4078-X";

    getpaidSetup(
      {
        PBFPubKey: "FLWPUBK_TEST-d6f4e974028b46334e8689fa520f4078-X",
      	customer_email: cust_email,
      	amount: {$_SESSION['ticket_total_price']},
        customer_phone: cust_number,
        currency: "NGN",
        cust_name: cust_name,
      	txref: "UCONNECT"+ Math.random(),
      	meta: [{metaname:"flightID", metavalue: "AP1234"}],
        onclose:function(response) {
        },
        callback:function(response) {
          currency = "NGN"
          amount = {$_SESSION['ticket_total_price']};
          txref = response.tx.txRef, chargeResponse = response.tx.chargeResponseCode;
          if (chargeResponse == "00" || chargeResponse == "0") {
            window.location = "index?controller=transactions&txref="+txref+"&amt="+amount+"&cur="+currency+"&name="+cust_name; //Add your success page here
          } else {
            window.location = "index/transactions/fail/";  //Add your failure page here
          }
        }
      }
    );
    });
  });
</script>

DELIMETER;

echo $rave;
// https://youconnect.herokuapp.com/
// window.location = "index?controller=transactions&txref="+txref+"&amt="+amount+"&cur="+currency+"&name="+cust_name;
    }

}

?>
