<?php session_start(); include "sys/php/global.php";
echo '<script language="javascript">var nombreServer="'.$server_name.'"</script>'; 
$user = $_GET['user'];
?>
<script src="sys/js/jquery-3.6.3.js" ></script>
<link href="sys/bootstrap-5.3.0/css/bootstrap.min.css"rel="stylesheet"/>
<script src="sys/bootstrap-5.3.0/js/bootstrap.bundle.min.js" ></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
<style>
.alert-login{ padding: 5px; top: 15px; }
</style>

<script>

    $(function(){
        var mayus   = new RegExp("^(?=.*[A-Z])");
        var special = new RegExp("^(?=.*[!@#$%&*])");
        var numbers = new RegExp("^(?=.*[0-9])");
        var lower   = new RegExp("^(?=.*[a-z])");
        var len     = new RegExp("^(?=.{8,})");

        var regExp    = [mayus, special, numbers, lower, len];
        var elementos = [$("#mayus"),$("#special"),$("#numbers"),$("#lower"),$("#len")];

        $("#newpassword").on("keyup", function(){
            var pass = $("#newpassword").val();
            var check = 0;

            for(var i = 0; i < 5; i++){
                if(regExp[i].test(pass)){
                    elementos[i].hide();
                    check++;
                }else{
                    elementos[i].show();
                }

                if(check >= 0 && check <=4){
                    $("#msgbox").text("Muy insegura").css("color", "red");
                }else if(check == 5){
                    $("#msgbox").text("Muy segura").css("color", "green");
                }
            }


        });
    });

    function disabledButton(){
           var newpass = $("#newpassword").val();
           var newpass2 = $("#password2").val();

           if( newpass === newpass2){
                 $("#msgbox2").text("Las contraseñas si coinciden").css("color", "green");
                 $('#login').attr('disabled', false);
           }else{
               $("#msgbox2").text("No coinciden las contraseñas!").css("color", "red");
               $('#login').attr('disabled', true);
           }
    }

</script>

<main class="bg-image" style="background-color: #141e43;">
    <div class="container">
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">
                        <div class="card mb-3">
                            <div class="card-body body-login">
                                <!--Start Logo -->
                                <div class="pb-2 d-lg-block" style="text-align: center">
                                    <a class="logo align-items-center w-auto">
                                    	<img src="sys/img/ats.png" width="100px">
                                    </a>
                                </div>
                                <!--End Logo -->
                                <div class="pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">INTRANET</h5>
                                </div>

                                <form id="forma" name="forma" action="savepass.php" method="post" enctype="multipart/form-data" autocomplete="off">
                                    <div class="col-12">
                                        <label for="newpassword" class="form-label">New Password</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-lock"></i></span>
                                            <input id="newpassword" name="newpassword" type="password" class="form-control" placeholder="New password" tabindex="1" onkeydown = "if (event.keyCode == 13) document.getElementById('password').focus()">
                                            <input id="user" name="user" type="hidden" class="form-control" value="<?php echo $user; ?>" tabindex="1">
                                        </div>
                                    </div>
                                    <div id="msgbox"></div>

                                    <div class="col-12">
                                        <label for="password2" class="form-label">Confirm Password</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-lock"></i></span>
                                            <input id="password2" name="password2" type="password" autocomplete="off" class="form-control" placeholder="Confirm password" tabindex="2" onkeydown = "if (event.keyCode == 13) document.getElementById('login').click()" onkeyup="disabledButton();">
                                        </div>
                                    </div>
                                    <div id="msgbox2"></div>
                                    <ul>
                                        <li id="mayus">Mayúsculas</li>
                                        <li id="special">Caracter especial</li>
                                        <li id=numbers>Numeros</li>
                                        <li id="lower">Minúsculas</li>
                                        <li id="len">Mínimo 8 caractéres</li>
                                    </ul>
                                    <div id="cargando" class="loader" style="display: none" ></div>
                                    <div class="col-12" style="padding-top: 15px;">
                                        <button type="submit" class="btn btn-primary w-100" id="login" name="login" tabindex="3" disabled>Log In</button><br />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main><!-- End #main -->