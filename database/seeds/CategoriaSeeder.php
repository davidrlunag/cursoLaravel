<?php

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Categoria::class, 5)->create()->each(function($cat){
            $cat->cursos()->save(factory(App\Curso::class)->make());
           });
    }
}
