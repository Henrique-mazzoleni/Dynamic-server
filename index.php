<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
    // phpinfo();
    if (function_exists("array_combine"))
    {
        echo "Funtion Exists";
    }
    else
    {
        echo "Function does not exist - better write our own";
    }
    ?> 
  </body>
</html>