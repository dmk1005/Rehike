<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: request/search_request_params.proto

namespace Com\Youtube\Innertube\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>com.youtube.innertube.request.SearchRequestParams</code>
 */
class SearchRequestParams extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional .com.youtube.innertube.request.SearchRequestParams.Sort sort = 1;</code>
     */
    protected $sort = null;
    /**
     * Generated from protobuf field <code>optional .com.youtube.innertube.request.SearchRequestParams.Filter filter = 2;</code>
     */
    protected $filter = null;
    /**
     * Search index (offset)
     * Typically, this should be equal to
     * page number * 20
     * for paged results
     *
     * Generated from protobuf field <code>optional int32 index = 9;</code>
     */
    protected $index = null;
    /**
     * Unknown variable. This is set to an empty string (or a 00 byte)
     * in the case of paginated navigation (without filters?)
     *
     * Generated from protobuf field <code>optional string something = 61;</code>
     */
    protected $something = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $sort
     *     @type \Com\Youtube\Innertube\Request\SearchRequestParams\Filter $filter
     *     @type int $index
     *           Search index (offset)
     *           Typically, this should be equal to
     *           page number * 20
     *           for paged results
     *     @type string $something
     *           Unknown variable. This is set to an empty string (or a 00 byte)
     *           in the case of paginated navigation (without filters?)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Request\SearchRequestParams::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional .com.youtube.innertube.request.SearchRequestParams.Sort sort = 1;</code>
     * @return int
     */
    public function getSort()
    {
        return isset($this->sort) ? $this->sort : 0;
    }

    public function hasSort()
    {
        return isset($this->sort);
    }

    public function clearSort()
    {
        unset($this->sort);
    }

    /**
     * Generated from protobuf field <code>optional .com.youtube.innertube.request.SearchRequestParams.Sort sort = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setSort($var)
    {
        GPBUtil::checkEnum($var, \Com\Youtube\Innertube\Request\SearchRequestParams\Sort::class);
        $this->sort = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .com.youtube.innertube.request.SearchRequestParams.Filter filter = 2;</code>
     * @return \Com\Youtube\Innertube\Request\SearchRequestParams\Filter|null
     */
    public function getFilter()
    {
        return $this->filter;
    }

    public function hasFilter()
    {
        return isset($this->filter);
    }

    public function clearFilter()
    {
        unset($this->filter);
    }

    /**
     * Generated from protobuf field <code>optional .com.youtube.innertube.request.SearchRequestParams.Filter filter = 2;</code>
     * @param \Com\Youtube\Innertube\Request\SearchRequestParams\Filter $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkMessage($var, \Com\Youtube\Innertube\Request\SearchRequestParams\Filter::class);
        $this->filter = $var;

        return $this;
    }

    /**
     * Search index (offset)
     * Typically, this should be equal to
     * page number * 20
     * for paged results
     *
     * Generated from protobuf field <code>optional int32 index = 9;</code>
     * @return int
     */
    public function getIndex()
    {
        return isset($this->index) ? $this->index : 0;
    }

    public function hasIndex()
    {
        return isset($this->index);
    }

    public function clearIndex()
    {
        unset($this->index);
    }

    /**
     * Search index (offset)
     * Typically, this should be equal to
     * page number * 20
     * for paged results
     *
     * Generated from protobuf field <code>optional int32 index = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkInt32($var);
        $this->index = $var;

        return $this;
    }

    /**
     * Unknown variable. This is set to an empty string (or a 00 byte)
     * in the case of paginated navigation (without filters?)
     *
     * Generated from protobuf field <code>optional string something = 61;</code>
     * @return string
     */
    public function getSomething()
    {
        return isset($this->something) ? $this->something : '';
    }

    public function hasSomething()
    {
        return isset($this->something);
    }

    public function clearSomething()
    {
        unset($this->something);
    }

    /**
     * Unknown variable. This is set to an empty string (or a 00 byte)
     * in the case of paginated navigation (without filters?)
     *
     * Generated from protobuf field <code>optional string something = 61;</code>
     * @param string $var
     * @return $this
     */
    public function setSomething($var)
    {
        GPBUtil::checkString($var, True);
        $this->something = $var;

        return $this;
    }

}

