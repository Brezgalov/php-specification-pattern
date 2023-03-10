<?php

namespace Brezgalov\Specification;

class NotSpecification extends AbstractSpecification
{
    private ISpecification $baseSpec;

    public function __construct(ISpecification $baseSpec)
    {
        $this->baseSpec = $baseSpec;
    }

    public function satisfiedBy(mixed $item): bool
    {
        return !$this->baseSpec->satisfiedBy($item);
    }
}
