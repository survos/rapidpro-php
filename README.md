# RapidPro php client

Api docs https://rapidpro.io/api/v1

Live api docs and token https://rapidpro.io/api/v1/explorer/

## Register user
```php
use Survos\Rapidpro\RapidproClient;

$client = new RapidproClient('https://textit.in', '<token>');

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

```
