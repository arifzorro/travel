<div class="row sidebars"><!--------start row sidebar--------->
        <div class="col-md-2 nopadding">
            <div id="post">
<!--                <div class="ukur">tessssss</div>-->
            <div class="sidebar">
                <div class="title">Posting</div>
                <div class="navbar-side">
                <ul>

                    <li><a class="item_posting" href="<?php echo URL; ?>dashboard">Post<span class="glyphicon glyphicon-plus postlabel"></span></a>
                        <ul class="postmenus">
                            <li class="newpostdesktop"><a class="glyphicon glyphicon-pencil newpost" href="<?php echo URL; ?>dashboard">  New post</a></li>
                            <li class="newpostmobile"><a href="<?php echo URL; ?>dashboard">New post <span class="glyphicon glyphicon-pencil"></span></a></li>
                            <li class="allpostdesktop"><a class="glyphicon glyphicon-list allpost" href="<?php echo URL;?>dashboard/allpost">  all post</a></li>
                            <li class="allmobile"><a href="<?php echo URL;?>dashboard/allpost">  all post<span class="glyphicon glyphicon-list allpost"></span></a></li>
                         </ul>

                    </li>
                    <li><a class="ket" href="<?php echo URL?>upload/picture"> Upload<span class="glyphicon glyphicon-cloud-upload upload " href="<?php echo URL?>upload/picture"></span></a>
                            <ul class="uploadmenus">
                                <li class="uploadpicturedesktop"><a class="glyphicon glyphicon-picture picture" href="<?php echo URL;?>upload/picture"> Picture</a></li>
                                <li class="uploadpicturemobile"><a href="<?php echo URL;?>upload/picture"> Picture <span class="glyphicon glyphicon-picture"></span></a></li>

<!--                                <li><a class="glyphicon glyphicon-file file" href="--><?php //echo URL;?><!--upload/document"> Document</a></li>-->
                            </ul>  
                        
                    </li>
                    <li><a class="infoupdate" href="#">info <span class="glyphicon glyphicon-info-sign"></span></a></li>
                </ul>
                </div>
            </div>
            </div>
        </div>

    
    <script type="text/javascript">
        $(function(){
           $('ul li .upload').hover(function (){
               $('ul li ul.uploadchild',this).fadeIn();
           }); 
        });
        
    </script>
        
    <script type="text/javascript">
                    $(".newpost").click(function (){
                        $(document).ready(function (){
                             $('.navbar-side ul li ul.menupost').show();
                        });
           
                        });
$(function (){
//            $('.navbar-side ul li ul.menupost').hide();
    
            
            $('.postlabel').click(function (){
            var open="open";
            if(open=="open"){
                      $('.navbar-side ul li ul.menupost').slideToggle(500);
                    
//                  $('.newpost').slideToggle(500); 
//                    $(".newpost").remove();
//                   $(this).toggleClass('active'); //menyisipkan class aktif waktu tombol toogle ditekan
            }
           
        });
        
         if($(".navbar-side ul li ul li .allpost").click(function (){
            
         })){
//             alert(1);
         }
            
         
         
        });
          $('.upload').click(function (){
            var open="open";
            if(open=="open"){
                  $('.uploadchild').slideToggle(500); 
             
            }  
         
        });
        
//            $('.newpost').click(function (){
//                  $('.newpost').addClass('activecreate');
//            });
        </script>
        
