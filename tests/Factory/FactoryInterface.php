<?php

declare(strict_types=1);

namespace Brizy\Bundle\EntitiesBundle\TestFactory;

use Brizy\Bundle\EntitiesBundle\Tests\TestContainerInterface;

interface FactoryInterface
{
    public static function create(TestContainerInterface $container, array $params = []);
}
