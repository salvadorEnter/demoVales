<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: apis/iam/resource/v1/types.proto

namespace Sugarcrm\Apis\Iam\Resource\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Service definition. This is an internal service identifier to group multiple
 * permissions together into one single service. This can be used to authorize
 * requests on a per service base level.
 *
 * Generated from protobuf message <code>sugarcrm.apis.iam.resource.v1.Service</code>
 */
class Service extends \Google\Protobuf\Internal\Message
{
    /**
     * SRN identifier.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Title.
     *
     * Generated from protobuf field <code>string title = 2;</code>
     */
    private $title = '';
    /**
     * Description
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    private $description = '';
    /**
     * List of arbitrary labels.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     */
    private $labels;

    public function __construct() {
        \GPBMetadata\Apis\Iam\Resource\V1\Types::initOnce();
        parent::__construct();
    }

    /**
     * SRN identifier.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * SRN identifier.
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
     * Title.
     *
     * Generated from protobuf field <code>string title = 2;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Title.
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
     * Description
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Description
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
     * List of arbitrary labels.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * List of arbitrary labels.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

}
