<?php

namespace Brezgalov\Specification;

class OrSpecification extends AbstractSpecification
{
    private ISpecification $left;
    private ISpecification $right;

    public function __construct(ISpecification $left, ISpecification $right)
    {
        $this->left = $left;
        $this->right = $right;
    }

    public function isSatisfiedBy(mixed $item): bool
    {
        return $this->left->isSatisfiedBy($item) || $this->right->isSatisfiedBy($item);
    }
}
