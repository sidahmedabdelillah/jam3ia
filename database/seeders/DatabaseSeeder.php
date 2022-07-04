<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(WilayasTableSeeder::class);
        $this->call(CommunesTableSeeder::class);

        DB::statement(`INSERT INTO jamia.students (id, family_name, first_name, sex, scolaire, email, parent, parent_email, num_parent, commune_id, quran, health, discription, created_at, updated_at, birth_day, birth_commune, address, skills, hobies, sonna) VALUES (1, 'بت تقار', 'سيد احمد', 'm', 'الخامسة', 'abdoubentegar@gmail.com', 'عثمان بن تقار', 'AthmaneBentegar@gmail.com', '0772790732', 1044, '8', 'صحة جيدة', 'حسن السلوك', '2022-06-28 17:04:49', '2022-07-04 16:31:26', '2001-03-12', 1044, 'معسكر', 'الرسم
        السباحة', null, 12);
        `);
    }
}
