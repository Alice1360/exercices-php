<?php
    namespace Component;

use Interfaces\HasBrandInterface;
use Interfaces\HasNameInterface;
use Traits\HasBrandTrait;
use Traits\HasNameTrait;

class AbstractComponent implements HasNameInterface, HasBrandInterface
{
    use HasNameTrait;
 
    use HasBrandTrait;
}
