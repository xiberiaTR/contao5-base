<?php

namespace xiberiaTR\ContaoBaseBundle\Model;

class BaseModel extends \Model
{
    protected static $strTable = 'tl_base';
}

class_alias(BaseModel::class, 'BaseModel');
