<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $contacts = [
        'Name' => 'Galym',
        'Number' => '27637',
        'Job' => 'IT'
    ];
    foreach ($contacts as $key => $item) {
       echo $key . '<br>'; 
       echo $item . '<br>' . '<br>';
    }
    ?>
</body>
</html>