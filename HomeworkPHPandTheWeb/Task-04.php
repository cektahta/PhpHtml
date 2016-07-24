<?php



$err = [];
$condition = null;
if (!empty($_POST["text"])) {
    $condition = $_POST["text"];
    $cond = split(",",$condition);
    for ($i = 0; $i < count($cond);$i++) {
        $err[] = $cond[$i];
        var_dump($err);

    }
}
sort($err);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TaskFour</title>
</head>
<body>
<form method="post">
    <input name="text" type="text">
    <input type="submit" value="Submit">
</form>
<?php for ($j = 0; $j <count($err);$j++):?>

    <p><?php  echo "$err[$j]";?></p>
<?php endfor;?>


</body>
</html>