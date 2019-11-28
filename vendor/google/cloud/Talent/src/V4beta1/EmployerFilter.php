<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/filters.proto

namespace Google\Cloud\Talent\V4beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Employer filter of the search.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4beta1.EmployerFilter</code>
 */
class EmployerFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the employer, for example "Google", "Alphabet".
     *
     * Generated from protobuf field <code>string employer = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $employer = '';
    /**
     * Define set of
     * [EmploymentRecord][google.cloud.talent.v4beta1.EmploymentRecord]s to search
     * against.
     * Defaults to
     * [EmployerFilterMode.ALL_EMPLOYMENT_RECORDS][google.cloud.talent.v4beta1.EmployerFilter.EmployerFilterMode.ALL_EMPLOYMENT_RECORDS].
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.EmployerFilter.EmployerFilterMode mode = 2;</code>
     */
    private $mode = 0;
    /**
     * Whether to apply negation to the filter so profiles matching the filter
     * is excluded.
     *
     * Generated from protobuf field <code>bool negated = 3;</code>
     */
    private $negated = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $employer
     *           Required. The name of the employer, for example "Google", "Alphabet".
     *     @type int $mode
     *           Define set of
     *           [EmploymentRecord][google.cloud.talent.v4beta1.EmploymentRecord]s to search
     *           against.
     *           Defaults to
     *           [EmployerFilterMode.ALL_EMPLOYMENT_RECORDS][google.cloud.talent.v4beta1.EmployerFilter.EmployerFilterMode.ALL_EMPLOYMENT_RECORDS].
     *     @type bool $negated
     *           Whether to apply negation to the filter so profiles matching the filter
     *           is excluded.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Filters::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the employer, for example "Google", "Alphabet".
     *
     * Generated from protobuf field <code>string employer = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getEmployer()
    {
        return $this->employer;
    }

    /**
     * Required. The name of the employer, for example "Google", "Alphabet".
     *
     * Generated from protobuf field <code>string employer = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setEmployer($var)
    {
        GPBUtil::checkString($var, True);
        $this->employer = $var;

        return $this;
    }

    /**
     * Define set of
     * [EmploymentRecord][google.cloud.talent.v4beta1.EmploymentRecord]s to search
     * against.
     * Defaults to
     * [EmployerFilterMode.ALL_EMPLOYMENT_RECORDS][google.cloud.talent.v4beta1.EmployerFilter.EmployerFilterMode.ALL_EMPLOYMENT_RECORDS].
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.EmployerFilter.EmployerFilterMode mode = 2;</code>
     * @return int
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Define set of
     * [EmploymentRecord][google.cloud.talent.v4beta1.EmploymentRecord]s to search
     * against.
     * Defaults to
     * [EmployerFilterMode.ALL_EMPLOYMENT_RECORDS][google.cloud.talent.v4beta1.EmployerFilter.EmployerFilterMode.ALL_EMPLOYMENT_RECORDS].
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.EmployerFilter.EmployerFilterMode mode = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Talent\V4beta1\EmployerFilter_EmployerFilterMode::class);
        $this->mode = $var;

        return $this;
    }

    /**
     * Whether to apply negation to the filter so profiles matching the filter
     * is excluded.
     *
     * Generated from protobuf field <code>bool negated = 3;</code>
     * @return bool
     */
    public function getNegated()
    {
        return $this->negated;
    }

    /**
     * Whether to apply negation to the filter so profiles matching the filter
     * is excluded.
     *
     * Generated from protobuf field <code>bool negated = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setNegated($var)
    {
        GPBUtil::checkBool($var);
        $this->negated = $var;

        return $this;
    }

}

