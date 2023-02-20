<?php

namespace Brezgalov\Specification;

abstract class AbstractSpecification implements ILogicalSpecification
{
    public abstract function satisfiedBy(mixed $item): bool;

    public function and(ISpecification $specification): ILogicalSpecification
    {
        return new AndSpecification($this, $specification);
    }

    public function or(ISpecification $specification): ILogicalSpecification
    {
        return new OrSpecification($this, $specification);
    }

    public function not(): ILogicalSpecification
    {
        return new NotSpecification($this);
    }
}
