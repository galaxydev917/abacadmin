<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to re-identify an item.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.ReidentifyContentRequest</code>
 */
class ReidentifyContentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource name.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Configuration for the re-identification of the content item.
     * This field shares the same proto message type that is used for
     * de-identification, however its usage here is for the reversal of the
     * previous de-identification. Re-identification is performed by examining
     * the transformations used to de-identify the items and executing the
     * reverse. This requires that only reversible transformations
     * be provided here. The reversible transformations are:
     *  - `CryptoDeterministicConfig`
     *  - `CryptoReplaceFfxFpeConfig`
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DeidentifyConfig reidentify_config = 2;</code>
     */
    private $reidentify_config = null;
    /**
     * Configuration for the inspector.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InspectConfig inspect_config = 3;</code>
     */
    private $inspect_config = null;
    /**
     * The item to re-identify. Will be treated as text.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.ContentItem item = 4;</code>
     */
    private $item = null;
    /**
     * Optional template to use. Any configuration directly specified in
     * `inspect_config` will override those set in the template. Singular fields
     * that are set in this request will replace their corresponding fields in the
     * template. Repeated fields are appended. Singular sub-messages and groups
     * are recursively merged.
     *
     * Generated from protobuf field <code>string inspect_template_name = 5;</code>
     */
    private $inspect_template_name = '';
    /**
     * Optional template to use. References an instance of `DeidentifyTemplate`.
     * Any configuration directly specified in `reidentify_config` or
     * `inspect_config` will override those set in the template. Singular fields
     * that are set in this request will replace their corresponding fields in the
     * template. Repeated fields are appended. Singular sub-messages and groups
     * are recursively merged.
     *
     * Generated from protobuf field <code>string reidentify_template_name = 6;</code>
     */
    private $reidentify_template_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource name.
     *     @type \Google\Cloud\Dlp\V2\DeidentifyConfig $reidentify_config
     *           Configuration for the re-identification of the content item.
     *           This field shares the same proto message type that is used for
     *           de-identification, however its usage here is for the reversal of the
     *           previous de-identification. Re-identification is performed by examining
     *           the transformations used to de-identify the items and executing the
     *           reverse. This requires that only reversible transformations
     *           be provided here. The reversible transformations are:
     *            - `CryptoDeterministicConfig`
     *            - `CryptoReplaceFfxFpeConfig`
     *     @type \Google\Cloud\Dlp\V2\InspectConfig $inspect_config
     *           Configuration for the inspector.
     *     @type \Google\Cloud\Dlp\V2\ContentItem $item
     *           The item to re-identify. Will be treated as text.
     *     @type string $inspect_template_name
     *           Optional template to use. Any configuration directly specified in
     *           `inspect_config` will override those set in the template. Singular fields
     *           that are set in this request will replace their corresponding fields in the
     *           template. Repeated fields are appended. Singular sub-messages and groups
     *           are recursively merged.
     *     @type string $reidentify_template_name
     *           Optional template to use. References an instance of `DeidentifyTemplate`.
     *           Any configuration directly specified in `reidentify_config` or
     *           `inspect_config` will override those set in the template. Singular fields
     *           that are set in this request will replace their corresponding fields in the
     *           template. Repeated fields are appended. Singular sub-messages and groups
     *           are recursively merged.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource name.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource name.
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
     * Configuration for the re-identification of the content item.
     * This field shares the same proto message type that is used for
     * de-identification, however its usage here is for the reversal of the
     * previous de-identification. Re-identification is performed by examining
     * the transformations used to de-identify the items and executing the
     * reverse. This requires that only reversible transformations
     * be provided here. The reversible transformations are:
     *  - `CryptoDeterministicConfig`
     *  - `CryptoReplaceFfxFpeConfig`
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DeidentifyConfig reidentify_config = 2;</code>
     * @return \Google\Cloud\Dlp\V2\DeidentifyConfig
     */
    public function getReidentifyConfig()
    {
        return $this->reidentify_config;
    }

    /**
     * Configuration for the re-identification of the content item.
     * This field shares the same proto message type that is used for
     * de-identification, however its usage here is for the reversal of the
     * previous de-identification. Re-identification is performed by examining
     * the transformations used to de-identify the items and executing the
     * reverse. This requires that only reversible transformations
     * be provided here. The reversible transformations are:
     *  - `CryptoDeterministicConfig`
     *  - `CryptoReplaceFfxFpeConfig`
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DeidentifyConfig reidentify_config = 2;</code>
     * @param \Google\Cloud\Dlp\V2\DeidentifyConfig $var
     * @return $this
     */
    public function setReidentifyConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\DeidentifyConfig::class);
        $this->reidentify_config = $var;

        return $this;
    }

    /**
     * Configuration for the inspector.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InspectConfig inspect_config = 3;</code>
     * @return \Google\Cloud\Dlp\V2\InspectConfig
     */
    public function getInspectConfig()
    {
        return $this->inspect_config;
    }

    /**
     * Configuration for the inspector.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InspectConfig inspect_config = 3;</code>
     * @param \Google\Cloud\Dlp\V2\InspectConfig $var
     * @return $this
     */
    public function setInspectConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\InspectConfig::class);
        $this->inspect_config = $var;

        return $this;
    }

    /**
     * The item to re-identify. Will be treated as text.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.ContentItem item = 4;</code>
     * @return \Google\Cloud\Dlp\V2\ContentItem
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * The item to re-identify. Will be treated as text.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.ContentItem item = 4;</code>
     * @param \Google\Cloud\Dlp\V2\ContentItem $var
     * @return $this
     */
    public function setItem($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\ContentItem::class);
        $this->item = $var;

        return $this;
    }

    /**
     * Optional template to use. Any configuration directly specified in
     * `inspect_config` will override those set in the template. Singular fields
     * that are set in this request will replace their corresponding fields in the
     * template. Repeated fields are appended. Singular sub-messages and groups
     * are recursively merged.
     *
     * Generated from protobuf field <code>string inspect_template_name = 5;</code>
     * @return string
     */
    public function getInspectTemplateName()
    {
        return $this->inspect_template_name;
    }

    /**
     * Optional template to use. Any configuration directly specified in
     * `inspect_config` will override those set in the template. Singular fields
     * that are set in this request will replace their corresponding fields in the
     * template. Repeated fields are appended. Singular sub-messages and groups
     * are recursively merged.
     *
     * Generated from protobuf field <code>string inspect_template_name = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setInspectTemplateName($var)
    {
        GPBUtil::checkString($var, True);
        $this->inspect_template_name = $var;

        return $this;
    }

    /**
     * Optional template to use. References an instance of `DeidentifyTemplate`.
     * Any configuration directly specified in `reidentify_config` or
     * `inspect_config` will override those set in the template. Singular fields
     * that are set in this request will replace their corresponding fields in the
     * template. Repeated fields are appended. Singular sub-messages and groups
     * are recursively merged.
     *
     * Generated from protobuf field <code>string reidentify_template_name = 6;</code>
     * @return string
     */
    public function getReidentifyTemplateName()
    {
        return $this->reidentify_template_name;
    }

    /**
     * Optional template to use. References an instance of `DeidentifyTemplate`.
     * Any configuration directly specified in `reidentify_config` or
     * `inspect_config` will override those set in the template. Singular fields
     * that are set in this request will replace their corresponding fields in the
     * template. Repeated fields are appended. Singular sub-messages and groups
     * are recursively merged.
     *
     * Generated from protobuf field <code>string reidentify_template_name = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setReidentifyTemplateName($var)
    {
        GPBUtil::checkString($var, True);
        $this->reidentify_template_name = $var;

        return $this;
    }

}

