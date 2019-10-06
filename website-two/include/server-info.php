
<?php

# $_SERVER SUPERGLOBAL

// Create Server array
$server = [
    'Host server name'      => $_SERVER['SERVER_NAME'],
    'Host server protocol'  => $_SERVER['SERVER_PROTOCOL'],
    'Host server address'   => $_SERVER['SERVER_ADDR'],
    'Host server root'      => $_SERVER['DOCUMENT_ROOT'],
    'Host server file name' => $_SERVER['SCRIPT_FILENAME'],
    'Host server port'      => $_SERVER['SERVER_PORT'],
    'current page'          => $_SERVER['PHP_SELF'],
];



//echo $server['current page'];

//  Create Client Array
$client = [

    'client system info'    => $_SERVER['HTTP_USER_AGENT'],
    'client ip'             => $_SERVER['REMOTE_ADDR'],
    'client host port '     => $_SERVER['REMOTE_PORT'],

];


?>
