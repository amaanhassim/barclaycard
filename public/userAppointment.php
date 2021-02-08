<?php
session_start(); 
require '../functions/db.php';
if (isset($_SESSION['0'])){

    $query1 = $pdo->prepare('SELECT * FROM users');
    $query1->execute();

    $query2 = $pdo->prepare('SELECT location FROM locations');
    $query2->execute();

    foreach ($query2 as $data) {
        $location = $location . '<option> <a href="' . $data['name'] . '"> '. $data['name'] .'</a></option>';
    } //print each value from the table in the desired layout
 

    $query3 = $pdo->prepare('SELECT time FROM timeSlots WHERE avalible == 0 ');
    $query3->execute();

    foreach ($query3 as $data) {
        $time = $time . '<option> <a href="' . $data['name'] . '"> '. $data['name'] .'</a></option>';
    } //print each value from the table in the desired layout


    if (isset($_POST['submit'])) {
        $appointment = $pdo->prepare('INSERT INTO appointments (name, timeSlot) VALUES (:name, :time ) ');
        $catNName = [
            'name' => $_SESSION['idusers'],
            'location' => $_POST['location'],
            'time' => $_POST['timeSlot']
        ];
        $upCat->execute($catNName);
    }

$content = '
    <form action="article.php" method="post">
                    <label Name </label> ' . $_SESSION['idusers']  . '
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