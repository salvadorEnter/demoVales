<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: apis/iam/app/v1alpha/app.proto

namespace Sugarcrm\Apis\Iam\App\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>sugarcrm.apis.iam.app.v1alpha.CreateNativeAppRequest</code>
 */
class CreateNativeAppRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The tenant SRN to register this client to
     *
     * Generated from protobuf field <code>string tenant = 1;</code>
     */
    private $tenant = '';
    /**
     * The application to be created. The allowed properties are:
     *  client_name
     *  redirect_uris
     *  scopes
     *  contacts
     *  logo_uri
     *  client_uri
     *  policy_uri
     *  tos_uri
     * Any other values are ignored.
     *
     * Generated from protobuf field <code>.sugarcrm.apis.iam.app.v1alpha.App app = 2;</code>
     */
    private $app = null;

    public function __construct() {
        \GPBMetadata\Apis\Iam\App\V1Alpha\App::initOnce();
        parent::__construct();
    }

    /**
     * The tenant SRN to register this client to
     *
     * Generated from protobuf field <code>string tenant = 1;</code>
     * @return string
     */
    public function getTenant()
    {
        return $this->tenant;
    }

    /**
     * The tenant SRN to register this client to
     *
     * Generated from protobuf field <code>string tenant = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTenant($var)
    {
        GPBUtil::checkString($var, True);
        $this->tenant = $var;

        return $this;
    }

    /**
     * The application to be created. The allowed properties are:
     *  client_name
     *  redirect_uris
     *  scopes
     *  contacts
     *  logo_uri
     *  client_uri
     *  policy_uri
     *  tos_uri
     * Any other values are ignored.
     *
     * Generated from protobuf field <code>.sugarcrm.apis.iam.app.v1alpha.App app = 2;</code>
     * @return \Sugarcrm\Apis\Iam\App\V1alpha\App
     */
    public function getApp()
    {
        return $this->app;
    }

    /**
     * The application to be created. The allowed properties are:
     *  client_name
     *  redirect_uris
     *  scopes
     *  contacts
     *  logo_uri
     *  client_uri
     *  policy_uri
     *  tos_uri
     * Any other values are ignored.
     *
     * Generated from protobuf field <code>.sugarcrm.apis.iam.app.v1alpha.App app = 2;</code>
     * @param \Sugarcrm\Apis\Iam\App\V1alpha\App $var
     * @return $this
     */
    public function setApp($var)
    {
        GPBUtil::checkMessage($var, \Sugarcrm\Apis\Iam\App\V1alpha\App::class);
        $this->app = $var;

        return $this;
    }

}

