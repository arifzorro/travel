<div class="newshighlight">
     
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



$dbquery =new dbquery();

$data=$dbquery->postgetdata();
//var_dump($data);
$count=count($data);
//var_dump($count);
?>
<?php if ($count == 0){ ?>
    <div class="row"> <h2>NEWS</h2>  
      
        <?php for($i=0;$i<3;$i++){?>
        <?php if($i==2){  ?>
        <div class="newcolom last">
                    <div class="span3 box newimage-boxes imgboxes_style1">
                        <a class="hoverBorder" href="#" target="_self">
                            <span class="hoverBorderWrapper">
                                
                                <img src="<?php echo URL?>public/image/noimage.png" alt="noimage"/>
                                    <span class="theHoverBorder"></span>
                            </span>
                            <h6>Read more +</h6>
                    </a>
                    <h3 class="m_title">no image</h3>
                    <p>NO POST</p>
                </div>
                    
        </div>
        
        <?php }else{?>
                <div class="newcolom">
                    <div class="span3 box newimage-boxes imgboxes_style1">
                       <a class="hoverBorder" href="#" target="_self">
                            <span class="hoverBorderWrapper">
                                
                                <img src="<?php echo URL?>public/image/noimage.png" alt="noimage"/>
                                    <span class="theHoverBorder"></span>
                            </span>
                            <h6>Read more +</h6>
                    </a>
                    <h3 class="m_title">no image</h3>
                    <p>NO POST</p>
                </div>
                    
    </div>
        <?php } ?>
        <?php } ?>
     </div> 


<?php }else if($count == 1){?>
    <div class="row"> <h2>NEWS</h2>  
    <?php
    for($i=0;$i<1;$i++){
        $temp=$data[$i];
//        echo $temp[0];  //judul
//        echo $temp[1];  //isi post     
//        echo $temp[2];//alamat gambar
        for($j=0;$j<1;$j++){?>
            <div class="newcolom">
        	<div class="span3 box newimage-boxes imgboxes_style1">
<!--                    --><?php //echo 'ini adalah id :'.$temp[3];?>
                    <?php                    
                    $postname=new konvurl();
                    $posturl=$postname->set_post_name($temp[0]);  
                    ?>
                    <a class="hoverBorder" href="<?php echo "news/".$posturl?>" target="_self">
                            <span class="hoverBorderWrapper">
                                <?php if($temp[2] == "") {?>
                                        <img src="<?php echo URL?>public/image/noimage.png" alt="noimage"/>
                                        <span class="theHoverBorder"></span>
                                        </span>
                                    <h6>Read more +</h6>
                                <?php }else{?>
                                       <img src="<?php echo $temp[2]?>" alt="<?php $temp[1]?>"/>
                                        <span class="theHoverBorder"></span>
                                        </span>
                                    <h6>Read more +</h6>

                               <?php } ?>

                             

                    </a>
                    <h3 class="m_titlev2"><?php echo $temp[0] ?></h3>
                     <?php $geturlimage=new getfirstimage();       
                     //remove url image in contents
                         $string=$geturlimage->remove_image_url_in_content($temp[1]);?>
                            
                    <p><?php echo substr($string,0,50); ?></p>
                </div>            
            </div>
     
    <?php }?>
<?php } ?>
</div>
<?php }else if($count == 2){?>
    <div class="row"> <h2>NEWS</h2>  
    <?php
//                var_dump($data);
    for($i=0;$i<2;$i++){
        $temp=$data[$i];
        for($j=0;$j<1;$j++){?>
      <div class="newcolom">
        <div class="span3 box newimage-boxes imgboxes_style1">
<!--                    --><?php //echo 'ini adalah id :'.$temp[3];?>
                    <?php                    
                    $postname=new konvurl();
                    $posturl=$postname->set_post_name($temp[0]);  
                    ?>
                    <a class="hoverBorder" href="<?php echo "news/".$posturl?>" target="_self">
                            <span class="hoverBorderWrapper">
                                <?php if($temp[2] == "") {?>
                                        <img src="<?php echo URL?>public/image/noimage.png" alt="noimage"/>
                                        <span class="theHoverBorder"></span>
                                        </span>
                                    <h6>Read more +</h6>
                                <?php }else{?>
                                       <img src="<?php echo $temp[2]?>" alt="<?php $temp[1]?>"/>
                                        <span class="theHoverBorder"></span>
                                        </span>
                                    <h6>Read more +</h6>

                               <?php } ?>
                    </a>
                    <h3 class="m_titlev2"><?php echo $temp[0] ?></h3>
                       <?php $geturlimage=new getfirstimage();       
                     //remove url image in contents
                         $string=$geturlimage->remove_image_url_in_content($temp[1]);?>  
                    <p><?php echo substr($string,0,50); ?></p>   
                </div>            
      </div>
    <?php }?>
  
<?php } ?>
</div>

<?php }else if ($count==3){ ?>
<div class="row">   <h2>NEWS</h2>  
<?php
for($i=0;$i<3;$i++){
    $temp=$data[$i];
//    var_dump($temp);
    for($j=0;$j<1;$j++){?>
<!--    buat nampilin attribut class fourcoul last biar margin containnya bener gambarnya tidak ke bawah-->
        <?php if($i==2) {?>
            <div class="newcolom last">
        	<div class="span3 box newimage-boxes imgboxes_style1">
                    <?php // echo 'ini adalah id :'.$temp[3];?>
                    <?php                    
                    $postname=new konvurl();
                    $posturl=$postname->set_post_name($temp[0]);
                    ?>
                    <a class="hoverBorder" href="<?php echo "news/".$posturl?>" target="_self">
                           <span class="hoverBorderWrapper">
                                <?php if($temp[2] == "") {?>
                                        <img src="<?php echo URL?>public/image/noimage.png" alt="noimage"/>
                                        <span class="theHoverBorder"></span>
                                        </span>
                                    <h6>Read more +</h6>
                                <?php }else{?>
                                       <img src="<?php echo $temp[2]?>" alt="<?php $temp[1]?>"/>
                                        <span class="theHoverBorder"></span>
                                        </span>
                                    <h6>Read more +</h6>

                               <?php } ?>
                    </a>
                    <h3 class="m_title"><?php echo $temp[0] ?></h3>
                     <?php $geturlimage=new getfirstimage();       
                     //remove url image in contents
                         $string=$geturlimage->remove_image_url_in_content($temp[1]);?>
                    <p><?php echo $string; ?></p>
                </div>
                    
    </div>
    
        <?php }else{?>
        
             <div class="newcolom">
        	<div class="span3 box newimage-boxes imgboxes_style1">
              
                    <?php                    
                    $postname=new konvurl();
                    $posturl=$postname->set_post_name($temp[0]);
                    ?>
                    <a class="hoverBorder" href="<?php echo "news/".$posturl?>" target="_self">
                          <span class="hoverBorderWrapper">
                                <?php if($temp[2] == "") {?>
                                        <img src="<?php echo URL?>public/image/noimage.png" alt="noimage"/>
                                        <span class="theHoverBorder"></span>
                                        </span>
                                    <h6>Read more +</h6>
                                <?php }else{?>
                                       <img src="<?php echo $temp[2]?>" alt="<?php $temp[1]?>"/>
                                        <span class="theHoverBorder"></span>
                                        </span>
                                    <h6>Read more +</h6>

                               <?php } ?>
                    </a>
                    <h3 class="m_title"><?php echo $temp[0] ?></h3>
                  <?php $geturlimage=new getfirstimage();       
                     //remove url image in contents
                         $string=$geturlimage->remove_image_url_in_content($temp[1]);?>  
                    <p><?php echo substr($string,0,50); ?></p>   
                </div>
                    
    </div>
        <?php }?>
    <?php }?>
<?php } ?>
</div>
<?php }else{?>
<div class="row">   <h2>NEWS</h2>  
<?php
for($i=0;$i<4;$i++){
    $temp=$data[$i];
//    var_dump($temp);
    for($j=0;$j<1;$j++){?>
<!--    buat nampilin attribut class fourcoul last biar margin containnya bener gambarnya tidak ke bawah-->
        <?php if($i==3) {?>
            <div class="newcolom last">
        	<div class="span3 box newimage-boxes imgboxes_style1">
                    <?php // echo 'ini adalah id :'.$temp[3];?>
                    <?php                    
                    $postname=new konvurl();
                    $posturl=$postname->set_post_name($temp[0]);
                    ?>
                    <a class="hoverBorder" href="<?php echo "news/".$posturl?>" target="_self">
                           <span class="hoverBorderWrapper">
                                <?php if($temp[2] == "") {?>
                                        <img src="<?php echo URL?>public/image/noimage.png" alt="noimage"/>
                                        <span class="theHoverBorder"></span>
                                        </span>
                                    <h6>Read more +</h6>
                                <?php }else{?>
                                       <img src="<?php echo $temp[2]?>" alt="<?php $temp[1]?>"/>
                                        <span class="theHoverBorder"></span>
                                        </span>
                                    <h6>Read more +</h6>

                               <?php } ?>
                    </a>
                    <h3 class="m_title"><?php echo $temp[0] ?></h3>
                      <?php $geturlimage=new getfirstimage();       
                     //remove url image in contents
                         $string=$geturlimage->remove_image_url_in_content($temp[1]);?>  
                    <p><?php echo substr($string,0,50); ?></p>   
                </div>
                    
    </div>
    
        <?php }else{?>
        
             <div class="newcolom">
        	<div class="span3 box newimage-boxes imgboxes_style1">
              
                    <?php                    
                    $postname=new konvurl();
                    $posturl=$postname->set_post_name($temp[0]);
                    ?>
                    <a class="hoverBorder" href="<?php echo "news/".$posturl?>" target="_self">
                          <span class="hoverBorderWrapper">
                                <?php if($temp[2] == "") {?>
                                        <img src="<?php echo URL?>public/image/noimage.png" alt="noimage"/>
                                        <span class="theHoverBorder"></span>
                                        </span>
                                    <h6>Read more +</h6>
                                <?php }else{?>
                                       <img src="<?php echo $temp[2]?>" alt="<?php $temp[1]?>"/>
                                        <span class="theHoverBorder"></span>
                                        </span>
                                    <h6>Read more +</h6>

                               <?php } ?>
                    </a>
                    <h3 class="m_title"><?php echo $temp[0] ?></h3>
                    <?php $geturlimage=new getfirstimage();       
                     //remove url image in contents
                         $string=$geturlimage->remove_image_url_in_content($temp[1]);?>  
                    <p><?php echo substr($string,0,50); ?></p>   
                </div>
                    
    </div>
        <?php }?>
    <?php }?>
<?php } ?>
</div>
<?php }?>
    
</div><!-----end newshigliht--->
