<?php
use App\Client;
use App\Coach;
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
         $this->call(CoachesTableSeeder::class);
         $this->call(ClientsTableSeeder::class);
         $this->call(AdminsTableSeeder::class);
         //php artisan migrate:fresh --seed
    }
}

