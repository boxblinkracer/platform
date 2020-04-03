<?php declare(strict_types=1);

namespace Shopware\Core\Migration;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Migration\MigrationStep;
use Shopware\Storefront\Framework\Seo\SeoUrlRoute\ProductPageSeoUrlRoute;

class Migration1585924284SeoUrlLowercase extends MigrationStep
{
    public function getCreationTimestamp(): int
    {
        return 1585924284;
    }

    public function update(Connection $connection): void
    {
        $connection->update('seo_url_template', [
            'template' => ProductPageSeoUrlRoute::DEFAULT_TEMPLATE,
        ], ['route_name' => ProductPageSeoUrlRoute::ROUTE_NAME]);
    }

    public function updateDestructive(Connection $connection): void
    {
        // implement update destructive
    }
}
