<?php

date_default_timezone_set("Europe/Belgrade");

class Dogadjaj{
    public $id;
    public $naslov;
    public $opis;
    public $lokacija;
    public $vremeod;
    public $vremedo
    public $user_id;
}

    public __construct($id=null, $naslov=null, $opis=null, $lokacija=null, $vremeod=null, $vremedo=null, $user_id=null){
        $this->id = $id;
        $this->naslov = $naslov;
        $this->opis = $opis;
        $this->lokacija = $lokacija;
        $this->vremeod = $vremeod;
        $this->vremedo = $vremedo;
        $this->user_id = $user_id;
    }
?>