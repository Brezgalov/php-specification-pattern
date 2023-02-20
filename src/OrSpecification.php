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

    public function satisfiedBy(mixed $item): bool
    {
        return $this->left->satisfiedBy($item) || $this->right->satisfiedBy($item);
    }
}
