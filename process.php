<?php
//check if stripe token exist to proceed with payment
if(!empty($_POST['stripeToken'])){
// get token and user details
$stripeToken = $_POST['stripeToken'];
$custName = $_POST['custName'];
$custEmail = $_POST['custEmail'];
$cardNumber = $_POST['cardNumber'];
$cardCVC = $_POST['cardCVC'];
$cardExpMonth = $_POST['cardExpMonth'];
$cardExpYear = $_POST['cardExpYear'];
//include Stripe PHP library
require_once('stripe-php/init.php');
//set stripe secret key and publishable key
$stripe = array(
"secret_key" => "Your_Stripe_Secret_Key",
"publishable_key" => "Your_Stripe_API_Publishable_Key"
);
\Stripe\Stripe::setApiKey($stripe['secret_key']);
//add customer to stripe
$customer = \Stripe\Customer::create(array(
'email' => $custEmail,
'source' => $stripeToken
));
// item details for which payment made
$itemName = "phpzag test item";
$itemNumber = "PHPZAG987654321";
$itemPrice = 50;
$currency = "usd";
$orderID = "SKA987654321";
// details for which payment performed
$payDetails = \Stripe\Charge::create(array(
'customer' => $customer->id,
'amount' => $itemPrice,
'currency' => $currency,
'description' => $itemName,
'metadata' => array(
'order_id' => $orderID
)
));
// get payment details
$paymenyResponse = $payDetails->jsonSerialize();
// check whether the payment is successful
if($paymenyResponse['amount_refunded'] == 0 && empty($paymenyResponse['failure_code']) && $paymenyResponse['paid'] == 1 && $paymenyResponse['captured'] == 1){
// transaction details
$amountPaid = $paymenyResponse['amount'];
$balanceTransaction = $paymenyResponse['balance_transaction'];
$paidCurrency = $paymenyResponse['currency'];
$paymentStatus = $paymenyResponse['status'];
$paymentDate = date("Y-m-d H:i:s");
//insert tansaction details into database
include_once("db.php");
// $insertTransactionSQL = "INSERT INTO tbl_payment(email, item_number, amount, currency_code, txn_id, payment_status, payment_response)
// VALUES('".$custName."','".$custEmail."','".$cardNumber."','".$cardCVC."','".$cardExpMonth."',
// '".$cardExpYear."','".$itemName."','".$itemNumber."','".$itemPrice."','".$paidCurrency."',
// '".$amountPaid."','".$paidCurrency."','".$balanceTransaction."','".$paymentStatus."',
// '".$paymentDate."','".$paymentDate."')";
$insertTransactionSQL = "INSERT INTO tbl_payment(email, item_number, amount, currency_code, txn_id, payment_status, payment_response)
VALUES('".$custEmail."')";


mysqli_query($conn, $insertTransactionSQL) or die("database error: ".
mysqli_error($conn));
$lastInsertId = mysqli_insert_id($conn);
//if order inserted successfully
if($lastInsertId && $paymentStatus == 'succeeded'){
$paymentMessage = "The payment was successful. Order ID: {$lastInsertId}";
} else{
$paymentMessage = "Payment failed!";
}
} else{
$paymentMessage = "Payment failed!";
}
} else{
$paymentMessage = "Payment failed!";
}
echo $paymentMessage;
?>
