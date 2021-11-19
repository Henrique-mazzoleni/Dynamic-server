<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
    // phpinfo();
    // echo phpversion();
    $object = new User('Henrique', 'senha');
    print_r($object);
    echo "<br />"; 
    class User
    {
        // public $name, $password;
        const USER = 1;
        const ADMIN = 2;
        public function __construct($name, $password)
        {
            $this->name = $name;
            $this->password = $password;
            $this->permission = self::USER;
        }

        public function save_user()
        {
            echo "Save User code goes here";
        }
    }

    class Superuser extends User
    {
        public function __construct($name, $password)
        {
            parent::__construct($name, $password);
            $this->permission = self::ADMIN;
        }
    }
    $object->name = "Annia";
    $object->password = "pass";
    print_r($object);
    echo "<br />";
    $object->save_user();
    echo "<br />";
    $object2 = new Superuser('Gabriella', 'gagabubu');
    print_r($object2);
    ?> 
  </body>
</html>