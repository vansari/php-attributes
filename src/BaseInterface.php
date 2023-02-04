<?php
declare(strict_types=1);

namespace Vansari\PhpAttributes;

#[FooAttribute(name: 'SuperInterface')]
interface BaseInterface {

    public function toArray(): array;
}