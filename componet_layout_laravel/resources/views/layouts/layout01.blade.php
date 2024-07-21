<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('libraries.styles')
</head>

<body>

    @include('components.navbar')

    <div class=" container">
        <div class="row mt-5">
            @include('components.rightbar')

            <div class="card col-md-6 mb-2 mt-2">
                @yield('content')
            </div>

            @include('components.leftbar')
        </div>
    </div>
    @include('components.footer')
    @include('libraries.script')
</body>

</html>
