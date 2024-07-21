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
    <h1 class=" text-center">This is About page</h1>
    <div class=" container">
        <div class="row mt-5">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        left side
                    </div>
                </div>
            </div>
            <div class="card col-md-6 mt-3 mb-3">
                <div class="card-header">
                    Featured
                </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        right side
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="background-color:red; margin-top:40vh; margin-bottom:5px; text-align:center; ">
        Footer
    </div>
    @include('libraries.script')
</body>

</html>
