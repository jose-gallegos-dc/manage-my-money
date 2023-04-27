<?php

namespace Database\Seeders;

use App\Models\FinancialActivity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FinancialActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FinancialActivity::insert([
            [
                'account_id' => 1,
                'type_financial_activity' => 'saving'
            ],
            [
                'account_id' => 2,
                'type_financial_activity' => 'spending'
            ],
        ]);
    }
}
