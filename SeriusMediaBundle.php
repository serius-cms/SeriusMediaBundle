<?php
/**
 * @author      Dirk Luijk <dirk@luijkwebcreations.nl>
 * @copyright   Copyright (c) 2014 Dirk Luijk
 * @license     MIT
 */

namespace Serius\Bundle\MediaBundle;


use Symfony\Component\HttpKernel\Bundle\Bundle;

class SeriusMediaBundle extends Bundle
{
    public function getParent()
    {
        return 'SonataMediaBundle';
    }

} 