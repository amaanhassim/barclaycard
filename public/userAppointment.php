<?php
session_start(); 
require '../functions/db.php';
if (isset($_SESSION['access_level' == 0 ])){

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
        $service = $service . '<option> <a href="' . $data3['service_name'] . '"> '. $data3['service_name'] .'</a></option>';
    }

    if (isset($_POST['submit'])) {
        $appointment = $pdo->prepare('INSERT INTO appointments (name, timeSlot, location, service) VALUES (:name, :time, :location, :service ) ');
        
        $values1 = [
            'name' => $_SESSION['idusers'],
            'location' => $_POST['location'],
            'time' => $_POST['timeSlot'],
            'service' => $_POST['service']
        ];
        $appointment->execute($values1);
        
        $time = $pdo->prepare('UPDATE timeSlot SET avalible == "1" WHERE time = :time');
        $values2 = [
            'time' => $_POST['timeSlot']
        ];
        $time->execute($values2);
    }

$content = '
    <form action="userAppointment.php" method="post">
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
if (isset($_SESSION['access_level' == 1 ])){

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
        $service = $service . '<option> <a href="' . $data3['service_name'] . '"> '. $data3['service_name'] .'</a></option>';
    }

    if (isset($_POST['submit'])) {
        $appointment = $pdo->prepare('INSERT INTO appointments (name, timeSlot, location, service) VALUES (:name, :time, :location, :service ) ');
        
        $values1 = [
            'name' => $_POST['name'],
            'location' => $_POST['location'],
            'time' => $_POST['timeSlot'],
            'service' => $_POST['service']
        ];
        $appointment->execute($values1);
        
        $time = $pdo->prepare('UPDATE timeSlot SET avalible == "1" WHERE time = :time');
        $values2 = [
            'time' => $_POST['timeSlot']
        ];
        $time->execute($values2);
    }

$content = '
    <form action="userAppointment.php" method="post">
                    <label Name </label> <input type="text" name = "name"/>
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
else{
    $content = '
    <h3> Please Login or register to Book a Appointment </h3>
';
require '../templates/layout.html.php';
}
?>