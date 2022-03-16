<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataCmsBlockMview\NodeSubscription;

use Generator;
use MateuszMesek\DocumentDataIndexerMviewApi\NodeSubscriptionsResolverInterface;

class SubscriptionResolver implements NodeSubscriptionsResolverInterface
{
    public function resolve(): Generator
    {
        yield '*' => [
            'cms_block' => [
                'id' => 'cms_block',
                'type' => SubscriptionGenerator::class,
                'arguments' => []
            ]
        ];
    }
}
