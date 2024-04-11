<?php 



class Vysavac 
{
    public $color;
    public $power;
    public$brand;

    private $pytlik = [];

    public function vysvaj($bordel)
    {
        array_push($this->pytlik, $bordel);

       return "fuuuuuuu";
    }

    public function vymenPytlik()
    {
        $this->pytlik = [];
    }

}