<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Switch</title>
</head>

<body>
    <?php
    $a = 2;
    switch ($a) { // 3
        case 0:
            echo 'a equals 0';
            // no break
        case 1:
            echo 'a equals 1';
            // no break
        case 2:
            echo 'a equals 2';
            // no break
        case 3:
            echo 'a equals 3';
            // no break
        case 4:
            echo 'a equals 4';
            // no break
        case 5:
            echo 'a equals 5';
    }
    ?>

    <hr>

    <?php
    $staff_role = 'teacher';

    switch ($staff_role) {
        case 'student':
            echo 'Hello, admin';
            break;
        case 'teacher':
        case 'school staff':
        case 'district leader':
            echo 'Show admin view';
            break;
        default:
            echo 'Hello, guest';
    }

    $month = 5;
    switch ($month) {
        case 0:
            $zodiac = 'Rat';
            break;
        case 1:
            $zodiac = 'Ox';
            break;
        case 2:
            $zodiac = 'Tiger';
            break;
        case 3:
            $zodiac = 'Rabbit';
            break;
        case 4:
            $zodiac = 'Dragon';
            break;
        case 5:
            $zodiac = 'Snake';
            break;
        case 6:
            $zodiac = 'Horse';
            break;
        case 7:
            $zodiac = 'Goat';
            break;
        case 8:
            $zodiac = 'Monkey';
            break;
        case 9:
            $zodiac = 'Rooster';
            break;
        case 10:
            $zodiac = 'Dog';
            break;
        case 11:
            $zodiac = 'Pig';
            break;
    }
    echo "$zodiac";
    ?>

    <hr>

    <?php
      $user_type = 'customer';

    switch ($user_type) {
        case 'student':
            echo 'Welcome!';
            break;
        case 'press':
        case 'customer':
        case 'admin':
            echo 'Hello!';
            break;
    }
    ?>
</body>

</html>