<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Profession;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // $profession = DB::select('SELECT id FROM professions WHERE title = "Back-end developer"');

        $profession_id = Profession::where('title', 'Back-end developer')
            ->value('id');
        
        factory(User::class)->create([
            'name' => 'John Doe',
            'email' => 'johndoe@email.com',
            'password' => bcrypt('laravel'),
            'profession_id' => $profession_id,
            'is_admin' => true,
        ]);

        factory(User::class)->create([
            'profession_id' => $profession_id,
        ]);

        factory(User::class, 48)->create();

    }
}
