<?php

namespace Brezgalov\Specification;

interface ISpecification
{
    public function isSatisfiedBy(mixed $item): bool;
}
