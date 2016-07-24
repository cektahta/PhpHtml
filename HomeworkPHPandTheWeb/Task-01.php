<?php
session_start();

$result = 0;
$a = 0;
$b = 0;

$err = [];
$condition = false;
if (!empty($_POST)) {
    $a = $_POST['numOne'];
    $b = $_POST['numTwo'];
    $sign = $_POST['sign'];
    if ($sign == "/" && ($a == 0 || $b == 0)) {
        $err[] = "Enter some numbers in the input!";
        $condition = false;
    }
    if ($sign == "+") {
        $result = $a + $b;
    }
    if ($sign == "/") {
        $result = $a / $b;
    }
    if ($sign == "-") {
        $result = $a - $b;
    }
    if ($sign == "*") {
        $result = $a * $b;
    }
    $condition = true;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form id="form" method="post">
<input type="text" name="numOne"  placeholder="Number 1">
<select name="sign">
    <option value=" "> </option>
    <option value = "+">+</option>
    <option value = "-">-</option>
    <option value = "/">/</option>
    <option value = "*">*</option>


</select>
    <input type="text" name="numTwo" placeholder="Number 2">
    <input type="submit" value="Calculate">
</form>
<?php if($condition): ?>
    <p>
        <?= $a ." ". $sign." " . $b." " . "=" . $result?>
    </p>
<?php else: ?>
    <?php foreach ($err as  $e) :?>
        <p><?= $e?></p>
    <?php endforeach; ?>
<?php endif; ?>

</body>
</html>