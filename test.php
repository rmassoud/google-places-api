<?php

require_once __DIR__ . '/vendor/autoload.php';

use \SKAgarwal\GoogleApi\PlacesApi;

$google_places = new PlacesApi("AIzaSyAocvDCgiUaD9078kspYreZf0aMQSY9A3E");
$result = $google_places->placeDetails("ChIJN8wm6giRwCwRWgXLWFD_AHA");

print_r( $result );