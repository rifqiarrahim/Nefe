<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/myStyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <title>KafeIn</title>
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar sticky-top navbar-expand-lg bg-transparent navbar-light d-flex">
            <div class="container-fluid">
                <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavAltMarkup">
                    <ul class="navbar-nav" id="itemNav">
                        <li class="nav-item">
                            <a class="nav-link btn" href="/register">Register</a>
                        </li>
                        <div class="vr"></div>
                        @auth
                        <li class="nav-item">
                            <a class="nav-link btn" href="/login">Login</a>
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="nav-link btn">logout</button>
                            </form>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link btn" href="/login">Login</a>
                        </li>
                        @endauth

                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="p-5 mb-4 bg-light" id="jumbotron">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold ">KafeIn</h1>
            <p class="col-md-8 fs-4 ">Gen Z's solutions for a fellow Gen Z</p>
            <div class="row">
                <div class="col-5" id="searchBox">
                    <div class="input-group">
                        <input type="text" class="form-control border-end-0" placeholder="Cari Kafe Mu!">
                        <div class="input-group-append">
                            <div class="input-group-text bg-white border-start-0 border-end-0 rounded-end"
                                style="margin-left:-1px"><i class="bi bi-search"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3" id="cardCont">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <h2>Find a Cafe here!</h2>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
            @foreach($dbCafe as $cf)
            <div class="col">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ asset('/img/DSC_0331 (Small).jpg') }}" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{ $cf["name"] }}</h5>
                        <p class="card-text"><i class="bi bi-star-fill"></i>{{ $cf["rating"] }}</p>
                        <a class="btn btn-success" href="#" role="button">Detail</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="pagination mt-3 justify-content-center">
            {{ $dbCafe->links() }}
        </div>
    </div>

    <div class="container-fluid bg-secondary" id="footer">
        <div class="col justify-content-center d-flex">
            <p class="small text-white my-auto">All copy rights reserve to KafeIn</p>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>