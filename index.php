<?php
  $msg = 'Ciascuna delle suddivisioni interne dei vari capitoli in cui è distribuita la materia di un testo.';
  $msgLe = strlen($msg);
  $bw = $_GET["bw"];
  $bwPos = strpos( $msg, $bw );
  $bwRep = '<span class="bw">***</span>';
  if ( $bwPos !== false ) {
    $msg = str_replace( $bw, $bwRep, $msg );
  } else {
    $msg .= '<br>Nessuna parola censurabile rilevata.';
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <title>S%@#!</title>
</head>
<body>
  <main>
    <h1>
      Paragrafo censurato
    </h1>
    <p>
      <?php echo $msg."<br>Lunghezza paragrafo: "."<span class=\"blue\">".$msgLe."</span>"; ?>
    </p>
  </main>

</body>
</html>
