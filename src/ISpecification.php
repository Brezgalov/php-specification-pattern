<?php

namespace Brezgalov\Specification;

interface ISpecification
{
    public function satisfiedBy(mixed $item): bool;
}
