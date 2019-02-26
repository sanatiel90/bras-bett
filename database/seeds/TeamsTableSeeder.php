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
            ['name'=> 'Atlético-MG', 'short_name' => 'ATM', 'img_name' => 'escudo-atletico-mg', 'state' => 'MG'  ],
            ['name'=> 'Athletico-PR', 'short_name' => 'ATP', 'img_name' => 'escudo-atletico-pr', 'state' => 'PR'  ],
            ['name'=> 'Avaí', 'short_name' => 'AVA', 'img_name' => 'escudo-avai', 'state' => 'SC'  ],
            ['name'=> 'Bahia', 'short_name' => 'BAH', 'img_name' => 'escudo-bahia', 'state' => 'BA'  ],
            ['name'=> 'Botafogo', 'short_name' => 'BOT', 'img_name' => 'escudo-botafogo', 'state' => 'RJ'  ],
            ['name'=> 'Ceará', 'short_name' => 'CEA', 'img_name' => 'escudo-ceara', 'state' => 'CE'  ],
            ['name'=> 'Chapecoense', 'short_name' => 'CHA', 'img_name' => 'escudo-chapecoense', 'state' => 'SC'  ],
            ['name'=> 'Corinthians', 'short_name' => 'COR', 'img_name' => 'escudo-corinthians', 'state' => 'SP'  ],
            ['name'=> 'Cruzeiro', 'short_name' => 'CRU', 'img_name' => 'escudo-cruzeiro', 'state' => 'MG'  ],
            ['name'=> 'CSA', 'short_name' => 'CSA', 'img_name' => 'escudo-csa', 'state' => 'AL'  ],
            ['name'=> 'Flamengo', 'short_name' => 'FLA', 'img_name' => 'escudo-flamengo', 'state' => 'RJ'  ],
            ['name'=> 'Fluminense', 'short_name' => 'FLU', 'img_name' => 'escudo-fluminense', 'state' => 'RJ'  ],
            ['name'=> 'Fortaleza', 'short_name' => 'FOR', 'img_name' => 'escudo-fortaleza', 'state' => 'CE'  ],
            ['name'=> 'Goiás', 'short_name' => 'GOI', 'img_name' => 'escudo-goias', 'state' => 'GO'  ],
            ['name'=> 'Grêmio', 'short_name' => 'GRE', 'img_name' => 'escudo-gremio', 'state' => 'RS'  ],
            ['name'=> 'Internacional', 'short_name' => 'INT', 'img_name' => 'escudo-internacional', 'state' => 'RS'  ],
            ['name'=> 'Palmeiras', 'short_name' => 'PAL', 'img_name' => 'escudo-palmeiras', 'state' => 'SP'  ],
            ['name'=> 'Santos', 'short_name' => 'SAN', 'img_name' => 'escudo-santos', 'state' => 'SP'  ],
            ['name'=> 'São Paulo', 'short_name' => 'SAO', 'img_name' => 'escudo-sao-paulo', 'state' => 'SP'  ],
            ['name'=> 'Vasco', 'short_name' => 'VAS', 'img_name' => 'escudo-vasco', 'state' => 'RJ'  ],
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
            ['name' => 'Rodada 2', 'name_ord' => '2º Rodada', 'number' => '2' ],
            ['name' => 'Rodada 3', 'name_ord' => '3º Rodada', 'number' => '3' ],
            ['name' => 'Rodada 4', 'name_ord' => '4º Rodada', 'number' => '4' ],
            ['name' => 'Rodada 5', 'name_ord' => '5º Rodada', 'number' => '5' ],
            ['name' => 'Rodada 6', 'name_ord' => '6º Rodada', 'number' => '6' ],
            ['name' => 'Rodada 7', 'name_ord' => '7º Rodada', 'number' => '7' ],
            ['name' => 'Rodada 8', 'name_ord' => '8º Rodada', 'number' => '8' ],
            ['name' => 'Rodada 9', 'name_ord' => '9º Rodada', 'number' => '9' ],
            ['name' => 'Rodada 10', 'name_ord' => '10º Rodada', 'number' => '10' ],
            ['name' => 'Rodada 11', 'name_ord' => '11º Rodada', 'number' => '11' ],
            ['name' => 'Rodada 12', 'name_ord' => '12º Rodada', 'number' => '12' ],
            ['name' => 'Rodada 13', 'name_ord' => '13º Rodada', 'number' => '13' ],
            ['name' => 'Rodada 14', 'name_ord' => '14º Rodada', 'number' => '14' ],
            ['name' => 'Rodada 15', 'name_ord' => '15º Rodada', 'number' => '15' ],
            ['name' => 'Rodada 16', 'name_ord' => '16º Rodada', 'number' => '16' ],
            ['name' => 'Rodada 17', 'name_ord' => '17º Rodada', 'number' => '17' ],
            ['name' => 'Rodada 18', 'name_ord' => '18º Rodada', 'number' => '18' ],
            ['name' => 'Rodada 19', 'name_ord' => '19º Rodada', 'number' => '19' ],
            ['name' => 'Rodada 20', 'name_ord' => '20º Rodada', 'number' => '20' ],
            ['name' => 'Rodada 21', 'name_ord' => '21º Rodada', 'number' => '21' ],
            ['name' => 'Rodada 22', 'name_ord' => '22º Rodada', 'number' => '22' ],
            ['name' => 'Rodada 23', 'name_ord' => '23º Rodada', 'number' => '23' ],
            ['name' => 'Rodada 24', 'name_ord' => '24º Rodada', 'number' => '24' ],
            ['name' => 'Rodada 25', 'name_ord' => '25º Rodada', 'number' => '25' ],
            ['name' => 'Rodada 26', 'name_ord' => '26º Rodada', 'number' => '26' ],
            ['name' => 'Rodada 27', 'name_ord' => '27º Rodada', 'number' => '27' ],
            ['name' => 'Rodada 28', 'name_ord' => '28º Rodada', 'number' => '28' ],
            ['name' => 'Rodada 29', 'name_ord' => '29º Rodada', 'number' => '29' ],
            ['name' => 'Rodada 30', 'name_ord' => '30º Rodada', 'number' => '30' ],
            ['name' => 'Rodada 31', 'name_ord' => '31º Rodada', 'number' => '31' ],
            ['name' => 'Rodada 32', 'name_ord' => '32º Rodada', 'number' => '32' ],
            ['name' => 'Rodada 33', 'name_ord' => '33º Rodada', 'number' => '33' ],
            ['name' => 'Rodada 34', 'name_ord' => '34º Rodada', 'number' => '34' ],
            ['name' => 'Rodada 35', 'name_ord' => '35º Rodada', 'number' => '35' ],
            ['name' => 'Rodada 36', 'name_ord' => '36º Rodada', 'number' => '36' ],
            ['name' => 'Rodada 37', 'name_ord' => '37º Rodada', 'number' => '37' ],
            ['name' => 'Rodada 38', 'name_ord' => '38º Rodada', 'number' => '38' ],
           
        ];
        DB::table('rodadas')->insert($rodadas);
    }
}
