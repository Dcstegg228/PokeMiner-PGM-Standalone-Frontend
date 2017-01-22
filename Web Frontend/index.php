<?php
include('config.inc.php');
?>

<!DOCTYPE html>
<html lang="<?= $locale ?>">
<head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="PokeMap">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#3b3b3b">
    <!-- Fav- & Apple-Touch-Icons -->
    <!-- Favicon -->
    <link rel="shortcut icon" href="./static/appicons/favicon.ico"
          type="image/x-icon">
    <!-- non-retina iPhone pre iOS 7 -->
    <link rel="apple-touch-icon" href="./static/appicons/114x114.png"
          sizes="57x57">
    <!-- non-retina iPad pre iOS 7 -->
    <link rel="apple-touch-icon" href="./static/appicons/144x144.png"
          sizes="72x72">
    <!-- non-retina iPad iOS 7 -->
    <link rel="apple-touch-icon" href="./static/appicons/152x152.png"
          sizes="76x76">
    <!-- retina iPhone pre iOS 7 -->
    <link rel="apple-touch-icon" href="./static/appicons/114x114.png"
          sizes="114x114">
    <!-- retina iPhone iOS 7 -->
    <link rel="apple-touch-icon" href="./static/appicons/120x120.png"
          sizes="120x120">
    <!-- retina iPad pre iOS 7 -->
    <link rel="apple-touch-icon" href="./static/appicons/144x144.png"
          sizes="144x144">
    <!-- retina iPad iOS 7 -->
    <link rel="apple-touch-icon" href="./static/appicons/152x152.png"
          sizes="152x152">
    <!-- retina iPhone 6 iOS 7 -->
    <link rel="apple-touch-icon" href="./static/appicons/180x180.png"
          sizes="180x180">
    <link rel="stylesheet" href="./static/dist/css/app.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.css">
    <script src="./static/js/vendor/modernizr.custom.js"></script>
