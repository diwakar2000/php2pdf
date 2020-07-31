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
        <table>
            <tr>
                <td>Particulars</td>
                <td>Weight(gm)</td>
                <td>Rate</td>
                <td>Wage</td>
                <td>Jarti</td> 
                <td>Total</td>
            </tr>
            <tr>
                <td>'.$pname.'</td>
                <td>'.$weight.'</td>
                <td>'.$rate.'</td>
                <td>'.$wage.'</td>
                <td>'.$jarti.'</td>
                <td>'.$total.'</td>

            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
        ';

$mpdf->WriteHTML($html);

$mpdf->Output();