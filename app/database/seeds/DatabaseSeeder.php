<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('CreateUser');
	}

}

class CreateUser extends Seeder {
	public function run()
    {
        DB::table('users')->insert(array(
          'username' => 'admin',
          'email' => 'admin@admin.com',
          'password' => Hash::make('password'),
		  'created_at' => date('Y-m-d H:i:s'),
		  'updated_at' => date('Y-m-d H:i:s')
          ));
    }	
}