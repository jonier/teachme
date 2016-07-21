<?php

use Faker\Generator;
use TeachMe\Entities\User;

class UserTableSeeder extends BaseSeeder
{
    public function getModel()
    {
        return new User();
    }

    /**
     * @param Generator $faker
     * @param array $customValues
     * @return array
     */
    public function getDummyData( Generator $faker, array $customValues = array())
    {
        return [
            'name' => $faker->name,
            'email' => $faker->email,
            'password'  => bcrypt('secret'),
        ];
    }

    public function run()
    {
        $this->createAdmin();
        $this->createMultiple(50);
    }

    private function createAdmin()
    {
        $this->create([
            'name' => 'Jonier Murillo Hurtado',
            'email' => 'jonierm@gmail.com',
            'password' => bcrypt('admin'),
        ]);
    }
}