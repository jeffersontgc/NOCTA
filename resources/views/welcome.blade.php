<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
</head>

<body class="bg-dark h-100vh text-light">

    <div>
        <div class="container_main">
            <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
                <header class="mb-auto">
                    <div>
                        <nav class="nav nav-masthead justify-content-between">
                            <h3 style="font-size: 2.125rem; white-space: nowrap;"
                                class="float-md-start mb-0 text-warning">Hertz Inc
                            </h3>
                            <a class="text-warning" href="{{ route('teams.index') }}">Teams Create</a>
                        </nav>
                    </div>
                </header>
            </div>
        </div>


        <div class="laravel_title">
            <h2>Working with <span> <a style="text-decoration: none" class="class=" text-danger"" target="_blank"
                        href="https://laravel.com/"><strong class="text-danger">Lavaravel</strong></a> </span>
            </h2>
        </div>

        <!-- For demo purpose -->
        <div class="container py-5">
            <div class="row text-center text-light">
                <div class="col-lg-8 mx-auto">
                    <h1 class="display-4">Team Programmers</h1>
                </div>
            </div>
        </div><!-- End -->


        <div class="container">
            <div class="row text-center justify-content-center">

                <!-- Team item -->
                <div class="col-xl-3 col-sm-6 mb-3 d-flex align-items-center flex-reverse">
                    <div class=" rounded shadow-sm py-5 px-4"><img src="https://i.redd.it/05sh0275eft01.jpg" alt=""
                            width="60%" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0 class=" text-danger"">Jefferson Quezada</h5><span
                            class="small text-uppercase text-muted">Student
                            Programmer</span>
                        <ul class="social mb-0 list-inline mt-3">
                            <li class="list-inline-item"><a href="#" class="social-link"><i
                                        class="fa fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i
                                        class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i
                                        class="fa fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i
                                        class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div><!-- End -->

                <!-- Team item -->
                <div class="col-xl-3 col-sm-6 mb-3 d-flex align-items-center flex-reverse">
                    <div class=" rounded shadow-sm py-5 px-4"><img src="https://i.redd.it/xokc15f6m6431.jpg" alt=""
                            width="60%" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0 class=" text-danger"">Anderson Quezada</h5><span
                            class="small text-uppercase text-muted">Programmer</span>
                        <ul class="social mb-0 list-inline mt-3">
                            <li class="list-inline-item"><a href="#" class="social-link"><i
                                        class="fa fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i
                                        class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i
                                        class="fa fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i
                                        class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div><!-- End -->

                <!-- Team item -->
                <div class="col-xl-3 col-sm-6 mb-3 d-flex align-items-center flex-reverse">
                    <div class="rounded shadow-sm py-5 px-4"><img src="https://acortar.link/X2gbhE" alt="" width="60%"
                            class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0 class=" text-danger"">Keylin Mena</h5><span
                            class="small text-uppercase text-muted">Student
                            Programmer</span>
                        <ul class="social mb-0 list-inline mt-3">
                            <li class="list-inline-item"><a href="#" class="social-link"><i
                                        class="fa fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i
                                        class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i
                                        class="fa fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i
                                        class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div><!-- End -->
            </div>
        </div>
    </div>

</body>

</html>