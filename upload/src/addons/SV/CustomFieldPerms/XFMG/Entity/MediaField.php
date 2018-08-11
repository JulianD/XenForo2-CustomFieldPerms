<?php

namespace SV\CustomFieldPerms\XFMG\Entity;

use SV\CustomFieldPerms\CustomFieldEntityTrait;
use SV\CustomFieldPerms\IFieldPerm;

class MediaField extends XFCP_MediaField implements IFieldPerm
{
    protected static $tableName = 'xf_mg_media_field';
    use CustomFieldEntityTrait;
}