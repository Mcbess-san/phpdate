<?php

$presentTime = new DateTime('NOW');
$destinationTime = new DateTime('2021-11-26 2:30');

$timeDiff = new DateTime;
$timeDiff = $presentTime->diff($destinationTime);

$presentTimeView = strtotime($presentTime->format('Y-m-d-H-m'));
$destinationTimeView = strtotime($destinationTime->format('Y-m-d-H-m'));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back To The Futur <---</title>
</head>
<body>
    <h1>Present time</h1>
        <p><?= $presentTime->format('Y-m-d-H-m'); ?></p>
    <h1>Destination time</h1>
        <p><?= $destinationTime->format('Y-m-d-H-m'); ?></p>
    <h1>Time diff</h1>
        <p><?= $timeDiff->y .' Years ' . $timeDiff->m .' Months ' . $timeDiff->d .' Days ' . $timeDiff->h .' Hours ' . $timeDiff->m .' Minutes ';?></p>
</body>
</html>