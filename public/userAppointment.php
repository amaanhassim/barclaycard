<?php
session_start(); 
require '../functions/db.php';
if (isset($_SESSION['0'])){

    $query = $pdo->prepare('SELECT location FROM locations');
    $query->execute();

    foreach ($query as $data) {
        $location = $location . '<option> <a href="' . $data['name'] . '"> '. $data['name'] .'</a></option>';
    } //print each value from the table in the desired layout
 

    $query = $pdo->prepare('SELECT time FROM timeSlots WHERE avalible == 0 ');
    $query->execute();

    foreach ($query as $data) {
        $time = $time . '<option> <a href="' . $data['name'] . '"> '. $data['name'] .'</a></option>';
    } //print each value from the table in the desired layout


    if (isset($_POST['submit'])) {
        $appointment = $pdo->prepare('INSERT INTO appointments (name, timeSlot) VALUES (:name, :time ) ');
        $catNName = [
            'name' => $_POST['name'],
            'time' => $_POST['timeSlot']
        ];
        $upCat->execute($catNName);
    }

$content = '
    <form action="article.php" method="post">

                    <label> location </labe> <select name = "location">
                    '. $location .'
                    </select>
                    <label> Time </labe> <select name = "timeSlot">
                    '. $time .'
                    </select>
                    <label> Time Slot </labe> <input type="text" name = "timeSlot"/>
                    <input type="submit" name="submit3" value="Submit" style="margin-left: 0px"/>
                </form>

';


}
?>