<?php 


class Computer 
{
    public  Monitor $monitor;
    public  Klavesnice $klavesnice;
    public  Mys $mys;
    public Tower $tower;


    public function __construct(Monitor|Televize $monitor,  Klavesnice $klavesnice)
    {   
        $this->monitor = $monitor;
        $this->klavesnice = $klavesnice;
    }




}

new Computer(new Monitor(), new Klavesnice);


