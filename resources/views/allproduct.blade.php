<html>
    <head>
        <title>Pressure Test - @yield('title')</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
.banner{

    top: 0;
    left: 0;
    width: 100%;
    text-align: center;
    line-height: 90vh;
}



</style>

    </head>
    <body>


<div class="d-flex justify-content-md-center align-items-center container-fluid" style="background-color:lightgrey">
    <fieldset>
    <div class="d-flex justify-content-between">
    <svg style="text-align: left" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-layout-sidebar" viewBox="0 0 16 16">
                <path d="M0 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3zm5-1v12h9a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H5zM4 2H2a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h2V2z"/>
              </svg>
        <h2 style="text-align: center;">
            Products </h2>

            <svg style="text-align: right:" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
          </svg>
    </div>

        <div class="banner">
            <img src="productbanner.png" alt="">
        </div>
        <div class='container-fluid d-flex justify-content-between'>
            <div>
                <img src="baju.jpg" width="200" height="200"alt="">
                <h3 style="text-align: center;">Red T-shirt</h3>
                <div class="d-flex justify-content-between">
                    <h3>T-shirt</h3>
                    <h3 style="color: blue">45$</h3>
                </div>
            </div>
            <div>
                <img src="baju.jpg" width="200" height="200"alt="">
                <h3 style="text-align: center;">Red t-shirt</h3>
                <div class="d-flex justify-content-between">
                    <h3>T-shirt</h3>
                    <h3 style="color: blue">45$</h3>

                </div>
            </div>
        </div>
        <div class='container-fluid d-flex justify-content-between'>
            <div>
                <img src="baju.jpg" width="200" height="200"alt="">
                <h3 style="text-align: center;">Red T-shirt</h3>
                <div class="d-flex justify-content-between">
                    <h3>T-shirt</h3>
                    <h3 style="color: blue">45$</h3>
                </div>
            </div>
            <div >
                <img src="baju.jpg" width="200" height="200"alt="">
                <h3 style="text-align: center;">Red t-shirt</h3>
                <div class="d-flex justify-content-between">
                    <h3>T-shirt</h3>
                    <h3 style="color: blue">45$</h3>
                </div>
            </div>
        </div>
    </div>
</fieldset>
<script>
    function request(){
        fetch('https://fakestoreapi.com/products/1')
            .then(res=>res.json())
            .then(json=>console.log(json))
    }
    const splash = document.querySelector('.splash');

    document.addEventListener('DOMContentLoaded', (e)=>{
        setTimeout(() => {
           splash.classList.add('display-none');
        }, 500);
    })
</script>
    </body>

</html>


