<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/websecurityscanner/v1beta/web_security_scanner.proto

namespace Google\Cloud\WebSecurityScanner\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the `CreateScanConfig` method.
 *
 * Generated from protobuf message <code>google.cloud.websecurityscanner.v1beta.CreateScanConfigRequest</code>
 */
class CreateScanConfigRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource name where the scan is created, which should be a
     * project resource name in the format 'projects/{projectId}'.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The ScanConfig to be created.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1beta.ScanConfig scan_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $scan_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource name where the scan is created, which should be a
     *           project resource name in the format 'projects/{projectId}'.
     *     @type \Google\Cloud\WebSecurityScanner\V1beta\ScanConfig $scan_config
     *           Required. The ScanConfig to be created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Websecurityscanner\V1Beta\WebSecurityScanner::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource name where the scan is created, which should be a
     * project resource name in the format 'projects/{projectId}'.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource name where the scan is created, which should be a
     * project resource name in the format 'projects/{projectId}'.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The ScanConfig to be created.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1beta.ScanConfig scan_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\WebSecurityScanner\V1beta\ScanConfig
     */
    public function getScanConfig()
    {
        return $this->scan_config;
    }

    /**
     * Required. The ScanConfig to be created.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1beta.ScanConfig scan_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\WebSecurityScanner\V1beta\ScanConfig $var
     * @return $this
     */
    public function setScanConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\WebSecurityScanner\V1beta\ScanConfig::class);
        $this->scan_config = $var;

        return $this;
    }

}

