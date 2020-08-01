<?php

require_once __DIR__.'/vendor/autoload.php';
$cname = $_POST['cname'];
$pname = $_POST['pname'];
$weight = $_POST['weight'];
$rate = $_POST['rate'];
$wage = $_POST['wage'];
$jarti = $_POST['jarti'];
$jyalatype = $_POST['jyalaType'];

$count = count($pname);

$gtotal = 0;
$formValues = 0;


for($i=0;$i<$count;$i++){
    $nrate[$i] = $rate/11.664 * $weight[$i];
    if($jyalatype[$i]==1){
        $total[$i] = round($nrate[$i] + $nrate[$i] * $jarti[$i] / 100 + $nrate[$i] * $wage[$i] / 100, 2);
        $prejyala[$i] = "%";
    }
    else{
        $total[$i] = round($nrate[$i] + $nrate[$i] * $jarti[$i] / 100 + $wage[i], 2);
        $prejyala[$i] = "Rs.";
    }
}



for($i=0; $i<$count;$i++){
    $gtotal = $gtotal + $total[$i];
}



$mpdf = new \Mpdf\Mpdf();

for($i=0; $i<$count;$i++){
    $formValues = $formValues.
    '
    <tr>
        <td style="width:40%; border:1px solid black;">'.$pname[$i].'</td>
        <td style="width:10%; border:1px solid black;">'.$weight[$i].'</td>
        <td style="width:10%; border:1px solid black;">'.$rate.'</td>
        <td style="width:10%; border:1px solid black;">%'.$jarti[$i].'</td>
        <td style="width:10%; border:1px solid black;">'.$prejyala[$i].$wage[$i].'</td>
        <td style="width:20%; border:1px solid black;">'.$total[$i].'</td>
    </tr>
    ';

}



$html = '

<div class="bill" style="margin-left: 30em; margin-right: 30em;padding: 10px; background-color:#FEE6CD;">
<div style="float: right;">Mo. 9842069154</div><br>
<div style="text-align: center;background-color: #F4600C; margin-left:7em; margin-right:7em; border: 1px solid #F4600C; border-radius: 10px;">
    <h1 style="text-align: center;">Mahalaxmi Jewellers</h1>
    <h3 style="text-align: center;">Miklajung-7, Madhumalla, Morang</h3>
</div>

<h2 style="text-align: center; ">Guarantee Bill</h2>
<div style="float: left;">Pan no. 610513037</div>
<div style="float: right;">Date: '.date("Y/m/d").'</div><br>
<hr>
<div style="margin-left:3em">
    Name: '.$cname.' <div class="name"></div>    Address: <div class="address"></div>     Phone: <div class="phone"></div>
</div>
<table style="width:90%; border:1px solid black; margin:auto; border-collapse:collapse;">
    <caption style="caption-side: top; text-align: center;"><h2>Original Bill</h2></caption>
    <tr style="background-color: #FE7115">
        <td style="width:40%; border:1px solid black;text-align: center;">Particulars</td>
        <td style="width:10%; border:1px solid black;">Weight(gm)</td>
        <td style="width:10%; border:1px solid black;">Rate</td>
        <td style="width:10%; border:1px solid black;">Jarti</td>
        <td style="width:10%; border:1px solid black;">Wage</td>
        <td style="width:20%; border:1px solid black;">Total</td>
    </tr>
'.$formValues.'
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>Total:</td>
        <td>'.$gtotal.'</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>Advance:</td>
        <td></td>
    </tr>
</table>
        ';

$mpdf->WriteHTML($html);

$mpdf->Output();