<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'PHP'
            ],
            [
                'name' => 'JavaScript'
            ],
            [
                'name' => 'PostgreSQL'
            ],
            [
                'name' => 'API (JSON, REST)'
            ],
        ];
        Skill::insert($data);

    }
}
