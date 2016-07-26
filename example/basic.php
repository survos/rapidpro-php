<?php
require __DIR__ . '/../vendor/autoload.php';

use Survos\Rapidpro\RapidClient;

$client = new RapidClient('https://textit.in', '<token>');

// Create new campaign
$groups = $client->get('groups', ['name' => 'Survey Audience']);
$group = current($groups['results']);
$groupUuid = $group['uuid'];
$new = $client->post('campaigns', [
    'name' => 'Reminders',
    'group_uuid' => $groupUuid
]);
$list = $client->get('campaigns', []);
print_r($list);
