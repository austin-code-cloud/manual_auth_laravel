<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet" />

    <style>
        .gradient-custom {
            /* fallback for old browsers */
            background: #6a11cb;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
        }
    </style>
</head>


<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <form action="{{route('register-user')}}" method="post">
                                @if (Session::has('success'))
                                    <div>{{Session::get('success')}}</div>
                                @endif
                                @if (Session::has('failure'))
                                    <div>{{Session::get('failure')}}</div>
                                @endif
                                
                                @csrf
                                
                                <div class="mb-md-5 mt-md-4 pb-5">
                                    <h2 class="fw-bold mb-2 text-uppercase">Register</h2>
                                    <p class="text-white-50 mb-5">Please enter details below!</p>

                                    <div class="form-outline form-white mb-4">
                                        <input type="text" name="surname" id="typeEmailX" value="{{old('surname')}}" class="form-control form-control-lg" />
                                        <label class="form-label" for="typeEmailX">Surname</label>
                                        <span> @error ('surname') {{$message}} @enderror</span>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="text" name="firstname" id="typeEmailX" value="{{old('firstname')}}" class="form-control form-control-lg" />
                                        <label class="form-label" for="typeEmailX">Firstname</label>
                                        <span> @error ('firstname') {{$message}} @enderror</span>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="email" name="email" id="typeEmailX" value="{{old('email')}}" class="form-control form-control-lg" />
                                        <label class="form-label" for="typeEmailX">Email</label>
                                        <span> @error ('email') {{$message}} @enderror</span>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="password" name="password" id="typePasswordX" value="{{old('password')}}" class="form-control form-control-lg" />
                                        <label class="form-label" for="typePasswordX">Password</label>
                                        <span> @error ('password') {{$message}} @enderror</span>
                                    </div>

                                    <button class="btn btn-outline-light btn-lg px-5" >Register</button>

                                    <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                        <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                        <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                        <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                                    </div>

                                </div>
                            </form>
                            <div>
                                <p class="mb-0">Already have an account? <a href="login" class="text-white-50 fw-bold">Sign In</a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>
</body>

</html>