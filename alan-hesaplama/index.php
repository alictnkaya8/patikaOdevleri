<?php


class Sekil {

    public $a, $b, $c;

    public function __construct($a, $b = null, $c = null)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
}

class Dikdortgen extends Sekil{
    public function cevre(){
        return ($this->a * 2) + ($this->b * 2);
    }
    public function alan(){
        return ($this->a) * ($this->b);
    }
}
class Ucgen extends Sekil{
    public function cevre(){
        return ($this->a) + ($this->b) + ($this->c);
    }
    public function alan(){
        $cevre = $this->cevre();
        return bcsqrt((($cevre / 2) * (($cevre / 2) - $this->a) * (($cevre / 2) - $this->b) * (($cevre / 2) - $this->c)), 2);
    }
}
class Kare extends Sekil{
    public function cevre(){
        return $this->a * 4;
    }
    public function alan(){
        return pow($this->a, 2);
    }
}

$dikdortgen = new Dikdortgen(5, 6);
$ucgen = new Ucgen(6, 8, 10);
$kare = new Kare(5);

echo "Dikdörtgenin Çevresi: " . $dikdortgen->cevre() . "<br>";
echo "Dikdörtgenin Alanı: " . $dikdortgen->alan() . "<br>";
echo "Üçgenin Çevresi: " . $ucgen->cevre() . "<br>";
echo "Üçgenin Alanı: " . $ucgen->alan() . "<br>";
echo "Karenin Çevresi: " . $kare->cevre() . "<br>";
echo "Karenin Alanı: " . $kare->alan();