<?php
return array(

/** set your paypal credential **/

'client_id' =>'AVwqe5h-hyHltETi1_NAdP2UaaEFWviiN6KoyPRTcWzAU6_Ek3Tzdzg3Nh3PUWUokZ9KHDAWARTCNYM4',

'secret' => 'EJmu4fdm8lY-0e9w-7URjPKpImYgGvgLx4kzvar9hL6_wsOEYKeV0LxBoBEFM7HpDBpmU_bTisk9Sp3J',

/**

* SDK configuration 

*/

'settings' => array(	

/**

* Available option 'sandbox' or 'live'

*/

'mode' => 'sandbox',

/**

* Specify the max request time in seconds

*/

'http.ConnectionTimeOut' => 1000,

/**

* Whether want to log to a file

*/

'log.LogEnabled' => true,

/**

* Specify the file that want to write on

*/

'log.FileName' => storage_path() . '/logs/paypal.log',

/**

* Available option 'FINE', 'INFO', 'WARN' or 'ERROR'

*

* Logging is most verbose in the 'FINE' level and decreases as you

* proceed towards ERROR

*/

'log.LogLevel' => 'FINE'

),

);