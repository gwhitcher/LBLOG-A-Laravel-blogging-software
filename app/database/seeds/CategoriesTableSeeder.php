<?php
class CategoriesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('categories')->insert(array(
          'title' => 'Example Category',
          'slug' => 'example-category',
		  'metadescription' => 'LBlog is a Laravel blogging software written by George Whitcher',
		  'metakeywords' => 'laravel, open source, blog, george whitcher'
          ));
    }

}