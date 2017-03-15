<?php
$url = 'https://quickstats.nass.usda.gov/api/api_GET/?key=399E0F13-4AC9-3195-9871-17C86127C0B0&source_desc=SURVEY&group_desc=DAIRY&statisticcat_desc=PRODUCTION&unit_desc=LB%20/%20HEAD&freq_desc=MONTHLY&format=json&year=2016';
$content = file_get_contents($url);
$json = json_decode($content, true);

foreach($json['data']['weather'] as $item) {
    print $item['date'];
    print ' - ';
    print $item['weatherDesc'][0]['value'];
    print ' - ';
    print '<img src="' . $item['weatherIconUrl'][0]['value'] . '" border="0" alt="" />';
    print '<br>';
}
?>
