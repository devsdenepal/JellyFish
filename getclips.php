<?php
// Serve a clip/background track by id.
// NOTE: the referenced tracks are NOT part of this repository (copyright).
// Drop your own royalty-free audio files next to getclips.php and set the
// filenames below, or add new cases matching the <option> values in index.php.
$effect = isset($_GET['q']) ? intval($_GET['q']) : 0;

$tracks = [
    1 => 'summertime-113826.mp3',
    2 => 'lofi-study-112191.mp3',
    3 => 'background-corporate-music-113243.mp3',
];

if (isset($tracks[$effect])) {
    $file = __DIR__ . DIRECTORY_SEPARATOR . $tracks[$effect];
    if (file_exists($file)) {
        echo "<div id='bgm'><audio src='" . htmlspecialchars($tracks[$effect]) . "' autoplay></div>";
    } else {
        echo "<p class='hint'>Effect file '" . htmlspecialchars($tracks[$effect]) .
             "' not found. Add your own royalty-free track to play it.</p>";
    }
}