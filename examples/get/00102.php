$params = [
    'index' => 'twitter',
    'id'    => '1',
    'body'  => [
        'counter' => 1,
        'tags'    => ['red'],
    ],
];
$response = $client->index($params);
