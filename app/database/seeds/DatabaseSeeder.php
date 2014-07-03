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

		$this->call('UsersTableSeeder');
		$this->call('ArticlesTableSeeder');
		$this->call('CategoriesTableSeeder');
		$this->call('NavTableSeeder');
		$this->call('PagesTableSeeder');
		$this->call('SidebarTableSeeder');
	}

}