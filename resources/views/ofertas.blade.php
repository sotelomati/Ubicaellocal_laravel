@extends("layaouts.plantilla")


@section("head")
<title>Ubica el local</title>
@endsection


@section("body")

    <div class="container mt-3 mb-3">
    
        <div class="row justify-content-center">
        

            <div class="spinner-border text-primary ms-5" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-border text-secondary ms-5" role="status">
             <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-border text-success ms-5" role="status">
             <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-border text-danger ms-5" role="status">
             <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-border text-warning ms-5" role="status">
             <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-border text-info ms-5" role="status">
             <span class="visually-hidden">Loading...</span>
            </div>
            <div class="spinner-border text-dark ms-5" role="status">
             <span class="visually-hidden">Loading...</span>
            </div>

        </div>
    </div>

    <div class="container ">

        <div id="carouselExampleFade" class="carousel slide carousel-fade " data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="https://i.ytimg.com/vi/I_EB6rSG7iQ/maxresdefault.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="https://pbs.twimg.com/media/EDBOx6NWsAAMDf9.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item ">
                <img src="https://i.ytimg.com/vi/Cx9zYKkECwg/hqdefault.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>
@endsection
