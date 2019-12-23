<?php

use Kirby\Cms\App;
use Kirby\Cms\Collection;
use Kirby\Search\Search;

include __DIR__ . '/vendor/autoload.php';

App::plugin('getkirby/search', [
    'api'   => require 'src/config/api.php',
    'hooks' => require 'src/config/hooks.php',
    'translations' => [
        'en' => require 'src/config/i18n/en.php',
        'de' => require 'src/config/i18n/de.php'
    ],
    'sections' => [
        'search' => []
    ],
    'components' => [
        'search' => function (App $kirby, Collection $collection, string $query = null, $params = []) {
            $options = [];

            // Filter index by model type
            if (is_a($collection, 'Kirby\Cms\Pages') === true) {
                $options['filters'] = 'pages';
            } else if (is_a($collection, 'Kirby\Cms\Files') === true) {
                $options['filters'] = 'files';
            } else if (is_a($collection, 'Kirby\Cms\Users') === true) {
                $options['filters'] = 'users';
            }

            // Get results from index
            $results = search($query, $options);

            // Make sure only results from collection are kept
            foreach ($results as $result) {
                if ($collection->has($result->id()) === false) {
                    $results->remove($result);
                }
            }

            return $results;
        }
    ]
]);

function search(string $query = null, $options = []) {
    return Search::instance()->search($query, $options);
}
