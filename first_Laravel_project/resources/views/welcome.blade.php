{{-- Laravel routing, Style, Style with bootstrap, Bootstrap Responsive --}}

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    .card-header {
        background-color: rgb(186, 230, 8);
        color: rgb(0, 0, 0);
    }

    .btn-primary {
        background-color: greenyellow;
        color: rgb(17, 0, 0);
    }
</style>

<body class=" container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">LOGO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/cantact">Cantact</a>
                    </li>
            </div>
        </div>
    </nav>
    <h1 class=" text-center">This is home page</h1>
    <div>
        <div class="row container">
            <div class="col-md-3 col-sm-3 col-xs-3"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia
                qui sit
                accusamus
                nihil
                sed unde eos libero? Nobis, voluptatibus ut, quam necessitatibus architecto vitae eos, pariatur
                quibusdam
                inventore aut cupiditate.</div>
            <div class="col-xs-3 col-sm-3 col-xs-3"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor
                molestias
                voluptatem
                non
                quia accusamus delectus reiciendis eligendi modi ratione nam error nostrum, officia ipsum maiores
                inventore?
                Eveniet voluptates reprehenderit magni?</div>
            <div class="col-md-3 col-sm-3 col-xs-3"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, ea
                nobis
                itaque maxime
                dolores commodi totam minima voluptatem laudantium distinctio consectetur, fugiat et aspernatur
                consequatur
                accusamus possimus? Commodi, minima delectus.</div>
        </div>
    </div>
    </div>

    <div class="card mt-4">
        <div class="card-header">
            Featured
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</body>

</html>
