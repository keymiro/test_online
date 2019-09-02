<body data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-expand-sm bg-p navbar-dark fixed-top">
    <a class="navbar-brand main-title" href="#"> <h2>Test Online</h2></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
            aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse nav justify-content-end" id="navbarColor01">


        <ul class="navbar-nav pull-xs-right ">
            <li class="nav-item">
                <a class="nav-link" href="#section1">Section 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#section2">Section 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#section3">Section 3</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#section4">Section 4</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#section5">Section 5</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#section6">Section 6</a>
            </li>




        <div class="dropdown dropdown-menu-right">
            <button type="button" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown">
                Iniciar Sesion
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('login') }}">Ingresar</a>
                <a class="dropdown-item" href="{{ route('register') }}">Registrarse</a>

            </div>
        </div>
        </ul>
    </div>


</nav>