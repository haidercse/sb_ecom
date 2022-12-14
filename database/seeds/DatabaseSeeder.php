<?php

use App\Models\AddBannerSlider;
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
        // $this->call(UsersTableSeeder::class);
        for ($i = 1; $i <= 10; $i++) {
            AddBannerSlider::create([
                'title' => 'add_number_one',
                'image' => '1.png',
                'button_text' => 'rnd.sobkisubazar.com',
                'priority' => $i,
                'abbroved_by_admin' => 1
            ]);
        }
    }
}
