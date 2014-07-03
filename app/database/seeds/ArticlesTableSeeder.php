<?php
class ArticlesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('articles')->insert(array(
          'category_id' => '1',
          'title' => 'LBlog (A Laravel blogging software)',
          'slug' => 'lblog-a-laravel-blogging-software',
		  'body' => '<p>Thank you for installing LBlog (A Laravel blogging software)!  To login to the administration visit YOURDOMAIN.COM/admin.  The default admin account is Username: admin@admin.com Password: password.  This software is open source.  If you do use it please try and give LBlog credit so it can grow!</p>',
		  'featured' => 'cover.jpg',
		  'metadescription' => 'LBlog is a Laravel blogging software written by George Whitcher',
		  'metakeywords' => 'laravel, open source, blog, george whitcher',
		  'slider' => 0,
		  'status' => 0
          ));
    }

}