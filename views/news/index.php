<?php
$getdata=new news();
$data=$getdata->getpostcontain();
//
//var_dump($data);
// 
//     $count=count($data);
//      for($i=0;$i<$count;$i++){
//          $col=count($data[$i]);
//         for($j=0;$j<$col;$j++){
//             echo $data[$i][$j];
//         }
//      }
    
?>
<div class="news">
    
    <div class="row">
        <div class="eightcol">
            <?php
            //ini untuk mengeluarkan data2 dalam array 2 dimensi ke satu dimensi
                $contain=array();
                $count=count($data);
                for($i=0;$i<$count;$i++){
                    $col=count($data[$i]);
                    for($j=0;$j<$col;$j++){
                      $contain[$j]=$data[$i][$j];
                    }
               }?>
            <h1 class="pagetitle"><?php echo $contain[1]?></h1>
            <span class="hoverBorderWrapper">
                  <?php 
                  $geturlimage=new getfirstimage();
                  $image=$geturlimage->get_first_image_url($contain[2]);
                  $boolean=$geturlimage->is_image($contain[2]);
                  if($boolean==false){
                  ?> <img src="<?php echo URL?>public/image/noimage.png" alt="noimage" style="height: 250px;"/>  
               <?php }else{?>     
                     <img src="<?php echo URL.$image; ?>" alt="noimage" style="height: 250px;"/>
                  <?php }?>
                <span class="theHoverBorder"></span>
            </span>
<!--            <h2 class="subtitle">
                <?php echo $contain[1]?>
            </h2>-->
            <div class="post">
              
            </div>
        </div>
             
        </div>
      

    </div>
