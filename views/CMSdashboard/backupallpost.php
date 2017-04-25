
<div class="col-md-7">
      <script src="<?php echo URL?>public/library/jquery.bootpag.min.js"></script>       
    <div class="main-editor">
        <div class="list-group showpost">
             <span href="#" class="list-group-item allpost active">
                ALL Post
            </span>
        <div class="content manage"></div>
        <div id="page-selection"></div>
        <div id="info"></div>
    
        </div>
    </div>
</div>
      <script>
     $.get('showallpostdashboard',function (o){//mengambil jumlah post hasilnya di passing ke o    -->ini di navigate ke http://localhost/agbc/dashboard/allpost fungsi showallpostdashboard ada di class dashboard controller
          var user=$('.user').attr('rel'); //mengambil nama author
//          console.log(user);
          var judul;
          var totaldata=o.length;
          console.log(totaldata);
          //kalau post masih kosong
          if(o.length == 0){ 
               return $('.showpost').append('<div class="alert alert-warning" role="alert"><span class="alert-link" style="color: red">maaf post masih kosong!!!! silahkan diisi dulu</span></div>');
          }
          isiperpage=5;
          pagenumber=Math.ceil(totaldata/isiperpage);
//          if(o.length<isiperpage && o.length != 0){
//               for(var i=0; i<o.length; i++){
//                judul=o[i].judul.substring(0, 20);
//             $('.manage').append('<span class="list-group-item">'+judul+'<span class="badge">'+o[i].tanggal+
//                      '</span><a class="glyphicon glyphicon-edit allposteditor" href="allpost/edit?id='+o[i].id_post+
//                      '">Edit</a><a class="glyphicon glyphicon-remove allpostremove" rel="'+o[i].id_post+'" style="color:#A94442;">Remove</a><a class="glyphicon glyphicon-eye-open allpostpreview" rel="'+o[i].id_post+'">Preview</a></span>');
//          }
//          }
//          else{
            if(totaldata<isiperpage){
                 for(var i=0; i<totaldata; i++){ 
                   judul=o[i].judul.substring(0, 20);
                   $('.manage').append('<span class="list-group-item">'+judul+'<span class="badge">'+o[i].tanggal+
                      '</span><a class="glyphicon glyphicon-edit allposteditor" href="allpost/edit?id='+o[i].id_post+
                      '">Edit</a><a class="glyphicon glyphicon-remove allpostremove" rel="'+o[i].id_post+'" style="color:#A94442;">Remove</a><a class="glyphicon glyphicon-eye-open allpostpreview" rel="'+o[i].id_post+'">Preview</a> <span class="categorydashboard">'+o[i].category+'</a></span>');
                 }
            }
            else{
               for(var i=0; i<isiperpage; i++){ 
               judul=o[i].judul.substring(0, 20);
               $('.manage').append('<span class="list-group-item">'+judul+'<span class="badge">'+o[i].tanggal+
                      '</span><a class="glyphicon glyphicon-edit allposteditor" href="allpost/edit?id='+o[i].id_post+
                      '">Edit</a><a class="glyphicon glyphicon-remove allpostremove" rel="'+o[i].id_post+'" style="color:#A94442;">Remove</a><a class="glyphicon glyphicon-eye-open allpostpreview" rel="'+o[i].id_post+'">Preview</a><span class="categorydashboard">'+o[i].category+'</a></span></span>');
               }
            }      
//          }
          //mulai pagination dengan bootpag
        $('.manage').bootpag({          
                total: pagenumber
            }).on("page", function(event, /* page number here */ num){
                var post=showpost(o,num); //o adalah jumlah post data,
//                console.log(num);
                $('.manage').html(post); //menampilkan data variabl post
                //biar bisa hapus harus nambahin lagi fungsi klik delete allpostremovenya
                $('.allpostremove').click(function (){
                    delitem=$(this);
                    var id=$(this).attr('rel');
                $.post('deletepost',{'id':id,'user':user},function(o){ //deletepost itu nanti jadi link
                    delitem.parent().remove();
                }).done(function (data){
//              console.log(o.length);
                    $('#info').html(data); 
                });//hilangin , 'json' baru bisa hapus delitem.parent().remove();
                    return true;
                });
                $(this).bootpag({total: pagenumber, maxVisible: pagenumber});                 
            });
            
            $('.allpostremove').click(function (){     //ada dua fungsi buat hapus biar bisa ke hapus datanya
                delitem=$(this);
                var id=$(this).attr('rel');
               
               $.post('deletepost',{'id':id,'user':user},function(o){
                   delitem.parent().remove();
                   
               }).done(function (data){
                 $('#info').html(data);
                 
               });//hila , json baru bisa hapus delitem.parent().remove();ngin , json baru bisa hapus delitem.parent().remove();
               return false;
            });
       
        },'json'); //harus ada tulisan jsonnya biar maksudnya di konversi data o nya ke json, size o nya jga dapet jadinya
    
    function showpost(o,num){
    //setting show post banyaknya parameter o=data dan num=nomor pagenya
        var data=[]; //array in javascript
        count=0;
//        console.log(num);
                                    for(var i=0; i<o.length ; i++){
                                        judul=o[i].judul.substring(0, 20);
                                        if(i < isiperpage && num == 1){
                                            data[i]= ('<span class="list-group-item">'+judul+'<span class="badge">'+o[i].tanggal+
                                            '</span><a class="glyphicon glyphicon-edit allposteditor" href="allpost/edit?id='+o[i].id_post+
                                            '">Edit</a><a class="glyphicon glyphicon-remove allpostremove" rel="'+o[i].id_post+'" style="color:#A94442;">Remove</a><a class="glyphicon glyphicon-eye-open allpostpreview" rel="'+o[i].id_post+'">Preview</a><span class="categorydashboard">'+o[i].category+'</a></span></span>');
                                        }
                                        if(i>=isiperpage&&i<isiperpage+isiperpage && num == 2){
                                             data[count]= ('<span class="list-group-item">'+judul+'<span class="badge">'+o[i].tanggal+
                                            '</span><a class="glyphicon glyphicon-edit allposteditor" href="allpost/edit?id='+o[i].id_post+
                                            '">Edit</a><a class="glyphicon glyphicon-remove allpostremove" rel="'+o[i].id_post+'" style="color:#A94442;">Remove</a><a class="glyphicon glyphicon-eye-open allpostpreview" rel="'+o[i].id_post+'">Preview</a><span class="categorydashboard">'+o[i].category+'</a></span></span>');
                                            count++; 
                                        }
                                           if(i>=isiperpage+isiperpage&& num == 3){
                                             data[count]= ('<span class="list-group-item">'+judul+'<span class="badge">'+o[i].tanggal+
                                            '</span><a class="glyphicon glyphicon-edit allposteditor" href="allpost/edit?id='+o[i].id_post+
                                            '">Edit</a><a class="glyphicon glyphicon-remove allpostremove" rel="'+o[i].id_post+'" style="color:#A94442;">Remove</a><a class="glyphicon glyphicon-eye-open allpostpreview" rel="'+o[i].id_post+'">Preview</a><span class="categorydashboard">'+o[i].category+'</a></span></span>');
                                            count++; 
                                        }    
                                    }
      return data;
    }

        </script>

