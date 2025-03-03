<?php

require_once 'vendor/autoload.php';

use App\Button;
use App\Form;
use App\PasswordInput;
use App\TextInput;

$form = new Form('POST', '/test.php');
$form->addElement(new TextInput('firstname', 'First name'));
$form->addElement(new TextInput('email', 'Email'));
$form->addElement(new PasswordInput('password', 'Password'));
$form->addElement(new Button("Submit"));
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Form Widget</title>
</head>
<body>
<?php echo $form->render() ?>
</body>
</html>