<!--        <script type="text/javascript">
           
            
            $(document).ready(function(){
                       $('.navbar-side ul li .postlabel ul').css('color','#fff');
                         $('.navbar-side ul li .postmain li').contains('New post').acss('color','#fff');
            }
        </script>-->
        <script type="text/javascript">
   
        
        
        
         $(document).ready(function(){
        
    
             
             
        var i = document.location.href.lastIndexOf("/");
        var currentPHP = document.location.href.substr(i+1);
        if( currentPHP == "newpost"){
            $(".navbar-side ul li").removeClass('activecreate');
//            $(".navbar-side ul li .postlabel").parent().addClass('activecreate');  
            $(".navbar-side .newpost").removeClass('activecreates');
            $(".navbar-side .newpost").addClass('activecreates');
//                $(this).addClass('active');
//                alert(1);
//               $('.navbar-side a[href="http://localhost/agbc/dashboard"]').addClass('active');
            }
                 if( currentPHP == "allpost"){
                    $(".navbar-side ul li").removeClass('activecreate');
            $(".navbar-side ul li .item_posting").parent().addClass('activecreate');  
             $(".navbar-side ul li .item_posting").css('color','#FFF'); //warna post putih
             $(".navbar-side ul li .postlabel").css('color','#FFF');
            $(".navbar-side .allpost").addClass('activecreates');
//                $(this).addClass('active');
//                alert(1);
//               $('.navbar-side a[href="http://localhost/agbc/dashboard"]').addClass('active');
            }
           if( currentPHP == "dashboard"){
            $(".navbar-side ul li").removeClass('activecreate');
            $(".navbar-side ul li .item_posting").parent().addClass('activecreate');  
             $(".navbar-side ul li .item_posting").css('color','#FFF'); //warna post putih
             $(".navbar-side ul li .postlabel").css('color','#FFF');
            $(".navbar-side .newpost").addClass('activecreates');
//                $(this).addClass('active');
//                alert(1);
//               $('.navbar-side a[href="http://localhost/agbc/dashboard"]').addClass('active');
            }
//            if(checkstring(currentPHP)){
//                $(".navbar-side ul li").removeClass('activecreate');
//                $(".navbar-side ul li .postlabel").parent().addClass('activecreate');  
//            }
//           
             if( currentPHP == "picture"){
//            $(".navbar-side ul li .postlabel").css('color','#337AB7');
            $(".navbar-side ul li").removeClass('activecreate');
          
            $(".navbar-side ul li .ket").parent().addClass('activecreate');
            $(".navbar-side ul li .ket").css('color','#FFF'); 
            $(".navbar-side .picture").addClass('activecreates');
//                $(this).addClass('active');
//                alert(1);
//               $('.navbar-side a[href="http://localhost/agbc/dashboard"]').addClass('active');
            }
        
    
    
    
    
        });
            function checkstring(string){   
              if(string.indexOf("edit")!==false){
                return true;
              } 
              return false;
            }
   
            
        
//         if( currentPHP == "allpost"){
//            $("#post .navbar-side ul li").removeClass('activecreate');
//            $("#post .navbar-side ul li .postlabel").parent().addClass('activecreate');  
//            $('.navbar-side .newpost').click(function(){
//                $(this).addClass('active');
//                alert(1);
////               $('.navbar-side a[href="http://localhost/agbc/dashboard"]').addClass('active');
//            });
//         }
//        });
//        
//               $('.navbar-side .newpost').click(function(){
//            $(this).data('clicked', true);
//            if($('.navbar-side .newpost').data('clicked')) {
//                    alert(1);
//                    $('.navbar-side a[href="http://localhost/agbc/dashboard"]').addClass('active');
////                $(".navbar-side ul li ul li.newpost").removeClass('activecreate');
////                $(".navbar-side .newpost").addClass('activecreat');
////                  $('.navbar-side ul li ul li.newpost').toggleClass('active');
//            } 
//        });

     
         
//         $('.navbar-side .newpost').toggleClass('activecreat');
//        $('#post .navbar-side ul li ul li a').addClass('activecreate');
//                    $(this).closest('li').addClass('activecreate');
//                    var url = window.location.href; //mendapatkan lokasi url
//        else{
//           
////            $("#post .navbar-side ul li").removeClass('activecreate');
////           
////             $('ul li .postmain li a').each(function () {
////                
////                    if ($(this).attr('href').contains(currentPHP)) {
////                        alert(1);
////                        $("#post .navbar-side ul.postmain li a").addClass('activecreate')
//////                        $(this).closest('li').addClass('activecreate');
////                    }
////            });
////            
//////            if(currentPHP == "allpost"){
////////                $("#post .navbar-side ul li").contains(currentPHP).parent().addClass('activecreate');
//////                $("#post .navbar-side ul.postmain li a").addClass('activecreate').contains(currentPHP);
//////            }
////            
////            
////        }
//        
//        
        </script>
        
<!--        <script type="text/javascript">
        $(document).ready(function($){
              var url = window.location.href;
              alert(var);
                $('.nav li a[href="'+url+'"]').addClass('active');
            });
        </script>-->
            