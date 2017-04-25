<?php  
$data=new paket();
$tempdata=$data->getdatapaketwithcategory();
//var_dump($tempdata);

?>



<link rel='stylesheet' id='zn-templtecss-css'  href='<?php echo URL?>public/css/raise/template.css' type='text/css' media='all' />
<link rel='stylesheet' id='options-css'  href='<?php echo URL?>public/css/raise/option.css' type='text/css' media='all' />
<!--<link rel='stylesheet' id='zn-bootstrap-responsivecss-css'  href='<?php echo URL?>public/css/raise/responsive.css' type='text/css' media='all' />-->
<div class="row">
<div class="itemListView clearfix eBlog">
                            <div class="itemList">        
                                        <?php foreach($tempdata as $key){ ?>
                                        <div class="clear"></div>
                                        <div class="itemContainer post-4805 boat-item">

                                            <div class="boat-image">
                                                <?php  
                                                $postname=new konvurl();
//                                                $posturl=$postname->set_post_name("rumah makan");
//                                                 var_dump($key['judul']);
                                                $posturl=$postname->set_post_name($key['judul']);
//                                                echo $posturl;
                                                $image_first_url=$data->get_image_url($key['isipost']);
                                                $boolean=$data->is_images($key['isipost']);
//                                                var_dump($boolean);
                                                ?>
                                                <a href="<?php echo URL."paket/".$posturl?>" class="hoverBorder pull-left" style="margin-right: 20px;margin-bottom:4px;">
                                                    <span class="hoverBorderWrapper">
                                                  <?php if($boolean == false) {?>
                                                        <img class="shadow kotak" src="<?php echo URL?>public/image/noimage.png" alt=""/>
                                                  <?php }else{ ?>
                                                        <img class="shadow kotak" src="<?php echo URL.$image_first_url?>" alt=""/>
                                                   <?php }?>    
                                                    <span class="theHoverBorder"></span>
                                                    </span>
                                                </a>                                            
                                            </div>
                                            <div class="boat-content">
                                                <h3 class="title">
                                                    <a href="<?php echo URL."paket/".$posturl?>" title="<?php echo $key['judul'] ?>">
                                                       <?php echo $key['judul'] ?>                                                    </a>
                                                    <span class="boat-meta pull-right">
                                                                                                                    <i class="icon-star"></i>
                                                                                                                    <i class="icon-star"></i>
                                                                                                                    <i class="icon-star"></i>
                                                                                                                    <i class="icon-star"></i>
                                                                                                                    <i class="icon-star-empty"></i>
                                                                                                                        (4/5)
                                                    </span>
                                                </h3>
                                               <?php  
                                               $isi_post_tanpa_url=$data->remove_image_url_V2($key['isipost']);
                                               $isi_post_tanpa_url_setelah_substring=  substr($isi_post_tanpa_url,0,100);
                                               echo $isi_post_tanpa_url_setelah_substring; 
                                               ?>
                                            </div>
                                            <a class="btn btn-success" href="http://www.lombokreisen.com/gili-getaway-fast-boat?book">
                                                <i class="icon-shopping-cart icon-white"></i>&nbsp;Book
                                            </a>
                                            &nbsp;&nbsp;&mdash;&nbsp;&nbsp;
                                            <span class="boat-price">Start from&nbsp;&nbsp;<i class="icon-tags"></i>&nbsp;<strong>USD 49</strong></span>
                                            <div class="clear"></div>

                                        </div><!-- end Blog Item -->
                                        <?php } ?>

                                    
                            </div><!-- end .itemList -->

                            <!-- Pagination -->
                            <div class='pagination'><ul><li class="pagination-start"><span class="pagenav">Start</span></li><li class="pagination-prev"><span class="pagenav">Prev</span></li><li><span class="pagenav">1</span></li><li><a href="http://www.lombokreisen.com/category/boat/page/2">2</a></li><li class="pagination-next"><a href="http://www.lombokreisen.com/category/boat/page/2">Next</a></li><li class="pagination-end"><a href="http://www.lombokreisen.com/category/boat/page/2">End</a></li></ul><div class="clear"></div>Page 1 of 2</div>

                        </div>
    </div>
</div>
</div>    