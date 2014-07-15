<?php echo '<'.'?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';?>
<?php header("Content-type: text/xml"); ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<url>
    <loc>{{ Config::get('lblog_config.BASE_URL') }}</loc>
    <lastmod><?php echo date("Y-m-d\TH:i:sP"); ?></lastmod>
    <changefreq>daily</changefreq>
    <priority>0.9</priority>
</url>
@foreach ($categories as $category)
  <url>
    <loc>{{ Config::get('lblog_config.BASE_URL') }}/{{ $category->slug }}</loc>
    <lastmod><?php echo date("Y-m-d\TH:i:sP"); ?></lastmod>
    <changefreq>daily</changefreq>
    <priority>0.9</priority>
  </url>
@endforeach
@foreach ($pages as $page)
  <url>
    <loc>{{ Config::get('lblog_config.BASE_URL') }}/{{ $page->slug }}</loc>
    <lastmod><?php echo date("Y-m-d\TH:i:sP"); ?></lastmod>
    <changefreq>daily</changefreq>
    <priority>0.7</priority>
  </url>
@endforeach
  <url>
    <loc>{{ Config::get('lblog_config.BASE_URL') }}/contact</loc>
    <lastmod><?php echo date("Y-m-d\TH:i:sP"); ?></lastmod>
    <changefreq>daily</changefreq>
    <priority>0.7</priority>
  </url>
</urlset>