
<div class="container upload">
<!--           ini buat sendiri pake ajax -->
<!--            <div class="frameupload">
            <h1>Image uploader</h1>
            action langsung ke fungsi
            <form action="upload_file" id="myForm" method="post" enctype="multipart/form-data">
                <label for="file">filename</label>
                <input type="file" name="file" id="file"><br>
                <input type="submit" name="submit" class="btn btn-success" value="submit">
            </form>


            progres attribut
            <div class="progress">
                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                
                </div><span class="sr-on" style="position: absolute;">0%</span>
            </div>
            </div> */-->
<!--         end dari buat sendiri pake ajax   -->
            
<!--            dropzone dan theme defaul action ke upload_file.php-->
           <div class="block push-up-10">
                            <form action="upload_file" class="dropzone dropzone-mini"></form>
            </div>      
    <!--         end dari dropzone   -->        
        
        

        <div class="galleryform">
            <div class="panel-heading"><span class="glyphicon glyphicon-picture"><span style="font-family:sans-serif; margin-left: 10px;">Gallery</span></span></div>
                       
        </div>
        <div class="content-frame-body content-frame-body-left">
                        <?php 
                            $upload=new upload();
                            $id_useremail=$upload->getid_useremail($user_info);
//                            array dalam arry
                            $data=array();
                            //keluarin isi array dalam array
                            foreach ($id_useremail as $key){
                                $data=$key;
                            }
                            $page_rows=10;
                            $rowpicture=$upload->getlength_rowpicture($data['id'],$data['user_email']);
                            $last=ceil($rowpicture/$page_rows);
                            if($last<1){
                                $last=1;
                            }
                            
                            $page_num=1;
                            if(isset($_GET['pn'])){
                                $page_num=  preg_replace('#[^0-9]#', "", $_GET['pn']);
                            }
                            
                            if($page_num < 1){
                                $page_num=1;
                            }
                            else if($page_num >$last){
                                $page_num=$last;
                            }
                            $limit='LIMIT '.($page_num-1)*$page_rows.','.$page_rows;
                            $picture=$upload->getallpicture($data['id'], $data['user_email'],$limit);
                            
                            $paginationCtrls="";
                            $textline="page <b>$page_num</b> of <b>$last</b>";
                            if($last!=1){
                                //set previous page
                                if($page_num>1){
                                       
                                    $previous=$page_num-1;
                                    $paginationCtrls .='<a href="'.URL.'upload/picture/pagenumber?pn='.$previous.'">previous</a> &nbsp;';
                                    //render clickable number links that should appear on the left of target
                                    for($i=$page_num-4;$i< $page_num;$i++){
                                        if($i > 0){
                                            $paginationCtrls.='<a href="'.URL.'upload/picture/pagenumber?pn='.$i.'">'.$i.'</a> &nbsp;';
                                        }
                                    }
                                    
                                    
                                }
                                $paginationCtrls.=''.$page_num.' &nbsp;';
                            }
                            //show all page number
                            for($i=$page_num+1; $i<=$last ;$i++){
                                $paginationCtrls .='<a href="'.URL.'upload/picture/pagenumber?pn='.$i.'">'.$i.'</a> &nbsp;';
                                if($i>=$page_num+4){
                                    break;
                                }
                            }
                            
                            if($page_num !=$last){
                                $next=$page_num+1;
//                                $paginationCtrls .='&nbsp ; &nbsp; <a href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'">next </a>';
                                 $paginationCtrls .=' <a href="'.URL.'upload/picture/pagenumber?pn='.$next.'">next</a>';
                            }
                            ?>
                        <div class="pull-left push-up-10">
                            <button class="btn btn-primary" id="gallery-toggle-items">Toggle All</button>
                             <div class="keterangan"><?php echo $textline;?></div>  
                        </div>
                        <div class="pull-right push-up-10">
                            <div class="btn-group">
                                <button class="btn btn-primary"><span class="fa fa-pencil"></span> Edit</button>
                                <button class="btn btn-primary deletepic"><span class="fa fa-trash-o"></span> Delete</button>
                            </div>                            
                        </div>
                        <!--        start load isi gallery-->
                        <div class="gallery" id="links">
                            
                            
                            <?php foreach ($picture as $key){?>
                                <a class="gallery-item" href="<?php echo URL;?>views/upload/uploads/<?php echo $key['pathgambar'] ?>" title="<?php echo $key['pathgambar']?>" data-gallery>
                                    <div class="image">                              
                                        <img src="<?php echo URL;?>views/upload/uploads/<?php echo $key['pathgambar'] ?>" alt="<?php echo $key['pathgambar']?>"/>                                        
                                        <ul class="gallery-item-controls">
                                            <li><label class="check"><input type="checkbox" class="icheckbox"/></label></li>
                                            <li><span class="gallery-item-remove" rel="<?php echo $key["id_gambar"];?>" userid="<?php echo $data['id']?>"><i class="fa fa-times"></i></span></li>
                                        </ul>                                                                    
                                    </div>
                                    <div class="meta">
                                        <strong><?php echo $key['pathgambar'] ?></strong>
                                        <?php $date=  date("d-m-Y H:i:s",strtotime($key['date'])); ?>
                                        <span style="color: #FF6400"><?php echo $date;?> </span>
                                    </div>                                
                                </a>
                            <?php
                            }
                            ?> 
                           
                           
                 

                                                      
                             
                        </div> <!--       end load isi gallery-->
                        
                        <!--                        pagination     -->
                        <ul class="pagination pagination-sm pull-right push-down-20 push-up-20">
                           <?php echo $paginationCtrls; ?>
                        </ul> <!--end pagination-->
                    </div>    
         <div id="pagination_controls"></div>
        </div> <!-----end container upload------>
            <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
            <div class="slides"></div>
            <h3 class="title"></h3>
            <a class="prev">‹</a>
            <a class="next">›</a>
            <a class="close">×</a>
            <a class="play-pause"></a>
            <ol class="indicator"></ol>
        </div>    

           <!--end plugin blueimp gallery-->

      <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="<?php echo URL?>public/js/galleryjs/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo URL?>public/js/galleryjs/js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php echo URL?>public/js/galleryjs/js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
       <script type='text/javascript' src='<?php echo URL?>public/js/galleryjs/js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="<?php echo URL?>public/js/galleryjs/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="<?php echo URL?>public/js/galleryjs/js/plugins/blueimp/jquery.blueimp-gallery.min.js"></script>
        <script type="text/javascript" src="<?php echo URL?>public/js/galleryjs/js/plugins/dropzone/dropzone.min.js"></script>
