@extends('layout.master')
@section('stylesheets')
    <link rel="stylesheet" href="vr.min.css">
@endsection
@section('main')
    <?php
        require 'register.php';
    ?>
    <div class="wrapper">
        <div class="scoreboard" id="score">
            <h2 class="scoreboard__title"><span class="title__colour">S</span>coreboard</h2>
            <div class="scores">
                <?php
                //    $db = new PDO();
                //    if (!$db) die;
                //    $stmt = $db->prepare('SELECT name FROM exp WHERE name = ?');
                //    if (!$stmt->execute([$userInput])) {
                //        echo "Query failed";
                //        die;
                //    }
                //    $results = $stmt->fetchAll();
                ?>
            </div>
        </div>
        <div class="donation div" id="wish">
            <h2 class="donation__title"><span class="title__colour">M</span>ake a wish</h2>
            <p class="donation__txt">Make a wish is een organisatie die voor ernstig zieke kinderen een 
                onvergetelijk avontuur organiseert. Ze luisteren naar de kinderen hun grootste wens en
                werken daarna hard om de wens uit te laten komen. Dit om de kinderen en de mensen om hun heen
                nieuwe kracht te geven zodat ze sterker de toekomst in kunnen.
                Wil jij ook je steentje bijdragen en doneren? Klik dan 
                <a class="donation__link" href="https://makeawishnederland.org/actie/1374/media-college-amsterdam-in-actie" target="_blank">hier.</a>
            </p>
        </div>
        <div class="about div" id="about">
            <h2 class="about__title"><span class="title__colour">O</span>ver de game</h2>
            <p class="about__txt">Deze VR experience is gemaakt door twee derde jaars game development
                studenten en één eerste jaars game artist voor MA-request. Het doel van het spel is om
                zoveel mogenlijk sneeuwballen raak te gooien en zo de hoogste score te behalen. Zoals de
                hele ma-request is deze game gemaakt om aandacht te vragen voor Make-a-wish. 
            </p>
        </div>
        <div class="creators div" id="team">
            <h2 class="creators__title"><span class="title__colour">H</span>et team</h2>
            <div class="creators__cards">
                <div class="creators__card">
                    <h3 class="card__title"><span class="title__colour">F</span>erri</h3>
                    <p class="card__txt">Ferri heeft de slingshot mechanic en level structuur verzorgt.</p>
                    <a class="card__link" href="https://ferri.dev" target="_blank">Portfolio</a>
                </div>
                <div class="creators__card">
                    <h3 class="card__title"><span class="title__colour">M</span>artin</h3>
                    <p class="card__txt">Martin heeft de database en slingshot mechanic verzorgt.</p>
                    <a class="card__link" href="https://http://martinkeesom.nl/" target="_blank">Portfolio</a>
                </div>
                <div class="creators__card">
                    <h3 class="card__title"><span class="title__colour">M</span>ax</h3>
                    <p class="card__txt">Max heeft de game art voor de game verzorgt.</p>
                    <a class="card__link" href="https://maxslot.nl/" target="_blank">Portfolio</a>
                </div>
                <div class="creators__card">
                    <h3 class="card__title"><span class="title__colour">R</span>obbe</h3>
                    <p class="card__txt">Robbe heeft de website verzorgt voor de VR experience.</p>
                    <a class="card__link" href="https://robbelee.nl" target="_blank">Portfolio</a>
                </div>
                <div class="creators__card">
                    <h3 class="card__title"><span class="title__colour">M</span>ike</h3>
                    <p class="card__txt">Mike heeft technische ondersteuning verleent voor de website.</p>
                    <a class="card__link" href="https://mikeschaatsbergen.nl" target="_blank">Portfolio</a>
                </div>
            </div>
        </div>
    </div>
    <script src="vr.js"></script>
@endsection