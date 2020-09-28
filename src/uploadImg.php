<!-- 
  Creat by Wesly J. Hernandez 
  Date: 07-28-2020
 -->

 <!-- <?php 
    include('../include/mysqli_connect.php');

    $query = "SELECT * FROM associations";

    $result = mysqli_query($conn, $query) or die("databese error:" . mysqli_error($conn));
?> -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Start links -->
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- End links --> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- jQuary script here -->
    <script>
        $(document).ready(function() {
        $(".btns").click(function(){
            $(".input").toggleClass("active").focus;
            $(this).toggleClass("animate");
            $(".input").val("");
        });    
    });
    </script>
    <!-- jQuary script end here -->
    <title>Asociaciones Estudiantiles</title>
</head>
<body>
    <header>
      <nav class="navbar">
        <!-- Navbar content -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <a href="index.php" class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
          </li>
          <li class="nav-item" role="presentation">
            <a href="#" class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Upload</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
          </li>
        </ul>
      </nav>
      <!-- jQuary button -->
      <div class="wrapper sm-2">
        <div class="search-box">
        <form action="result.php" method="GET">
            <input type="text" placeholder="Search..." class="input" name="buscar">
            <div class="btns">
                <i class="fa fa-search" aria-hidden="true"></i>
            </div>
        </form>
        </div>
      </div>
      <!-- jQuary button -->
    </header>
      <!-- Section -->
      <section class="section-1 m-0 p-0 text-center">
      <h1>Añadir Asociacion</h1>
            <form class="formulario" action="end.html" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input class="text-center" type="text" id="name" />
                </div>
                <div class="form-group">
                    <label for="mail">E-mail:</label>
                    <input class="text-center" type="email" id="mail" />
                </div>
                <div class="form-group">
                    <label for="msg">About:</label>
                    <textarea id="msg"></textarea>
                </div>
                <div  class="form-group">
                    <label for="exampleFormControlFile1">Example file input</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <div class="button">
                    <input type="submit" value="Enviar" class="boton_personalizado">
                </div>
            </form> 
      </section>
      <!-- End the section -->
    <main>

    </main>
</body>
<!-- Start bootstrap script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- End -->
</html>