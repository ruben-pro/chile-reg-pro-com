<?php
use App\Models\Region;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Region::truncate();
        Schema::enableForeignKeyConstraints();
        Region::insert([
            ['name'=>'Arica y Parinacota','abbreviation'=>'AP','capital'=>'Arica'],
            ['name'=>'Tarapacá','abbreviation'=>'TA','capital'=>'Iquique'],
            ['name'=>'Antofagasta','abbreviation'=>'AN','capital'=>'Antofagasta'],
            ['name'=>'Atacama','abbreviation'=>'AT','capital'=>'Copiapó'],
            ['name'=>'Coquimbo','abbreviation'=>'CO','capital'=>'La Serena'],
            ['name'=>'Valparaiso','abbreviation'=>'VA','capital'=>'valparaíso'],
            ['name'=>'Metropolitana de Santiago','abbreviation'=>'RM','capital'=>'Santiago'],
            ['name'=>'Libertador General Bernardo O\'Higgins','abbreviation'=>'OH','capital'=>'Rancagua'],
            ['name'=>'Maule','abbreviation'=>'MA','capital'=>'Talca'],
            ['name'=>'Ñuble','abbreviation'=>'NB','capital'=>'Chillán'],
            ['name'=>'Biobío','abbreviation'=>'BI','capital'=>'Concepción'],
            ['name'=>'La Araucanía','abbreviation'=>'IAR','capital'=>'Temuco'],
            ['name'=>'Los Ríos','abbreviation'=>'LR','capital'=>'Valdivia'],
            ['name'=>'Los Lagos','abbreviation'=>'LL','capital'=>'Puerto Montt'],
            ['name'=>'Aysén del General Carlos Ibáñez del Campo','abbreviation'=>'AI','capital'=>'Coyhaique'],
            ['name'=>'Magallanes y de la Antártica Chilena','abbreviation'=>'MG','capital'=>'Punta Arenas']
        ]);
    }
}
