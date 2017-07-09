<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $this->title; ?> - Panel Administratora | Stowarzyszenie Nasze Dzieci</title>
        <link rel="stylesheet" href='<?php echo URL; ?>private/css/default.css'/>
    </head>
    <body>
        <header>
            <nav>
                <div><a href="<?php echo URL; ?>cms-nasze-dzieci-panel">LOGO ADMINPANELU</a></div>
                <div>
                    <ul>
                        <li><a href="<?php echo URL; ?>cms-nasze-dzieci-panel/dodaj_aktualnosci">Dodaj</a></li>
                        <li><a href="<?php echo URL; ?>cms-nasze-dzieci-panel/przegladaj_aktualnosci">Przeglądaj</a></li>
                        <li>Ustawienia
                            <ul>
                                <li><a href="<?php echo URL; ?>cms-nasze-dzieci-panel/edytuj_dane">Edytuj Dane</a></li>
                                <li><a href="<?php echo URL; ?>cms-nasze-dzieci-panel/zmien_haslo">Zmień Hasło</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div><a href="<?php echo URL; ?>cms-nasze-dzieci-panel/logout">Wyloguj</a></div>
            </nav>
            
        </header>
