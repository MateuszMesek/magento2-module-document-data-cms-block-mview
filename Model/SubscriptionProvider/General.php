<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataCmsBlockMview\Model\SubscriptionProvider;

use MateuszMesek\DocumentDataCmsBlockMview\Model\SubscriptionProvider\General\Generator;
use MateuszMesek\DocumentDataIndexMviewApi\Model\SubscriptionProviderInterface;
use Traversable;

class General implements SubscriptionProviderInterface
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