</head>
<body id="top">
<div class="wrapper">
    <!-- Header -->
    <header id="header">
        <a href="#nav"><span class="label">Options</span></a>

        <h1><a href="#"><?= $title ?></a></h1>
        <a href="#stats" id="statsToggle" class="statsNav" style="float: right;"><span class="label">Stats</span></a>
    </header>
    <!-- NAV -->
    <nav id="nav">
        <div id="nav-accordion">
            <h3>Marker Settings</h3>

            <div>
                <div class="form-control switch-container">
                    <h3>Pokemon</h3>

                    <div class="onoffswitch">
                        <input id="pokemon-switch" type="checkbox" name="pokemon-switch" class="onoffswitch-checkbox"
                               checked>
                        <label class="onoffswitch-label" for="pokemon-switch">
                            <span class="switch-label" data-on="On" data-off="Off"></span>
                            <span class="switch-handle"></span>
                        </label>
                    </div>
                </div>
                <div class="form-control switch-container">
                    <h3>Gyms</h3>

                    <div class="onoffswitch">
                        <input id="gyms-switch" type="checkbox" name="gyms-switch" class="onoffswitch-checkbox" checked>
                        <label class="onoffswitch-label" for="gyms-switch">
                            <span class="switch-label" data-on="On" data-off="Off"></span>
                            <span class="switch-handle"></span>
                        </label>
                    </div>
                </div>
                <div class="form-control switch-container" id="gym-sidebar-wrapper" style="display:none">
                    <h3>Use Gym Sidebar</h3>

                    <div class="onoffswitch">
                        <input id="gym-sidebar-switch" type="checkbox" name="gym-sidebar-switch"
                               class="onoffswitch-checkbox" checked>
                        <label class="onoffswitch-label" for="gym-sidebar-switch">
                            <span class="switch-label" data-on="On" data-off="Off"></span>
                            <span class="switch-handle"></span>
                        </label>
                    </div>
                </div>
                <div class="form-control switch-container">
                    <h3>Pokestops</h3>

                    <div class="onoffswitch">
                        <input id="pokestops-switch" type="checkbox" name="pokestops-switch"
                               class="onoffswitch-checkbox" checked>
                        <label class="onoffswitch-label" for="pokestops-switch">
                            <span class="switch-label" data-on="On" data-off="Off"></span>
                            <span class="switch-handle"></span>
                        </label>
                    </div>
                </div>
                <div class="form-control switch-container" id="lured-pokestops-only-wrapper" style="display:none">
                    <select name="lured-pokestops-only-switch" id="lured-pokestops-only-switch">
                        <option value="0">All</option>
                        <option value="1">Only Lured</option>
                    </select>
                </div>
                <div class="form-control switch-container">
                    <h3>Scanned Locations</h3>

                    <div class="onoffswitch">
                        <input id="scanned-switch" type="checkbox" name="scanned-switch" class="onoffswitch-checkbox">
                        <label class="onoffswitch-label" for="scanned-switch">
                            <span class="switch-label" data-on="On" data-off="Off"></span>
                            <span class="switch-handle"></span>
                        </label>
                    </div>
                </div>
                <div class="form-control switch-container">
                    <h3>Spawn Points</h3>

                    <div class="onoffswitch">
                        <input id="spawnpoints-switch" type="checkbox" name="spawnpoints-switch"
                               class="onoffswitch-checkbox">
                        <label class="onoffswitch-label" for="spawnpoints-switch">
                            <span class="switch-label" data-on="On" data-off="Off"></span>
                            <span class="switch-handle"></span>
                        </label>
                    </div>
                </div>
                <div class="form-control switch-container">
                    <h3>Ranges</h3>

                    <div class="onoffswitch">
                        <input id="ranges-switch" type="checkbox" name="ranges-switch" class="onoffswitch-checkbox">
                        <label class="onoffswitch-label" for="ranges-switch">
                            <span class="switch-label" data-on="On" data-off="Off"></span>
                            <span class="switch-handle"></span>
                        </label>
                    </div>
                </div>
                <div class="form-control">
                    <label for="exclude-pokemon">
                        <h3>Hide Pokemon</h3>

                        <div style="max-height:165px;overflow-y:auto">
                            <select id="exclude-pokemon" multiple="multiple"></select>
                        </div>
                    </label>
                </div>
                <div class="form-control">
                    <label for="excluded-rarity">
                        <h3>Hide Pokemon by Rarity</h3>

                        <div style="max-height:165px;overflow-y:auto">
                            <select id="excluded-rarity" multiple="multiple"></select>
                        </div>
                    </label>
                </div>
            </div>

            <h3>Location &amp; Search Settings</h3>

            <div>
                <div class="form-control switch-container">
                    <h3>Start map at me</h3>

                    <div class="onoffswitch">
                        <input id="start-at-user-location-switch" type="checkbox" name="start-at-user-location-switch"
                               class="onoffswitch-checkbox" checked/>
                        <label class="onoffswitch-label" for="start-at-user-location-switch">
                            <span class="switch-label" data-on="On" data-off="Off"></span>
                            <span class="switch-handle"></span>
                        </label>
                    </div>
                </div>
                <div class="form-control switch-container">
                    <h3>Follow me</h3>

                    <div class="onoffswitch">
                        <input id="follow-my-location-switch" type="checkbox" name="follow-my-location-switch"
                               class="onoffswitch-checkbox" checked/>
                        <label class="onoffswitch-label" for="follow-my-location-switch">
                            <span class="switch-label" data-on="On" data-off="Off"></span>
                            <span class="switch-handle"></span>
                        </label>
                    </div>
                </div>
            </div>

            <h3>Notification Settings</h3>

            <div>
                <div class="form-control">
                    <label for="notify-pokemon">
                        <h3>Notify of Pokemon</h3>

                        <div style="max-height:165px;overflow-y:auto">
                            <select id="notify-pokemon" multiple="multiple"></select>
                        </div>
                    </label>
                </div>
                <div class="form-control">
                    <label for="notify-rarity">
                        <h3>Notify of Rarity</h3>

                        <div style="max-height:165px;overflow-y:auto">
                            <select id="notify-rarity" multiple="multiple"></select>
                        </div>
                    </label>
                </div>
                <div class="form-control">
                    <label for="notify-perfection">
                        <h3>Notify of Perfection</h3>
                        <input id="notify-perfection" type="text" name="notify-perfection"
                               placeholder="Minimum perfection %"/>
                    </label>
                </div>
                <div class="form-control switch-container">
                    <h3>Notify with sound</h3>

                    <div class="onoffswitch">
                        <input id="sound-switch" type="checkbox" name="sound-switch" class="onoffswitch-checkbox"
                               checked>
                        <label class="onoffswitch-label" for="sound-switch">
                            <span class="switch-label" data-on="On" data-off="Off"></span>
                            <span class="switch-handle"></span>
                        </label>
                    </div>
                </div>
            </div>

            <h3>Style Settings</h3>

            <div>
                <div class="form-control switch-container">
                    <h3>Map Style</h3>
                    <select id="map-style"></select>
                </div>
                <div class="form-control switch-container">
                    <h3>Icons</h3>
                    <select name="pokemon-icons" id="pokemon-icons"></select>
                </div>
                <div class="form-control switch-container">
                    <h3>Icon Size</h3>
                    <select name="pokemon-icon-size" id="pokemon-icon-size">
                        <option value="-8">Small</option>
                        <option value="0">Normal</option>
                        <option value="10">Large</option>
                        <option value="20">X-Large</option>
                    </select>
                </div>
                <div class="form-control switch-container">
                    <h3>Gym Marker Style</h3>
                    <select name="gym-marker-style" id="gym-marker-style">
                        <option value='ingame'>In-Game</option>
                        <option value='shield'>Shield</option>
                    </select>
                </div>
            </div>
        </div>
    </nav>
    <nav id="stats">
        <div class="switch-container">
            <div class="switch-container">
                <div>
                    <center><a href="stats">Full Stats</a></center>
                </div>
            </div>
            <div class="switch-container">
                <center><h1 id="stats-ldg-label">Loading...</h1></center>
            </div>
            <div class="stats-label-container">
                <center><h1 id="stats-pkmn-label"></h1></center>
            </div>
            <div id="pokemonList" style="color: black;">
                <table id="pokemonList_table" class="display" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Icon</th>
                        <th>Name</th>
                        <th>Count</th>
                        <th>%</th>
                    </tr>
                    </thead>
                    <tbody></tbody>
                </table>
                <div id="pokeStatStatus" style="color: black;"></div>
            </div>
            <div class="stats-label-container">
                <center><h1 id="stats-gym-label"></h1></center>
            </div>
            <div id="arenaList" style="color: black;"></div>
            <div class="stats-label-container">
                <center><h1 id="stats-pkstop-label"></h1></center>
            </div>
            <div id="pokestopList" style="color: black;"></div>
        </div>
    </nav>
    <nav id="gym-details">
        <center><h1>Loading...</h1></center>
    </nav>
    <div id="map"></div>
    <div class="fab" id="scan-here" style="display:none"></div>
</div>
<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/babel-polyfill/6.9.1/polyfill.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/skel/3.0.1/skel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="./static/dist/js/app.min.js"></script>
<script src="./static/js/vendor/classie.js"></script>
<script>
    var centerLat = <?= $startingLat; ?>;
    var centerLng = <?= $startingLng; ?>;
</script>
<script src="./static/dist/js/map.common.min.js"></script>
<script src="./static/dist/js/map.min.js"></script>
<script src="./static/dist/js/stats.min.js"></script>
<script defer
        src="https://maps.googleapis.com/maps/api/js?key=<?= $gmapsKey ?>&amp;callback=initMap&amp;libraries=places,geometry"></script>
</body>
</html>
