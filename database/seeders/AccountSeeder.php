<?php

namespace Database\Seeders;

use App\Models\Account;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Account::insert([
            [
                'user_id' => 1,
                'current_saving' => 0.00,
                'previous_saving' => 0.00,
                'current_balance' => 0.00,
                'previous_balance' => 00.0,
                'currency' => 'mx',
            ],
            [
                'user_id' => 2,
                'current_saving' => 0.00,
                'previous_saving' => 0.00,
                'current_balance' => 0.00,
                'previous_balance' => 00.0,
                'currency' => 'usd',
            ],
        ]);
    }
}
