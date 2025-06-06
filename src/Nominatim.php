<?php

namespace Banzee\Nominatim;

use Illuminate\Support\Facades\Http;

class Nominatim
{

    public function __construct() {
    }

    private function getUserAgent()
    {
        $app_name = config('app.name');
        return "{$app_name} - Banzee Nominatim";
    }

    public function search(string $address, bool $polygon = false): array
    { 
        $response = Http::withHeaders(['User-Agent' => $this->getUserAgent()])->get("https://nominatim.openstreetmap.org/search.php", [
            'q' => $address,
            'polygon_geojson' => $polygon,
            'format' => 'json'
        ]);
        $data = $response->json();
        return ($data) ?? [];
    }
}
