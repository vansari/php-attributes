<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Vansari\PhpAttributes\Foo;
use Vansari\PhpAttributes\FooAttribute;

class AttributeTest extends TestCase
{
    public function testAttribute(): void 
    {
        $class = new \ReflectionClass(Foo::class);
        $attributes = $class->getAttributes(FooAttribute::class);

        $this->assertCount(1, $attributes);
        $attr = $attributes[0]->newInstance();
        $this->assertSame('AnotherClass', $attr->getName());
    }
}