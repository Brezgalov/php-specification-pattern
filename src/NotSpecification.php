<?php

namespace Brezgalov\Specification;

class NotSpecification extends AbstractSpecification
{
    private ISpecification $baseSpec;

    public function __construct(ISpecification $baseSpec)
    {
        $this->baseSpec = $baseSpec;
    }

    public function isSatisfiedBy(mixed $item): bool
    {
        return !$this->baseSpec->isSatisfiedBy($item);
    }
}
