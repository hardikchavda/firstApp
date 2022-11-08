<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\userInfo;
use Database\Seeders\UserInfo as SeedersUserInfo;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // userInfo::factory(20)->create();
        $this->call([
            SeedersUserInfo::class,
        ]);
    }
}
