<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 *当前软件版本信息
 *
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.VersionInfo</code>
 */
class VersionInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string title = 1;</code>
     */
    protected $title = '';
    /**
     * Generated from protobuf field <code>string app = 2;</code>
     */
    protected $app = '';
    /**
     * Generated from protobuf field <code>string chain33 = 3;</code>
     */
    protected $chain33 = '';
    /**
     * Generated from protobuf field <code>string localDb = 4;</code>
     */
    protected $localDb = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $title
     *     @type string $app
     *     @type string $chain33
     *     @type string $localDb
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string title = 1;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Generated from protobuf field <code>string title = 1;</code>
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
     * Generated from protobuf field <code>string app = 2;</code>
     * @return string
     */
    public function getApp()
    {
        return $this->app;
    }

    /**
     * Generated from protobuf field <code>string app = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setApp($var)
    {
        GPBUtil::checkString($var, True);
        $this->app = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string chain33 = 3;</code>
     * @return string
     */
    public function getChain33()
    {
        return $this->chain33;
    }

    /**
     * Generated from protobuf field <code>string chain33 = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setChain33($var)
    {
        GPBUtil::checkString($var, True);
        $this->chain33 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string localDb = 4;</code>
     * @return string
     */
    public function getLocalDb()
    {
        return $this->localDb;
    }

    /**
     * Generated from protobuf field <code>string localDb = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setLocalDb($var)
    {
        GPBUtil::checkString($var, True);
        $this->localDb = $var;

        return $this;
    }

}

