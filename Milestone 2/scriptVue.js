new Vue({
    el: "#vueRoot",
    data: {
        albumsList: []
    },
    mounted()
    {
        axios.get("http://localhost:80/php-ajax-dischi/api/albums.php").then(resp =>
        {
            this.albumsList = resp.data;
        });
    },
});