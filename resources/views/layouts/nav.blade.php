<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @php
        $currentRouteName = Route::currentRouteName();
    @endphp
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand mb-0 h1">
                <i class="bi-hexagon-fill me-2 text-primary"></i> Data Master</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-md-none text-white-50">
                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('home') }}"
                            class="nav-link @if ($currentRouteName == 'home') active @endif">Home</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('employees.index') }}"
                            class="nav-link @if ($currentRouteName == 'employees.index') active @endif">Employee</a></li>
                </ul>
                <hr class="d-md-none text-white-50  ">
                <a href="{{ route('profile') }}" class="btn btn-outline-light my-2 ms-md-auto @if ($currentRouteName == 'profile') active @endif"><i
                        class="bi-person-circle me-1"></i> My Profile</a>
            </div>
        </div>
    </nav>
</body>

</html>
