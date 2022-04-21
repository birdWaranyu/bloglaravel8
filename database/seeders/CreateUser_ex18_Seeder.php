<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User_ex18;

class CreateUser_ex18_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $user_ex18 = [
            [
                'name' => 'peter',
                'email' => 'peter@test.com',
                'address' => 'Noida'
            ],
            [
                'name' => 'bruce',
                'email' => 'bruce@test.com',
                'address' => 'Delhi'
            ],
            [
                'name' => 'tony',
                'email' => 'tony@test.com',
                'address' => 'Gurgaon'
            ],
            [
                'name' => 'kelly',
                'email' => 'kelly@test.com',
                'address' => 'Hyderabed'
            ]
        ];

        foreach ($user_ex18 as $keyuser => $valueuser) {
            User_ex18::create($valueuser);
        }

    }
}
