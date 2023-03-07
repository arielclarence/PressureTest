<html>
    <head>
        <title>Pressure Test - @yield('title')</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
.produkthumbnail{

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

              <svg style="text-align: left"xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
              </svg>
        <h2 style="text-align: center;">
            Red T-shirt </h2>
            <svg style="text-align: right:" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
              </svg>

    </div>

        <div class="produkthumbnail">
            <img src="baju.jpg" alt="">
        </div>

        <h3>T-shirt</h3>
        <h3 style="color: blue">45$</h3>
        <div class="d-flex flex-row">

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              SMALL
            </button>

          </div>

          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              COLOR
            </button>

          </div>
        </div>
          <P>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras semper ipsum leo, non eleifend elit eleifend sit amet. Nunc ac turpis lacus. Morbi suscipit nunc sapien, sit amet elementum risus consequat sit amet. Vivamus ac tortor a odio convallis molestie. Pellentesque erat urna, feugiat in vestibulum a, tincidunt eu arcu. Sed suscipit malesuada sem, non finibus ligula aliquam eu. Sed pharetra porta urna, quis posuere velit pellentesque ut. Nam eget sapien non justo maximus ornare. Fusce pellentesque at augue eget lacinia. Interdum et malesuada fames ac ante ipsum primis in faucibus.

Phasellus volutpat ligula a ultricies tincidunt. Sed efficitur leo a volutpat laoreet. Curabitur feugiat mauris sit amet malesuada tempor. Nunc dignissim neque quam, et pellentesque ligula porta ut. Sed tempus, tortor vel commodo cursus, quam elit malesuada felis, ut gravida justo velit vel enim. Integer posuere fermentum ipsum, quis accumsan justo fringilla rhoncus. Nulla ultricies, sapien et pharetra maximus, metus mauris feugiat mi, sed tempor erat dui eleifend ligula. Vivamus ac dignissim erat. Nam non est et elit ultrices ultricies vitae sed risus. Sed suscipit felis eget sem pulvinar luctus.

In nulla risus, euismod at mauris quis, consequat vehicula justo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed diam risus, viverra luctus mi id, tincidunt sollicitudin ante. Quisque leo risus, bibendum non facilisis sed, dapibus sed sapien. Pellentesque et ligula sagittis, ornare lacus eget, pretium sem. Donec scelerisque risus condimentum elit auctor, vitae sodales dolor luctus. Vivamus eleifend tempus dui, ut euismod metus bibendum id. Aliquam faucibus iaculis lacus ut fermentum.
          </P>

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


