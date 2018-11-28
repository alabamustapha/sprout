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
        $this->call(Facilities::class);
        $this->call(Designations::class);
        $this->call(Drugs::class);
        $this->call(Services::class);
        $this->call(Users::class);
    }
}
