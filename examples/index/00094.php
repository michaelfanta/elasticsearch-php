$params = [
    'index' => 'twitter',
    'id'    => '1',
    'body'  => [
        'user'      => 'kimchy',
        'post_date' => '2009-11-15T14:12:12',
        'message'   => 'trying out Elasticsearch',
    ],
    'timeout' => '5m',
];
$response = $client->index($params);
