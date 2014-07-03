<?php
class SidebarTableSeeder extends Seeder {

    public function run()
    {
        $body1 = '<ul>
<?php
$categories = DB::table("categories")->get();
$base_url = Config::get("lblog_config.BASE_URL");
foreach ($categories as $category)
{
echo <<<EOT
<li><a href="$base_url/category/$category->slug">$category->title</a></li>
EOT;
} ?>
</ul>';

	$body2 = '<ul>
<?php
$articles = DB::table("articles")->orderBy("created_at", "desc")->take(5)->get();
$base_url = Config::get("lblog_config.BASE_URL");
foreach ($articles as $article)
{
echo <<<EOT
<li><a href="$base_url/post/$article->id/$article->slug">$article->title</a></li>
EOT;
}
?>
</ul>';
		
		DB::table('sidebar')->insert(array(
          'title' => 'Categories',
		  'body' => $body1,
		  'position' => 0
          ));
		  
		DB::table('sidebar')->insert(array(
          'title' => 'Recent Posts',
		  'body' => $body2,
		  'position' => 1
          ));
    }
	
}