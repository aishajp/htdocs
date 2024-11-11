
<?php

    session_start();       
        if(isset($_POST['contador'])) {
            $_SESSION['contador'] = $_POST['contador'];
        }

        if(isset($_POST['contador']) && $_POST['contador'] > 0) {
            $_SESSION['contador']--;
        } elseif(isset($_POST['contador']) && $_POST['contador'] < 0) {
            $_SESSION['contador']++;
        }
        
        if(!isset($_SESSION['contador'])) {
            $_SESSION['contador'] = 0;
        }

?>

<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="UTF-8">
    <title>Contador</title>
</head>
<body>
    <h1>Contador</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <input type="hidden" name="contador" value="<?php echo $_SESSION['contador'];?>">
        <input type="submit" value="-">
        <input type="submit" value="<?php echo $_SESSION['contador'];?>">
        <input type="submit" value="+">
    </form>
    <p>Valor actual: <?php echo $_SESSION['contador'];?></p>
</body>

</html>