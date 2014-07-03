<?php
class NavTableSeeder extends Seeder {

    public function run()
    {
        DB::table('nav')->insert(array(
          'title' => 'Home',
          'url' => Config::get('lblog_config.BASE_URL'),
		  'position' => 0
          ));
		  
		  DB::table('nav')->insert(array(
          'title' => 'About',
          'url' => ''.Config::get('lblog_config.BASE_URL').'/about',
		  'position' => 1
          ));
		  
		  DB::table('nav')->insert(array(
          'title' => 'Example Category',
          'url' => ''.Config::get('lblog_config.BASE_URL').'/category/example-category',
		  'position' => 2
          ));
		  
		  DB::table('nav')->insert(array(
          'title' => 'Contact',
          'url' => ''.Config::get('lblog_config.BASE_URL').'/contact',
		  'position' => 3
          ));
    }

}