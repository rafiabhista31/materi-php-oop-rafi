<?php
class buduk extends binatang
{

    function __construct($name, $kaki, $cold_blooded, $jump, $yell)
    {
        $this->nama = $name;
        $this->kaki = $kaki;
        $this->cold_blooded = $cold_blooded;
        $this->jump = $jump;
        $this->yell = $yell;
    }
    function get_name()
    {
        return $this->nama;
    }
    function get_kaki()
    {
        return $this->kaki;
    }
    function get_cold_blooded()
    {
        return $this->cold_blooded;
    }
    function get_jump()
    {
        return $this->jump;
    }
    function get_yell()
    {
        return $this->yell;
    }
}

$bangkong = new binatang("Paiton/kodok", "4", "cold blooded", "hop-hop", "acumalaka");
echo "Nama : " . $bangkong->get_name();
echo "<BR>";
echo "Kaki : " . $bangkong->get_kaki();
echo "<BR>";
echo $bangkong->get_cold_blooded() . " : no ";
echo "<BR>";
echo "loncat : " . $bangkong->get_jump();
echo "<BR>";
echo "yell : " . $bangkong->get_yell();