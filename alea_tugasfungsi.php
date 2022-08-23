<?php
//pembuatan fungsi
$panjang=15; $lebar=12; $tinggi=8;
function VolumeBalok ($panjang, $lebar, $tinggi)
{
    return $panjang*$lebar*$tinggi;
}
//menampilkan fungsi
echo"volume balok dengan panjang 15 lebar 12 dan tinggi 8 adalah:".VolumeBalok(15, 12, 8)."cm";
?>

<p>
<?php
//pembuatan fungsi
$jari2=14; $tinggi=15;
function VolumeKerucut ($jari2, $tinggi)
{
    return 1/3*M_PI*$jari2*$jari2*$tinggi;
}
//menampilkan fungsi
echo"volume kerucut dengan jari-jari 14 dan tinggi 15 adalah:".VolumeKerucut(14, 15)."cm";
//Alea Citra Ramadhani-Xll RPL 1-02
?>