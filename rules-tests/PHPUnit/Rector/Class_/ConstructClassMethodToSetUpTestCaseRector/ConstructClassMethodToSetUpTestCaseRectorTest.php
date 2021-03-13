<?php

declare(strict_types=1);

namespace Rector\Tests\PHPUnit\Rector\Class_\ConstructClassMethodToSetUpTestCaseRector;

use Iterator;
use Rector\PHPUnit\Rector\Class_\ConstructClassMethodToSetUpTestCaseRector;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;
use Symplify\SmartFileSystem\SmartFileInfo;

final class ConstructClassMethodToSetUpTestCaseRectorTest extends AbstractRectorTestCase
{
    /**
     * @dataProvider provideData()
     */
    public function test(SmartFileInfo $fileInfo): void
    {
        $this->doTestFileInfo($fileInfo);
    }

    /**
     * @return Iterator<SmartFileInfo>
     */
    public function provideData(): Iterator
    {
        return $this->yieldFilesFromDirectory(__DIR__ . '/Fixture');
    }

    protected function getRectorClass(): string
    {
        return ConstructClassMethodToSetUpTestCaseRector::class;
    }
}