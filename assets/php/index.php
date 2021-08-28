<?php
    require_once 'conexao.php';
    require_once 'usuarioclass.php';
    require_once 'header.php';?>

        <div class="login">
            <ul class="login-list">
                <li><span>Olá, <?php echo $nome; ?> seja bem vindo! </span></li>
            </ul>
        </div>
      </header>

      <main>
          <div class="tb">
              <h3>Usuarios</h3>
              <table>
                  <thead>
                      <tr>
                          <th>Nome</th>
                          <th>Email</th>
                          <th>Senha</th>
                          <th>Perfil</th>
                          <th>Editar</th>
                          <th>Remover</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php

                        $u = new Usuario();

                        foreach($u->lista() as $array):

                      ?>
                    <tr>
                      <td><?php echo $array['nome'];?></td>
                      <td><?php echo $array['email'];?></td>
                      <td><?php echo $array['senha'];?></td>
                      <td><?php echo $array['perfil'];?></td>
                      <td><a class="link" href="editar.php?id=<?php echo $array['idusuario'];?>" >Editar</a></td>
                      <td><a class="link" href="deleteusuario.php?id=<?php echo $array['idusuario'];?>"> Remover</a></td>
                    </tr>
                    <?php endforeach; ?>
                    
                  </tbody>
              </table>
              <br/>
              <a class="botao" href="adicionar.php" >Adicionar Usuario</a>
          </div>
      </main>
      </body>
</html>

