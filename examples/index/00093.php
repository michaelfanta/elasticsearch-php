$params = [
    'index' => 'twitter',
    'body'  => [
        'user'      => 'kimchy',
        'post_date' => '2009-11-15T14:12:12',
        'message'   => 'trying out Elasticsearch',
    ],
    'routing' => 'kimchy',
];
$response = $client->index($params);
