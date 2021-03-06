<?php include('./parts/header.php') ?>
<?php include('./getAllusers.php') ?>
<main class="container">

  <h1 class="m-4 text-uppercase">Zoznam užívateľov</h1>
  <ul class="list-group m-4">
    <li class="list-group-item d-flex row list-group-item-action active">
      <span class="col-1"> Id</span>
      <span class="col-2"> Avatar</span>
      <span class="col-2"> Username</span>
      <span class="col-2"> Email</span>
      <span class="col-3"> Registered at</span>
      <span class="col-2 text-center"> Akcie</span>
    </li>
    <?php foreach ($users as $user) : ?>
      <a href="./Profile.php id= <?php echo $user["id"] ?>" class="text-decoration-none">
        <li class="list-group-item list-group-item-action d-flex justify-content-between row">
          <span class="text-danger col-1"><?php echo $user["id"] ?></span>
          <div class="col-2">
            <img src="./resources/<?php echo $user["avatar"] ?>"> 
             <img src="./resources/avatar.png<?php echo $user["avatar"]?>">
          </div>
          <span class="col-3"><?php echo $user["username"] ?></span>
          <span class="col-3"><?php echo $user["email"] ?></span>
          <span class="col-3"><?php echo $user["created_at"] ?></span>
          <div class="col-3 d-flex justify-content-center">
            <a class="btn btn-danger mr-2" href="/DeleteUser.php">Zmazať</a>
            <a class="btn btn-success mr-2" href="/Profile.php">Profil</a>
          </div>
        </li>
      </a>
    <?php endforeach; ?>
  </ul>


  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./resources/num1.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./resources/num2.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="./resources/num3.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>




</main>
<?php include('./parts/footer.php') ?>