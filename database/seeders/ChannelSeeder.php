<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChannelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Laravel Channel Seeder
        $laravelChannel = \App\Models\Channel::create([
            'name' => 'Laravel',
            'channel_type' => 'public-group',
        ]);
        $laravelChannel->users()->attach(\App\Models\User::first()->id, ['role' => 'owner']);

        // Tailwind CSS Channel Seeder
        $tailwindChannel = \App\Models\Channel::create([
            'name' => 'Tailwind CSS',
            'channel_type' => 'public-group',
        ]);
        $tailwindChannel->users()->attach(\App\Models\User::first()->id, ['role'=> 'owner']);
    }
}
