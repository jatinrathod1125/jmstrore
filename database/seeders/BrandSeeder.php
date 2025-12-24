<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BrandSeeder extends Seeder
{
   

public function run(): void
{
    $brands = [
        'Puma',
        'Nike',
        'Adidas',
        'Reebok',
        'Under Armour',
        'Fila',
        'Asics',
        'New Balance',
        'Skechers',
        'Converse',
        'Vans',
        'Jordan',
        'Columbia',
        'The North Face',
        'Timberland',
        'Lee',
        'Levis',
        'Wrangler',
        'Diesel',
        'Calvin Klein',
        'Tommy Hilfiger',
        'Lacoste',
        'Hugo Boss',
        'Armani',
        'Gucci',
        'Prada',
        'Versace',
        'Balenciaga',
        'Zara',
        'H&M',
    ];

    $translations = [
        'en' => fn ($name) => [
            'name' => $name,
            'description' => 'A globally recognized brand known for quality, innovation, and modern design.',
        ],
        'de' => fn ($name) => [
            'name' => $name,
            'description' => 'Eine weltweit bekannte Marke, die für Qualität, Innovation und modernes Design steht.',
        ],
        'es' => fn ($name) => [
            'name' => $name,
            'description' => 'Una marca reconocida a nivel mundial por su calidad, innovación y diseño moderno.',
        ],
        'fr' => fn ($name) => [
            'name' => $name,
            'description' => 'Une marque mondialement reconnue pour sa qualité, son innovation et son design moderne.',
        ],
    ];

    foreach ($brands as $brandName) {

        $brandId = DB::table('brands')->insertGetId([
            'slug' => Str::slug($brandName),
            'status' => 'active',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        foreach ($translations as $locale => $translator) {

            $data = $translator($brandName);

            DB::table('brand_translations')->insert([
                'brand_id' => $brandId,
                'locale' => $locale,
                'name' => $data['name'],
                'description' => $data['description'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

}
