<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">

    <style>
        .container {
            margin-top: 100px;
        }

        body {
            background-color: lightskyblue;
        }
    </style>
</head>

<body>
    <!-- Sing in  Form -->
    <section class="sign-in">
        <div class="container">
            <div class="container mt-5">
                @if (Session::get('failed'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Login Gagal!</strong> {{ Session::get('failed') }}
                        <button type="button" class="btn-close" data-bs- dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Berhasil!</strong> {{ Session::get('success') }}
                        <button type="button" class="btn-close" data-bs- dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </div>
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="assets/img/values-3.png" alt="sing up image"></figure>
                    <a href="registrasi" class="signup-image-link">Create an account</a>
                </div>
                <div class="signin-form">
                    <h2 class="form-title">Login</h2>
                    <form action="{{ route('postLogin') }}" method="POST" class="register-form" id="login-form">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="your_email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="email" id="email" placeholder="Your Email" required
                                value="{{ old('email') }}" />
                            <span class="text-danger">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" id="password" placeholder="Password" />
                            <span class="text-danger">
                                @error('password')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="form-group form-button">
                            <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
