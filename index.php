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

        <div class="searchbar row">
            <input name = "query" type="text" id="search" placeholder="Eintrag suchen ..."/>
            <button type="submit" name="submit" id="search-btn" class="btn-submit">Suchen</button>
        </div>
        <section id="entry-wrapper">
        <div class='card col'>
                <div class='font-header entry-name card-center'>
                    3
                </div>
                <section  class='entry-author'>
                    suck
                </section>
                <p class='entry-description spacer-xs'>
                    ".${e.desc}."
                </p>
                <button class='btn-simple spacer-xs entry-btn'>
                    Download - 5Mb
                </button>
            </div>
            <div class='card col'>
                <div class='font-header entry-name card-center'>
                    2
                </div>
                <section  class='entry-author'>
                    my
                </section>
                <p class='entry-description spacer-xs'>
                    ".${e.desc}."
                </p>
                <button class='btn-simple spacer-xs entry-btn'>
                    Download - 5Mb
                </button>
            </div>
            <div class='card col'>
                <div class='font-header entry-name card-center'>
                    1
                </div>
                <section  class='entry-author'>
                    dick
                </section>
                <p class='entry-description spacer-xs'>
                    ".${e.desc}."
                </p>
                <button class='btn-simple spacer-xs entry-btn'>
                    Download - 5Mb
                </button>
            </div>

        </section>
    </body>
</html>

<script src="app/script.js"></script>
<script src="app/mongoTranslator.js"></script>