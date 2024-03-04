<?php

interface Prestito
{
    public function presta();
    public function restituisci();
}

abstract class MaterialeBibliotecario implements Prestito
{
    protected static $contatoreMateriali = 0;

    public static function getCounter()
    { // STATIC metodo di classe
        // return $this->count; // leggo una proprietà di istanza
        return self::$contatoreMateriali; // leggo una proprietà di classe static
    }
}

class Libro extends MaterialeBibliotecario
{

    private $titolo;
    private $autore;
    private $annoPubblicazione;
    private $prestato = false;
    private static $countLibri = 0;

    public static function contaLibri()
    {
        return self::$countLibri;
    }


    function __construct($titolo, $autore, $annoPubblicazione)
    {
        $this->titolo = $titolo;
        $this->autore = $autore;
        $this->annoPubblicazione = $annoPubblicazione;
        self::$contatoreMateriali++;
        self::$countLibri++;
    }

    public function presta()
    {
        if ($this->prestato === false) {
            $this->prestato = true;
            return self::$contatoreMateriali--;
        } else {
            echo "Il libro è in prestito";
        }
    }
    public function restituisci()
    {
        if ($this->prestato === true) {
            $this->prestato = false;
            return self::$contatoreMateriali++;
        } else {
            echo "Il libro è già restituito";
        }
    }

    public function getAll()
    {

        return $this->titolo . " - " . $this->autore . " - " . $this->annoPubblicazione;
    }
}

class Dvd extends MaterialeBibliotecario
{

    private $titolo;
    private $regista;
    private $annoPubblicazione;
    private $prestato = false;
    private static $countDvd = 0;

    public static function contaDvd()
    {
        return self::$countDvd;
    }

    function __construct($titolo, $regista, $annoPubblicazione)
    {
        $this->titolo = $titolo;
        $this->regista = $regista;
        $this->annoPubblicazione = $annoPubblicazione;
        self::$contatoreMateriali++;
        self::$countDvd++;
    }

    public function presta()
    {
        if ($this->prestato === false) {
            $this->prestato = true;
            return self::$contatoreMateriali--;
        } else {
            echo "Il dvd è in prestito";
        }
    }
    public function restituisci()
    {

        if ($this->prestato === true) {
            $this->prestato = false;
            return self::$contatoreMateriali++;
        } else {
            echo "Il dvd è già restituito";
        }
    }

    public function getAll()
    {

        return $this->titolo . " - " . $this->regista . " - " . $this->annoPubblicazione;
    }
}
