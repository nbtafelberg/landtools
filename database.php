<?php


##################### System #########################
define("SYSNAME","Wolf Territories Grid");
define("SYSURL","http://grid.wolfterritories.org:8002");
define("SYSMAIL","lonewolf@wolfterritories.org");


// Key of the account that all fees go to:
$economy_sink_account="put uuid of charge account to";

// Key of the account that all purchased currency is debited from:
$economy_source_account="put uuid of main podex account here ";



// Minimum amount of real currency (in CENTS!) to allow purchasing:
$minimum_real=0;

// Error message if the amount is not reached:
$low_amount_error="You tried to buy less than the minimum amount of currency. You cannot buy currency for less than US$ %.2f.";

$databasehost="database host";
$databaseusername="database username";
$databasepassword="database password";


$con = mysqli_connect($databasehost, $databaseusername, $databasepassword);
mysqli_select_db($con,"robust");
mysqli_set_charset($con, 'utf8mb4');

function escape($str) {
    global $con;
    return mysqli_real_escape_string($con, $str);
}

function pcGetRecordFrom($db, $query) {

    $r = mysqli_query($db, $query);
    if (!$r) {
        echo "Error in " . $query;
    }
    $data = "";
    $found = False;
    $resultx = "";
    $numrows = mysqli_num_rows($r);
    
    if ($numrows > 0) {
        while ($row = mysqli_fetch_assoc($r)) {
            return $row;
           
        }
    } 
    return $resultx;
}

function pcGetDataFrom($db, $query, $field) {

    $r = mysqli_query($db, $query);
    $data = "";
    $found = False;
    $resultx = "";
    $numrows = mysqli_num_rows($r);
    if ($numrows > 0) {
        while ($row = mysqli_fetch_assoc($r)) {
            $found = True;
            $resultx = $row[$field] . "";

            break;
        }
    } 
    return $resultx;
}
