Devopensource_Cache
===================

## Introduction

This module allows to work with magento cache easily apart has its own way of cleaning the cache through the administration of magento.

## Prerequisites
- Install [modgit](https://github.com/jreinke/modgit "Modgit")


## Usage

##### Save data to cache.

* @param object $dataSave data to save
* @param string $key id cache
* @param int $lifeTime life cache (in seconds), if null
* @return bool

`` Mage::helper('devopencache')->saveCache($dataSave, $key, $lifeTime = null)``

##### Load data from cache

* @param string $key id cache
* @return object

`` Mage::helper('devopencache')->loadCache($key)``

##### Remove data from cache

* @param string $key id cache
* @return bool

`` Mage::helper('devopencache')->removeSingleCache($key)``

##### Erases all cache stored by the tag 'DEVOPEN_CACHE'

* @param string $key id cache
* @return bool

`` Mage::helper('devopencache')->cleanAllCache()``