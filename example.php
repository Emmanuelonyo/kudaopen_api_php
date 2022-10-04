<?php
header('content-type: application/json');
require "vendor/autoload.php";

use Technolix\KudaopenApiPhp\KudabankController;

//ENVIRONMENT: @String "PRODUCTION" or "DEVELOPMENT"

$environment = "DEVELOPMENT";

$Kudabank = (new KudabankController)
        ->Initialize("emmanuelonyo34@gmail.com", "6PZFIceatyxJAq9T4pd2", $environment);


        
//  echo $Kudabank->name_enquiry(["beneficiaryAccountNumber"=> '1100000734','bankCode' => '999129']);
//  echo $Kudabank->bank_list();
//  echo $Kudabank->create_virtual_account(["email"=> 'emmanuelonyo34@gmail.com', "phoneNumber"=>"08074224016","lastName"=>"Onyo", "firstName"=>"Emmanuel", "trackingReference"=> "12456522155421"]);
// echo $Kudabank->retrieve_virtual_account(["trackingReference"=> 'emmanuelonyo34@gmail.com']);

echo $Kudabank->retrieve_virtual_account_balance(["trackingReference"=> 'emmanuelonyo34@gmail.com']);


/**
 * BELOW ARE LISTS OF AVAILABLE METHODS
 * getToken
 * bank_list
 * name_enquiry
 * retrieve_virtual_account
 * create_virtual_account
 * retrieve_virtual_account_balance
 * single_fund_transfer
 * transaction_status_query
 * virtual_account_fund_transfer
 * retrieve_main_balance
 * 
 */
