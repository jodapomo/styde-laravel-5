<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Profession;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('professions')->insert([
        //     'title' => 'Back-end developer',
        // ]);

        Profession::create([
            'title' => 'Back-end developer',
        ]);

        Profession::create([
            'title' => 'Front-end developer',
        ]);

        Profession::create([
            'title' => 'Web designer',
        ]);

        factory(Profession::class)->times(17)->create();

    }
}
