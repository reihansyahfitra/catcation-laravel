<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in | CatCation</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        div{
            font-family: 'Poppins', sans-serif;
        }
        .form-check-input[type='checkbox']:checked {
            background-color: #FF5800;
            border-color: #FF5800;
        }
    </style>
</head>
<body>
    <div class="container-fluid w-100">
        <div class="row h-100">
            <form action="/auth" method="post" class="col-8 h-100 needs-validation m-auto w-50">
                @csrf
                <div class="row justify-content-center">
                    <div class="card rounded-0 border-0 w-50">
                        <div class="card-body text-center">
                            <div class="card-title">
                                <div class="h4 fw-bold">Login</div>
                            </div>
                            <div class="card-text">
                                <div class="lead fw-bold">Hi, Welcome back!</div>
                                <div class="text-secondary">Login and keep your cat's well-being a top priority</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label for="email-address" class="form-label">E-mail</label>
                    <input placeholder="e.g. agusgansabiez@gmail.com" type="text" class="form-control" name="email-address" value="{{ $email }}" required>
                    <label class="fw-bold text-danger">{{ $errorEmail }}</label>
                </div><br>
                <div class="row">
                    <label for="pass-word" class="form-label">Password</label>
                    <input placeholder="Enter password" type="password" class="form-control" name="pass-word" required>
                    <label class="fw-bold text-danger">{{ $errorPass }}</label>
                </div><br>
                <div class="row">
                    <div class="col text-start">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <div class="col text-end">
                        <a href="#">Forgot password?</a>
                    </div>
                </div><br><br><br>
                
                <div class="row">
                    <button class="btn fw-bold text-light" style="background-color: #FF5800;" type="submit">Log in</button>
                </div><br><br>
                <div class="row">
                    <div class="col"><hr></div>
                    <div class="col-1 text-center text-secondary">Or</div>
                    <div class="col"><hr></div>
                </div><br>
                <div class="row">
                    <button class="btn btn-light border-secondary border-2 fw-bold text-secondary" type="submit"><img class="img-fluid" src="{{ asset('image/LogoGoogle.png') }}" alt="LogoGoogle">&nbsp; Log in with Google</button>
                </div><br>
                <div class="row text-center">
                    <p class="text-secondary">Don't have an account? <a href="/signup">Sign Up</a></p>
                </div>
            </form>
            <div class="col-4" style="background-color: #FFCB7C;">
                <img class="w-100 img-fluid" src="{{ asset('image/SignUpCat.png') }}" alt="SignUpCat">
            </div>
        </div>
    </div>
</body>
</html>