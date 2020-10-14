<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: apis/iam/user/v1alpha/user.proto

namespace Sugarcrm\Apis\Iam\User\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>sugarcrm.apis.iam.user.v1alpha.User</code>
 */
class User extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name of the user using the following format:
     * srn:cloud:iam::1234567890:user:e9b578dc-b5ae-41b6-a680-195cfc018f30
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Timestamp the resource was created
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2;</code>
     */
    private $create_time = null;
    /**
     * Timestamp the resource was modified
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modify_time = 3;</code>
     */
    private $modify_time = null;
    /**
     * User attributes
     *
     * Generated from protobuf field <code>.sugarcrm.apis.iam.user.v1alpha.Attributes attributes = 4;</code>
     */
    private $attributes = null;
    /**
     * Custom attributes
     *
     * Generated from protobuf field <code>repeated .sugarcrm.apis.iam.user.v1alpha.CustomAttribute custom_attributes = 5;</code>
     */
    private $custom_attributes;
    /**
     * Generated from protobuf field <code>.sugarcrm.apis.iam.user.v1alpha.User.Status status = 6;</code>
     */
    private $status = 0;
    /**
     * External ids associated to this user for each provider. If no external
     * id is set for a given provider, then this user cannot be authenticated
     * as such using that provider. This also applies for the local provider
     * where a key/value map of `local` => `sub_id` is required.
     *
     * Generated from protobuf field <code>map<string, string> provider_ids = 7;</code>
     */
    private $provider_ids;
    /**
     * Time when User was last logged-in to the system
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_login = 8;</code>
     */
    private $last_login = null;
    /**
     * User attempts to login counter
     *
     * Generated from protobuf field <code>uint32 login_attempts = 9;</code>
     */
    private $login_attempts = 0;
    /**
     * Time when User password was last changed
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp password_last_changed = 10;</code>
     */
    private $password_last_changed = null;
    /**
     * Time when User is locked-out
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp lockout_time = 11;</code>
     */
    private $lockout_time = null;
    /**
     * Is User locked-out?
     *
     * Generated from protobuf field <code>bool is_locked_out = 12;</code>
     */
    private $is_locked_out = false;
    /**
     * Counter of failed login attempts
     *
     * Generated from protobuf field <code>uint32 failed_login_attempts = 13;</code>
     */
    private $failed_login_attempts = 0;
    /**
     * Generated from protobuf field <code>.sugarcrm.apis.iam.user.v1alpha.User.UserType user_type = 14;</code>
     */
    private $user_type = 0;
    /**
     * SRN (Resource name) of the User who created this particular User
     *
     * Generated from protobuf field <code>string created_by = 15;</code>
     */
    private $created_by = '';
    /**
     * SRN (Resource name) of the User who modified this particular User
     *
     * Generated from protobuf field <code>string modified_by = 16;</code>
     */
    private $modified_by = '';

    public function __construct() {
        \GPBMetadata\Apis\Iam\User\V1Alpha\User::initOnce();
        parent::__construct();
    }

    /**
     * Resource name of the user using the following format:
     * srn:cloud:iam::1234567890:user:e9b578dc-b5ae-41b6-a680-195cfc018f30
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Resource name of the user using the following format:
     * srn:cloud:iam::1234567890:user:e9b578dc-b5ae-41b6-a680-195cfc018f30
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
     * Timestamp the resource was created
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    /**
     * Timestamp the resource was created
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Timestamp the resource was modified
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modify_time = 3;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getModifyTime()
    {
        return $this->modify_time;
    }

    /**
     * Timestamp the resource was modified
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp modify_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setModifyTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->modify_time = $var;

        return $this;
    }

    /**
     * User attributes
     *
     * Generated from protobuf field <code>.sugarcrm.apis.iam.user.v1alpha.Attributes attributes = 4;</code>
     * @return \Sugarcrm\Apis\Iam\User\V1alpha\Attributes
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * User attributes
     *
     * Generated from protobuf field <code>.sugarcrm.apis.iam.user.v1alpha.Attributes attributes = 4;</code>
     * @param \Sugarcrm\Apis\Iam\User\V1alpha\Attributes $var
     * @return $this
     */
    public function setAttributes($var)
    {
        GPBUtil::checkMessage($var, \Sugarcrm\Apis\Iam\User\V1alpha\Attributes::class);
        $this->attributes = $var;

        return $this;
    }

    /**
     * Custom attributes
     *
     * Generated from protobuf field <code>repeated .sugarcrm.apis.iam.user.v1alpha.CustomAttribute custom_attributes = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCustomAttributes()
    {
        return $this->custom_attributes;
    }

    /**
     * Custom attributes
     *
     * Generated from protobuf field <code>repeated .sugarcrm.apis.iam.user.v1alpha.CustomAttribute custom_attributes = 5;</code>
     * @param \Sugarcrm\Apis\Iam\User\V1alpha\CustomAttribute[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCustomAttributes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Sugarcrm\Apis\Iam\User\V1alpha\CustomAttribute::class);
        $this->custom_attributes = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.sugarcrm.apis.iam.user.v1alpha.User.Status status = 6;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.sugarcrm.apis.iam.user.v1alpha.User.Status status = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Sugarcrm\Apis\Iam\User\V1alpha\User_Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * External ids associated to this user for each provider. If no external
     * id is set for a given provider, then this user cannot be authenticated
     * as such using that provider. This also applies for the local provider
     * where a key/value map of `local` => `sub_id` is required.
     *
     * Generated from protobuf field <code>map<string, string> provider_ids = 7;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getProviderIds()
    {
        return $this->provider_ids;
    }

    /**
     * External ids associated to this user for each provider. If no external
     * id is set for a given provider, then this user cannot be authenticated
     * as such using that provider. This also applies for the local provider
     * where a key/value map of `local` => `sub_id` is required.
     *
     * Generated from protobuf field <code>map<string, string> provider_ids = 7;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setProviderIds($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->provider_ids = $arr;

        return $this;
    }

    /**
     * Time when User was last logged-in to the system
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_login = 8;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getLastLogin()
    {
        return $this->last_login;
    }

    /**
     * Time when User was last logged-in to the system
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_login = 8;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastLogin($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_login = $var;

        return $this;
    }

    /**
     * User attempts to login counter
     *
     * Generated from protobuf field <code>uint32 login_attempts = 9;</code>
     * @return int
     */
    public function getLoginAttempts()
    {
        return $this->login_attempts;
    }

    /**
     * User attempts to login counter
     *
     * Generated from protobuf field <code>uint32 login_attempts = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setLoginAttempts($var)
    {
        GPBUtil::checkUint32($var);
        $this->login_attempts = $var;

        return $this;
    }

    /**
     * Time when User password was last changed
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp password_last_changed = 10;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getPasswordLastChanged()
    {
        return $this->password_last_changed;
    }

    /**
     * Time when User password was last changed
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp password_last_changed = 10;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setPasswordLastChanged($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->password_last_changed = $var;

        return $this;
    }

    /**
     * Time when User is locked-out
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp lockout_time = 11;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getLockoutTime()
    {
        return $this->lockout_time;
    }

    /**
     * Time when User is locked-out
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp lockout_time = 11;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLockoutTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->lockout_time = $var;

        return $this;
    }

    /**
     * Is User locked-out?
     *
     * Generated from protobuf field <code>bool is_locked_out = 12;</code>
     * @return bool
     */
    public function getIsLockedOut()
    {
        return $this->is_locked_out;
    }

    /**
     * Is User locked-out?
     *
     * Generated from protobuf field <code>bool is_locked_out = 12;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsLockedOut($var)
    {
        GPBUtil::checkBool($var);
        $this->is_locked_out = $var;

        return $this;
    }

    /**
     * Counter of failed login attempts
     *
     * Generated from protobuf field <code>uint32 failed_login_attempts = 13;</code>
     * @return int
     */
    public function getFailedLoginAttempts()
    {
        return $this->failed_login_attempts;
    }

    /**
     * Counter of failed login attempts
     *
     * Generated from protobuf field <code>uint32 failed_login_attempts = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setFailedLoginAttempts($var)
    {
        GPBUtil::checkUint32($var);
        $this->failed_login_attempts = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.sugarcrm.apis.iam.user.v1alpha.User.UserType user_type = 14;</code>
     * @return int
     */
    public function getUserType()
    {
        return $this->user_type;
    }

    /**
     * Generated from protobuf field <code>.sugarcrm.apis.iam.user.v1alpha.User.UserType user_type = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setUserType($var)
    {
        GPBUtil::checkEnum($var, \Sugarcrm\Apis\Iam\User\V1alpha\User_UserType::class);
        $this->user_type = $var;

        return $this;
    }

    /**
     * SRN (Resource name) of the User who created this particular User
     *
     * Generated from protobuf field <code>string created_by = 15;</code>
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->created_by;
    }

    /**
     * SRN (Resource name) of the User who created this particular User
     *
     * Generated from protobuf field <code>string created_by = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setCreatedBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->created_by = $var;

        return $this;
    }

    /**
     * SRN (Resource name) of the User who modified this particular User
     *
     * Generated from protobuf field <code>string modified_by = 16;</code>
     * @return string
     */
    public function getModifiedBy()
    {
        return $this->modified_by;
    }

    /**
     * SRN (Resource name) of the User who modified this particular User
     *
     * Generated from protobuf field <code>string modified_by = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setModifiedBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->modified_by = $var;

        return $this;
    }

}
