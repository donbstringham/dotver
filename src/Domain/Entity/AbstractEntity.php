<?php
/**
 * File name: AbstractEntity.php
 *
 * Project: dotver
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   Donbstringham\Version\Domain\Entity
 * @author    donbstringham <donbstringham@gmail.com>
 * @copyright 2015 © donbstringham
 * @license   MIT
 * @version   $Revision$
 *
 * $LastChangedDate$
 * $LastChangedBy$
 */

namespace Donbstringham\Version\Domain\Entity;

/**
 * Class AbstractEntity
 *
 * @category  PHP
 * @package   Donbstringham\Version\Domain\Entity
 * @author    donbstringham <donbstringham@gmail.com>
 * @copyright 2015 © donbstringham
 * @license   MIT
 * @version   $Revision$
 */
class AbstractEntity
{
    /**
     * @var integer $id
     * @access protected
     */
    protected $id;

    /**
     * Function setId
     *
     * @param integer $id
     *
     * @access public
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Function getId
     *
     * @return int
     *
     * @access public
     */
    public function getId()
    {
        return $this->id;
    }
}
