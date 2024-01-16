<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => '1',
            'email' => '1@1',
            'password' => 'password',
        ])->each(function ($user) {
            // 創建相對應的管理員資料
            Admin::create([
                'user_id' => $user->id,
            ]);
        });
    }
}
