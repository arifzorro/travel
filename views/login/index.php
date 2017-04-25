<!--<div class="row">

<h1>Login</h1>
<form action="login/run" method="post">
    <label>Login</label><input type="text" name="login" /><br/>
    <label>password</label><input type="password" name="password"/><br/>
    <label></label><input type="submit"/>
    
</form>

</div>-->

<div class="row">
      
                 <div class="col-md-8">Silahkan login jika sudah memiliki user dan password</div>
                 <div class="col-md-4">col 4 md
                     <div class="panel panel-default">
                         <div class="panel-heading">
                                 <h3>login area </h3>
                             </div>
                         <div class="panel-body">
                             <form id="login-form" method="post" action="<?php echo URL?>login/run">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Email address</label>
                                  <div class="input-group">
                                  <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                  <input type="email" class="form-control" id="exampleInputEmail1" name ="email" placeholder="Enter email">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Password</label>
                                  <div class="input-group">
                                  <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>    
                                  <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                                </div>
                                </div>
<!--                                 <a href="<?php echo URL;?>home"><button type="button" class="btn btn-primary" ><span class="glyphicon glyphicon-arrow-left" ></span>Back</button></a>-->
                                 <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-lock"></span> Submit</button>
                            </form>
                         </div>
                     </div>
                 
                 </div>
             </div>

<script>
                    $(document).ready(function() {
                        $('#login-form').bootstrapValidator({
                            message: 'Data salah',
                            feedbackIcons: {
                                valid: 'glyphicon glyphicon-ok',
                                invalid: 'glyphicon glyphicon-remove',
                                validating: 'glyphicon glyphicon-refresh'
                            },
                            fields: {
                                email: {
                                    validators: {
//                                        message:"email kosong"
                                        notEmpty: {
                                            message: 'email tidak boleh kosong'
                                        },
                                        stringLength:{
                                            min:6,
                                            message:"email terlalu pendek"
                                        },
                                        emailAddress:{
                                            message:"email addres was invalid"
                                        }
                                    }
                                },
                                'password': {
                                    validators: {
                                        notEmpty: {
                                            message: 'password tidak boleh kosong'
                                        },
                                        stringLength: {
                                            min:8,
                                            message: 'password minimal 8 character'
                                        }
                                    }
                                }
                            }
                        });
                    });
</script>

