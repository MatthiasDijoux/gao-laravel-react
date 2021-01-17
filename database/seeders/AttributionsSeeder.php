<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttributionsSeeder extends Seeder
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
                'id_client' => 1,
                'id_ordinateur' => 1,
                'horaire' => '8',
                'date' => '2020-10-27',

            ],
            [
                'id_client' => 2,
                'id_ordinateur' => 1,
                'horaire' => '10',
                'date' => '2020-10-28',
            ],
            [
                'id_client' => 3,
                'id_ordinateur' => 4,
                'horaire' => '14',
                'date' => '2020-10-30',
            ],
            [
                'id_client' => 4,
                'id_ordinateur' => 3,
                'horaire' => '14',
                'date' => '2020-10-30',
            ],

        ];

        DB::table('attributions')->insert($array);
    }
}
