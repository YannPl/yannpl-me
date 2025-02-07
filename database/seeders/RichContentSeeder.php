<?php

namespace Database\Seeders;

use App\Models\RichContent;
use Illuminate\Database\Seeder;

class RichContentSeeder extends Seeder
{
    public function run(): void
    {
        RichContent::factory()->create([
            'uuid' => 'b1b9b3b0-0b3b-4b3b-8b3b-0b3b3b3b3b3b',
            'html' => '<h1>Rich Content</h1><p>This is a rich content</p>',
        ]);
    }
}
