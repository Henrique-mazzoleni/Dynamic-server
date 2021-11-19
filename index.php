<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
    // phpinfo();
    // echo phpversion();
    $familia['pai'] = 'Henrique';
    $familia['mae'] = 'Annia';
    $familia['filha'] = 'Gabriella';

    print_r($familia);
    echo "<br>";

    $fam = array(
        'pai' => 'Jose Claudio',
        'mae' => 'Maria Helena',
        'filho' => 'Henrique'
    );
    print_r($fam);
    echo "<br>";

    foreach($fam as $pos=>$membro)
    {
        echo $pos . ": " . $membro . "<br>";
    }
    
    ?> 
  </body>
</html>