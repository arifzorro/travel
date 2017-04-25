/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function(){
//    
    $.get('dashboard/xhrgetlisting', function( data ){
////        console.log( data );
//        alert('bisa');
//           
            for(var i=0 ; i< data.length ;i++){
            $("#listinsert").append("<div> namess : " +data[i].text+"<a class='delete' rel='"+data[i].id+"' href='#' >del</a></div>");
            }
               
             $('.delete').click( function(){
                delItem=$(this);
                var id=$(this).attr('rel');
//                  console.log(id);
                //kalo ada garis hijau unused
//                alert('bisa');
                $.post('Dashboard/xhrdeletelisting',{'id': id},function(data){
//                         alert(1);
                  
//                    $('#listinsert').append('<div>'+data.text+'<a class="delete" rel="'+data.id+'" href="#"> delete</a></div>');
                     delItem.parent().remove();
                });                
//                return false;

//            $.post('#', id, function(data){
//                     alert(data[0].text);
//            },'json');
            return false;
            });


    },'json');
    
    
//    $.get( "getjquery/test.php", function( data ) {
//        alert('bisa');
//        $( "body" )
//    .append( "Name saya: " + data.name +"</br>") // John
//    .append( "Time: " + data.time ); //  2pm
//}, "json" );
    
    
    
   $('#randominsert').submit(function(){
//       var data=$(this).serialize();
//       console.log(data);
//       return false;

    var url=$(this).attr('action');
    var data=$(this).serialize();
//     alert(url);
//     console.log(data);
    $.post(url, data, function(o){
            $('#listinsert').append('<div>'+o.text+'<a class="delete" rel="'+o.id+'" href="#"> delete</a></div>');
    },'json');
    
        return false;
   }) ;

   
});