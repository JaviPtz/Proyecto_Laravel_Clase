<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Level;
use App\Models\Location;

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
        User::factory()->count(5)->create();
        Level::factory()->create(['nombre' => 'Plata']);
        Level::factory()->create(['nombre' => 'Oro']);
        Level::factory()->create(['nombre' => 'Bronce']);

        
        Perfil::factory()->create(['pais' => 'Perfil1','user_id' => '1']);
        Perfil::factory()->create(['pais' => 'Perfil2','user_id' => '2']);
        Perfil::factory()->create(['pais' => 'Perfil3','user_id' => '3']);
        
        /* Location::factory()->create(['nombre' => 'Ecuador']);
        Location::factory()->create(['nombre' => 'Chile']);
        Location::factory()->create(['nombre' => 'Europa']); */
        
        /* 
        \App\Models\User::factory()->count(5)->create()->each(
            function($user){
            $perfil = $user->perfil()->save(\App\Models\Perfil::factory())->make();

            $perfil->Location()->save(\App\Models\Location::factory())->make();

            $user->Group()->attach($this->array(rand(1,3)));
        }); */
    }

/*     public function array ($max){
        $values= [];

        for ($i=1;$i<$maz;$i+1 ){}
        $value [] = $i;
        return $value;
    } */
}
