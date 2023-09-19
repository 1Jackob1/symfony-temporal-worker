<?php

declare(strict_types=1);

namespace Buyanov\SymfonyTemporalWorker;

use Buyanov\SymfonyTemporalWorker\DependencyInjection\Compiler\TemporalWorkerCompilerPass;
use Buyanov\SymfonyTemporalWorker\DependencyInjection\TemporalWorkerExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class TemporalWorkerBundle extends AbstractBundle
{
    public function getContainerExtension(): ?ExtensionInterface
    {
        return new TemporalWorkerExtension();
    }

    public function build(ContainerBuilder $container): void
    {
        parent::build($container);

        $container->addCompilerPass(new TemporalWorkerCompilerPass());
    }
}