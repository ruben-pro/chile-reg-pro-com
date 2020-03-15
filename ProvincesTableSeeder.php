<?php
use App\Models\Province;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Province::truncate();
        Schema::enableForeignKeyConstraints();
        Province::insert([
            ['name'=>'Arica','region_id'=>1],
            ['name'=>'Parinacota','region_id'=>1],
            ['name'=>'Iquique','region_id'=>2],
            ['name'=>'El Tamarugal','region_id'=>2],
            ['name'=>'Tocopilla','region_id'=>3],
            ['name'=>'El Loa','region_id'=>3],
            ['name'=>'Antofagasta','region_id'=>3],
            ['name'=>'Chañaral','region_id'=>4],
            ['name'=>'Copiapó','region_id'=>4],
            ['name'=>'Huasco','region_id'=>4],
            ['name'=>'Elqui','region_id'=>5],
            ['name'=>'Limarí','region_id'=>5],
            ['name'=>'Choapa','region_id'=>5],
            ['name'=>'Petorca','region_id'=>6],
            ['name'=>'Los Andes','region_id'=>6],
            ['name'=>'San Felipe de Aconcagua','region_id'=>6],
            ['name'=>'Quillota','region_id'=>6],
            ['name'=>'Valparaiso','region_id'=>6],
            ['name'=>'San Antonio','region_id'=>6],
            ['name'=>'Isla de Pascua','region_id'=>6],
            ['name'=>'Marga Marga','region_id'=>6],
            ['name'=>'Chacabuco','region_id'=>7],
            ['name'=>'Santiago','region_id'=>7],
            ['name'=>'Cordillera','region_id'=>7],
            ['name'=>'Maipo','region_id'=>7],
            ['name'=>'Melipilla','region_id'=>7],
            ['name'=>'Talagante','region_id'=>7],
            ['name'=>'Cachapoal','region_id'=>8],
            ['name'=>'Colchagua','region_id'=>8],
            ['name'=>'Cardenal Caro','region_id'=>8],
            ['name'=>'Curicó','region_id'=>9],
            ['name'=>'Talca','region_id'=>9],
            ['name'=>'Linares','region_id'=>9],
            ['name'=>'Cauquenes','region_id'=>9],
            ['name'=>'Diguillín','region'=>10],
            ['name'=>'Itata','region'=>10],
            ['name'=>'Punilla','region'=>10],
            ['name'=>'Bio Bío','region'=>11],
            ['name'=>'Concepción','region'=>11],
            ['name'=>'Arauco','region'=>11],
            ['name'=>'Malleco','region'=>12],
            ['name'=>'Cautín','region'=>12],
            ['name'=>'Valdivia','region'=>13],
            ['name'=>'Ranco','region'=>13],
            ['name'=>'Osorno','region'=>14],
            ['name'=>'Llanquihue','region'=>14],
            ['name'=>'Chiloé','region'=>14],
            ['name'=>'Palena','region'=>14],
            ['name'=>'Coyhaique','region'=>15],
            ['name'=>'Aysén','region'=>15],
            ['name'=>'General Carrera','region'=>15],
            ['name'=>'Capitán Prat','region'=>15],
            ['name'=>'Última Esperanza','region'=>16],
            ['name'=>'Magallanes','region'=>16],
            ['name'=>'Tierra del Fuego','region'=>16],
            ['name'=>'Antártica Chilena','region'=>16]
        ]);
    }
}
