
<?php

require_once __DIR__ . './../vendor/autoload.php';
require_once __DIR__ . './../src/Sample.php';

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    /**
     * 名前の確認
     */
    public function testReturnsName()
    {
        $sample = new Sample('hoge');
        $this->assertEquals('hoge', $sample->getName());
    }

}
