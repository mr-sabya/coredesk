<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Import the User model
use Illuminate\Support\Facades\Hash; // Import Hash facade

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define the super admin's credentials
        $superAdminEmail = env('SUPER_ADMIN_EMAIL', 'superadmin@example.com');
        $superAdminPassword = env('SUPER_ADMIN_PASSWORD', 'password'); // Consider a stronger default or prompt in production

        // Check if a super admin with this email already exists to prevent duplicates
        if (!User::where('email', $superAdminEmail)->exists()) {
            User::create([
                'name' => 'Super Admin',
                'email' => $superAdminEmail,
                'password' => Hash::make($superAdminPassword),
                'is_super_admin' => true,
                'email_verified_at' => now(), // Optionally set verified at now
            ]);

            $this->command->info('Super Admin user created successfully!');
            $this->command->info("Email: {$superAdminEmail}");
            $this->command->info("Password: {$superAdminPassword}");
        } else {
            $this->command->info('Super Admin user already exists.');
        }
    }
}