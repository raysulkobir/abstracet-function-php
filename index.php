



<?php include "inc/header.php";?>
  
    <div class="para">
        <?php
        
        //abstract
          abstract class student{
                public $name;
                public $age;
                
                function details(){
                  echo $this->name." age is ".$this->age;
                }
                        
            }
            class Boy extends student{
                public function describe(){
                    echo parent:: details()."I am a hight school student<br>";
                }
            }
           
           
             $abs = new Boy;
             $abs -> name = "Md.Raysul kobir";
             $abs -> age= "18<br>";
             $abs ->describe();
            
            
        ?>
      
       
    </div>
<?php include "inc/footer.php"; ?>