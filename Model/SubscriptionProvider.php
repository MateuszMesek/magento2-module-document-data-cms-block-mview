<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataCmsBlockMview\Model;

use MateuszMesek\DocumentDataCmsBlockMview\Model\SubscriptionProvider\Generator;
use MateuszMesek\DocumentDataIndexMviewApi\Model\SubscriptionProviderInterface;
use Traversable;

class SubscriptionProvider implements SubscriptionProviderInterface
{
    public function get(array $context): Traversable
    {
        yield '*' => [
            'cms_block' => [
                'id' => 'cms_block',
                'type' => Generator::class,
                'arguments' => []
            ]
        ];
    }
}
