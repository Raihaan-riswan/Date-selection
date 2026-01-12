<style>
    body {
  background: #f9f9f9;
  font-family: "Courier New", monospace; /* printed feel */
  font-size: 13px;
  color: #111;
}

h1, h3 {
  margin: 4px 0;
  text-align: center;
}

hr {
  border: none;
  border-top: 1px dashed #333; /* dashed line like receipts */
  margin: 8px 0;
}

table {
  width: 100%;
  border-collapse: collapse;
}

th {
  border-bottom: 1px solid #333;
  padding: 4px 0;
  text-align: left;
}

td {
  padding: 4px 0;
}

td:nth-child(2) {
  text-align: center;
  color: #555;
}

td:nth-child(3) {
  text-align: right;
}

tr:not(:last-child) td {
  border-bottom: 1px dotted #ccc; /* dotted separators */
}

tr:last-child td {
  border-top: 1px solid #333;
  font-weight: bold;
  padding-top: 6px;
}
.receipt { width: 320px; /* typical roll width */ margin: 20px auto; padding: 12px; border: 1px solid #333; background: #fff; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }

/* Print-friendly */
@media print {
  body {
    background: #fff;
    margin: 0;
  }
  hr {
    border-top-style: solid; /* clearer print line */
  }
}

</style>


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
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <div class ="receipt">
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
 </div>
 </body>
 </html>

 