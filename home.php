<?php
//session elindítása
//import

//új felhasználó
//megfelelő session leolvasása (felhAzon lekérdezése)

//ha nincs bejelentkezve a felhasználó, akkor a bejelentkezéshez ugorjon!

//url-ben állapottartás: ha rákattintott a kijelentkezésre, akkor
//kijelentkeztetés után ugorjon a bejelentkezés oldalra!
?>

<!DOCTYPE html>
<html lang="hu-HU">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home page</title>
    </head>
    <body>
        <main>
            <div>
				
            </div>
			<div>
                <a href="home.php">home.php</a>
                <a href="login.php">login.php</a>
                <a href="Adatbazis.php">adatbazis.php</a>
			</div>
			<?php
				if ($felh->isAdmin($felhAzon)){
                    echo "<h2>Bejelentkezett felhasználók:</h2>";
                    $matrix = $felh->aktivok();
                    $felh->megjelenit_aktivok($matrix);

                }

                if (isset($_COOKIE["felhasznalo"]) && isset($_COOKIE["felhasznalo"])){
                    echo "Üdvözlünk" .$_COOKIE["felhasznalo"]."!";
                    echo "<br> Ez a ".$_COOKIE["latogatas"].". látogatásod.";
            
                }
                
			?>
        </main>
    </body>
</html>