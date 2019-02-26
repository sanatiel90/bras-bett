<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teams = [
            ['name'=> '', 'short_name' => '', 'img_name' => '', 'state' => ''  ],
            ['name'=> '', 'short_name' => '', 'img_name' => '', 'state' => ''  ],
            ['name'=> '', 'short_name' => '', 'img_name' => '', 'state' => ''  ],
            ['name'=> '', 'short_name' => '', 'img_name' => '', 'state' => ''  ],
            ['name'=> '', 'short_name' => '', 'img_name' => '', 'state' => ''  ],
            ['name'=> '', 'short_name' => '', 'img_name' => '', 'state' => ''  ],
            ['name'=> '', 'short_name' => '', 'img_name' => '', 'state' => ''  ],
            ['name'=> '', 'short_name' => '', 'img_name' => '', 'state' => ''  ],
            ['name'=> '', 'short_name' => '', 'img_name' => '', 'state' => ''  ],
            ['name'=> '', 'short_name' => '', 'img_name' => '', 'state' => ''  ],
            ['name'=> '', 'short_name' => '', 'img_name' => '', 'state' => ''  ],
            ['name'=> '', 'short_name' => '', 'img_name' => '', 'state' => ''  ],
            ['name'=> '', 'short_name' => '', 'img_name' => '', 'state' => ''  ],
            ['name'=> '', 'short_name' => '', 'img_name' => '', 'state' => ''  ],
            ['name'=> '', 'short_name' => '', 'img_name' => '', 'state' => ''  ],
            ['name'=> '', 'short_name' => '', 'img_name' => '', 'state' => ''  ],
            ['name'=> '', 'short_name' => '', 'img_name' => '', 'state' => ''  ],
            ['name'=> '', 'short_name' => '', 'img_name' => '', 'state' => ''  ],
            ['name'=> '', 'short_name' => '', 'img_name' => '', 'state' => ''  ],
            ['name'=> '', 'short_name' => '', 'img_name' => '', 'state' => ''  ],
        ];

        DB::table('teams')->insert($teams);

        $results = [
            ['name' => 'A jogar'],
            ['name' => 'Vitória Casa'],
            ['name' => 'Vitória Fora'],
            ['name' => 'Empate'],
        ];
        DB::table('results')->insert($results);


        $rodadas = [
            ['name' => 'Rodada 1', 'name_ord' => '1º Rodada', 'number' => '1' ],
            ['name' => '', 'name_ord' => '', 'number' => '' ],
            ['name' => '', 'name_ord' => '', 'number' => '' ],
            ['name' => '', 'name_ord' => '', 'number' => '' ],
            ['name' => '', 'name_ord' => '', 'number' => '' ],
            ['name' => '', 'name_ord' => '', 'number' => '' ],
            ['name' => '', 'name_ord' => '', 'number' => '' ],
            ['name' => '', 'name_ord' => '', 'number' => '' ],
            ['name' => '', 'name_ord' => '', 'number' => '' ],
            ['name' => '', 'name_ord' => '', 'number' => '' ],
            ['name' => '', 'name_ord' => '', 'number' => '' ],
            ['name' => '', 'name_ord' => '', 'number' => '' ],
            ['name' => '', 'name_ord' => '', 'number' => '' ],
            ['name' => '', 'name_ord' => '', 'number' => '' ],
            ['name' => '', 'name_ord' => '', 'number' => '' ],
            ['name' => '', 'name_ord' => '', 'number' => '' ],
            ['name' => '', 'name_ord' => '', 'number' => '' ],
            ['name' => '', 'name_ord' => '', 'number' => '' ],
            ['name' => '', 'name_ord' => '', 'number' => '' ],
            ['name' => '', 'name_ord' => '', 'number' => '' ],
            ['name' => '', 'name_ord' => '', 'number' => '' ],
            ['name' => '', 'name_ord' => '', 'number' => '' ],
            ['name' => '', 'name_ord' => '', 'number' => '' ],
            ['name' => '', 'name_ord' => '', 'number' => '' ],
            ['name' => '', 'name_ord' => '', 'number' => '' ],
            ['name' => '', 'name_ord' => '', 'number' => '' ],
            ['name' => '', 'name_ord' => '', 'number' => '' ],
            ['name' => '', 'name_ord' => '', 'number' => '' ],
            ['name' => '', 'name_ord' => '', 'number' => '' ],
            ['name' => '', 'name_ord' => '', 'number' => '' ],
            ['name' => '', 'name_ord' => '', 'number' => '' ],
            ['name' => '', 'name_ord' => '', 'number' => '' ],
            ['name' => '', 'name_ord' => '', 'number' => '' ],
            ['name' => '', 'name_ord' => '', 'number' => '' ],
            ['name' => '', 'name_ord' => '', 'number' => '' ],
            ['name' => '', 'name_ord' => '', 'number' => '' ],
            ['name' => '', 'name_ord' => '', 'number' => '' ],
            ['name' => '', 'name_ord' => '', 'number' => '' ],
            ['name' => '', 'name_ord' => '', 'number' => '' ],
            ['name' => '', 'name_ord' => '', 'number' => '' ],
            ['name' => '', 'name_ord' => '', 'number' => '' ],
            ['name' => '', 'name_ord' => '', 'number' => '' ],
            ['name' => '', 'name_ord' => '', 'number' => '' ],
        ];
        DB::table('rodadas')->insert($rodadas);
    }
}
