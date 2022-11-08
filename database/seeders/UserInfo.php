<?php

namespace Database\Seeders;

use App\Models\userInfo as ModelsUserInfo;
use Illuminate\Database\Seeder;

class UserInfo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // userInfo::factory(20)->create();
        ModelsUserInfo::factory(20)->create();
    }
}
