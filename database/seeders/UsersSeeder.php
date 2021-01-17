<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            [
                'id' => 1,
                'name' => 'Terrifiant',
                'firstname' => 'Louis I'
            ],
            [
                'id' => 2,
                'name' => 'Fatiguant',
                'firstname' => 'Louis II'
            ],
            [
                'id' => 3,
                'name' => 'Insultant',
                'firstname' => 'Louis III'
            ],
            [
                'id' => 4,
                'name' => 'Epoustouflant',
                'firstname' => 'Louis IV'
            ],
            [
                'id' => 5,
                'name' => 'Complete',
                'firstname' => 'Louis V'
            ],
        ];

        DB::table('clients')->insert(
            $array
        );

        DB::table('users')->insert(
            [
                "id" => 3,
                "name" => "admin",
                "email" => "admin@admin.re",
                "password" => bcrypt('admin'),
            ]
        );
    }
}
