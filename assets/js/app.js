const app = new Vue({
    el: '#app',
    data: {
        albums: [],
        selectedGenre: "",
        genresList: [],
        selectedArtist: "",
        artistsList: [],
    },
    mounted() {
        axios
            .get('./api/albums.php')
            .then(response => {
                this.albums = response.data;
                response.data.forEach((album) => {
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
        filterGenre(value) {
            this.selectedGenre = value;
        },
        filterArtist(value) {
            this.selectedArtist = value;
        },
    },
    computed: {
        getFilteredAlbums() {
            if (this.selectedGenre === "" && this.selectedArtist) {
                return this.albums
            } else {
                var filtered = this.albums.filter((element) => {
                    return (
                        element.genre.includes(this.selectedGenre) &&
                        element.author.includes(this.selectedArtist)
                    );
                })
                return filtered
            }
        }
        /* return this.albums.filter((element) => {
            return (
                element.genre.includes(this.selectedGenre) &&
                element.author.includes(this.selectedArtist)
            );
        });
    }, */
    },
})