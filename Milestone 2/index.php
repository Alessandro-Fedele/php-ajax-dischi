<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <link rel="stylesheet" href="../style/style.css">
    <title>Albums_AJAX_VUE</title>
</head>

<body>
    <header>
        <div class="my-nav">
            <img class="logo" src="../img/spotify-logo-png.daf13776.png" alt="logo" />
        </div>
    </header>
    <main id="vueRoot">
        <div class="container p-0">
            <div class="row row-cols-5 g-4">
                <div class="col" v-for="album, i in albumsList" :key="i">
                    <div class="card">
                        <img :src="album.poster" class="card-img-top" :alt="album.title" />
                        <div class="card-body">
                            <h4 class="card-title">{{album.title}}</h4>
                            <p class="card-text">{{album.author}}</p>
                            <p class="card-text">{{album.year}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer></footer>
    <script src="scriptVue.js"></script>
</body>

</html>