<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
    function longdate($timestamp)
    {
        $temp = date("l F jS Y", $timestamp);
        return "The date is $temp";
    }

    function test()
    {
        static $count = 0;
        echo $count;
        $count++;
    }
    echo longdate(time());
    echo "<br>";
    test();
    test();
    test();
    test();
    ?> 
  </body>
</html>