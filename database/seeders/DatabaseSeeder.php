<?php

namespace Database\Seeders;

use App\Models\ClubData;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $clubData = [
            // [   // Merr
            //     'club_id' => '2',
            //     'club_email' => 'cs.urbanfitgwmerr@gmail.com',
            //     'nowa' => '628113343168',
            //     'an_rek' => 'Valdixon Signature Management',
            //     'bca' => '0885-806-061',
            //     'mandiri' => '140-00-697-91-979',
                
            // ],
            [   // Marvell
                'club_id' => '3',
                'club_email' => 'cs.urbancrossfitmarvell@gmail.com',
                'nowa' => '628113443168',
                'an_rek' => 'Urbanfit Valdixon Indonesia',
                'bca' => '889-901-979',
                'mandiri' => '140-0000-221-979',
                
            ],
            [   // Tidar
                'club_id' => '4',
                'club_email' => 'cs.urbanathletestidar@gmail.com',
                'nowa' => '628113432168',
                'an_rek' => 'Valdixon Sukses Abadi',
                'bca' => '0885-856-808',
                'mandiri' => '140-00-777-91-979',
                
            ],
            [   // Lenmarc
                'club_id' => '5', 
                'club_email' => 'cs.urbanathleteslenmarc@gmail.com',
                'nowa' => '628113302168',
                'an_rek' => 'VALDIXON SUKSES BERSAMA',
                'bca' => '258-88319-79',
                'mandiri' => '140-00-8777-1979',
                
            ],
        ];
        foreach($clubData as $data) {
            ClubData::create($data);
        }
    }
}
