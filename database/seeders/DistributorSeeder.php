<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\User;

class DistributorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->delete();

        $data = [
            'distributor_id' => '22121124', 
            'full_name' => 'Inge Sarfelt',
            'email' => 'keng.arakawa@gmail.com',
            'phone' => '027127000',
            'avatar_url' => 'https://i.pravatar.cc/150?img=12',

            'password' => bcrypt('5513thai'),
            'original_distributor' => '00000000',
            'original_distributor_name' => 'MASTER',
            'current_distributor' => '00000000',
            'current_distributor_name' => 'MASTER',
            'privileges' => 'CDV',
            'signup_at' => now(),
            'rank' => 'Snr.Exec.',
            'team' => 'World Team',
            'account_status' => "1",
        ];
        User::create($data);
        
        User::factory(99)->create();

    }
}
