<?php
$url = 'https://api.coinmarketcap.com/v1/ticker/';
$obj = file_get_contents($url);
$parts = json_decode($obj);
$rr =exec('python wer.py');
echo $rr;
for($i=0;$i<10;$i++)
{
echo $parts[$i]->id;
echo '<br>';
echo $parts[$i]->name;
echo '<br>';
echo $parts[$i]->rank;
echo '<br>';
echo $parts[$i]->price_usd;
echo '<br>';
echo '----------------------------------------------<br>';
}
?>