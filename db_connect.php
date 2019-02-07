<?php
class connect
{
    private $db;

   public function __construct()
    {
       $this->db= new PDO('mysql:host=localhost;dbname=test',"root","");
    }



    public function request($zapr)
    {
        return $this->db->query($zapr)->fetch(PDO::FETCH_ASSOC);
    }




}