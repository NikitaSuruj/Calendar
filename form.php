<?php
session_start();
require_once('pdo.php');
if (!isset($_GET['did'])){
  die('Bad id');
}
if (isset($_POST['name'])){
  $stmt = $pdo->prepare('INSERT INTO bron
        (id, name, den, vrema) VALUES ( :id, :nm, :dt, :vr)');
    $stmt->execute(array(
        ':id' => strval($_POST['did']),
        ':nm' => strval($_POST['name']),
        ':dt' => strval($_POST['dat']),
        ':vr' => strval($_POST['tim']))
    );
    $_SESSION['success'] = "Забронировано";
    header("Location: index.php");
    return;
}
$didobj = $_GET['did'];
$datobj = $_GET['dat'];
$timobj = $_GET['tim'];
?>

<form action='' method='post'>
  <input type='hidden' name='did' value="<?= $didobj ?>"></input>
  <p>Дата: <?php echo $_GET['dat']?> </p>
  <input type='hidden' name='dat' value="<?= $datobj ?>"></input>
  <p>Время: <?php echo $_GET['tim']?> </p>
  <input type='hidden' name='tim' value="<?= $timobj ?>"></input>
  <input type='text' name='name'></input>
  <input type='submit' value='add'></input> <a href="index.php">Cancel</a>
</form>
