<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\LazyCollection;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (LazyCollection::range(1, 200) as $id) {
            User::factory()->create([
                'email' => "user$id@example.com",
                'name' => "user$id",
            ]);
        }
    }
}
