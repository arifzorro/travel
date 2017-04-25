<div class="col-md-7">
<div class="main-editor">
    <div class="panel panel-default">
                         <div class="panel-heading">
                                 <h3>POST</h3>
                             </div>
                         <div class="panel-body">
                             <div id="info"></div>
                             <form id="post-form" role="form" method="post">
                                <div class="form-group">
                                  <label for="judul">TITLE</label>
                                  <input type="text" class="form-control" id="juduleditor" name ="juduleditor" placeholder="Enter title" required>
                                </div>
                                 <div class="form-group">
                                    <label for="author">penulis</label>
                                    <input type="text" class="form-control" id="author" name="author" value="<?php echo $user_info;?>" disabled>
                                 </div>
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <select class="form-control" name="category" id="category" required>
                                        <option value="">No category</option>
                                         <option value="news" >News</option>
                                          <option value="Fullday" >Full Day</option>
                                           <option value="oneday" >One Day</option>
                                           <option value="2 day 1 night" >2 Day 1 Night</option>
                                          
                                    </select>
                                </div>
                                 
                                 <div class="form-group">
                                  <label for="post">posting</label>
                                  <textarea class="form-control" name="post" id="post" placeholder="please"></textarea>
                                </div>      
                                 <button type="submit" id="submit" name="submit" class="btn btn-success"> publish</button>
                            </form>
                         </div>
                     </div>
</div>
</div> 
<div class="col-md-3">
   
    
            <div id="recentpost-data">
                

    </div>
    
</div>
</div>
<!----end row--->



<script>
                    $(document).ready(function() {
                        $('#post-form').bootstrapValidator({
                            message: 'Data salah',
                            feedbackIcons: {
                                valid: 'glyphicon glyphicon-ok',
//                                invalid: 'glyphicon glyphicon-remove',
                                validating: 'glyphicon glyphicon-refresh'
                            },
                            
                        });
                    });
</script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    theme: "modern",
    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
         "save table contextmenu directionality emoticons template paste textcolor"
   ],
   content_css: "css/content.css",
   toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons", 
   style_formats: [
        {title: 'Bold text', inline: 'b'},
        {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
        {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
        {title: 'Example 1', inline: 'span', classes: 'example1'},
        {title: 'Example 2', inline: 'span', classes: 'example2'},
        {title: 'Table styles'},
        {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
    ],
    file_browser_callback: function(field, url, type, win) {
        tinyMCE.activeEditor.windowManager.open({
//            file:'<?php echo URL?>public/kcfinder-3.20-test2/browse.php?type=image&lng=en&opener=tinymce4&act=init',
//            file: 'public/kcfinder-3.12/browse.php?opener=tinymce4&field=' + field + '&type=' + type,
              file: '<?php echo URL?>public/kcfinder-3.20-test2/browse.php?opener=tinymce4&field=' + field + '&type=' + type,
//            file:'<?php echo URL?>public/kcfinder-3.12/browse.php?opener=tinymce4&field="+d+"&type="+b+"&dir="+b+"/public',    
            title: 'KCFinders',
            width: 700,
            height: 500,
            inline: true,
            close_previous: false
        }, {
            window: win,
            input: field
        });
        return false;
    }
 }); 
</script>



<script type="text/javascript">
    try {
        $('#submit').click(function(){
	
	var judul = $('#juduleditor').val();
	var author = $('#author').val();
	var category = $('#category').val();
	var ed = tinyMCE.get('post');
        //get content tiny mce
        var post = ed.getContent();
	var data="juduleditor="+judul+"&author="+author+"&post="+post+"&category="+category;
        console.log(data);
	$.ajax({
	   type: "POST",
	   url: "<?php echo URL?>dashboard/insert",
	   data: data
	}).done(function( data ) {
	  $('#info').html(data);
          $('.list-group-item.active').append('<span class="list-group-item">tes</span>');
//          $('#recentpost-data').append('<span class="list-group-item"><a href="news/'+o[i].judul+'">'+o[i].judul+'</a></span>');
          $('#submit').attr('disabled', false);
          $(document).ready(function(){  //fungsi untuk mengembabalikan dari bawah ke top
		$('body,html').animate({
			scrollTop: 0
		}, 500);
		return false;
	});
         //location.reload();//fungsi java script uuntuk merelod page
//	  viewdata();
	});
    });
    }
    catch(err){
      document.getElementById("submit").innerHTML = err.message;
    }
    

</script>















<!--cara alternatif lainya selain cara di atas untuk mengirim parameter judul,author,isipost dan category-->
<!--<script type="text/javascript">
        $('#submit').click(function(){
	
	var judul = $('#juduleditor').val();
	var author =$('#author').val();
        alert('ini adalah '+author);
	var category = $('#category').val();
        //get content tiny mce
	var ed = tinyMCE.get('post');
        var post = ed.getContent();
	var data="juduleditor="+judul+"&author="+author+"&category="+category+"&post="+post;
        $.post("<?php echo URL?>dashboard/insert",data,function (result){       
                     $('#info').html(data);
        });

    });
</script>-->

<!--<script type="text/javascript">//load data recent post
    $.get('dashboard/recentpost',function (o){
         var datalength=o.length;
         var batas=5;
//         var data=[];
        $('#recentpost-data').append('<div class="list-group recentpost">');
        $('#recentpost-data').append('<div class="list-group-item active">recent post');
        $('#recentpost-data').append('</div>');
        for(i=0;i<batas;i++){
//          alert(o[i].id_post); cara memanggil isi data di  array pada javascript
//             $('#recentpost-data').append('<span class="list-group-item">'+o[i].judul+'</span>');
                $('#recentpost-data').append('<span class="list-group-item"><a href="news/'+o[i].judul+'">'+o[i].judul+'</a></span>');
         }
        $('#recentpost-data').append('</div>');
         
    },'json'); //harus ada json klo nilainya dapet dari json

</script>-->
