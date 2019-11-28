<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/iam/admin/v1/iam.proto

namespace Google\Iam\Admin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A role in the Identity and Access Management API.
 *
 * Generated from protobuf message <code>google.iam.admin.v1.Role</code>
 */
class Role extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the role.
     * When Role is used in CreateRole, the role name must not be set.
     * When Role is used in output and other input such as UpdateRole, the role
     * name is the complete path, e.g., roles/logging.viewer for curated roles
     * and organizations/{ORGANIZATION_ID}/roles/logging.viewer for custom roles.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Optional.  A human-readable title for the role.  Typically this
     * is limited to 100 UTF-8 bytes.
     *
     * Generated from protobuf field <code>string title = 2;</code>
     */
    private $title = '';
    /**
     * Optional.  A human-readable description for the role.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    private $description = '';
    /**
     * The names of the permissions this role grants when bound in an IAM policy.
     *
     * Generated from protobuf field <code>repeated string included_permissions = 7;</code>
     */
    private $included_permissions;
    /**
     * The current launch stage of the role.
     *
     * Generated from protobuf field <code>.google.iam.admin.v1.Role.RoleLaunchStage stage = 8;</code>
     */
    private $stage = 0;
    /**
     * Used to perform a consistent read-modify-write.
     *
     * Generated from protobuf field <code>bytes etag = 9;</code>
     */
    private $etag = '';
    /**
     * The current deleted state of the role. This field is read only.
     * It will be ignored in calls to CreateRole and UpdateRole.
     *
     * Generated from protobuf field <code>bool deleted = 11;</code>
     */
    private $deleted = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of the role.
     *           When Role is used in CreateRole, the role name must not be set.
     *           When Role is used in output and other input such as UpdateRole, the role
     *           name is the complete path, e.g., roles/logging.viewer for curated roles
     *           and organizations/{ORGANIZATION_ID}/roles/logging.viewer for custom roles.
     *     @type string $title
     *           Optional.  A human-readable title for the role.  Typically this
     *           is limited to 100 UTF-8 bytes.
     *     @type string $description
     *           Optional.  A human-readable description for the role.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $included_permissions
     *           The names of the permissions this role grants when bound in an IAM policy.
     *     @type int $stage
     *           The current launch stage of the role.
     *     @type string $etag
     *           Used to perform a consistent read-modify-write.
     *     @type bool $deleted
     *           The current deleted state of the role. This field is read only.
     *           It will be ignored in calls to CreateRole and UpdateRole.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Iam\Admin\V1\Iam::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the role.
     * When Role is used in CreateRole, the role name must not be set.
     * When Role is used in output and other input such as UpdateRole, the role
     * name is the complete path, e.g., roles/logging.viewer for curated roles
     * and organizations/{ORGANIZATION_ID}/roles/logging.viewer for custom roles.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the role.
     * When Role is used in CreateRole, the role name must not be set.
     * When Role is used in output and other input such as UpdateRole, the role
     * name is the complete path, e.g., roles/logging.viewer for curated roles
     * and organizations/{ORGANIZATION_ID}/roles/logging.viewer for custom roles.
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
     * Optional.  A human-readable title for the role.  Typically this
     * is limited to 100 UTF-8 bytes.
     *
     * Generated from protobuf field <code>string title = 2;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Optional.  A human-readable title for the role.  Typically this
     * is limited to 100 UTF-8 bytes.
     *
     * Generated from protobuf field <code>string title = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * Optional.  A human-readable description for the role.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional.  A human-readable description for the role.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * The names of the permissions this role grants when bound in an IAM policy.
     *
     * Generated from protobuf field <code>repeated string included_permissions = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIncludedPermissions()
    {
        return $this->included_permissions;
    }

    /**
     * The names of the permissions this role grants when bound in an IAM policy.
     *
     * Generated from protobuf field <code>repeated string included_permissions = 7;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIncludedPermissions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->included_permissions = $arr;

        return $this;
    }

    /**
     * The current launch stage of the role.
     *
     * Generated from protobuf field <code>.google.iam.admin.v1.Role.RoleLaunchStage stage = 8;</code>
     * @return int
     */
    public function getStage()
    {
        return $this->stage;
    }

    /**
     * The current launch stage of the role.
     *
     * Generated from protobuf field <code>.google.iam.admin.v1.Role.RoleLaunchStage stage = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setStage($var)
    {
        GPBUtil::checkEnum($var, \Google\Iam\Admin\V1\Role_RoleLaunchStage::class);
        $this->stage = $var;

        return $this;
    }

    /**
     * Used to perform a consistent read-modify-write.
     *
     * Generated from protobuf field <code>bytes etag = 9;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Used to perform a consistent read-modify-write.
     *
     * Generated from protobuf field <code>bytes etag = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, False);
        $this->etag = $var;

        return $this;
    }

    /**
     * The current deleted state of the role. This field is read only.
     * It will be ignored in calls to CreateRole and UpdateRole.
     *
     * Generated from protobuf field <code>bool deleted = 11;</code>
     * @return bool
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * The current deleted state of the role. This field is read only.
     * It will be ignored in calls to CreateRole and UpdateRole.
     *
     * Generated from protobuf field <code>bool deleted = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setDeleted($var)
    {
        GPBUtil::checkBool($var);
        $this->deleted = $var;

        return $this;
    }

}

