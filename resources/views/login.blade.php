<html>
    <head>
        <title>Pressure Test - @yield('title')</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
.splash{
    position: fixed;
    top: 0;
    left: 0;
    height:100vh;
    width: 100%;
    background: white;
    z-index: 200;
    color: black;
    text-align: center;
    line-height: 90vh;
    padding-top: 25%;
}

.splash.display-none{
    position: fixed;
    opacity: 0;
    transition: all 0.5s;
    /* animation: fadeOut 1s ease-out forwards; */
    top: 0;
    left: 0;
    height:100vh;
    width: 100%;
    background: white;
    z-index: -10;
    color: black;
    text-align: center;
    line-height: 90vh;
    padding-top: 25%;
}


@keyframes fadeIn{
    to{
        opacity:1;
    }
}

.fade-in{
    opacity: 0;
    animation: fadeIn 0.3s ease-in forwards
}
</style>

    </head>
    <body>

        <div class="splash">
            <img src="imgsplashscreen.png" alt="">
        </div>


<div class="d-flex justify-content-md-center align-items-center vh-100 container-fluid">
    <fieldset>

        <form class="form-horizontal" action="{{ url("/user") }}" method="POST">
            @csrf

            <div style="text-align: center;">
            <h2>Login <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> </h2>
        </div>




        <div class="control-group">
        <!-- Password-->
        <div class="controls">
            <input type="text" id="email" name="email" placeholder="Email" class="input-xlarge" value={{ old('email') }}>
        </div>
        </div>
        <span style="color: red;">{{ $errors->first('email') }}</span>

        <div class="control-group">
        <!-- Password-->
        <div class="controls">
            <input type="password" id="password" name="password" placeholder="Password" class="input-xlarge" value={{ old('password') }}>
        </div>
        </div>
        <span style="color: red;">{{ $errors->first('password') }}</span>

        <div>
            <button type="submit" class="btn btn-success btn-lg btn-block" name="btnRegister">Login</button>
        </div>



    </fieldset>

</form>

    </div>
    @if (Session::has('error'))
    <div class="d-flex justify-content-md-center align-items-center vh-100" style="text-align: center;color: red ">
        <h5>
            {{ Session::get('error'); }}
        </h5>
    </div>
    @endif
        <script type="text/javascript">
            const splash = document.querySelector('.splash');

            document.addEventListener('DOMContentLoaded', (e)=>{
                setTimeout(() => {
                   splash.classList.add('display-none');
                }, 500);
            })
        </script>
    </body>

</html>


