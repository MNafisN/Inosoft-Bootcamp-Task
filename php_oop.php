<?php
class BangunDatar
{
    protected static float $luas = 0;
    protected static float $keliling = 0;

    protected static function describe(string $bangunDatar) {
        return "Bangun datar ini adalah ".$bangunDatar." yang memiliki luas ".self::$luas." dan keliling ".self::$keliling."\n";
    }
}

class Lingkaran extends BangunDatar
{
    private float $jariJari;

    public function __construct(float $jariJari) {
        $this->jariJari = $jariJari;
        echo $this->update();
    }

    private function update() {
        $this->luas();
        $this->keliling();
        return self::describe("Lingkaran");
    }

    private function luas() {
        parent::$luas = 3.14 * $this->jariJari * $this->jariJari;
        return;
    }

    private function keliling() {
        parent::$keliling = 3.14 * $this->jariJari * 2;
        return;
    }

    public function enlarge(float $multiplier) {
        if ($multiplier > 0) {
            $this->jariJari *= $multiplier;
            echo $this->update();
        } else { echo "invalid multiplier!\n"; }
        return;
    }

    public function shrink(float $multiplier) {
        if ($multiplier > 0) {
            $this->jariJari /= $multiplier;
            echo $this->update();
        } else { echo "invalid multiplier!\n"; }
        return;
    }
}

class Persegi extends BangunDatar
{
    private float $sisi;

    public function __construct(float $sisi) {
        $this->sisi = $sisi;
        echo $this->update();
    }

    private function update() {
        $this->luas();
        $this->keliling();
        return self::describe("Persegi");
    }

    private function luas() {
        parent::$luas = $this->sisi * $this->sisi;
        return;
    }

    private function keliling() {
        parent::$keliling = 4 * $this->sisi;
        return;
    }

    public function enlarge(float $multiplier) {
        if ($multiplier > 0) {
            $this->sisi *= $multiplier;
            echo $this->update();
        } else { echo "invalid multiplier!\n"; }
        return;
    }

    public function shrink(float $multiplier) {
        if ($multiplier > 0) {
            $this->sisi /= $multiplier;
            echo $this->update();
        } else { echo "invalid multiplier!\n"; }
        return;
    }
}

class PersegiPanjang extends BangunDatar
{
    private float $panjang;
    private float $lebar;

    public function __construct(float $panjang, float $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
        echo $this->update();
    }

    private function update() {
        $this->luas();
        $this->keliling();
        return self::describe("Persegi Panjang");
    }

    private function luas() {
        parent::$luas = $this->panjang * $this->lebar;
        return;
    }

    private function keliling() {
        parent::$keliling = ($this->panjang + $this->lebar) * 2;
        return;
    }

    public function enlarge(float $multiplier) {
        if ($multiplier > 0) {
            $this->panjang *= $multiplier;
            $this->lebar *= $multiplier;
            echo $this->update();
        } else { echo "invalid multiplier!\n"; }    
        return;
    }

    public function shrink(float $multiplier) {
        if ($multiplier > 0) {
            $this->panjang /= $multiplier;
            $this->lebar /= $multiplier;
            echo $this->update();
        } else { echo "invalid multiplier!\n"; }
        return;
    }
}



$cek1 = new PersegiPanjang(2, 1);
$cek2 = new PersegiPanjang(3, 2);
$cek3 = new PersegiPanjang(3.5, 1.5);
$cek2->enlarge(-1);
$cek2->shrink(2);





// ================================================<LATIHAN>================================================

class Kalkulator
{
    public float $dayaBaterai;
    protected float $cost = 1;
    protected float $output;

    public function __construct(float $dayaBaterai)
    {
        $this->dayaBaterai = $dayaBaterai;
    }

    public function isiDaya()
    {
        $this->dayaBaterai += 1;
        return 'Daya sekarang : '.$this->dayaBaterai."\n";
    }

    public function tambah(float $a, float $b)
    {
        $this->dayaBaterai -= $this->cost;
        $this->output = $a + $b;
        return 'Hasil : '.$this->output.', Sisa baterai : '.$this->dayaBaterai."\n";
    }

    public function kurang(float $a, float $b)
    {
        $this->dayaBaterai -= $this->cost;
        $this->output = $a - $b;
        return 'Hasil : '.$this->output.', Sisa baterai : '.$this->dayaBaterai."\n";
    }

    public function kali(float $a, float $b)
    {
        $this->dayaBaterai -= $this->cost;
        $this->output = $a * $b;
        return 'Hasil : '.$this->output.', Sisa baterai : '.$this->dayaBaterai."\n";
    }

    public function bagi(float $a, float $b)
    {
        $this->dayaBaterai -= $this->cost;
        $this->output = $a / $b;
        return 'Hasil : '.$this->output.', Sisa baterai : '.$this->dayaBaterai."\n";
    }
}

class KalkulatorMewah extends Kalkulator
{
    protected float $cost = 0.5;
}

// $kalkulator = new KalkulatorMewah(97);
// echo $kalkulator->dayaBaterai;
// echo $kalkulator->tambah(5, 19);
// echo $kalkulator->kali(5, 19);
// echo $kalkulator->kurang(5, 19);
// echo $kalkulator->bagi(5, 19);
// echo $kalkulator->kurang(5, 19);
// echo $kalkulator->isiDaya();
// echo $kalkulator->tambah(5, 19);
// echo $kalkulator->tambah(5, 19);
?>