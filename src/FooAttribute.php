<?php
declare(strict_types=1);

namespace Vansari\PhpAttributes;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
class FooAttribute {

    public function __construct(private readonly ?string $name = null) {

    }

    public function getName(): ?string
    {
        return $this->name;
    }
}