<?php

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
        /*factory(App\User::class, 5)->create()->each(function($user){
            $user->save();
        });*/

        $this->call([
            UserSeeder::class,
            CategoriaSeeder::class,
            CursoSeeder::class,
            ProductoSeeder::class,
        ]);
    }
}
