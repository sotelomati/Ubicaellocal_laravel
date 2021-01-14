<!DOCTYPE html>
<html lang="en">
<head class="head">
    @yield("head")
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/app.css" media="screen" />
</head>
<body>

<nav class="navbar fixed-top navbar-expand-xl navbar-dark bg-dark lista">
    @yield("navegacion-plantilla")
      <div class="container">

        <a class="navbar-brand mt-2" href="{{url('/home')}}"> 
          <img src="img/icono_mapa.png" loading=lazy alt="" class="navbar-brand__img"> Ubica el local
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">

          <ul class="navbar-nav ms-auto me-5">

            <li class="nav-item " >
              <a href="#" class="nav-link">
                Ofertas
              </a>
            </li>

            <li class="nav-item" >
              <a href="#" class="nav-link">
                Gluten Free
              </a>
            </li>

            <li class="nav-item" >
              <a href="#" class="nav-link">
                El Noble
              </a>
            </li>

            <li class="nav-item" >
              <a href="{{url('/contacto')}}" class="nav-link" >
                Contacto
              </a>
            </li>

          </ul>
        </div>

      </div>
    </nav>    

    @yield("body")

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"    crossorigin="anonymous">
    </script>  
    @yield("pie")
    

</body>
</html>