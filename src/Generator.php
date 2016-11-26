<?php

declare(strict_types=1);

namespace Knugen\EsportsIpsum;

use Markov\Markov;

class Generator extends Markov
{
    public static function createGeneric(int $lookForward = 5) {
        return self::fromFile(__DIR__ . '/../data/esports.txt', $lookForward);
    }
}
