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
            'html' => '<h1>Rich Content 1</h1><p>This is a rich content</p>',
        ]);

        RichContent::factory()->create([
            'uuid' => '0111cbfb-8dbb-4bdf-8286-2f5fd886e7da',
            'html' => '<h1>Rich Content 2</h1><p>This is a rich content</p>',
        ]);

        RichContent::factory()->create([
            'uuid' => 'd4f4426f-b24e-46a7-a431-9fae12fd2d9e',
            'html' => '<h1>Rich Content 3</h1><p>This is a rich content</p>',
        ]);

        RichContent::factory()->create([
            'uuid' => '35897af6-090d-4ece-aadd-b0a48a09456f',
            'html' => '<h1>Rich Content 4</h1><p>This is a rich content</p>',
        ]);

        RichContent::factory()->create([
            'uuid' => 'f55b72ab-cb5a-4a76-9361-edf3e59f7dd9',
            'html' => '<h1>Rich Content 5</h1><p>This is a rich content</p>',
        ]);

        RichContent::factory()->create([
            'uuid' => 'a4c20082-a840-49bb-87d2-d50cf1ecca7b',
            'html' => '<h1>Rich Content 6</h1><p>This is a rich content</p>',
        ]);
    }
}
