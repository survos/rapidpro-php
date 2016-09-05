# RapidPro php client

Api docs https://rapidpro.io/api/v1

Live api docs and token https://rapidpro.io/api/v1/explorer/

## Installation
Add the following to your composer.json

```json
    "require": {
        "survos/rapidpro-php": "^0.1.0"
    },
    "repositories": [
        {
            "type": "git",
            "url": "git@github.com:Survos/rapidpro-php"
        },
    ]
```
And then launch `composer update`

## Initialize client
```php
use Survos\Rapidpro\RapidproClient;
use Survos\Rapidpro\Gateway;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Serializer;

$serializer = new Serializer([new GetSetMethodNormalizer(), new ArrayDenormalizer()], [new JsonEncoder()]);
$client = new RapidproClient(new Gateway('https://textit.in', '<token>'), $serializer);
```

## Create new campaign
```php
$groups = $client->getGateway()->get('groups', ['name' => 'Survey Audience']);
$group = current($groups['results']);
$groupUuid = $group['uuid'];
$new = $client->getGateway()->post('campaigns', [
    'name' => 'Reminders',
    'group_uuid' => $groupUuid
]);
$list = $client->getGateway()->get('campaigns', []);
print_r($list);
```

##Objects mapping
```php
/** @var \Survos\Rapidpro\Events\FlowEvent */
$event = $client->webhooks()->getFlowEvent($request->request->all());

/**  @var \Survos\Rapidpro\Entity\Flow $flow */
$flow = $client->flows()->findOneBy(['flow' => $event->getFlow()]);

/**  @var \Survos\Rapidpro\Entity\Contact $contact */
$contact = $client->contacts()->findOneBy(['uuid' => $event->getContact()]);
```
