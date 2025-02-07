<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    public function run(): void
    {
        Tag::factory()->create([
            'name' => 'Laravel',
            'slug' => 'laravel',
        ]);
        Tag::factory()->create([
            'name' => 'Vue.js',
            'slug' => 'vue-js',
        ]);
        Tag::factory()->create([
            'name' => 'React.js',
            'slug' => 'react-js',
        ]);
        Tag::factory()->create([
            'name' => 'Node.js',
            'slug' => 'node-js',
        ]);
    }
}
