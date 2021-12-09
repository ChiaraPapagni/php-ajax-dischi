const app = new Vue({
    el: '#app',
    data: {
        albums: null,
        selectedGenre: "",
        genresList: [],
        selectedArtist: "",
        artistsList: [],
    },
    mounted() {
        axios
            .get('./api/albums.php')
            .then(response => {
                console.log(response);
                this.albums = response.data;
                this.albums.forEach((album) => {
                    if (!this.genresList.includes(album.genre)) {
                        this.genresList.push(album.genre);
                    }

                    if (!this.artistsList.includes(album.author)) {
                        this.artistsList.push(album.author);
                    }
                });
            }).catch(error => {
                console.log(error);
            })
    },
    methods: {
        filterGenre(event) {
            this.selectedGenre = event;
        },
        filterArtist(event) {
            this.selectedArtist = event;
        },
    },
    computed: {
        getFilteredAlbums() {
            return this.albums.filter((element) => {
                return (
                    element.genre.includes(this.selectedGenre) &&
                    element.author.includes(this.selectedArtist)
                );
            });
        },
    },
})