<?php require_once('inc/topo.php');
session_start();
$_SESSION['product-name'] = 'Placa de Vídeo Asus Dual NVIDIA GeForce RTX 2070 EVO V2 OC Edition, 8GB, GDDR6';
$_SESSION['product-price'] = 2949.90;

if (!isset($_SESSION['qtde_pedido_item'])) {
   $_SESSION['qtde_pedido_item'] = 1;
}

// Verifica se o botão de incremento ou decremento foi clicado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (isset($_POST['incrementar'])) {
      
      $_SESSION['qtde_pedido_item']++; // Incrementa o contador
      
   } elseif (isset($_POST['decrementar'])) {
      if( $_SESSION['qtde_pedido_item'] > 1){
         $_SESSION['qtde_pedido_item']--; // Decrementa o contador
      }
      
   }
}

if(isset( $_REQUEST['acao'] ) && $_REQUEST['acao'] == 'delete'){
   unset($_SESSION);

   $_SESSION['delete'] = false;

}else{
   $_SESSION['delete'] = true;
}
$_SESSION['product-subtotal'] =  $_SESSION['product-price'] *  $_SESSION['qtde_pedido_item'];
if (isset($_SESSION['product-remove'])){
   $_SESSION['qtde_pedido_item'] = 1;
}
?>
     
      <div class="main_content">
         <div class="section">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="table-responsive shop_cart_table">
                        <table class="table">
                           <thead>
                              <tr>
                                 <th class="product-thumbnail"></th>
                                 <th class="product-name">Produto</th>
                                 <th class="product-price">Preço</th>
                                 <th class="product-quantity">Quantidade</th>
                                 <th class="product-subtotal">Subtotal</th>
                                 <th class="product-remove">Remove</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php if($_SESSION['delete']){?>
                              <tr>
                                 <td class="product-thumbnail"><a href=""><img src="http://localhost/ifc/trabalho/img/produto.jpg" alt="Placa de Vídeo Asus Dual NVIDIA GeForce RTX 2070 EVO V2 OC Edition, 8GB, GDDR6"></a></td>
                                 <td class="product-name" data-title="Product"><a href=""><?=$_SESSION['product-name']?></a></td>
                                 <td class="product-price" data-title="Price">R$ <?php echo $_SESSION['product-price']?></td>
                                 <td class="product-quantity" data-title="Quantity">
                                    <div class="quantity">
                                       <form method="post" action="" class="text-center mt-4">
                                          <button type="submit" name="incrementar" class="btn btn-success">+</button>
                                          <input type="text" disabled="" name="qtde_pedido_item" value="<?=$_SESSION['qtde_pedido_item']?> "title="Qty" class="qty" size="4">
                                          <button type="submit" name="decrementar" class="btn btn-danger">-</button>
                                       </form>
                                    </div>
                                 </td>
                                 <td class="product-subtotal" data-title="Total">R<a href=""><?=$_SESSION['product-name']?></a></td>
                                 <td class="product-remove qtde" tipo="remove" id_produto="5" data-title="Remove"><a href="?acao=delete">X</a></td>
                              </tr>
                              <?php } ?>
                           </tbody>
                           <tfoot>
                              <tr>
                                 <td colspan="6" class="px-0">
                                    <div class="row no-gutters align-items-center">
                                       <div class="col-lg-12 col-md-12 mb-12 mb-md-12">
                                          <div class="coupon field_form input-group">
                                             <input type="text" value="" class="form-control form-control-sm" placeholder="Código do cupom">
                                             <div class="input-group-append">
                                                <button class="btn btn-fill-out btn-sm" type="submit">Aplicar cupom</button>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </td>
                              </tr>
                           </tfoot>
                        </table>
                         <a href="http://localhost/ifc/trabalho/login.php" class="btn btn-fill-out">Concluir compra</a>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-12">
                     <div class="medium_divider"></div>
                     <div class="divider center_icon"><i class="ti-shopping-cart-full"></i></div>
                     <div class="medium_divider"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
     </body>
</html>
