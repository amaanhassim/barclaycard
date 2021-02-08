<?php
session_start(); 
require '../functions/db.php';
if (isset($_SESSION['0'])){

    $query1 = $pdo->prepare('SELECT * FROM users');
    $query1->execute();

    $query2 = $pdo->prepare('SELECT location FROM locations');
    $query2->execute();

    foreach ($query2 as $data1) {
        $location = $location . '<option> <a href="' . $data1['name'] . '"> '. $data1['name'] .'</a></option>';
    } //print each value from the table in the desired layout
 

    $query3 = $pdo->prepare('SELECT time FROM timeSlots WHERE avalible == 0 ');
    $query3->execute();

    foreach ($query3 as $data2) {
        $time = $time . '<option> <a href="' . $data2['time'] . '"> '. $data2['time'] .'</a></option>';
    } //print each value from the table in the desired layout

    $query4 = $pdo->prepare('SELECT * FROM services');
    $query4->execute();

    foreach($query4 as $data3){
        $service = $service . '<option> <a href="' . $data['service_name'] . '"> '. $data['service_name'] .'</a></option>';
    }

    if (isset($_POST['submit'])) {
        $appointment = $pdo->prepare('INSERT INTO appointments (name, timeSlot) VALUES (:name, :time ) ');
        $values = [
            'name' => $_SESSION['idusers'],
            'location' => $_POST['location'],
            'time' => $_POST['timeSlot']
        ];
        $appointment->execute($values);
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
                    <label> Service Required </label> <select name = "service">
                    '. $service .'
                    <input type="submit" name="submit3" value="Submit" style="margin-left: 0px"/>
                </form>

';
   require '../templates/layout.html.php';
}
?>