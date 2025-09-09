<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Masjid;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Buat Roles
        $this->command->info('Creating roles...');
        
        Role::firstOrCreate(['name' => 'superadmin']);
        Role::firstOrCreate(['name' => 'admin']);
        
        $this->command->info('✅ Roles created successfully!');
        
        // 2. Buat Super Admin Default
        $this->command->info('Creating default Super Admin...');
        
        $superadmin = User::firstOrCreate(
            ['email' => 'superadmin@masjid.com'],
            [
                'name' => 'Super Administrator',
                'password' => Hash::make('password123'),
                'masjid_id' => null,
                'email_verified_at' => now(),
            ]
        );
        
        // Assign role superadmin
        if (!$superadmin->hasRole('superadmin')) {
            $superadmin->assignRole('superadmin');
        }
        
        $this->command->info('✅ Super Admin created successfully!');
        $this->command->warn('📧 Email: superadmin@masjid.com');
        $this->command->warn('🔑 Password: password123');
        
        // 3. Buat Sample Data (Opsional)
        if ($this->command->confirm('Do you want to create sample data (masjids & admins)?', true)) {
            $this->createSampleData();
        }
        
        $this->command->info('🎉 Database setup completed!');
        $this->command->line('');
        $this->command->line('🚀 You can now login with:');
        $this->command->line('   Email: superadmin@masjid.com');
        $this->command->line('   Password: password123');
    }
    
    private function createSampleData()
    {
        $this->command->info('Creating sample masjids...');
        
        // Buat beberapa masjid sample
        $masjids = [
            [
                'nama' => 'Masjid Al-Ikhlas',
                'alamat' => 'Jl. Merdeka No. 123, Jakarta Pusat'
            ],
            [
                'nama' => 'Masjid Ar-Rahman',
                'alamat' => 'Jl. Sudirman No. 456, Jakarta Selatan'
            ],
            [
                'nama' => 'Masjid An-Nur',
                'alamat' => 'Jl. Thamrin No. 789, Jakarta Utara'
            ]
        ];
        
        foreach ($masjids as $masjidData) {
            Masjid::firstOrCreate(['nama' => $masjidData['nama']], $masjidData);
        }
        
        $this->command->info('Creating sample admin users...');
        
        // Buat admin untuk setiap masjid
        $masjidList = Masjid::all();
        
        foreach ($masjidList as $index => $masjid) {
            $adminEmail = 'admin' . ($index + 1) . '@masjid.com';
            
            $admin = User::firstOrCreate(
                ['email' => $adminEmail],
                [
                    'name' => 'Admin ' . $masjid->nama,
                    'password' => Hash::make('password123'),
                    'masjid_id' => $masjid->id,
                    'email_verified_at' => now(),
                ]
            );
            
            // Assign role admin
            if (!$admin->hasRole('admin')) {
                $admin->assignRole('admin');
            }
        }
        
        $this->command->info('✅ Sample data created successfully!');
        $this->command->line('');
        $this->command->table(
            ['Email', 'Password', 'Role', 'Masjid'],
            [
                ['superadmin@masjid.com', 'password123', 'Super Admin', '-'],
                ['admin1@masjid.com', 'password123', 'Admin', 'Masjid Al-Ikhlas'],
                ['admin2@masjid.com', 'password123', 'Admin', 'Masjid Ar-Rahman'],
                ['admin3@masjid.com', 'password123', 'Admin', 'Masjid An-Nur'],
            ]
        );
    }
}