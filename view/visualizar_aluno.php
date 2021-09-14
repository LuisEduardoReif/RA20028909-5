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
      <button type="button" class="btn btn-primary" href="./alunos.php" >Voltar</button>

      <div class="row mt-5">
        <div class="col-md-3">
          <p class="font-weight-bold">ID:</p>
        </div>
        <div class="col-md-6">
          <p class="font-weight-bold">Nome:</p>
        </div>
        <div class="col-md-3">
          <p class="font-weight-bold">Status:</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <p><?=$student[0]->getId();?></p>
        </div>
        <div class="col-md-6">
          <p><?=$student[0]->getName();?></p>
        </div>
        <div class="col-md-3">
          <p>Ativo</p>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-md-3">
          <p class="font-weight-bold">Telefone:</p>
        </div>
        <div class="col-md-6">
          <p class="font-weight-bold">Curso:</p>
        </div>
        <div class="col-md-3">
          <p class="font-weight-bold">Criado em:</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <p><?=$student[0]->getPhone();?></p>
        </div>
        <div class="col-md-6">
          <p><?=$student[0]->getCourse();?></p>
        </div>
        <div class="col-md-3">
          <p><?=$student[0]->getCreatedAt();?></p>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-md-6">
          <p class="font-weight-bold">Email:</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <p><?=$student[0]->getEmail();?></p>
        </div>
      </div>
    </div>
  </main>

</body>

</html>