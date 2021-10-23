const app = new Vue({
    el: '#root',
    data: {
        dataBases: null
    },
    created() {
        axios.get('http://localhost/php-ajax-dischi/api/index.php')
        .then((response) => {
            this.dataBases = response.data;
        })
        .catch(function(error) {
            console.log(error);
        })
    }
});