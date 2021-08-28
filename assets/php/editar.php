<?php
    require_once 'header.php';
    require_once 'conexao.php';
    require_once 'usuarioclass.php';

    if(isset($_GET['id'])){
    $u = new Usuario();
    $id = addslashes($_GET['id']);
    $array = $u->logged($id);

?>
</header>

</header>
  
<main>
  <div class="tb">
      <h3>Editar Usuario</h3>
      <form action="cadastra.php" method="post">
         <input id="name" type="text" name="id" id="id" style="display: none" value="<?php echo $id; ?>" >
        <div class="input-field">
        <label for="name"><span>Nome Completo</span></label>
            <input id="name" type="text" name="nome" value="<?php echo $array['nome']; ?>"  required>
        </div>
        <div class="input-field">
            <label for="email"><span>Email</span></label>
            <input id="email" type="text"  name="email" value="<?php echo $array['email']; ?>">
        </div>
        <div class="input-field">
            <label for="senha"><span>Senha</span></label>
            <input id="senha" type="text" name="senha" value="<?php echo $array['senha']; ?>">
        </div>
        <div class="input-field">
        <label for="perfil"><span>Perfil</span></label> 
          <input id="perfil" type="number" name="perfil" value="<?php echo $array['perfil']; ?>">  
        </div>
        <button type="submit" name="bt-editar" class="botao">Adicionar Usuario</button>  
      </form> 
        
  </div>
</main>
<?php }
    else{
        header("Location: index.php");
    }
?>