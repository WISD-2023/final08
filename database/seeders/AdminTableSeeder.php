<?php

namespace Database\Seeders;

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
    public function run()
    {
        User::factory()->create([
            'name' => 'seller',
            'email' => 'seller@gmail.com',
            'password' => 'password',
            'sex' => '男',
            'birthday' => '2023/11/11',
            'phone' => '0987654321',
            'address' => 'Taoyuan',
        ])->each(function ($user) {
            // 創建相對應的管理員資料
            Seller::create([
                'user_id' => $user->id,
                'status' => 3, // 預設賣家為尚未審核
            ]);
        });    }
}
