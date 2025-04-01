<?php

namespace Banzee\Nominatim;

use Illuminate\Support\Facades\Http;

class NominatimService
{

    public function __construct() {

        die('NominatimService');

    }

    public function getSearch(string $address): array
    {
        $response = Http::get("https://nominatim.openstreetmap.org/search.php", [
            'q' => $address,
            'format' => 'json'
        ]);

        $data = $response->json();

        return ($data) ?? [];
    }
}
