<?php
class ape extends binatang
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

$beruq = new binatang("Kunyuk", "2", "cold blooded", "ha'iikkkkk(kata arsya)", "aihihihi");
echo "Nama : " . $beruq->get_name();
echo "<BR>";
echo "Kaki : " . $beruq->get_kaki();
echo "<BR>";
echo $beruq->get_cold_blooded() . " : no ";
echo "<BR>";
echo "loncat : " . $beruq->get_jump();
echo "<BR>";
echo "yell : " . $beruq->get_yell();