<?php
    require_once 'header.php';?>

</header>

</header>
  
<main>
  <div class="tb">
      <h3>Cadastrar Usuario</h3>
      <form action="cadastra.php" method="post">
        <div class="input-field">
        <label for="name"><span>Nome Completo</span></label>
            <input id="name" type="text" name="nome" placeholder="Nome Completo" required>
        </div>
        <div class="input-field">
            <label for="email"><span>Email</span></label>
            <input id="email" type="text"  placeholder="Email" name="email">
        </div>
        <div class="input-field">
            <label for="senha"><span>Senha</span></label>
            <input id="senha" type="text"  placeholder="Senha" name="senha">
        </div>
        <div class="input-field">
        <label for="perfil"><span>Perfil</span></label> 
          <input id="perfil" type="number" name="perfil" placeholder="Perfil">  
        </div>
        <button type="submit" name="bt-cadastrar" class="botao">Adicionar Usuario</button>  
      </form> 
        
  </div>
</main>

