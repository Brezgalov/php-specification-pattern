<?php

namespace Brezgalov\Specification;

interface ILogicalSpecification extends ISpecification
{
    public function and(ISpecification $specification): ILogicalSpecification;

    public function or(ISpecification $specification): ILogicalSpecification;

    public function not(): ILogicalSpecification;
}
