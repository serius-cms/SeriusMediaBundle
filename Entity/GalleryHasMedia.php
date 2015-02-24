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

use Sonata\MediaBundle\Entity\BaseGalleryHasMedia as BaseGalleryHasMedia;

/**
 * Entity representing a media object in a gallery
 *
 * @package Serius\Bundle\MediaBundle\Entity
 */
class GalleryHasMedia extends BaseGalleryHasMedia
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