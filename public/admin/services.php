<?php
require '../../functions/db.php';
if(isset($_POST['service_name'])&&isset($_POST['service_desc'])&&isset($_POST['service_price'])){
    if(isset($_GET['edit'])){
        $stmt = $GLOBALS['pdo']->prepare('UPDATE services SET service_name=:service_name, service_desc=:service_desc, service_price=:service_price WHERE id=:id');
        $values = [
            'service_name' => $_POST['service_name'],
            'service_desc' => $_POST['service_desc'],
            'service_price' => $_POST['service_price'],
            'id' => $_GET['edit']
        ];
        $stmt->execute($values);
        echo "Service Updated";
    } else {
        if(isset($_FILES['service_image'])){
            $target_file = "../uploads/" . basename($_FILES['service_image']['name']);
            $target_type = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        }
        $stmt = $GLOBALS['pdo']->prepare('INSERT INTO services (service_name, service_desc, service_price) VALUES (:service_name, :service_desc, :service_price)');
        $values = [
            'service_name' => $_POST['service_name'],
            'service_desc' => $_POST['service_desc'],
            'service_price' => $_POST['service_price']
        ];
        $stmt->execute($values);
        echo "Service Added";
    }
}
if(isset($_GET['delid'])){
    $stmt = $GLOBALS['pdo']->prepare('DELETE FROM services WHERE id=:id');
        $values = [
            'id' => $_GET['delid']
        ];
        $stmt->execute($values);
        echo "Service Deleted";
}

$services=$GLOBALS['pdo']->prepare('SELECT * FROM services');
$services->execute();
?>

<?php
require '../../functions/loadtemplate.php';

$content = loadtemplate('../../templates/services.html.php',['services' => $services]);

require '../../templates/layout.html.php';