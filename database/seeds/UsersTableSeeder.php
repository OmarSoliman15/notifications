<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Admin::class)->create($data = [
            'name' => 'Omar Soliman',
            'email' => 'omarsolimandev@gmail.com',
        ]);

        $this->command->info("Admin information :");
        $this->command->table(['name', 'email', 'password'], [
            $data + [
                'password' => 'secret',
            ],
        ]);

        factory(\App\Models\User::class, 3)->create();
    }
}
