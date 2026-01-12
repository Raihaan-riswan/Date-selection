<?php
 $name = $account = $dtype = $internet = $extra = "";
 $name = $_POST['name'];
 $account = $_POST['account'];
 $dtype = $_POST['dtype'];
 $internet = $_POST['internet'];
 $extra = $_POST['extra'];


//  this is for fiber value code
 if ($dtype =='fiber'){
    $dtypepri = 760;
 }else{
    $dtypepri = 0;
 };

// this is for internet packages

if ($internet == 'basic'){
    $internetpri = 760;
} 
elseif ($internet == 'weblite'){
    $internetpri = 1520;
}
elseif ($internet == 'anyblast'){
    $internetpri = 2340;
}
else{
    $internetpri = 3790;
}

?>