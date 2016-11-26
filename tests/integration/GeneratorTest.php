<?php

declare(strict_types = 1);

namespace Knugen\EsportsIpsum;

class GeneratorTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_works()
    {
        $generator = Generator::createGeneric();
        $text = $generator->generateText(200);

        $this->assertGreaterThan(180, strlen($text));
    }
}
