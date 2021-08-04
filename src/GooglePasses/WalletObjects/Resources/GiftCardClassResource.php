<?php

namespace GooglePasses\WalletObjects\Resources;

use GooglePasses\WalletObjects\Classes\GiftCardClass;
use GooglePasses\WalletObjects\Classes\LoyaltyClass;
use Google_Service_Resource;

class GiftCardClassResource extends Google_Service_Resource
{
    /**
     * Returns the gift card class with the given class ID. (giftcardclass.get)
     *
     * @param string $resourceId The unique identifier for a class. This ID must be
     * unique across all classes from an issuer. This value should follow the format
     * issuer ID.identifier where the former is issued by Google and latter is
     * chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param array $optParams Optional parameters.
     * @return GiftCardClass
     */
    public function get($resourceId, $optParams = array())
    {
        $params = array('resourceId' => $resourceId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), GiftCardClass::class);
    }

    /**
     * Inserts an gift card class with the given ID and properties.
     * (giftcardclass.insert)
     *
     * @param Google_GiftCardClass $postBody
     * @param array $optParams Optional parameters.
     * @return GiftCardClass
     */
    public function insert(GiftCardClass $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), GiftCardClass::class);
    }

    /**
     * Updates the gift card class referenced by the given class ID. This method
     * supports patch semantics. (giftcardclass.patch)
     *
     * @param string $resourceId The unique identifier for a class. This ID must be
     * unique across all classes from an issuer. This value should follow the format
     * issuer ID.identifier where the former is issued by Google and latter is
     * chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param Google_GiftCardClass $postBody
     * @param array $optParams Optional parameters.
     * @return GiftCardClass
     */
    public function patch($resourceId, GiftCardClass $postBody, $optParams = array())
    {
        $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), GiftCardClass::class);
    }

    /**
     * Updates the gift card class referenced by the given class ID.
     * (giftcardclass.update)
     *
     * @param string $resourceId The unique identifier for a class. This ID must be
     * unique across all classes from an issuer. This value should follow the format
     * issuer ID.identifier where the former is issued by Google and latter is
     * chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param Google_GiftCardClass $postBody
     * @param array $optParams Optional parameters.
     * @return GiftCardClass
     */
    public function update($resourceId, GiftCardClass $postBody, $optParams = array())
    {
        $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), GiftCardClass::class);
    }
}