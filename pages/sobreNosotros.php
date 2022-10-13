<?php

    require_once './cabecera.html';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Sobre Nosotros</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="../index.php">#AppName</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link">Sobre Nosotros</a>
            </li>
            <li class="nav-item">
            <a class="nav-link disabled" href="#">Actividades</a>
            </li>
        </ul>
        <form class="d-flex" role="search">
            <button type="button" class="btn btn-light" style="margin-right: 10px">+</button> <br/>
            <button type="button" class="btn btn-light">Acceder</button>
        </form>
        </div>
    </div>
    </nav>

    <br/>

    <div style= "margin-left: 10%;">

        <h2 class="fontQS">Explora</h2>

        <br/>

        <h1><span class="fontHA">#AppName</span></h1>

        <br/>
    
        <p><span class="fontQS">Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br/>
        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,<br/>
        when an unknown printer took a galley of type and scrambled it to make a type specimen book.<br>
        It has survived not only five centuries, but also the leap into electronic typesetting, <br/>
        remaining essentially unchanged.</span></p>
    </div>
    
    <br/>

    <div class="sn_ta">
        <a type="button" class="btn btn-light fontQS"><i class="fa-solid fa-shuffle"></i></a>    
    </div>


    <br/>

    <div class="sn_container-gallery">

      <img src="../img/kelly-sikkema-TS6FasMlQWs-unsplash.jpg">
      <img src="../img/etienne-girardet-j2Soo4TfFMk-unsplash.jpg">
      <img src="../img/nick-fewings-EkyuhD7uwSM-unsplash.jpg">
      <img src="../img/keila-hotzel-lFmuWU0tv4M-unsplash.jpg">

    </div>

    <div class="sn_img_bckg">
        <div class="sn_flex">
            <a type="button" class="btn btn-light fontQS"><i class="fa-regular fa-plus"></i></a>   
            <a type="button" class="btn btn-light fontQS">navega</a> 
            <a type="button" class="btn btn-light fontQS"><i class="fa-solid fa-paper-plane"></i></a> 
        </div>
    </div>

    <br/>
    <div style="margin-left: 5%">
        <h2 class="fontQS">Topics</h2>

        <br/>

        <h1 class="fontQS">#Matemáticas #Ciencias #Tecnología <br/>
                            #Inglés #Informática #Plástica #Deporte</h1>

    </div>
</body>
</html>