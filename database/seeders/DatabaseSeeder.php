<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Member;
use App\Models\Setting;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => '管理員',
            'email' => 'admin@admin.com',
            'password' => Hash::make('Qq123456'),
            'is_admin' => true,
        ]);

        Member::factory()->create([
            'name' => '小編',
            'email' => 'renfu.her@gmail.com',
            'password' => Hash::make('Qq123456'),
            'is_active' => true,
            'gender' => 1,
            'agree' => 1
        ]);

        Setting::create([
            'key' => 'shipping_fee',
            'value' => 100,
            'description' => '宅配運費'
        ]);

        Setting::create([
            'key' => '711_shipping_fee',
            'value' => 80,
            'description' => '7-11 店到店運費'
        ]);

        Setting::create([
            'key' => 'family_shipping_fee',
            'value' => 80,
            'description' => '全家店到店運費'
        ]);
    }
}
