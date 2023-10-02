<?php

$mysqli = new mysqli("localhost", "root", "", "ci_bidangumkm");

if (!$mysqli) {
    echo "Koneksi bermasalah !";
}
