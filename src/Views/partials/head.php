<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>

        <?php
        // si la variable tittlt existe olors on affiche le contenue
        if (isset($title)) {
            echo $title;
        }  ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="
https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/lux/bootstrap.min.css" integrity="sha384-9+PGKSqjRdkeAU7Eu4nkJU8RFaH8ace8HGXnkiKMP9I9Te0GJ4/km3L1Z8tXigpG" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary" style="background-color: rgba(0, 0, 0, 0.05);">
            <div class="container-fluid">
                <a class="navbar-brand mt-2 mt-lg-0" href="/">
                    <img src="/public/img/What-you-do.png" height="70" />Vehicule
                </a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Acceuil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/vehicule/create">vehicule create</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/vehicule">vehicule home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/vehicule/read">vehicule read</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/vehicule/update">vehicule update</a>
                    </li>






                    <?php
                    if (isset($_SESSION['user'])) {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/logout">Déconnection</a>
                        </li>
                    <?php
                    } else {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/register">Inscription</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Connection</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </nav>