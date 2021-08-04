<?php

namespace GooglePasses\Clients;

use Google_Client;
use GooglePasses\Factories\ResourcesFactory;
use GooglePasses\Helpers\Config;
use GooglePasses\WalletObjects\Classes\LoyaltyClass;
use GooglePasses\WalletObjects\Objects\LoyaltyObject;
use GooglePasses\WalletObjects\Classes\GiftCardClass;
use GooglePasses\WalletObjects\Objects\GiftCardObject;

class GoogleRestClient
{
    const SCOPES = 'https://www.googleapis.com/auth/wallet_object.issuer';

    private $client;

    private $service;

    private $resourcesFactory;

    public function __construct(Config $config) {
        $this->client = new Google_Client();

        // do OAuth2.0 via service account file.
        // See https://developers.google.com/api-client-library/php/auth/service-accounts#authorizingrequests
        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . $config->getServiceAccountFilePath());
        $this->client->useApplicationDefaultCredentials();
        // Set application name.
        $this->client->setApplicationName($config->getApplicationName());
        // Set Api scopes.
        $this->client->setScopes([self::SCOPES]);

        $this->resourcesFactory = new ResourcesFactory($this->getService());
    }

    public function getService()
    {
        if (empty($this->service)) {
            $this->service = new GoogleWalletObjectsService($this->client);
        }
        return $this->service;
    }

    public function insertLoyaltyClass(LoyaltyClass $loyaltyClass)
    {
        $response = null;

        $loyaltyResource = $this->resourcesFactory->makeLoyaltyClassResource();

        try {
            $response = $loyaltyResource->insert($loyaltyClass);
            $response["code"] = 200;
        } catch (\Google_Service_Exception $gException)  {
            $response = $gException->getErrors();
            $response["code"] = $gException->getCode();
        } catch (\Exception $e){
            var_dump($e->getMessage());
        }

        return $response;
    }

    public function getLoyaltyClass($classId)
    {
        $response = null;

        $loyaltyResource = $this->resourcesFactory->makeLoyaltyClassResource();

        try {
            $response = $loyaltyResource->get($classId);
            $response["code"] = 200;
        } catch (\Google_Service_Exception $gException)  {
            $response = $gException->getErrors();
            $response["code"] = $gException->getCode();
        } catch (\Exception $e){
            var_dump($e->getMessage());
        }

        return $response;
    }

    public function getLoyaltyObject($objectId)
    {
        $response = null;

        $loyaltyResource = $this->resourcesFactory->makeLoyaltyObjectResource();

        try {
            $response = $loyaltyResource->get($objectId);
            $response["code"] = 200;
        } catch (\Google_Service_Exception $gException)  {
            $response = $gException->getErrors();
            $response["code"] = $gException->getCode();
        } catch (\Exception $e){
            var_dump($e->getMessage());
        }

        return $response;
    }

    public function insertLoyaltyObject(LoyaltyObject $loyaltyObject)
    {
        $response = null;

        $loyaltyResource = $this->resourcesFactory->makeLoyaltyObjectResource();

        try {
            $response = $loyaltyResource->insert($loyaltyObject);
            $response["code"] = 200;
        } catch (\Google_Service_Exception $gException)  {
            $response = $gException->getErrors();
            $response["code"] = $gException->getCode();
        } catch (\Exception $e){
            var_dump($e->getMessage());
        }

        return $response;
    }

    public function insertGiftCardClass(GiftCardClass $giftCardClass)
    {
        $response = null;

        $giftCardResource = $this->resourcesFactory->makeGiftCardClassResource();

        try {
            $response = $giftCardResource->insert($giftCardClass);
            $response["code"] = 200;
        } catch (\Google_Service_Exception $gException)  {
            $response = $gException->getErrors();
            $response["code"] = $gException->getCode();
        } catch (\Exception $e){
            var_dump($e->getMessage());
        }

        return $response;
    }

    public function getGiftCardClass($classId)
    {
        $response = null;

        $giftCardResource = $this->resourcesFactory->makeGiftCardClassResource();

        try {
            $response = $giftCardResource->get($classId);
            $response["code"] = 200;
        } catch (\Google_Service_Exception $gException)  {
            $response = $gException->getErrors();
            $response["code"] = $gException->getCode();
        } catch (\Exception $e){
            var_dump($e->getMessage());
        }

        return $response;
    }

    public function getGiftCardObject($objectId)
    {
        $response = null;

        $giftCardResource = $this->resourcesFactory->makeGiftCardObjectResource();

        try {
            $response = $loyaltyResource->get($objectId);
            $response["code"] = 200;
        } catch (\Google_Service_Exception $gException)  {
            $response = $gException->getErrors();
            $response["code"] = $gException->getCode();
        } catch (\Exception $e){
            var_dump($e->getMessage());
        }

        return $response;
    }

    public function insertGiftCardObject(GiftCardObject $giftCardObject)
    {
        $response = null;

        $giftCardResource = $this->resourcesFactory->makeGiftCardObjectResource();

        try {
            $response = $giftCardResource->insert($giftCardObject);
            $response["code"] = 200;
        } catch (\Google_Service_Exception $gException)  {
            $response = $gException->getErrors();
            $response["code"] = $gException->getCode();
        } catch (\Exception $e){
            var_dump($e->getMessage());
        }

        return $response;
    }
}