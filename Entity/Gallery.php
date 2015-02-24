<?php

/**
 * This file is part of Serius CMS.
 *
 * (c) Dirk Luijk <dirk@luijkwebcreations.nl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Serius\Bundle\MediaBundle\Entity;

use Sonata\MediaBundle\Entity\BaseGallery as BaseGallery;

/**
 * Entity representing a gallery, i.e. a collection of media files
 *
 * @package Serius\Bundle\MediaBundle\Entity
 */
class Gallery extends BaseGallery
{
    /**
     * @var integer $id
     */
    protected $id;

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }
}