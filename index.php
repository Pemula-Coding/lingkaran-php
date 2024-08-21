<!-- Rumus Lingkaran -->

<?php 
class Lingkaran {
    public $jarijari;
    public $pi = 3.14;
    public function __construct($jarijari)
    {
        $this->jarijari = $jarijari;
    }
    public function luas()
    {
        return $this->pi * $this->jarijari * $this->jarijari;
    }
    public function keliling()
    {
        return 2 * $this->pi * $this->jarijari;
    }
}

echo "Masukkan Jari-jari Lingkaran : ";
$input = trim(fgets(STDIN));
$lingkaran = new Lingkaran($input);
echo "Luas Lingkaran : " . $lingkaran->luas() . "\n";
echo "Keliling Lingkaran : " . $lingkaran->keliling() . "\n";
?>
