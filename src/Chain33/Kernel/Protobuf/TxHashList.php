<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: transaction.proto

namespace Jason\Chain33\Kernel\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Jason.Chain33.Kernel.Protobuf.TxHashList</code>
 */
class TxHashList extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated bytes hashes = 1;</code>
     */
    private $hashes;
    /**
     * Generated from protobuf field <code>int64 count = 2;</code>
     */
    protected $count = 0;
    /**
     * Generated from protobuf field <code>repeated int64 expire = 3;</code>
     */
    private $expire;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $hashes
     *     @type int|string $count
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $expire
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Transaction::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated bytes hashes = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHashes()
    {
        return $this->hashes;
    }

    /**
     * Generated from protobuf field <code>repeated bytes hashes = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHashes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->hashes = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 count = 2;</code>
     * @return int|string
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Generated from protobuf field <code>int64 count = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated int64 expire = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExpire()
    {
        return $this->expire;
    }

    /**
     * Generated from protobuf field <code>repeated int64 expire = 3;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExpire($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->expire = $arr;

        return $this;
    }

}

