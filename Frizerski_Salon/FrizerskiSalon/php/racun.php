<?php
   $kolicina1 = $_POST['kolicina1'];
   $kolicina2 = $_POST['kolicina2'];
   $kolicina3 = $_POST['kolicina3'];
   $vreme = $_POST['vreme']; 
?>

   <!DOCTYPE html>
   <html>
   <head>
   	<title>Frizerski Salon</title>
   </head>
   <body>
   	    <h1> Obavljeno zakazivanje</h1>
   	    <h2> Fiskalni racun </h2>
   	    <?php
   	       $date = date("F j, Y, g:i a");
   	       echo '<p> Zakazivanje u ';
   	       echo $date;
   	       echo '</p><p>Zakazali ste sledece usluge: </p>';
   	       $ukupno = 0;
   	       $ukupno = $kolicina1 + $kolicina2 + $kolicina3;
   	       echo 'Ukupno usluga ima: ' .$ukupno . '<br>';

   	       if ($ukupno == 0 ) 
   	       {
   	           echo "Korpa je prazna! <br>";
   	       }
   	       else
   	       {
   	       	if ($kolicina1 > 0 )
   	       		echo "Balejaz kolicina:  " . $kolicina1 . " <br>";
   	       	if ($kolicina2 > 0 )
   	       		echo "Kratka muska kolicina:   " . $kolicina2 . " <br>";
   	       	if ($kolicina3 > 0 )
   	       		echo "Viking kolicina:  " . $kolicina3 . "<br>";
   	       }

   	       $ukupnac= 0.00;
   	       define('cena1', 750);
   	       define('cena2', 650);
   	       define('cena3', 700);
           
           $ukupnac = $kolicina1 * cena1 + $kolicina2 * cena2 + $kolicina3 * cena3;
           $ukupnac = number_format($ukupnac, 2, ',' , '.');

           echo '<p> Ukupna suma racuna: ' . $ukupnac . 'RSD</p>';
           echo '<p> Zakazano za: ' . $vreme . '</p>';

           $izlaz = $date . "\t" . $kolicina1 . "Balejaz, \t" . $kolicina2 . "Kratka muska, \t" . $kolicina3 . "Viking, \t" . $ukupnac . "\t" . $vreme . "\n\n";

           $fp = fopen("zakazano.txt", 'a');
           flock($fp, LOCK_EX);
           if (!$fp) 
           {
           	  echo '<p><strong> Vasa porudzbina ne moze biti obradjena trenutno. Pokusajte kasnije. </strong> </p> </body> </html>';
           	  exit;
           }
           fwrite($fp, $izlaz, strlen($izlaz));
           flock($fp, LOCK_UN);
           fclose($fp);
           echo '<p>Podaci su sacuvani. </p>';
   	    ?>
   
   </body>
   </html>