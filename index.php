<?php

    class User {

        public $name;

        public $lastname;

        public $username;

        public $date_of_birth;

        public $email;

        public $genre;

        public $general_info;

        public $password;

        public static function randomPassword() {

            $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
            $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
            $pass = array(); 
            $alphaLength = strlen($alphabet) - 1; 
            for ($i = 0; $i < 8; $i++) {
                $n = rand(0, $alphaLength);
                $pass[] = $alphabet[$n];
            }
            return implode($pass); //turn the array into a string
        }

        public function __construct($name, $lastname , $username, $date_of_birth, $email , $genre , $general_info , $password) {
            $this->name = $name;
            $this->lastname = $lastname;
            $this->date_of_birth = $date_of_birth;
            $this->username = $username;
            $this->email = $email;
            $this->genre = $genre;
            $this->general_info = $general_info;
            $this->password = $password;
        }

    }

    $password = User::randomPassword();

    // Istanza Mike
    $mike = new User('Michele', 'Lorusso', 'MicheleLor95','20-10-95','milor@hotmail.it','Male','i play football', $password );

    // Istanza Paol
    $paol = new USer('Paolo', 'Rossi', 'Paoloros25','15-02-98','poaler@live.it','Male','call of duty pro-players', $password );

    // Istanza Gina
    $gina = new USer('Gina', 'Barbieri', 'GinaBarb3558','19-04-99','barbgin@live.it','Female','barbie for life', $password );

    $users = [$mike, $paol, $gina];
    // var_dump($users);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>User_Blog</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../../PHP-OOP-1/css/style.css">

</head>
<body>

    <h2>Users of a blog</h2>

    <ul>
        <?php foreach($users as $user) {?>
            <li>
                <ul class="single-user">
                    <li>Name: <?php echo $user->name; ?></li>
                    <li>Lastname: <?php echo $user->lastname; ?></li>
                    <li>Birthday: <?php echo $user->date_of_birth; ?></li>
                    <li>Username: <?php echo $user->username; ?></li>
                    <li>Email: <?php echo $user->email; ?></li>
                    <li>Genre: <?php echo $user->genre; ?></li>
                    <li>General Info: <?php echo $user->general_info; ?></li>
                    <li>Password: <?php echo $user->password; ?></li>
                </ul>
            </li>
        <?php } ?>
    </ul>
    
</body>
</html>
