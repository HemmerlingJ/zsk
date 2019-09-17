<!DOCTYPE html>
<html lang=pl dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $dec = 11;
      $hex = 0x11;
      $oct = 011;
      $bin = 0b11;
      echo "$dec<br>$hex<br>$oct<br>$bin<br>";
      $imie = "Jan";
      $nazwisko = "Kowalski";
      echo <<< E
      $imie $nazwisko<br>
      E;
      echo <<< 'E'
      $imie $nazwisko<br>
      E;
      echo "nazwa zmiennej: \$imie, wartość zmiennej imie: $imie.<br><br>";

        ////////////////////////////////////////////////////////////////


       $x= 0b1010;
       $x = $x >> 1;
       echo $x.'<br>';
       $x = $x << 2;
       echo $x.'<br>';


       $a = 1;
       $b = 1.0;

       if($a == $b)
        {
           echo 'identyczne<br>';
        }
          else { echo 'Różne<br>';}

          echo gettype($a).'<br>';
          echo gettype($b).'<br><br>';

          /////////////////////////////////////////////////////////////////


          $x = 2;
          echo $x++.'<br>'; //2
          echo ++$x.'<br>';//4
          echo $x.'<br>'; //4
          $y = $x++;
          echo $y.'<br>'; //4
          $y = ++$x;
          echo $y.'<br>'; //6
          echo ++$y; //7

        echo '<br>';
      $potega = 2**10;
        echo $potega.'<br><br>';
        ////////////////////////////////////////////////////////////////////
        $tekst1 = '4ssd';
        $tekst2 =   'Drugi';
        $tekst3 = '?';
        $num = 15;
        $j = -1;
        $c = 100;
        $x = (int)$tekst1;
        echo $x.'<br>';
        $x = (bool)$j;
        echo $x.'<br>';
        $c = (unset)$c;
        echo $c.'<br>';
        echo gettype($c).'<br>';

        echo PHP_INT_SIZE;
        echo '<br>';








    ?>
  </body>
</html>
