<?php

require_once __DIR__.'/vendor/autoload.php';

$cname = $_POST['cname'];
$pname = $_POST['pname'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$weight = $_POST['weight'];
$jarti = $_POST['jarti'];

$count = count($pname);

$gtotal = 0;
$formData = 0;
$bill_no = 0;

$f = fopen("billno.txt","r");
$bill_no = (int)fgets($f);
fclose($f);

$f = fopen("billno.txt","w");
$data = $bill_no +1;
fwrite($f,$data);
fclose($f);

for($i=0;$i<$count;$i++){
    $gtotal = $gtotal + $jarti[$i];
}


for($i=0; $i<$count;$i++){
    $formData = $formData.'
    <tr>
        <td style="border:1px solid black; display:flex; padding-left: 20px;">'.$pname[$i].'</td>
        <td style="border:1px solid black; text-align:center;">'.$weight[$i].'</td>
    </tr>
    ';
}


$html = '
    <div class="bill" style="margin-left: 40em; margin-right: 40em;padding: 10px; background-color:#FEE6CD;">
        <div style="float: right;">Bill No.:'.$bill_no.'</div><br>
        <div style="float: right;">Date:'.date("Y/m/d").'</div><br>
        <div style="text-align: center;background-color: #F4600C; margin-left:5em; margin-right:5em; border: 1px solid #F4600C; border-radius: 10px;">
            <h1 style="text-align: center; font-size: 50px;">Cash Bill</h1>
        </div>

 
        
        <hr>
        <div style="margin-left:3em">
            Name: '.$cname.'<div class="name"></div>    Address: '.$address.'<div class="address"></div>     Phone: '.$phone.'<div class="phone"></div>
        </div>
            <table style="width:90%; border:1px solid black; margin:auto; border-collapse:collapse;">
                <caption style="caption-side: top; text-align: center;"><h2>Original Bill</h2></caption>
                <tr style="background-color: #FE7115">
                    <td style="width:40%; border:1px solid black;text-align: center;">Particulars</td>
                    <td style="width:10%; border:1px solid black;text-align:center;">Weight(gm)</td>
                </tr>
                '.$formData.'
                <tr>
                    <td style="padding-left: 20px;">Total:</td>
                    <td>Rs.'.$gtotal.'</td>
                </tr>

            </table>
    </div>
';

$mpdf = new \Mpdf\Mpdf();

$mpdf->WriteHTML($html);

$mpdf->Output();