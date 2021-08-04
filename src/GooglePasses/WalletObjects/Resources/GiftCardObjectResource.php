<?php

namespace GooglePasses\WalletObjects\Resources;

use Google_Service_Resource;
use GooglePasses\WalletObjects\Objects\LoyaltyObject;
use GooglePasses\WalletObjects\Objects\GiftCardObject;

class GiftCardObjectResource extends Google_Service_Resource
{
    /**
     * Returns the gift card object with the given object ID. (giftcardobject.get)
     *
     * @param string $resourceId The unique identifier for an object. This ID must
     * be unique across all objects from an issuer. This value should follow the
     * format issuer ID.identifier where the former is issued by Google and latter
     * is chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param array $optParams Optional parameters.
     * @return GiftCardObject
     */
    public function get($resourceId, $optParams = array())
    {
        $params = array('resourceId' => $resourceId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), GiftCardObject::class);
    }

    /**
     * Inserts an gift card object with the given ID and properties.
     * (giftcardobject.insert)
     *
     * @param Google_GiftCardObject $postBody
     * @param array $optParams Optional parameters.
     * @return GiftCardObject
     */
    public function insert(GiftCardObject $postBody, $optParams = array())
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), GiftCardObject::class);
    }

    /**
     * Updates the gift card object referenced by the given object ID. This method
     * supports patch semantics. (giftcardobject.patch)
     *
     * @param string $resourceId The unique identifier for an object. This ID must
     * be unique across all objects from an issuer. This value should follow the
     * format issuer ID.identifier where the former is issued by Google and latter
     * is chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param Google_GiftCardObject $postBody
     * @param array $optParams Optional parameters.
     * @return GiftCardObject
     */
    public function patch($resourceId, GiftCardObject $postBody, $optParams = array())
    {
        $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), GiftCardObject::class);
    }

    /**
     * Updates the gift card object referenced by the given object ID.
     * (giftcardobject.update)
     *
     * @param string $resourceId The unique identifier for an object. This ID must
     * be unique across all objects from an issuer. This value should follow the
     * format issuer ID.identifier where the former is issued by Google and latter
     * is chosen by you. Your unique identifier should only include alphanumeric
     * characters, '.', '_', or '-'.
     * @param Google_GiftCardObject $postBody
     * @param array $optParams Optional parameters.
     * @return GiftCardObject
     */
    public function update($resourceId, GiftCardObject $postBody, $optParams = array())
    {
        $params = array('resourceId' => $resourceId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), GiftCardObject::class);
    }

}