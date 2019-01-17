<?php

return [

     //Specify the environment mpesa is running, sandbox or production
     'mpesa_env' => 'sandbox',
    /*-----------------------------------------
    |The App consumer key
    |------------------------------------------
    */
    'consumer_key'   => '',  

    /*-----------------------------------------
    |The App consumer Secret
    |------------------------------------------
    */                     
    'consumer_secret' => ' ',     
    
    /*-----------------------------------------
    |The paybill number
    |------------------------------------------
    */
    'paybill'         => '', 
    
    /*-----------------------------------------
    |The Lipa Na Mpesa Paybill Number SGA key
    |------------------------------------------
    */
    'lipa_na_mpesa'  => '',
    
    /*-----------------------------------------
    |Lipa Na Mpesa online checkout password
    |------------------------------------------
    */
    'lipa_na_mpesa_key' => '', 
                         
    /*-----------------------------------------
    |Initiator Username.
    |------------------------------------------
    */
    'initiator_username' => '',

    /*-----------------------------------------
    |Initiator Password
    |------------------------------------------
    */
    'initiator_password' => '',

    /*-----------------------------------------
    |Test phone Number
    |------------------------------------------
    */
    'test_msisdn ' => '',
    
    /*-----------------------------------------
    |Lipa na Mpesa Online callback url
    |------------------------------------------
    */
    'lnmocallback' => '',
    
     /*-----------------------------------------
    |C2B  Validation url
    |------------------------------------------
    */ 
    'c2b_validate_callback' => '',

    /*-----------------------------------------
    |C2B confirmation url
    |------------------------------------------
    */
    'c2b_confirm_callback' => '',
     
    /*-----------------------------------------
    |B2C timeout url
    |------------------------------------------
    */
    'b2c_timeout' => '',
     
    /*-----------------------------------------
    |B2C results url
    |------------------------------------------
    */
    'b2c_result' => ''


];