<!--        <script type="text/javascript" src="<?php echo URL?>public/js/gbcjs/dropzone.js"></script>-->
        <script type="text/javascript" src="<?php echo URL?>public/js/galleryjs/js/plugins/icheck/icheck.min.js"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
<!--        <script type="text/javascript" src="<?php echo URL?>public/js/galleryjs/js/settings.js"></script>-->
        
        <script type="text/javascript" src="<?php echo URL?>public/js/galleryjs/js/plugins.js"></script>        
        
<script type="text/javascript" src="<?php echo URL?>public/js/galleryjs/js/actions.js"></script>  <!----disini tersimpan action2 javascript --->    
        <!-- END TEMPLATE -->
        <script src="<?php echo URL?>public/js/jqueryform.min.js"></script>
        <script>            
            document.getElementById('links').onclick = function (event) {
                event = event || window.event;
                var target = event.target || event.srcElement;
                var link = target.src ? target.parentNode : target;
                var options = {index: link, event: event,onclosed: function(){
                        setTimeout(function(){
                            $("body").css("overflow","");
                        },200);                        
                    }};
                var links = this.getElementsByTagName('a');
                blueimp.Gallery(links, options);
            };
        </script>  
        
        
</div><!--------end row---------->

<!--setting css doank untuk gallery-->
    <!-- END SCRIPTS -->         