<?php 
$dashboard=new Dashboard();
$data=$dashboard->getpostwithidandauthor($user_info);
//var_dump($data);
//mengeluarkan isi array dalam array data;soalnya datanya bentuknya array(array)
$info=array();
foreach($data as $key){
    $info=$key;
}

?>

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
                                  <input type="text" class="form-control" id="juduleditor" name ="judul" value="<?php echo $info['judul']?>"placeholder="Enter title" required>
                                </div>
                                 <div class="form-group">
                                    <label for="author">Author</label>
                                    <input type="text" class="form-control" id="author" name ="author" value="<?php echo''.$info['author']?>" disabled="">
                                 </div>
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <select class="form-control" name="category" id="category" value="" required>
                                        <option value="<?php echo $info['category'];?>"><?php echo $info['category'];?></option>
                                        <option value="Fullday" >Full Day</option>
                                        <option value="oneday" >One Day</option>
                                        <option value="2 day 1 night" >2 Day 1 Night</option>
                                        <option value="">No category</option>
                                        <option value="news" >News</option>
<!--                                          <option value="0">No category</option>-->
                                    </select>
                                </div>
                                 
                                 <div class="form-group">
                                  <label for="post">posting</label>
<!--                                  <textarea class="form-control" name="post" id="post" placeholder="please"><?php echo $info['isipost']?></textarea>-->
                                  <?php $isipost=$dashboard->addbaseurl_to_image_kcfinder($info['isipost'])?>
                                  <textarea class="form-control" name="post" id="post" placeholder="please"><?php echo $isipost; ?></textarea>
                                </div>
                                 
                                
<!--                                 <a href="<?php echo URL;?>home"><button type="button" class="btn btn-primary" ><span class="glyphicon glyphicon-arrow-left" ></span>Back</button></a>-->
                                 <button type="submit" id="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-save"></span>Update</button>
                            </form>
                         </div>
                     </div>
</div>
</div>   
</div><!----end row--->

<!--<div class="kotak" style="width:70px;height:40px; background-color: red;margin-left: 100px;">
    <div class="wp-pointer-arrow new">
    
</div>
</div>-->

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
<!--<script type="text/javascript">
tinymce.init({
    selector: "textarea",
     plugins: "media""wordcount"

 });
</script>-->
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

<script>

//    $(document).ready(function(){
//         $('#info').fadeOut(0);
//    });
    $('#submit').click(function(){
	
	var judul = $('#juduleditor').val();
	var author = $('#author').val();
	var category = $('#category').val();
	var ed = tinyMCE.get('post');
        var post = ed.getContent();
        var id= <?php echo $_GET['id']; ?>;
//	if( post=="" ){
//             
//	  $('#info').html();
//        }
        
        
	var datas="juduleditor="+judul+"&author="+author+"&category="+category+"&id="+id+"&post="+post;
        console.log("post : "+datas);
	$.ajax({
	   type: "POST",
	   url: "<?php echo URL?>dashboard/update",
	   data: datas
	}).done(function( datas ) {
	  $('#info').html(datas);
          $(document).ready(function(){
		$('body,html').animate({
			scrollTop: 0
		}, 500);
		return false;
	});
        
	});
//         window.location.href = "<?php echo URL;?>dashboard/allpost"; buat redirect;
    });


</script>

