<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>HLT Gehweg</title>
        <link rel="stylesheet" type="text/css" href="styles/cssEssentials/basics.css">
        <link rel="stylesheet" type="text/css" href="styles/cssEssentials/form.css">
    </head>

    <body class="font-basic" id="nav-body">
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="">Second stuff</a></li>
            </ul>
        </nav>

        <form class="searchbar row" method="POST" action="">
            <input name = "query" type="text" id="search" placeholder="Eintrag suchen ..."/>
            <button type="submit" name="submit" class="btn-submit">Suchen</button>
        </form>
        <section id="entry-wrapper">
            <?php 
                require 'search.php'
            ?>
        </section>
    </body>
</html>

<script src="app/script.js"></script>