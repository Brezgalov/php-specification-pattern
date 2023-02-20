<?php

namespace Brezgalov\Specification;

class AndSpecification extends AbstractSpecification
{
    private ISpecification $left;
    private ISpecification $right;

    public function __construct(ISpecification $left, ISpecification $right)
    {
        $this->left = $left;
        $this->right = $right;
    }

    public function satisfiedBy(mixed $item): bool
    {
        return $this->left->satisfiedBy($item) && $this->right->satisfiedBy($item);
    }
}
