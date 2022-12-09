<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>Music Website</title>
    <style>
        .addPlaylist :hover {
            display: block
        }
    </style>
</head>
<body>
    <header>
        <div class="menu_side">
            <h1>Playlist</h1>
            <div class="playlist">
                <h4 class="active"><span></span><i class="bi bi-music-note-beamed"></i> Playlist</h4>
                <h4><span></span><i class="bi bi-music-note-beamed"></i> Last Listening</h4>
                <h4><span></span><i class="bi bi-music-note-beamed"></i> Recommended</h4>
            </div>

            <div class="menu_song">
                <li class="songItem">
                    <span>01</span>
                    <img src="img/1.jpg" alt="">
                    <h5>On My Way <br>
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="1"></i>
                </li>

                <li class="songItem">
                    <span>02</span>
                    <img src="img/2.jpg" alt="">
                    <h5>On My Way <br>
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="2"></i>
                </li>

                <li class="songItem">
                    <span>03</span>
                    <img src="img/2.jpg" alt="">
                    <h5>On My Way <br>
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="3"></i>
                </li>

                <li class="songItem">
                    <span>04</span>
                    <img src="img/2.jpg" alt="">
                    <h5>On My Way <br>
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="4"></i>
                </li>

                <li class="songItem">
                    <span>05</span>
                    <img src="img/2.jpg" alt="">
                    <h5>On My Way <br>
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="5"></i>
                </li>

                <li class="songItem">
                    <span>06</span>
                    <img src="img/2.jpg" alt="">
                    <h5>On My Way <br>
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="6"></i>
                </li>

                <li class="songItem">
                    <span>07</span>
                    <img src="img/2.jpg" alt="">
                    <h5>On My Way <br>
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="7"></i>
                </li>

                <li class="songItem">
                    <span>08</span>
                    <img src="img/2.jpg" alt="">
                    <h5>On My Way <br>
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="8"></i>
                </li>
            </div>
        </div>

        <div class="song_side">
            <nav>
                <ul>
                    <li>Discover <span></span></li>
                    <li><a href="playlistManagement.php" class="library">MY LIBRARY</a></li>
                    <li>RADIO</li>
                </ul>

                <div class="search">
                    <i class="bi bi-search"></i>
                    <input type="text" placeholder="Search Music...">
                    <div class="search_result">
                        <!-- <a href="#" class="card">
                            <img src="img/1.jpg" alt="">
                            <div class="content">
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </div>
                        </a> -->
                    </div>

                </div>

                <a style="color: white; text-decoration: none; background-color: #4c5262; padding: 8px; border-radius: 5px" href="playlistManagement.php">Playlist Management</a>

                <a style="color: white; text-decoration: none; background-color: #4c5262; padding: 8px; border-radius: 5px" href="index.php">Sign Out</a>
            </nav>

            <div class="content">
                <h1>Alen Walker-Fade</h1>
                <p>You were the shadow to my light did you feel us Another start you fade <br> Away afraid our aim is out of sight Wanna see us Alive </p>
                <div class="buttons">
                    <button>PLAY</button>
                    <button>FOLLOW</button>
                </div>
            </div>

            <div class="popular_song">
                <div class="h4">
                    <h4>Popular Song</h4>
                    <div class="btn_s">
                        <i class="bi bi-arrow-left-short" id="pop_song_left"></i>
                        <i class="bi bi-arrow-right-short" id="pop_song_right"></i>
                    </div>
                </div>

                <div class="pop_song">            
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="9"></i>
                        </div>
                        <h5>On My Way <br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="10"></i>
                        </div>
                        <h5>On My Way <br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                        <button style="" class="addPlayList">Add To Play List</button>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="11"></i>
                        </div>
                        <h5>On My Way <br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="12"></i>
                        </div>
                        <h5>On My Way <br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="13"></i>
                        </div>
                        <h5>On My Way <br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="14"></i>
                        </div>
                        <h5>On My Way <br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="15"></i>
                        </div>
                        <h5>On My Way <br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="16"></i>
                        </div>
                        <h5>On My Way <br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="17"></i>
                        </div>
                        <h5>On My Way <br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="18"></i>
                        </div>
                        <h5>On My Way <br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="19"></i>
                        </div>
                        <h5>On My Way <br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/1.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="20"></i>
                        </div>
                        <h5>On My Way <br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                </div>
            </div>

            <div class="popular_artists">
                <div class="h4">
                    <h4>Popular Artists</h4>
                    <div class="btn_s">
                        <i class="bi bi-arrow-left-short" id="pop_art_left"></i>
                        <i class="bi bi-arrow-right-short" id="pop_art_right"></i>
                    </div>
                </div>
                <div class="item">
                    <li class="artists">
                        <a href="arjit.php">
                        <img src="img/maroon5.jpg" alt="">
                        </a>
                    </li>
                    <li class="artists">
                        <img src="img/maroon5.jpg" alt="">
                    </li>
                    <li class="artists">
                        <img src="img/maroon5.jpg" alt="">
                    </li>
                    <li class="artists">
                        <img src="img/maroon5.jpg" alt="">
                    </li>
                    <li class="artists">
                        <img src="img/maroon5.jpg" alt="">
                    </li>
                    <li class="artists">
                        <img src="img/maroon5.jpg" alt="">
                    </li>
                    <li class="artists">
                        <img src="img/maroon5.jpg" alt="">
                    </li>
                    <li class="artists">
                        <img src="img/maroon5.jpg" alt="">
                    </li>
                    <li class="artists">
                        <img src="img/maroon5.jpg" alt="">
                    </li>
                    <li class="artists">
                        <img src="img/maroon5.jpg" alt="">
                    </li>
                    <li class="artists">
                        <img src="img/maroon5.jpg" alt="">
                    </li>
                    <li class="artists">
                        <img src="img/maroon5.jpg" alt="">
                    </li>
                    <li class="artists">
                        <img src="img/maroon5.jpg" alt="">
                    </li>
                    <li class="artists">
                        <img src="img/maroon5.jpg" alt="">
                    </li>
                    <li class="artists">
                        <img src="img/maroon5.jpg" alt="">
                    </li>
                    <li class="artists">
                        <img src="img/maroon5.jpg" alt="">
                    </li>
                    <li class="artists">
                        <img src="img/maroon5.jpg" alt="">
                    </li>
                    <li class="artists">
                        <img src="img/maroon5.jpg" alt="">
                    </li>
                    <li class="artists">
                        <img src="img/maroon5.jpg" alt="">
                    </li>
                    
                </div>
            </div>
        </div>

        <div class="master_play">
            <div class="wave" id="wave">
                <div class="wave1"></div>
                <div class="wave1"></div>
                <div class="wave1"></div>
            </div>
            <img src="img/34.jpg" alt="" id="poster_master_play">
            <h5 id="title">
                I Love Vietnam
                <div class="subtitle">Vietnam Number One</div>
            </h5>

            <a class="icon">
                <i class="bi shuffle bi-music-note-beamed">next</i>
                <i class="bi bi-skip-start-fill" id="back"></i>
                <i class="bi bi-play-fill" id="masterPlay"></i>
                <i class="bi bi-skip-end-fill" id="next"></i>
                <a href="" download id="download_music"><i class="bi bi-cloud-arrow-down-fill"></i></a>
            </a>

            <span id="currentStart">0:00</span>

            <div class="bar">
                <input type="range" id="seek" min="0" max="100">
                <div class="bar2" id="bar2"></div>
                <div class="dot"></div>
            </div>
            <span id="currentEnd">0:30</span>
            <div class="vol">
                <i class="bi bi-volume-up-fill" id="vol_icon"></i>
                <input type="range" min="0" max="100" id="vol">
                <div class="vol_bar"></div>
                <div class="dot" id="vol_dot"></div>
            </div>
        </div>
    </header>
    <script src="app.js"></script>
</body>
</html>