<?php

declare(strict_types=1);

namespace Honed\Registry\Tests\Stubs;

enum Status: string
{
    case Available = 'available';
    case Unavailable = 'unavailable';
    case ComingSoon = 'coming-soon';
}
