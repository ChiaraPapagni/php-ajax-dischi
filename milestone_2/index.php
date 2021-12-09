<?php require __DIR__ . '/layouts/head.php'; ?>

    <div id="app">

        <main id="site_main">
            <div class="filter d-flex justify-content-center my-4">
      
                <div class="select">
                    <p>Filter by genre:</p>
                    <select
                        class="form-select m-auto"
                        v-model="genresList"
                        @change="filterGenre()"
                        >
                    <option selected value="All">All</option>
                    <option v-for="genre in genresList" :value="genre" >{{genre}}</option>
                    </select>
                </div>
                <!-- /.select_genre -->

                <div class="select">
                    <p>Filter by author:</p>
                    <select
                        class="form-select m-auto"
                        v-model="artistsList"
                        @change="filterArtist()"
                        >
                    <option selected value="">All</option>
                    <option v-for="author in artistsList" :value="author" >{{author}}</option>
                    </select>
                </div>
                <!-- /.select_artist -->
            </div>
            <!-- /.filter -->


            <div class="d-flex justify-content-center flex-wrap" >
                <div v-for="album in getFilteredAlbums">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="card text-center m-2 rounded-0">
                                <img :src="album.poster" :alt="album.title" class="img-fluid" />
                                <h4 class="text-uppercase my-3">{{ album.title }}</h4>
                                <p class="py-0 my-0">{{ album.author }}</p>
                                <p class="py-0 my-0">{{ album.year }}</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.cards -->
        </main>
        <!-- /#site_main -->
        
    </div>

<?php require __DIR__ . '/layouts/footer.php'; ?>
