<?php
require '../../functions/db.php';
if(isset($_POST['service_name'])&&isset($_POST['service_desc'])&&isset($_POST['service_price'])){
    $img=null;
    if(isset($_FILES['service_image'])){//Is there an image to upload?
        $target_file = "/uploads/" . basename($_FILES['service_image']['name']);
        $target_type = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        if(getimagesize($_FILES['service_image']['tmp_name'])){//Check the file is an image by getting the image size
            if($_FILES['service_image']['size'] > 500000){//Max allowed size
                echo "Image too large.";
            } else {
                $allowed_filetypes=array("jpg", "png", "jpeg", "gif");
                if(in_array($allowed_filetypes, $target_type)){//check if its an allowed image (filter out bitmaps etc)
                    if(move_uploaded_file($_FILES['service_image']['tmp_name'], $target_file)){
                        //Image uploaded
                        $img=$target_file;
                    }
                } else {
                    echo "Type not allowed";
                }
            }
        } else {
            echo "File is not an image.";
        }
    }
    if(isset($_GET['edit'])){
        if($img==null){//Dont update image as a previous one will have been set
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
            $stmt = $GLOBALS['pdo']->prepare('UPDATE services SET service_name=:service_name, service_desc=:service_desc, service_price=:service_price, service_image=:img WHERE id=:id');
            $values = [
                'service_name' => $_POST['service_name'],
                'service_desc' => $_POST['service_desc'],
                'service_price' => $_POST['service_price'],
                'img' => $img,
                'id' => $_GET['edit']
            ];
            $stmt->execute($values);
            echo "Service Updated";
        }
    } else {
        
        $stmt = $GLOBALS['pdo']->prepare('INSERT INTO services (service_name, service_desc, service_price, service_image) VALUES (:service_name, :service_desc, :service_price, :service_image)');
        $values = [
            'service_name' => $_POST['service_name'],
            'service_desc' => $_POST['service_desc'],
            'service_price' => $_POST['service_price'],
            'service_image' => $img
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