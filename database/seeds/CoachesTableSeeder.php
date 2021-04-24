<?php
use App\Coach;
use Illuminate\Database\Seeder;

class CoachesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Coach::class, 10)->create();
    }
}
