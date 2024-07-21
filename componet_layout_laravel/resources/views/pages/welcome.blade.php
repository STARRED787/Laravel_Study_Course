<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    @include('libraries.styles')
</head>
<style>
    .card-header {
        background-color: rgb(8, 56, 230);
        color: rgb(0, 0, 0);
    }

    .btn-primary {
        background-color: rgb(8, 56, 230);
        color: rgb(17, 0, 0);
    }
</style>

<body>

    @include('components.navbar')
    <h1 class=" text-center">This is Home page</h1>
    <div class=" container">
        <div class="row mt-5">
            @include('components.rightbar')
            <div class="card col-md-6 mb-2 mt-2">
                <div class="card-header">
                    Featured
                </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            @include('components.lefttbar')
        </div>
    </div>
    @include('components.footer')
    @include('libraries.script')
</body>

</html>
