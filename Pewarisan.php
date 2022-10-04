<?php
trait Role{
    abstract public function getRole():String;
}
class babeh {
    // deklarasi variabel
    public $nama;
    public $umur;
    public $harga;
    public static $index;
    public $is_status;

    // membuat construktor
    public function __construct($nama, $umur, $is_status = "Anak")
    {
        $this->nama =$nama;
        $this->umur =$umur;
        $this-> marga ="Tan";
        self::$index = 1;
        $this->is_status = $is_status;
    }

    public function getMarga(){
        return $this->marga;
    }
    public function getName()
    {
        return$this->nama;
    }
    public function getUmur(){
        return $this->umur;
    }

    public function getstatus()
    {

        return $this->umur;
    }
    public function display()
    {
        echo 'No' . self::$index++ . '<br>';
        echo "Nama" . $this->getName() . "<br>";
        echo "marga:" . $this->getMarga() . "<br>";
        echo "umur:" . $this->getumur() . "<br>";
        if($this->is_status == "bapak"){
            echo 'status: '. $this->getStatus() . '<br>';
        }else{
            echo 'status: '.$this->getStatus(). '<br>';
        }
    }
    public function space()
    {
        echo '<hr>';
    }
}

class bocil extends babeh {
    use Role;
    public $role;

    public function __construct($nama, $umur, $is_status, $role = "siswa")
    {
        parent::__construct($nama, $umur, $is_status);
        $this->nama = $nama;
        $this->umur = $umur;
        $this->role = $role;
        $this->is_status = $is_status;
        
    }

    public function getRole(): string{
    return $this->role;
    }
}
    public function getAllDisplay(){
        $this->display() . '<br>';
        echo 'Jabatan: ' . $this->getRole(); 
    }

    public function getRole():string{
        return $this->rile;
    }
    //inisialisasi class objek
    $babeh = new Babeh("Asep" , 37, "Bapak");

    $bocil = new Bocil("Arief", 15, "Anak");
    $bocil = new Bocil("Satrio", 17, "Anak");

    echo $babeh->display();
    