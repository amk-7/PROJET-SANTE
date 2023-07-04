<?php

namespace Database\Seeders;

use App\Models\Personnel;
use App\Models\User;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'profile_file_path' => '',
            'lastname' => 'KONDI',
            'firstname' => 'Abdoul Malikl',
            'contact' => '93561240',
            'enable' => true,
            'email' => 'abdoulmalikondi8@gmail.com',
            'password' => '123456789',
        ]);

        Personnel::create([
            'user_id' => $user->user_id,
        ]);
    }
}
