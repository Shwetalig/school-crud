<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SchoolSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i = 1; $i <= 20; $i++) {
            $this->db->table('schools')->insert([
                'school_name' => $faker->company,
                'contact_person' => $faker->name,
                'email' => $faker->email,
                'num_students' => $faker->numberBetween(50, 2000),
                'status' => $faker->randomElement(['active', 'inactive']),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
    }
}

