<?php
function luasLingkaran(int $angka)
{
    $pi = 3.14;
    $jariJari = $angka / 3;
    $luas = $pi * $jariJari * $jariJari;
    return $luas;
}

function kelilingLingkaran(int $angka)
{
    $pi = 3.14;
    $jariJari = $angka / 5;
    $keliling = $pi * $jariJari * 2;
    return $keliling;
}

function luasPersegiPanjang(int $angka)
{
    $panjang = $angka / 3;
    $lebar = $angka / 5;
    $luas = $panjang * $lebar;
    return $luas;
}

for ($i=1; $i<=100; $i++)
{   
    if ($i%3 == 0 && $i%5 == 0) 
    {
        echo number_format((float)luasPersegiPanjang($i), 2, '.', '')."\n";
        continue;
    }
    else if ($i%3 == 0)
    {
        echo number_format((float)luasLingkaran($i), 2, '.', '')."\n";        
        continue;
    }
    else if ($i%5 == 0)
    {
        echo number_format((float)kelilingLingkaran($i), 2, '.', '')."\n";
        continue;
    }
    else 
    {
        echo number_format((float)$i, 2, '.', '')."\n";
    }
}
?>