<?php
declare(strict_types=1);

use Vansari\PhpAttributes\FooAttribute;
use Vansari\PhpAttributes\BaseInterface;

#[FooAttribute(name: 'Class')]
class Bar implements BaseInterface {

    public function toArray(): array {
        return [];
    }
}