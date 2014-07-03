<?php
class PagesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('pages')->insert(array(
          'title' => 'About',
          'slug' => 'about',
		  'body' => '<p>This blog is a custom blogging software built in PHP with the <a href="http://laravel.com" target="_blank">Laravel</a> framework by Web Developer <a href="http://www.georgewhitcher.com" target="_blank">George Whitcher</a>. &nbsp;The source can be obtained <a href="http://repositories.georgewhitcher.com/lblog-a-laravel-blog-software" target="_blank">here</a>.</p>',
		  'metadescription' => 'Laravel blogging software written by George Whitcher.',
		  'metakeywords' => 'laravel, blog, open source, lblog, george whitcher'
          ));
    }

}