<?php

namespace Buyanov\SymfonyTemporalWorker\Attribute;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
class WorkflowInboundCalls  Interceptor
{
    public const TAG = 'temporal.workflow_inbound_interceptor';
}
