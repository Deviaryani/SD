<?php

class Matkul{
    public $nama, $sks, $prodi, $semester, $jenis, $no_urut, $kode;
    
    public function __construct($nama, $sks, $prodi, $semester, $jenis, $no_urut)
    {
       $this->nama = $nama;
       $this->sks = $sks;
       $this->prodi = $prodi;
       $this->semester = $semester;
       $this->jenis = $jenis;
       $this->no_urut = $no_urut;
       $this->generateKode();
    }
    public function generateKode(){
        $this->kode = $this-> prodi . $this->semester . $this->jenis . $this->no_urut;
    }
}

class Stack{
    private $max = 10;
    private $top = 0;
    public $items = [];

    public function isEmtpy(){
        return $this->top == 0;
    } 

    public function isFull(){
        return $this->top == $this->max;
    }

    public function push($nama, $sks, $prodi, $semester, $jenis, $no_urut){
        if($this->isFull()){
            echo "<b>Data penuh</b>";
            return;
        }
        $item = new Matkul($nama, $sks, $prodi, $semester, $jenis, $no_urut);
        //menambah item di index yg sesuai dengan index top++
        $this->items[++$this->top] = $item;
    }
    public function pop(){
        if($this->isEmtpy()){
            echo "<b>Data kosong</b>";
            return;
        }
        //mengganti nilai top kebawah
        $this->items[$this->top--];
    }
    public function peak(){
        if($this->isEmtpy()){
            echo "<b>Data kosong</b>";
            return;
        }
        return $this->items[$this->top];
    }
    public function printS(){
         if($this->top != -1){
         for($i = $this->top; $i> 0;$i--){
            echo "Kode : "; 
            echo $this->items[$i]->kode . "<br>";
            echo "Nama Matkul : ";
            echo $this->items[$i]->nama . "<br>";
            echo "SKS :"; 
            echo $this->items[$i]->sks . "<br>";
            echo "Semester :"; 
            echo $this->items[$i]->semester . "<br>";
            echo "Prodi :"; 
            echo $this->items[$i]->prodi . "<br>";

            echo "<hr>";
         }
      }else{
         echo "<b>Data kosong</b>";
         return;
      }
    }
    public function clear(){
    if ($this->isEmtpy()) {
        echo "</b>Stack sudah kosong.</b>";
        return;
    }
    //mengosongkan array items
    $this->items = [];
    //mengatur ulang nilai top menjadi 0
    $this->top = 0;
    echo "<b>Stack berhasil dikosongkan.</b>";
    }
}
?>