<script type="text/javascript">
//    $(function(){
//        $.get('showallpostdashboard',function (o){  //showallpostdashboard itu fungsinya bisa juga linknya
//            
//            var user=$('.user').attr('rel'); //mengambil nama author
//            var judul;
//            var post=o.length;
//            if(post == 0){
//               $('.showpost').append('<div class="alert alert-warning" role="alert"><span class="alert-link" style="color: red">maaf post masih kosong!!!! silahkan diisi dulu</span></div>');
//            }
//            else{
//            for(var i=0; i<o.length ; i++){
//                judul=o[i].judul.substring(0, 20);
////                 dateFormat(o[i].tanggal);
//              $('.showpost').append('<span class="list-group-item">'+judul+'<span class="badge">'+o[i].tanggal+
//                      '</span><a class="glyphicon glyphicon-edit allposteditor" href="allpost/edit?id='+o[i].id_post+
//                      '">Edit</a><a class="glyphicon glyphicon-remove allpostremove" rel="'+o[i].id_post+'" style="color:#A94442;">Remove</a><a class="glyphicon glyphicon-eye-open allpostpreview" rel="'+o[i].id_post+'">Preview</a></span>');
//            }
//            
//            
//            }
//            $('.allpostremove').click(function (){
//                delitem=$(this);
////                link= delitem.parent().remove();
////                console.log(link);
//               var id=$(this).attr('rel');
//               
//               $.post('deletepost',{'id':id,'user':user},function(o){
//                   delitem.parent().remove();
//                 
//             
//               });//hilangin , json baru bisa hapus delitem.parent().remove();
//               return false;
//            });
//        
//        },'json');
//
//    });
    
    function getpost(){
        $.get('showallpostdashboard',function (o){  //showallpostdashboard itu fungsinya bisa juga linknya
//            
            var user=$('.user').attr('rel'); //mengambil nama author
            var judul;
            var post=o.length;
            if(post == 0){ 
               return $('.showpost').append('<div class="alert alert-warning" role="alert"><span class="alert-link" style="color: red">maaf post masih kosong!!!! silahkan diisi dulu</span></div>');
            }
            else{
//                var data;
            for(var i=0; i<o.length ; i++){
                judul=o[i].judul.substring(0, 20);
//                 dateFormat(o[i].tanggal);
             $('.showpost').append('<span class="list-group-item">'+judul+'<span class="badge">'+o[i].tanggal+
                      '</span><a class="glyphicon glyphicon-edit allposteditor" href="allpost/edit?id='+o[i].id_post+
                      '">Edit</a><a class="glyphicon glyphicon-remove allpostremove" rel="'+o[i].id_post+'" style="color:#A94442;">Remove</a><a class="glyphicon glyphicon-eye-open allpostpreview" rel="'+o[i].id_post+'">Preview</a></span>');
            }

            
            }
            $('.allpostremove').click(function (){
                delitem=$(this);
//                link= delitem.parent().remove();
//                console.log(link);
               var id=$(this).attr('rel');
               
               $.post('deletepost',{'id':id,'user':user},function(o){
                   delitem.parent().remove();
                 
             
               });//hilangin , json baru bisa hapus delitem.parent().remove();
               return false;
            });
        
        },'json');
    }

</script>
