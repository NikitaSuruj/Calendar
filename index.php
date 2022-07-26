<?php
session_start();
require_once('pdo.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.min.css">
</head>

<body>
    <div class="wrap">
        <div class="calendar">
            <div class="table-time">
                <br>
                <span class="table-time__line">00:00</span><br>
                <span class="table-time__line">01:00</span>
                <span class="table-time__line">02:00</span>
                <span class="table-time__line">03:00</span>
                <span class="table-time__line">04:00</span>
                <span class="table-time__line">05:00</span>
                <span class="table-time__line">06:00</span>
                <span class="table-time__line">07:00</span>
                <span class="table-time__line">08:00</span>
                <span class="table-time__line">09:00</span>
                <span class="table-time__line">10:00</span>
                <span class="table-time__line">11:00</span>
                <span class="table-time__line">12:00</span>
                <span class="table-time__line">13:00</span>
                <span class="table-time__line">14:00</span>
                <span class="table-time__line">15:00</span>
                <span class="table-time__line">16:00</span>
                <span class="table-time__line">17:00</span>
                <span class="table-time__line">18:00</span>
                <span class="table-time__line">19:00</span>
                <span class="table-time__line">20:00</span>
                <span class="table-time__line">21:00</span>
                <span class="table-time__line">22:00</span>
                <span class="table-time__line">23:00</span>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th class="table__th">
                            <span class="table__day">ПН</span>
                            <span class="table__date">24</span>
                        </th>
                        <th class="table__th">
                            <span class="table__day">ВТ</span>
                            <span class="table__date">25</span>
                        </th>
                        <th class="table__th">
                            <span class="table__day">СР</span>
                            <span class="table__date">26</span>
                        </th>
                        <th class="table__th">
                            <span class="table__day">ЧТ</span>
                            <span class="table__date">27</span>
                        </th>
                        <th class="table__th">
                            <span class="table__day">ПТ</span>
                            <span class="table__date">28</span>
                        </th>
                        <th class="table__th">
                            <span class="table__day">СБ</span>
                            <span class="table__date">29</span>
                        </th>
                        <th class="table__th">
                            <span class="table__day">ВС</span>
                            <span class="table__date">30</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table__tr">
                        <td class="table__td"><?php
                        $did=1;
                        $dat=260722;
                        $tim=1;
                        $stmt=$pdo->prepare('SELECT id, name FROM bron WHERE den=:x AND vrema=:y');
                        $stmt->execute(array(':x' => 260722, ':y' => 1));
                        $row = $stmt->fetch(PDO::FETCH_ASSOC);
                        if ($row === false){
                          echo "<p>00:00-01:00</p><br><a href='form.php?did=".$did."&dat=".$dat."&tim=".$tim."'>Забранировать</a>";
                        }else{
                          echo '<div style="background-color: #E45545;"><p>00:00-01:00</p><br><p>Забронировано</p></div>';
                        }
                        ?></td>
                        <td class="table__td"><?php
                        $did2=2;
                        $dat2=260722;
                        $tim2=2;
                        $stmt->execute(array(':x' => 260722, ':y' => 2));
                        $row = $stmt->fetch(PDO::FETCH_ASSOC);
                        if ($row === false){
                          echo "<p>01:00-02:00</p><br><a href='form.php?did=".$did2."&dat=".$dat2."&tim=".$tim2."'>Забранировать</a>";
                        }else{
                          echo '<div style="background-color: #E45545;"><p>01:00-02:00</p><br><p>Забронировано</p></div>';
                        }
                        ?></td>
                        <td class="table__td"><?php
                        $did3=3;
                        $dat3=260722;
                        $tim3=3;
                        $stmt->execute(array(':x' => 260722, ':y' => 3));
                        $row = $stmt->fetch(PDO::FETCH_ASSOC);
                        if ($row === false){
                          echo "<p>02:00-03:00</p><br><a href='form.php?did=".$did3."&dat=".$dat3."&tim=".$tim3."'>Забранировать</a>";
                        }else{
                          echo '<div  style="background-color: #E45545;"><p>02:00-03:00</p><br><p>Забронировано</p></div>';
                        }
                        ?></td>
                        <td class="table__td"><?php
                        $did4=4;
                        $dat4=260722;
                        $tim4=4;
                        $stmt->execute(array(':x' => 260722, ':y' => 4));
                        $row = $stmt->fetch(PDO::FETCH_ASSOC);
                        if ($row === false){
                          echo "<p>03:00-04:00</p><br><a href='form.php?did=".$did4."&dat=".$dat4."&tim=".$tim4."'>Забранировать</a>";
                        }else{
                          echo '<div  style="background-color: #E45545;"><p>03:00-04:00</p><br><p>Забронировано</p></div>';
                        }
                        ?></td>
                        <td class="table__td"><?php
                        $did5=5;
                        $dat5=260722;
                        $tim5=5;
                        $stmt->execute(array(':x' => 260722, ':y' => 5));
                        $row = $stmt->fetch(PDO::FETCH_ASSOC);
                        if ($row === false){
                          echo "<p>04:00-05:00</p><br><a href='form.php?did=".$did5."&dat=".$dat5."&tim=".$tim5."'>Забранировать</a>";
                        }else{
                          echo '<div style="background-color: #E45545;"><p>04:00-05:00</p><br><p>Забронировано</p></div>';
                        }
                        ?></td>
                        <td class="table__td"><?php
                        $did6=6;
                        $dat6=260722;
                        $tim6=6;
                        $stmt->execute(array(':x' => 260722, ':y' => 6));
                        $row = $stmt->fetch(PDO::FETCH_ASSOC);
                        if ($row === false){
                          echo "<p>05:00-06:00</p><br><a href='form.php?did=".$did6."&dat=".$dat6."&tim=".$tim6."'>Забранировать</a>";
                        }else{
                          echo '<div style="background-color: #E45545;"><p>05:00-06:00</p><br><p>Забронировано</p></div>';
                        }
                        ?></td>
                        <td class="table__td"><?php
                        $did7=7;
                        $dat7=260722;
                        $tim7=7;
                        $stmt->execute(array(':x' => 260722, ':y' => 7));
                        $row = $stmt->fetch(PDO::FETCH_ASSOC);
                        if ($row === false){
                          echo "<p>06:00-07:00</p><br><a href='form.php?did=".$did7."&dat=".$dat7."&tim=".$tim7."'>Забранировать</a>";
                        }else{
                          echo '<div style="background-color: #E45545;"><p>06:00-07:00</p><br><p>Забронировано</p></div>';
                        }
                        ?></td>
                    </tr>
                    <tr class="table__tr">
                        <td class="table__td"><a href='delete.php'>Убрать всю бронь</a></td>
                        <td class="table__td">2</td>
                        <td class="table__td">3</td>
                        <td class="table__td">4</td>
                        <td class="table__td">5</td>
                        <td class="table__td">6</td>
                        <td class="table__td">7</td>
                    </tr>
                    <tr class="table__tr">
                        <td class="table__td">1</td>
                        <td class="table__td">2</td>
                        <td class="table__td">3</td>
                        <td class="table__td">4</td>
                        <td class="table__td">5</td>
                        <td class="table__td">6</td>
                        <td class="table__td">7</td>
                    </tr>
                    <tr class="table__tr">
                        <td class="table__td">1</td>
                        <td class="table__td">2</td>
                        <td class="table__td">3</td>
                        <td class="table__td">4</td>
                        <td class="table__td">5</td>
                        <td class="table__td">6</td>
                        <td class="table__td">7</td>
                    </tr>
                    <tr class="table__tr">
                        <td class="table__td">1</td>
                        <td class="table__td">2</td>
                        <td class="table__td">3</td>
                        <td class="table__td">4</td>
                        <td class="table__td">5</td>
                        <td class="table__td">6</td>
                        <td class="table__td">7</td>
                    </tr>
                    <tr class="table__tr">
                        <td class="table__td">1</td>
                        <td class="table__td">2</td>
                        <td class="table__td">3</td>
                        <td class="table__td">4</td>
                        <td class="table__td">5</td>
                        <td class="table__td">6</td>
                        <td class="table__td">7</td>
                    </tr>
                    <tr class="table__tr">
                        <td class="table__td">1</td>
                        <td class="table__td">2</td>
                        <td class="table__td">3</td>
                        <td class="table__td">4</td>
                        <td class="table__td">5</td>
                        <td class="table__td">6</td>
                        <td class="table__td">7</td>
                    </tr>
                    <tr class="table__tr">
                        <td class="table__td">1</td>
                        <td class="table__td">2</td>
                        <td class="table__td">3</td>
                        <td class="table__td">4</td>
                        <td class="table__td">5</td>
                        <td class="table__td">6</td>
                        <td class="table__td">7</td>
                    </tr>
                    <tr class="table__tr">
                        <td class="table__td">1</td>
                        <td class="table__td">2</td>
                        <td class="table__td">3</td>
                        <td class="table__td">4</td>
                        <td class="table__td">5</td>
                        <td class="table__td">6</td>
                        <td class="table__td">7</td>
                    </tr>
                    <tr class="table__tr">
                        <td class="table__td">1</td>
                        <td class="table__td">2</td>
                        <td class="table__td">3</td>
                        <td class="table__td">4</td>
                        <td class="table__td">5</td>
                        <td class="table__td">6</td>
                        <td class="table__td">7</td>
                    </tr>
                    <tr class="table__tr">
                        <td class="table__td">1</td>
                        <td class="table__td">2</td>
                        <td class="table__td">3</td>
                        <td class="table__td">4</td>
                        <td class="table__td">5</td>
                        <td class="table__td">6</td>
                        <td class="table__td">7</td>
                    </tr>
                    <tr class="table__tr">
                        <td class="table__td">1</td>
                        <td class="table__td">2</td>
                        <td class="table__td">3</td>
                        <td class="table__td">4</td>
                        <td class="table__td">5</td>
                        <td class="table__td">6</td>
                        <td class="table__td">7</td>
                    </tr>
                    <tr class="table__tr">
                        <td class="table__td">1</td>
                        <td class="table__td">2</td>
                        <td class="table__td">3</td>
                        <td class="table__td">4</td>
                        <td class="table__td">5</td>
                        <td class="table__td">6</td>
                        <td class="table__td">7</td>
                    </tr>
                    <tr class="table__tr">
                        <td class="table__td">1</td>
                        <td class="table__td">2</td>
                        <td class="table__td">3</td>
                        <td class="table__td">4</td>
                        <td class="table__td">5</td>
                        <td class="table__td">6</td>
                        <td class="table__td">7</td>
                    </tr>
                    <tr class="table__tr">
                        <td class="table__td">1</td>
                        <td class="table__td">2</td>
                        <td class="table__td">3</td>
                        <td class="table__td">4</td>
                        <td class="table__td">5</td>
                        <td class="table__td">6</td>
                        <td class="table__td">7</td>
                    </tr>
                    <tr class="table__tr">
                        <td class="table__td">1</td>
                        <td class="table__td">2</td>
                        <td class="table__td">3</td>
                        <td class="table__td">4</td>
                        <td class="table__td">5</td>
                        <td class="table__td">6</td>
                        <td class="table__td">7</td>
                    </tr>
                    <tr class="table__tr">
                        <td class="table__td">1</td>
                        <td class="table__td">2</td>
                        <td class="table__td">3</td>
                        <td class="table__td">4</td>
                        <td class="table__td">5</td>
                        <td class="table__td">6</td>
                        <td class="table__td">7</td>
                    </tr>
                    <tr class="table__tr">
                        <td class="table__td">1</td>
                        <td class="table__td">2</td>
                        <td class="table__td">3</td>
                        <td class="table__td">4</td>
                        <td class="table__td">5</td>
                        <td class="table__td">6</td>
                        <td class="table__td">7</td>
                    </tr>
                    <tr class="table__tr">
                        <td class="table__td">1</td>
                        <td class="table__td">2</td>
                        <td class="table__td">3</td>
                        <td class="table__td">4</td>
                        <td class="table__td">5</td>
                        <td class="table__td">6</td>
                        <td class="table__td">7</td>
                    </tr>
                    <tr class="table__tr">
                        <td class="table__td">1</td>
                        <td class="table__td">2</td>
                        <td class="table__td">3</td>
                        <td class="table__td">4</td>
                        <td class="table__td">5</td>
                        <td class="table__td">6</td>
                        <td class="table__td">7</td>
                    </tr>
                    <tr class="table__tr">
                        <td class="table__td">1</td>
                        <td class="table__td">2</td>
                        <td class="table__td">3</td>
                        <td class="table__td">4</td>
                        <td class="table__td">5</td>
                        <td class="table__td">6</td>
                        <td class="table__td">7</td>
                    </tr>
                    <tr class="table__tr">
                        <td class="table__td">1</td>
                        <td class="table__td">2</td>
                        <td class="table__td">3</td>
                        <td class="table__td">4</td>
                        <td class="table__td">5</td>
                        <td class="table__td">6</td>
                        <td class="table__td">7</td>
                    </tr>
                    <tr class="table__tr">
                        <td class="table__td">1</td>
                        <td class="table__td">2</td>
                        <td class="table__td">3</td>
                        <td class="table__td">4</td>
                        <td class="table__td">5</td>
                        <td class="table__td">6</td>
                        <td class="table__td">7</td>
                    </tr>
                    <tr class="table__tr">
                        <td class="table__td">1</td>
                        <td class="table__td">2</td>
                        <td class="table__td">3</td>
                        <td class="table__td">4</td>
                        <td class="table__td">5</td>
                        <td class="table__td">6</td>
                        <td class="table__td">7</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="js/main.min.js"></script>
</body>

</html>
