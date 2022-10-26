<?php
class binatang
{
    public $name;
    public $kaki;
    public $cold_blooded;
    public $yell;
    public $jump;

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

$kambing = new binatang("Kambing", "4", "cold blooded", "duk-duk", "mbeeee");
echo "Nama : " . $kambing->get_name();
echo "<BR>";
echo "Kaki : " . $kambing->get_kaki();
echo "<BR>";
echo $kambing->get_cold_blooded(), " : no";
echo "<BR>";
echo "Loncat : " . $kambing->get_jump();
echo "<BR>";
echo "Yell : " . $kambing->get_yell();