
  <?php include_once './header.php'?>

  <main class="d-flex container align-items-center" style="height: calc(100vh - 56px); ">

    <div class="div" style="width: 100%;">
      <div class="row">
        <a type="button" class="btn btn-primary" href="./adicionar_curso.php">Adicionar Curso</a>
      </div>

      <div class="row mt-3">
        <table class="table table-hover table-dark">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nome</th>
              <th scope="col">Ações</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row" class="align-middle">1</th>
              <td class="align-middle">Sistemas para Internet</td>
              <td style="width: 25%">
                <a type="button" class="btn btn-primary" href="./visualizar_curso.php">Visualizar</a>
                <a type="button" class="btn btn-secondary" href="./editar_curso.php">Editar</a>
                <a type="button" class="btn btn-danger" >Excluir</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>



  </main>

</body>

</html>