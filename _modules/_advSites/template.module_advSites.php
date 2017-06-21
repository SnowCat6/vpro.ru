<widget:advSite
	exec="advSites=[data]"
>
<cfg:data.sites name="Список сайтов" />

</widget:advSite>

<?
//	+function module_advSites
function module_advSites($val, $data){ ?>
{{script:jq}}
<link rel="stylesheet" type="text/css" href="../../style.css">
<script src="script/jq.advSites.js"></script>

<div class="sample">
<?
$sites	= explode(',', $data['sites']);
foreach($sites as $url){
?>
<h2><a href="http://{$url}" title="{$url}" target="_blank">{$url}</a></h2>
<div>
	<iframe src="http://{$url}" frameborder="0" scrolling="no" style="background: white" height="1200" width="100%"></iframe>
	<a href="http://{$url}" title="{$url}" target="_blank"><span></span></a>
</div>
<? } ?>
</div>
<? } ?>