<?php require_once('inc/topo.php');
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
   $a = false;
   $b = false;

   if($_SESSION['email_cliente'] === $_POST["email_cliente"]){
   $a = true;
   }
   else{
   $a = false;
   }

   if($_SESSION['senha_cliente'] === $_POST["cliente_senha"]){
   $b = true;
   }
   else{
   $b = false;
   }

   if($a === true && $b === true){
      header("Location: finalizar.php");
   }
}
?>
      <div class="main_content">
         <div class="login_register_wrap section">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-xl-6 col-md-10">
                     <div class="login_wrap">
                        <div class="padding_eight_all bg-white">
                           <div class="heading_s1">
                              <h2>Login</h2>
                           </div>
                           <form action="" method="post" name="form" enctype="multipart/form-data">
                              <div class="form-group">
                                 <label>Email:</label>
                                 <input type="text" required="" class="form-control" name="email_cliente" id = "confirma_email">
                              </div>
                              <div class="form-group">
                                 <label>Senha:</label>
                                 <input class="form-control" required="" type="password" name="cliente_senha" id = "confirma_senha">
                              </div>
                              
                              <div class="form-group">
                                 <button type="submit" class="btn btn-fill-out">Acessar</button>
                              </div>
                              
                           </form>
                           <div class="form-note text-center">Não tem conta? <a href="http://localhost/ifc/trabalho/cadastro.php">Cadastre-se</a></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
       </div>
    </body>
</html>