<?php echo '<'.'?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';?>
<?php header("Content-type: text/xml"); ?>
<rss version="2.0">

<channel>
<title>{{ Config::get('lblog_config.title') }}</title>
<link>{{ Config::get('lblog_config.BASE_URL') }}</link>
<description>{{ Config::get('lblog_config.sub_title') }}</description>
<language>en-us</language>
<copyright>Copyright 2014-<?php echo date('Y'); ?> {{ Config::get('lblog_config.title') }}</copyright>
<managingEditor>george@georgewhitcher.com</managingEditor>
<webMaster>George Whitcher</webMaster>
@foreach ($articles as $article)
<item>
<title>{{ $article->title }}</title>
<link>{{ Config::get('lblog_config.BASE_URL') }}/post/{{ $article->id }}/{{ $article->slug }}</link>
<description><![CDATA[<?php 
$body = substr($article->body,0,200); 
$bodyreplace = preg_replace('/&(?!#?[a-z0-9]+;)/', '&amp;', $body);
echo strip_tags($bodyreplace); ?>...]]></description>
</item>
@endforeach
</channel>
</rss>
