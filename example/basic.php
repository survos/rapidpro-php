<?php
require __DIR__ . '/../vendor/autoload.php';

//Initialize client
use Survos\Rapidpro\RapidproClient;
use Survos\Rapidpro\Gateway;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Serializer;

$serializer = new Serializer([new GetSetMethodNormalizer(), new ArrayDenormalizer()], [new JsonEncoder()]);
$client = new RapidproClient(new Gateway('https://textit.in', '<token>'), $serializer);

// Create new campaign
$groups = $client->getGateway()->get('groups', ['name' => 'Survey Audience']);
$group = current($groups['results']);
$groupUuid = $group['uuid'];
$new = $client->getGateway()->post('campaigns', [
    'name' => 'Reminders',
    'group_uuid' => $groupUuid
]);
$list = $client->getGateway()->get('campaigns', []);
print_r($list);

//Objects mapping
/** @var \Survos\Rapidpro\Events\FlowEvent */
$event = $client->webhooks()->getFlowEvent($request->request->all());

/**  @var \Survos\Rapidpro\Entity\Flow $flow */
$flow = $client->flows()->findOneBy(['flow' => $event->getFlow()]);

/**  @var \Survos\Rapidpro\Entity\Contact $contact */
$contact = $client->contacts()->findOneBy(['uuid' => $event->getContact()]);
