<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdinateursSeeder extends Seeder
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
                'name' => 'pc1',
            ],
            [
                'id' => 2,
                'name' => 'pc2',
            ],
            [
                'id' => 3,
                'name' => 'pc3',
            ],
            [
                'id' => 4,
                'name' => 'pc4',
            ],
            [
                'id' => 5,
                'name' => 'pc5',
            ],
            [
                'id' => 6,
                'name' => 'pc6',
            ],
        ];

        DB::table('ordinateurs')->insert(
            $array
        );

    }
}
