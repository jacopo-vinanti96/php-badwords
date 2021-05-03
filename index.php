<?php
  $msg = 'Ciascuna delle suddivisioni interne dei vari capitoli in cui è distribuita la materia di un testo.';
  $msgLe = strlen($msg);
  $bw = $_GET["bw"];
  $bwPos = strpos( $msg, $bw );
  if ( $bwPos !== false ) {
    $msg = str_replace( $bw, '***', $msg );
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <main>
    <h1>
      Paragrafo censurato
    </h1>
    <p>
      <?php echo $msg."\n Lunghezza paragrafo: ".$msgLe; ?>
    </p>
  </main>

</body>
</html>
