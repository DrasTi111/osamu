<?php

require_once 'config1.php';

$c = 11;
$o = 0;
if (isset($_GET['count'])) $c = intval($_GET['count']);
if ($c > 11) $c = 11;
if (isset($_GET['offset'])) $o = intval($_GET['offset']);

$sql = sprintf('SELECT `id`, `title`, `description`, `director`, `year`, `logo` FROM `videos` LIMIT %d OFFSET %d', $c, $o);
$videos = $conn->query($sql);

$result = '{"videos": [';
foreach ($videos as $row){
$id = $row['id'];
$t = $row['title'];
$de = $row['description'];
$di = $row['director'];
$y = $row['year'];
$l = $row['logo'];

$result .= sprintf('{"id": %d, "title": "%s", "description": "%s", "director":%s, "year":%d, "logo": "%s"},', $id, $t, $de, $di, $y, $l);
}
$result = rtrim($result, ',');
$result .= ']}';

echo $result;
?>