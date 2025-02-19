<?php

require_once 'vendor/autoload.php';

use App\Form;

$form = new Form('POST', '');
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