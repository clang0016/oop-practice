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
        require_once('classes/task.class.php');

        $task = new Task;

        echo $task->insert();
        echo $task->delete();
        echo $task->show();
    ?>

</body>
</html>