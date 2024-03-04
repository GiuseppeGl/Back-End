<?php

    require_once 'Libreria.php';

    $l1 = new Libro("harry potter", "jkr", "2000");
    $l2 = new Libro("harry potter 2", "jkr", "2002");

    echo "<h1>" . $l1->getAll() . "</h1>";

    echo "<p> numero di libri:" . $l1->contaLibri() . "</p>";
    echo "<p> Libri e DvD totali :" . $l1->getCounter() . "</p>";

    $l1->presta();

    echo "<p> numero di libri:" . $l1->contaLibri() . "</p>";
    echo "<p> Libri e DvD totali :" . $l1->getCounter() . "</p>";

    
    $l2->presta();

    echo "<p> numero di libri:" . $l1->contaLibri() . "</p>";
    echo "<p> Libri e DvD totali :" . $l1->getCounter() . "</p>";

    $l1->restituisci();

    echo "<p> numero di libri:" . $l1->contaLibri() . "</p>";
    echo "<p> Libri e DvD totali :" . $l1->getCounter() . "</p>";

    $l1->restituisci();

    echo "<p> numero di libri:" . $l1->contaLibri() . "</p>";
    echo "<p> Libri e DvD totali :" . $l1->getCounter() . "</p>";


    
