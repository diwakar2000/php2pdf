<?php

require_once __DIR__.'/vendor/autoload.php';
$pname = $_POST['pname'];
$weight = $_POST['weight'];
$rate = $_POST['rate'];
$wage = $_POST['wage'];
$jarti = $_POST['jarti'];
$nrate = $rate/11.664 * $weight;
$total = round($nrate + $nrate * $jarti / 100 + $nrate * $wage / 100,2);

$mpdf = new \Mpdf\Mpdf();

$html = '

<div class="bill" style="margin-left: 30em; margin-right: 30em;padding: 10px; background-color:#FEE6CD;">
<div style="float: right;">Mo. 9842069154</div><br>
<div style="text-align: center;background-color: #F4600C; margin-left:5em; margin-right:5em; border: 1px solid #F4600C; border-radius: 10px;">
    <h1 style="text-align: center;">Mahalaxmi Jewellers</h1>
    <h3 style="text-align: center;">Miklajung-7, Madhumalla, Morang</h3>
</div>

<h2 style="text-align: center; ">Guarantee Bill</h2>
<div style="float: left;">Pan no. 610513037</div>
<div style="float: right;">Date:</div><br>
<hr>
<div style="margin-left:3em">
    Name: <div class="name"></div>    Address: <div class="address"></div>     Phone: <div class="phone"></div>
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
    <tr style="height:300px;">
        <td style="width:40%; border:1px solid black;">'.$pname.'</td>
        <td style="width:10%; border:1px solid black;">'.$weight.'</td>
        <td style="width:10%; border:1px solid black;">'.$rate.'</td>
        <td style="width:10%; border:1px solid black;">'.$jarti.'</td>
        <td style="width:10%; border:1px solid black;">'.$wage.'</td>
        <td style="width:20%; border:1px solid black;">'.$total.'</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>Total:</td>
        <td>'.$total.'</td>
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