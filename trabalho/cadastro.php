<?php require_once('inc/topo.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

   if (isset($_POST['nome_cliente'])) {
      $_SESSION['nome_cliente'] = $_POST['nome_cliente'];
   }

   if (isset($_POST['sobrnome_cliente'])){
      $_SESSION['sobrenome_cliente'] = $_POST['sobrenome_cliente'];
   }

   if (isset($_POST['cpf_cliente'])) {
      $_SESSION['cpf_cliente'] = $_POST['cpf_cliente'];
   }
   
   if (isset($_POST['telefone_cliente'])) {
      $_SESSION['telefone_cliente'] = $_POST['telefone_cliente'];
   }

   if (isset($_POST['whats_cliente'])) {
      $_SESSION['whats_cliente'] = $_POST['whats_cliente'];
   }

   if (isset($_POST['email_cliente'])) {
      $_SESSION['email_cliente'] = $_POST['email_cliente'];
   }

   if (isset($_POST['telefone_cliente'])) {
      $_SESSION['telefone_cliente'] = $_POST['telefone_cliente'];
   }
   if (isset($_POST['endereco_cliente'])) {
      $_SESSION['endereco_cliente'] = $_POST['endereco_cliente'];
   }
   if (isset($_POST['senha_cliente'])) {
      $_SESSION['senha_cliente'] = $_POST['senha_cliente'];
   }
   header("Location: login.php");
}
?>
      <div class="main_content">
         <div class="login_register_wrap section">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-xl-6 col-md-10">
                     <div class="login_wrap">
                        <div class="padding_eight_all bg-white">
                           <form action="" method="post" name="form" enctype="multipart/form-data">
                              <div class="form-group">
                                 <label>Nome</label>
                                 <input type="text" required="" name="nome_cliente" id="nome_cliente" class="form-control" value="">
                              </div>
                              <div class="form-group">
                                 <label>Sobrenome</label>
                                 <input type="text" required="" name="sobrenome_cliente" id="sobrenome_cliente" class="form-control" value="">
                              </div>
                              <div class="form-group">
                                 <label>CPF</label>
                                 <input type="text" name="cpf_cliente" id="cpf_cliente" class="form-control cpf" value="" maxlength="14">
                              </div>
                              <div class="form-group">
                                 <label>Telefone</label>
                                 <input type="text" name="telefone_cliente" id="telefone_cliente" class="form-control fone" value="" maxlength="14">
                              </div>
                              <div class="form-group">
                                 <label>Whats</label>
                                 <input type="text" name="whats_cliente" id="whats_cliente" class="form-control fone" value="" maxlength="14">
                              </div>
                              <div class="form-group">
                                 <label>E-mail</label>
                                 <input type="email" required="" name="email_cliente" id="email_cliente" class="form-control" value="">
                              </div>
                              <div class="form-group">
                                 <label>Senha</label>
                                 <input type="password" required="" name="senha_cliente" id="senha_cliente" class="form-control" value="">
                              </div>
                              <div class="login_footer form-group">
                                 <div class="chek-form">
                                    <div class="custome-checkbox">
                                       <label><span>Ao se cadastrar você concorda com os <a href="#" style="font-weight: bold;">Termos e Condições</a></span></label>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group">
                              <button type="submit" class="btn btn-fill-out">Criar Conta</button>
                              </div>
                           </form>
                         </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
    </body>
</html>