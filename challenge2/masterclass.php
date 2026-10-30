<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masterclass - Kamado Breda</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">

      <?php require_once 'header.php' ?>

        <main>
            <div class="foto">
                <img src="img/Schermafbeelding 2026-10-30 132630.png" alt="bbq masterclass">
            </div>

            <div class="tekst">
                <h1>BBQ Masterclasses</h1>
                <p>
                    Wil jij leren barbecueën als een echte pitmaster?
                    Bij Kamado Breda kun je deelnemen aan onze gezellige
                    BBQ masterclasses.
                </p>

                <h2>Wat ga je leren?</h2>
                <p>
                    Je leert hoe je een Kamado barbecue gebruikt,
                    de temperatuur regelt en verschillende gerechten
                    bereidt.
                </p>

                <h2>Voor wie is het?</h2>
                <p>
                    De masterclasses zijn geschikt voor beginners
                    en iedereen die beter wil leren barbecueën.
                </p>
            </div>

            <div class="informatie">
                <h2>Schrijf je in!</h2>
                <p>Wil je meedoen? Vul het formulier in.</p>

                <form action="verwerk.php" method="POST">
                    <label for="naam">Naam:</label>
                    <input type="text" id="naam" name="naam" required>

                    
                    <label for="email">E-mailadres:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="datum">Gewenste datum:</label>
                    <input type="date" id="datum" name="datum" required>

                    <button type="submit">Aanmelden</button>
                </form>
            </div>
        </main>

    </div>
</body>

</html>