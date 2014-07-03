<?php
class UsersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->insert(array(
          'username' => 'admin',
          'email' => 'admin@admin.com',
          'password' => Hash::make('password')
          ));
    }

}