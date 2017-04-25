
        $(function (){
            //manggunakan ajax form
           $('#myForm').ajaxForm({
              beforeSend:function(){
                $(".progress-bar").width('0%');
                  $(".progress").show();
              },
              uploadProgress:function(event,position,total,percentComplete){ 
                  $(".progress-bar").width(percentComplete+'%');
                  $(".sr-on").html(percentComplete+'%');
              },
              success:function(){
//                       $(".progress").hide(1000);
              },
              complete:function(response){
                  alert(response.responseText);  //menerima respon dari attribut action
//                
//                   var alamat=getstringconvert_to_imageurl(response.responseText);
//                   alert(alamat);
//                  $(".image").html("<img src='"++"' width='60%'/>");
              }
           }); 
//         $(".progress").hide();
        });
        
        function getstringconvert_to_imageurl(data){ //kesimpen di variabel atau apa mungkin jenisnya data ni nilai dari response.responsetext,
                console.log(data);
        }
        