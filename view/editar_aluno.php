<?php
  include_once '../config.php';
  include_once '../models/Student.php';

  $id = $_GET['id'];


  $sql = $pdo->query("SELECT * FROM Students WHERE id =".$id);
  $student = [];

  if($sql->rowCount() > 0){
    $data = $sql->fetch();

    $student1 = new Student();
    $student1->setId($data['id']);
    $student1->setName($data['name']);
    $student1->setEmail($data['email']);
    $student1->setPassword($data['password']);
    $student1->setPhone($data['phone']);
    $student1->setCourse($data['course']);
    $student1->setStatus($data['status']);
    $student1->setCreatedAt($data['created_at']);
    $student1->setUpdatedAt($data['updated_at']);

    $student[] = $student1;

  }
  

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

  <title>Sistema escolar | Cursos</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="./alunos.php">Alunos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./cursos.php">Cursos</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <main class="d-flex container align-items-center" style="height: calc(100vh - 56px); ">
    <div class="container-fluid border rounded p-5" style="box-shadow: 1px 2px 6px 4px rgba(0,0,0,0.1)">
      <a type="button" href="./alunos.php" class="btn btn-primary">Voltar</a>

      <form action="../controllers/editar_aluno_action.php" method="POST" class="mt-5">
        <div class="row mt-4">
          <div class="col-md-7">
            <p class="fw-bold">Nome:</p>
          </div>
          <div class="col-md-3">
            <p class="fw-bold">Status:</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7">
            <input style="display: none;" type="text" class="form-control" name="id" id="id" aria-describedby="id" value="<?=$student[0]->getId();?>">
          </div>
          <div class="col-md-7">
            <input type="text" class="form-control" name="name" id="name" aria-describedby="name" value="<?=$student[0]->getName();?>">
          </div>
          <div class="col-md-5">
            <select class="form-control" aria-label="Selecione" name="status">
              <option value="1" <?php if($student[0]->getStatus() == 1) echo 'selected'; ?>>Ativo</option>
              <option value="0" <?php if($student[0]->getStatus() == 0) echo 'selected'; ?>>Inativo</option>
            </select>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-md-4">
            <p class="fw-bold">Telefone:</p>
          </div>
          <div class="col-md-8">
            <p class="fw-bold">Curso:</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <input type="text" class="form-control" name="phone" id="phone" aria-describedby="phone" value="<?=$student[0]->getPhone();?>">
          </div>
          <div class="col-md-8">
            <select class="form-control" aria-label="Selecione" name="course">
              <option selected="">.:Selecione:.</option>
              <option value="1">Sistemas para Intenet</option>
              <option value="2">Engenharia de Software</option>
            </select></div>
        </div>
        <div class="row mt-4">
          <div class="col-md-6">
            <p class="fw-bold">Email:</p>
          </div>
          <div class="col-md-6">
            <p class="fw-bold">Senha:</p>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-md-6">
            <input type="email" class="form-control" name="email" id="email" aria-describedby="email" value="<?=$student[0]->getEmail();?>">
          </div>
          <div class="col-md-6">
            <input type="password" class="form-control" name="password" id="password" aria-describedby="password" value="<?=$student[0]->getPassword();?>">
          </div>
        </div>

        <button type="submit" class="btn btn-success mr-2">Salvar</button>
      </form>
    </div>
  </main>

</body>

</html>