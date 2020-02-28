<?php

use App\FirstLineSupport;
use Illuminate\Database\Seeder;

class FirstLineSupportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(FirstLineSupport::class, 10)->create();
    }
}