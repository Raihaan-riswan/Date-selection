<?php
 $name = $account = $dtype = $internet = "";
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
};

// this is extra gb code

if ((int)$extra <= 4){
    $extrapri = 100* $extra;
}
elseif((int)$extra <=19){
    $extramin = $extra - 4;
    $extrapri = (100 * 4) + (85 * $extramin);
}
elseif((int)$extra <= 49){
    $extramin = $extra - 19;
    $extrapri = (100 * 4) + (85 * 15) + (75 * $extramin);
}
elseif($extra > 49){
    $extramin = $extra - 49;
    $extrapri = (100 * 4) + (85 * 15) + (75 * 30) + (60 * $extramin) ;
}
else{
    $extrapri = 0;
};

$total = $dtypepri + $internetpri + $extrapri;





?>
<!-- out put -->
 <h1>Internet Usage BIll of Account Number :<?php echo ($account);?></h1>
 <h3>Customer Name : <?php echo($name);?></h3><h3>Interner Package : <?php echo($internet);?></h3>
 <hr>
 <table>
    <tr>
        <th></th>
        <th>Units</th>
        <th>Amount</th>
    </tr>
    <tr>
        <td>Rental : <?php echo ($dtype);?></td>
        <td></td>
        <td><?php echo ($dtypepri);?></td>
    </tr>
    <tr>
        <td>Monthly Rental</td>
        <td></td>
        <td><?php echo ($internetpri);?></td>
    </tr>
    <tr>
        <td>Extra GB used</td>
        <td><?php echo($extra);?></td>
        <td><?php echo ($extrapri);?></td>
    </tr>
    <tr><td><b>Total</b></td>
    <td></td>
    <td><?php echo($total);?></td></tr>
 </table>