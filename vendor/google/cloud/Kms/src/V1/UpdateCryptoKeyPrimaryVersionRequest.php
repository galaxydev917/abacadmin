<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/kms/v1/service.proto

namespace Google\Cloud\Kms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [KeyManagementService.UpdateCryptoKeyPrimaryVersion][google.cloud.kms.v1.KeyManagementService.UpdateCryptoKeyPrimaryVersion].
 *
 * Generated from protobuf message <code>google.cloud.kms.v1.UpdateCryptoKeyPrimaryVersionRequest</code>
 */
class UpdateCryptoKeyPrimaryVersionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the [CryptoKey][google.cloud.kms.v1.CryptoKey] to update.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The id of the child [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] to use as primary.
     *
     * Generated from protobuf field <code>string crypto_key_version_id = 2;</code>
     */
    private $crypto_key_version_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name of the [CryptoKey][google.cloud.kms.v1.CryptoKey] to update.
     *     @type string $crypto_key_version_id
     *           The id of the child [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] to use as primary.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Kms\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the [CryptoKey][google.cloud.kms.v1.CryptoKey] to update.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the [CryptoKey][google.cloud.kms.v1.CryptoKey] to update.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The id of the child [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] to use as primary.
     *
     * Generated from protobuf field <code>string crypto_key_version_id = 2;</code>
     * @return string
     */
    public function getCryptoKeyVersionId()
    {
        return $this->crypto_key_version_id;
    }

    /**
     * The id of the child [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] to use as primary.
     *
     * Generated from protobuf field <code>string crypto_key_version_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCryptoKeyVersionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->crypto_key_version_id = $var;

        return $this;
    }

}

