<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Áreas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Hello, world!</title>
    <link rel="stylesheet" href="../css/style.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js" integrity="sha512-WNLxfP/8cVYL9sj8Jnp6et0BkubLP31jhTG9vhL/F5uEZmg5wEzKoXp1kJslzPQWwPT1eyMiSxlKCgzHLOTOTQ==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.js" integrity="sha512-1lagjLfnC1I0iqH9plHYIUq3vDMfjhZsLy9elfK89RBcpcRcx4l+kRJBSnHh2Mh6kLxRHoObD1M5UTUbgFy6nA==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js" integrity="sha512-/DXTXr6nQodMUiq+IUJYCt2PPOUjrHJ9wFrqpJ3XkgPNOZVfMok7cRw6CSxyCQxXn6ozlESsSh1/sMCTF1rL/g==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
  </head>
<body>
    <h1>Calcular Areas</h1>
    <div class="main">
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Esfera</h5>
    <p class="card-text">Calcular el área de una Esfera</p>
    <button href="#" class="btn btn-primary" onclick="showEsfera()">Calcular</button>
  </div>
</div>
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Cubo</h5>
    <p class="card-text">Calcular el área de una Cubo</p>
    <button href="#" class="btn btn-primary" onclick="showCubo()">Calcular</button>
  </div>
</div>
<div class="card" >
  <div class="card-body">
    <h5 class="card-title">Cilindro</h5>
    <p class="card-text">Calcular el área de una Cilindro</p>
    <button href="#" class="btn btn-primary" onclick="showCilindro()">Calcular</button>
  </div>
</div>
</div>
<h2>Complete los campos</h2>
<div class="principal esfera">
    <form class="form-control" action="esfera.php" method="POST">
      <div class="form-input-material">
        <label>Ingrese el radio:</label>
        <input type="number" name="radio" id="" placeholder="1 mm" class="form-control radio" required />
      </div>
      <button type="submit" class="btn btn-primary">Calcular</button>
    </form>
</div>
<div class="principal cubo">
    <form class="form-control" action="cubo.php" method="POST">
      <div class="form-input-material">
        <label>Ingrese un lado del Cubo:</label>
        <input type="number" name="lado" id="" placeholder="1 mm" class="form-control lado" required />
      </div>
      <button type="submit" class="btn btn-primary">Calcular</button>
    </form>
</div>
<div class="principal cilindro">
    <form class="form-control" action="cilindro.php" method="POST">
      <div class="form-input-material">
        <label>Ingrese el radio:</label>
        <input type="number" name="radioH" id="" placeholder="1 mm" class="form-control radioH" required />
      </div>
      <div class="form-input-material">
        <label>Ingrese la altura:</label>
        <input type="number" name="altura" id="" placeholder="1 mm" class="form-control altura" required />
      </div>
      <button type="submit" class="btn btn-primary">Calcular</button>
    </form>
</div>
</body>
    <script>
        let divcilindro = jQuery(".cilindro");
        let divesfera = jQuery(".esfera");
        let divcubo = jQuery(".cubo");
        let title = jQuery("h2");
        let r = jQuery(".radio");
        let l = jQuery(".lado");
        let h = jQuery(".radioH");
         jQuery(document).ready(function() {
            
        });
        function showCilindro(){
                divcilindro.attr("style","display: block;");
                divesfera.attr("style","display: none;");
                divcubo.attr("style","display: none;");
                title.attr("style","display: block;");
                h.focus();
            }
        function showEsfera(){
            divcilindro.attr("style","display: none;");
            divesfera.attr("style","display: block;");
            divcubo.attr("style","display: none;");
            title.attr("style","display: block;");
            r.focus();
        }
        function showCubo(){
            divcilindro.attr("style","display: none;");
            divesfera.attr("style","display: none;");
            divcubo.attr("style","display: block;");
            title.attr("style","display: block;");
            l.focus();
        }
    </script>
    
</html>