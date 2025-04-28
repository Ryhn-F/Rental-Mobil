<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/LoginForm.css') }}">


<style>
    input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
</style>

    <title>Register</title>
</head>
<body>
    <div>
        <div class="bg">
          <div>

          </div>
          <div class="wrapCenter">
            <div class="wrapper">

              <form action="" method="POST">
                @csrf
                <h1>Register</h1>
                @if ($errors -> any())

                <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $item )
                            <li>{{$item}}</li>

                            @endforeach
                        </ul>
                </div>

                @endif
                <div class="input-box">
                    <input
                      type="text"
                      placeholder="Nama Lengkap"
                      value="{{old('fullname')}}"
                      id="Username"
                      name="fullname"
                      required
                    />

                  </div>
                <div class="input-box">
                  <input
                    type="email"
                    placeholder="Email"
                    value="{{old('email')}}"
                    id="Username"
                    name="email"
                    required
                  />

                </div>

                <div class="input-box">
                    <input
                      type="number"
                      placeholder="No. Telp"
                      name="no_telp"
                      value="{{old('no_telp')}}"
                      id="Username"
                      required
                    />

                  </div>
                <div class="input-box">
                  <input
                    type="password"
                    placeholder="Password"
                    name="password"
                    id="Password"
                    value="{{old('password')}}"
                    required
                  />

                </div>
                <div class="remember-forgot">

                </div>
                <button type="submit" class="button">
                  <span class="button_text">Register</span>
                </button>
                <div class="register-link">
                  <p>

                    Already have an account?
                    <a href="{{Route('login')}}">Login</a>
                  </p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
</body>
</html>
