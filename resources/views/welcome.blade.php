<!DOCTYPE html>
<html lang="it">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
          integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
          crossorigin="anonymous"/>
    <!-- JQuery cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
            integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
            crossorigin="anonymous"></script>
    <!-- Google fonts cdn -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!-- My custom style -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta charset="UTF-8">
    <title>laravel-api</title>
</head>
<body>

<div id="root">
    <h1>Current cat breeds around the world</h1>
    <p>@{{ error }}</p>
    <div v-if="cats.length > 0" class="container">

        <div v-for="cat in cats" class="card">
            <div><span class="breed-title">Breed:</span><span class="breed-cont">@{{cat.breed}}</span></div>
            <div><span class="end-title">Endangered:</span><span :class="(cat.endangered == 1 ) ? 'end-cont endangered' : 'end-cont'">@{{(cat.endangered == 1) ? 'Yes':'No'}}</span></div>
            <div><span class="pop-title">Population:</span><span class="pop-cont">@{{ cat.population }}</span></div>
            <div><span class="area-title">Area:</span><span class="area-cont">@{{ cat.continent }}</span></div>
        </div>
    </div>
</div>

<!-- axios -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"
        integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ=="
        crossorigin="anonymous"></script>
<!-- Vue cdn development -->
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
<!-- My custom JS script -->
<script src="{{asset('js/app.js')}}"></script>
</body>
<!-- laravel-api - 08/06/21
 Author: lorenzobernini -->
</html>
