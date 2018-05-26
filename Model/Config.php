<?php
/**
 * @license Copyright 2011-2014 BitPay Inc., MIT License
 * 
 */

namespace Bitpay\Core\Model;

use Magento\Payment\Gateway\Config\Config as BaseConfig;

class Config extends BaseConfig {

    /**
     * Determines if the gateway is active.
     *
     * @return bool
     */
    public function isActive() {
        return (bool) $this->getValue('active');
    }

    /**
     * Determines if the gateway has debug mode.
     *
     * @return bool
     */
    public function isDebug() {
        return (bool) $this->getValue('debug');
    }

    /**
     * Returns Transaction Speed value.
     *
     * @return string
     */
    public function getTransactionSpeed() {
        return $this->getValue('speed');
    }

    /**
     * Returns true if Transaction Speed has been configured
     *
     * @return boolean
     */
    public function hasTransactionSpeed() {
        $speed = $this->getTransactionSpeed();

        return !empty($speed);
    }

    /**
     * Returns the network name.
     *
     * @return mixed
     */
    public function getNetwork() {
        return $this->getValue('network');
    }

    /**
     * Returns the custom network host name.
     *
     * @return string
     */
    public function getCustomNetHost() {
        return (string) $this->getValue('customnethost');
    }

    /**
     * Returns the custom network port number.
     *
     * @return integer
     */
    public function getCustomNetPort() {
        return (integer) $this->getValue('customnetport');
    }

    /**
     * Returns the token.
     *
     * @return string
     */
    public function getToken() {
        return (string) $this->getValue('token');
    }

    /**
     * Determines if the full screen option is enabled.
     *
     * @return bool
     */
    public function isFullScreen() {
        return (bool) $this->getValue('fullscreen');
    }

    /**
     * Determines if the Network is Testnet.
     *
     * @return bool
     */
    public function isTestnetNetwork() {
        return $this->getNetwork() === 'testnet';
    }

    /**
     * Determines if the Network is Livenet.
     *
     * @return bool
     */
    public function isLivenetNetwork() {
        return $this->getNetwork() === 'livenet';
    }

    /**
     * Determines if the Network is a Custom Network.
     *
     * @return bool
     */
    public function isCustomNetwork() {
        return $this->getNetwork() === 'Custom Network';
    }

    /**
     * Returns the URL where the IPN's are sent
     *
     * @return string
     */
    public function getNotificationUrl() {
        return (string) $this->getValue('notification_url');
    }

    /**
     * Returns the URL where customers are redirected
     *
     * @return string
     */
    public function getRedirectUrl() {
        return (string) $this->getValue('redirect_url');
    }

}