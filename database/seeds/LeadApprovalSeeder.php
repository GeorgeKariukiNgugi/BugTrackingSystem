<?php

use App\LeadApproval;
use Illuminate\Database\Seeder;

class LeadApprovalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(LeadApproval::class, 10)->create();
    }
}