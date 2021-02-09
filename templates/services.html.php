
<section> 

<h1  class="servicesH1">Services</h1>

      
        <?php
        foreach($services as $s){
            ?>
            <div class="container">
    <div class="flex-container">


           
           <div class="card">
        <div class="card-image" style="background-image: url(https://i.pinimg.com/originals/f1/3c/fb/f13cfbba7b05e6ce4ea8c8715fe3544d.jpg)"></div>
        <div class="card-content">

               
						<h1><?=$s['service_name']?></h1>
						<p  class="subtitle">Price: £<?=$s['service_price']?></p>
                        <p><?=$s['service_desc']?></p>
                        </div>
           </div>
    </div>
</div>
                     
                    
                        <?php
                        if(isset($_SESSION['access_level'])){
                            if($_SESSION['access_level']==1){?>
                                <button><a href='editservice.php?id=<?=$s['id']?>'>Edit</a></button>
                                <button><a href='services.php?delid=<?=$s['id']?>'>Delete</a></button>
                                
                      <?php } 
                        } ?>
                        


                    
				

        <?php
        }
    ?>

			