<?php

namespace xiberiaTR\ContaoAmaltisBundle\Model;

class BaseModel extends \Model
{
    protected static $strTable = 'tl_base';
}

class_alias(BaseModel::class, 'BaseModel');
