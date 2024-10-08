<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <style>
        body {
    width: 100%;
    min-height: 100vh;
    box-sizing: border-box;
    font-family: "Open Sans";
}

.container {
    position: relative;
    min-height: 100vh;
    max-width: 100% !important;
    background-color: #161623;
    overflow: hidden;
    display: grid;
    place-items: center;
}

.container::before {
    content: "";
    position: absolute;
    width: 400px;
    height: 400px;
    border-radius: 50%;
    background: #7B66FF;
    /* transform: scale(0.5) translate(-100%, -100%); */
    /* transform: translateX(4em); */
    /* transform: scale(2, 0.5); */

    animation: move-up6 2s ease-in infinite alternate-reverse;
    
}

.container::after {
    content: "";
    position: absolute;
    vertical-align: bottom;
    width: 250px;
    height: 250px;
    border-radius: 50%;
    background: #5FBDFF;
    
    animation: move-up6 2s ease-in infinite alternate-reverse;
}
@keyframes move-up6 {
  to {
        transform: translateY(-50px);

    }
  }

a {
    text-decoration: none;
}

.login {
    position: relative;
    width: 350px;
    padding: 30px;
    height: 570px;
    background-color: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-radius: 15px;
    z-index: 10;
    backdrop-filter: blur(25px);
    box-shadow: 10px 10px 40px rgba(0, 0, 0, 0.2),
    -10px -10px 40px rgba(0, 0, 0, 0.2);
}

@media (max-width:400px) {
    .login {
        width: 90%;
    }
}

.login h1 {
    font-size: 1.8rem;
    color: #fff;
    margin-bottom: 40px;
    margin-top: 0;
    text-align: center;
}

.login form {
    width: 100%;
    height: 100%;
    outline: none;
    border: none;
}

.login form .input-box {
    width: 100%;
    position: relative;
    margin-bottom: 30px;
    display: flex;
}

.login form .input-box input {
    width: 100%;
    border: none;
    padding: 1rem 2.7rem 1rem 1rem;
    border-radius: 10px;
    color: #fff;
    background-color: rgba(255, 255, 255, 0.2);
    border: 1px solid rgba(255, 255, 255, 0.4);
}

.login form .input-box input::placeholder {
    color: #fff;
    font-size: 0.8rem;
    transition: 0.5s ease;
}

.login form .input-box input:focus::placeholder {
    opacity: 0;
}

.login form .input-box input:focus {
    outline: none;
}

.login form .input-box i {
    position: absolute;
    top: 50%;
    right: 15px;
    transform: translateY(-50%);
    color: #fff;
    font-size: 1.2rem;
}

.login form .rembar {
    margin-bottom: 30px;
    width: 100%;
}

.login form .rembar input {
    appearance: none;
}

.login form .rembar label {
    color: #fff;
    position: relative;
    width: 100%;
    padding-left: 35px;
    font-size: 0.9rem;
}

.login form .rembar label::before {
    content: "";
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 22px;
    height: 22px;
    border-radius: 50%;
    background-color: rgba(255, 255, 255, 0.2);
}

.login form .rembar label::after {
    content: "";
    position: absolute;
    left: 4px;
    top: 50%;
    transform: translateY(-50%);
    width: 14px;
    height: 14px;
    border-radius: 50%;
    background-color: #fff;
    transition: 0.5 ease;
    opacity: 0;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
}

.login form .rembar input:checked + label::after {
    opacity: 1;
}

.login form button {
    width: 100%;
    border: none;
    padding: 1rem 1rem 1rem 2.7rem;
    border-radius: 10px;
    color: #fff;
    margin-bottom: 30px;
    background-color: #161623;
    border: 1px solid rgba(255, 255, 255, 0.4);
    transition: 0.5s ease;
    cursor: pointer;
    font-weight: 600;
}

.login form button:hover {
    background-color: #111;
}

.login form .links {
    width: 100%;
    display: flex;
    justify-content: space-between;
    gap: 15px;
}

.login form .links a {
    color: #fff;
    font-weight: 100;
    font-size: 0.7rem;
}
        </style>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <title>Register</title>
</head>

<body>
    <div class="container">

        <div class="login">

            <h1>Sign up Form</h1>

            @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="input-box">
                    <input type="text" name="name" placeholder="Name" required>
                    <i class="fa fa-envelope"></i>
                </div>

                <div class="input-box">
                    <input type="email" name="email" placeholder="Email" required>
                    <i class="fa fa-envelope"></i>
                </div>

                <div class="input-box">
                    <input type="password" name="password" placeholder="Password" required>
                    <i class="fa fa-envelope"></i>
                </div>

                <div class="input-box">
                    <input type="password" name="password_confirmation" placeholder="Confirm password" required>
                    <i class="fa fa-envelope"></i>
                </div>

                <button type="submit">Sign up</button>

                <div class="links">
                    <a  href="{{ route('login') }}">Already have account Login here</a>
                   
                </div>

            </form>

        </div><!-- End Login -->

    </div>

</body>

</html>