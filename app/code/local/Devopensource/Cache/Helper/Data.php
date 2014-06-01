<?php
/**
 * @class Devopensource_Cache_Helper_Data
 */ 
class Devopensource_Cache_Helper_Data extends Mage_Core_Helper_Abstract {

    protected $_cacheTag    = array('DEVOPEN_CACHE');
    protected $_cachePrefix = 'devopencache_';
    protected $_modeClean   = 'matchingTag';
    protected $_typeCache   = 'devopen';

    public function __construct() {

        Mage::app()->getCache()->setOption('automatic_serialization', true);
    }

    /**
     * Save data in cache
     * @param object $dataSave data to save
     * @param string $key id cache
     * @param int $lifeTime life cache (in seconds), if null
     * @return bool
     */
    public function saveCache($dataSave, $key, $lifeTime = null){

        if (Mage::app()->useCache($this->_typeCache)){
            return Mage::app()->getCache()->save($dataSave, $this->_cachePrefix . $key, $this->_cacheTag, $lifeTime);
        }else{
            return false;
        }

    }

    /**
     * Load unserialize data from cache
     * @param string $key id cache
     * @return bool
     */
    public function loadCache($key){

        return Mage::app()->getCache()->load($this->_cachePrefix . $key);
    }

    /**
     * Remove data from cache
     * @param string $key id cache
     * @return bool
     */
    public function removeSingleCache($key){

        return Mage::app()->getCache()->remove($this->_cachePrefix . $key);
    }

    /**
     * Erases all stored by the tag cache module
     * @return bool
     */
    public function cleanAllCache(){

        return Mage::app()->getCache()->clean($this->_modeClean, $this->_cacheTag);
    }
}