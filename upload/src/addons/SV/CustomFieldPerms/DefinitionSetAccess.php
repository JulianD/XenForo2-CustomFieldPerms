<?php

namespace SV\CustomFieldPerms;

use XF\CustomField\DefinitionSet;

abstract class DefinitionSetAccess extends DefinitionSet
{
    public static function getFilters(DefinitionSet $definitionSet)
    {
        return $definitionSet->filters;
    }
}