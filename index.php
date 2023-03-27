<?php session_start(); include "sys/php/global.php";
echo '<script language="javascript">var nombreServer="'.$server_name.'"</script>'; ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en_US,es">
<head>
<link rel="shortcut icon" href="<?php echo $server_name; ?>/sys/img/ats1819.ico"/>
<title>The American School of Tampico</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="format-detection" content="telephone=no">
<script src="sys/js/jquery-3.6.3.js" ></script>
<link href="sys/bootstrap-5.3.0/css/bootstrap.min.css"rel="stylesheet"/>
<script src="sys/bootstrap-5.3.0/js/bootstrap.bundle.min.js" ></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
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

                                    <form id="loginForm" action="autentication.php" method="post" novalidate>

                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">Username</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-person"></i></span>
                                                <input type="text" name="username" class="form-control" id="yourUsername" required>
                                                <div class="invalid-feedback">Por favor ingrese su nombre de usuario.</div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <div class="input-group has-validation">
                                            <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-lock"></i></span>
                                            <input type="password" name="password" class="form-control" id="yourPassword" required>
                                            <div class="invalid-feedback">Por favor ingrese su contraseña.</div>
                                            </div>
                                        </div>
                                        <div id="cargando" class="loader" style="display: none" ></div>
                                        <div class="row">
                                            <div class="col-12">
                                                <a href="sys/php/forgotpassword.php">Forgot password</a>
                                            </div>
                                        </div>
                                        <div class="row" style="padding-top: 15px;">
                                            <div class="col-12">
                                                <button class="btn btn-primary w-100" type="submit" onclick="mostrar();">Login</button>
                                            </div>
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
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a><!-- End #main -->
</head>
</html>