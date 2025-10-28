<?php

namespace Database\Seeders;

use App\Models\Core\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Plan::insert([
            [
                'name' => 'Starter',
                'price' => 0,
                'duration_days' => 30,
                'features' => json_encode(['5 employees', '1 warehouse', 'Basic reports']),
                'is_active' => true,
            ],
            [
                'name' => 'Pro',
                'price' => 29.99,
                'duration_days' => 30,
                'features' => json_encode(['50 employees', '5 warehouses', 'Advanced reports']),
                'is_active' => true,
            ],
            [
                'name' => 'Enterprise',
                'price' => 99.99,
                'duration_days' => 30,
                'features' => json_encode(['Unlimited employees', 'Unlimited warehouses', 'Custom domain']),
                'is_active' => true,
            ],
        ]);
    }
}
