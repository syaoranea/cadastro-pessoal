<?php
    require_once 'conexao.php';
    require_once 'usuarioclass.php';
    require_once 'clienteclass.php';
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
                          <th>CPF</th>
                          <th>RG</th>
                          <th>Sexo</th>
                          <th>logradouro</th>
                          <th>Numero</th>
                          <th>Bairro</th>
                          <th>Cidade</th>
                          <th>UF</th>
                          <th>Cep</th>
                          <th>Telefone Fixo</th>
                          <th>Celular</th>
                          <th>Editar</th>
                          <th>Remover</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php

                        $c = new Cliente();

                        foreach($c->lista() as $array):

                      ?>
                    <tr>
                      <td><?php echo $array['nome'];?></td>
                      <td><?php echo $array['cpf'];?></td>
                      <td><?php echo $array['rg'];?></td>
                      <td><?php echo $array['sexo'];?></td>
                      <td><?php echo $array['endereco'];?></td>
                      <td><?php echo $array['numero'];?></td>
                      <td><?php echo $array['bairro'];?></td>
                      <td><?php echo $array['cidade'];?></td>
                      <td><?php echo $array['estado'];?></td>
                      <td><?php echo $array['cep'];?></td>
                      <td><?php echo $array['fixo'];?></td>
                      <td><?php echo $array['celular'];?></td>
                      <td><a class="link" href="editar.php?id=<?php echo $array['idusuario'];?>" >Editar</a></td>
                      <td><a class="link" href="deleteusuario.php?id=<?php echo $array['idusuario'];?>"> Remover</a></td>
                    </tr>
                    <?php endforeach; ?>
                    
                  </tbody>
              </table>
              <br/>
              <a class="botao" href="adicionar.php" >Adicionar Cliente</a>
          </div>
      </main>
      </body>
</html>

