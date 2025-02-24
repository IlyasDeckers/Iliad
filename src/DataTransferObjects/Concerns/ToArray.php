<?php
declare(strict_types=1);
namespace Iliad\DataTransferObjects\Concerns;

trait ToArray
{
    public function toArray(): array
    {
        return get_object_vars($this);
    }
}