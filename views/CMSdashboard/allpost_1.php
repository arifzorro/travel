<div class="col-md-7">

<div class="main-editor">
<!--    <div class="panel panel-default">
                         <div class="panel-heading">
                                 <h3>pake php </h3>
                             </div>
                         <div class="panel-body">
                        
                                <div class="form-group">
                                  hai
                                </div>
                                 <div class="form-group">
                                    tes
                                 </div>
                              
                  
                         </div>
                     </div>-->
<div class="list-group">
  <span href="#" class="list-group-item allpost active">
    ALL Post
  </span>
    
  <?php 
    $dbquery=new dbquery();
    $datapost=$dbquery->getallpostid();
    $count=  count($datapost);
    if($count == 0){?>
  
   <div class="alert alert-warning" role="alert">
       <span class="alert-link" style="color: red">maaf post masih kosong!!!! silahkan diisi dulu</span>
            </div>
    <?php }
    else{
            foreach ($datapost as $key){
                $judul=  substr($key['judul'], 0,20);
                $id=$key['id_post'];
                $tanggal=date('d-m-y', strtotime($key['tanggal'])); //konversi tanggal format
             ?>
 
    <span class="list-group-item"><?php echo $judul; ?> <span class="badge"><?php echo $tanggal; ?></span><a class="glyphicon glyphicon-edit allposteditor" href="dashboard/allpost/edit?id=<?php echo $id; ?>">Edit</a><a class="glyphicon glyphicon-remove allpostremove" href="sss" style="color:#A94442;">Remove</a><a class="glyphicon glyphicon-eye-open allpostpreview" href="sss">Preview</a></span>
            <?php }}?>



  
    
</div>
    
    <div class="list-group">
  <a href="#" class="list-group-item active">
    Cras justo odio
  </a>
  <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
  <a href="#" class="list-group-item">Morbi leo risus</a>
  <a href="#" class="list-group-item">Porta ac consectetur ac</a>
  <a href="#" class="list-group-item">Vestibulum at eros</a>
</div>
    
    <ul class="list-group">
  <li class="list-group-item">
    <span class="badge">14</span>
    Cras justo odio
  </li>
</ul>
</div>  
<script type="text/javascript">
    $('.allposteditor').click(function(){
        alert(1);
	
//	var id =$g

        
//	var datas="juduleditor="+judul+"&author="+author+"&category="+category+"&post="+post;
//        console.log("post : "+post);
	$.ajax({
	   type: "GET",
	   url: "<?php echo URL?>dashboard/edit",
//	   data: datas
	}).done(function( data ) {
//	  $('#info').html(data);
//          $(document).ready(function(){
//		$('body,html').animate({
//			scrollTop: 0
//		}, 500);
//		return false;
//	});
//	  viewdata();
	});
    });
    
    $(function(){
        $.get('showallpostdashboard',function (o){
//            console.log(o);
//            [{"id_post":"1","judul":"ini adalah post pertama sistem ini ","tanggal":"2015-07-04"
//}]
            for(var i=0; i<o.length ; i++){
              $('.list-group').append('<span class="list-group-item">'<?php echo $judul; ?> '<span class="badge">'<?php echo $tanggal; ?>'</span><a class="glyphicon glyphicon-edit allposteditor" href="dashboard/allpost/edit?id=<?php echo $id; ?>">Edit</a><a class="glyphicon glyphicon-remove allpostremove" href="sss" style="color:#A94442;">Remove</a><a class="glyphicon glyphicon-eye-open allpostpreview" href="sss">Preview</a></span>')
            }   
    
        },'json');
    
    });

</script>