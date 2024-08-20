<!-- Rumus Lingkaran -->

<?php 
class Lingkaran {
    public $jarijari;
    public $phi = 3.14;
    public function __construct($jarijari)
    {
        $this->jarijari = $jarijari;
    }
    public function luas()
    {
        return $this->phi * $this->jarijari * $this->jarijari;
    }
    public function keliling()
    {
        return 2 * $this->phi * $this->jarijari;
    }
}

echo "Masukkan Jari-jari Lingkaran : ";
$input = trim(fgets(STDIN));
$lingkaran = new Lingkaran($input);
echo "Luas Lingkaran : " . $lingkaran->luas() . "\n";
echo "Keliling Lingkaran : " . $lingkaran->keliling() . "\n";
?>
