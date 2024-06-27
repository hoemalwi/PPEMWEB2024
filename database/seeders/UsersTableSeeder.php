<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create 10 users using the factory
        User::factory()->count(10)->create();

        // Create a specific user
        User::create([
            'name' => 'Coba User',
            'email' => 'coba@test.com',
            'password' => Hash::make('passwordcoba'),
        ]);
    }
}
