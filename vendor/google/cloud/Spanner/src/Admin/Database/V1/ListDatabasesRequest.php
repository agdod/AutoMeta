<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/database/v1/spanner_database_admin.proto

namespace Google\Cloud\Spanner\Admin\Database\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for
 * [ListDatabases][google.spanner.admin.database.v1.DatabaseAdmin.ListDatabases].
 *
 * Generated from protobuf message <code>google.spanner.admin.database.v1.ListDatabasesRequest</code>
 */
class ListDatabasesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The instance whose databases should be listed.
     * Values are of the form `projects/<project>/instances/<instance>`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    private $parent = '';
    /**
     * Number of databases to be returned in the response. If 0 or less,
     * defaults to the server's maximum allowed page size.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     */
    private $page_size = 0;
    /**
     * If non-empty, `page_token` should contain a
     * [next_page_token][google.spanner.admin.database.v1.ListDatabasesResponse.next_page_token]
     * from a previous
     * [ListDatabasesResponse][google.spanner.admin.database.v1.ListDatabasesResponse].
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     */
    private $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The instance whose databases should be listed.
     *           Values are of the form `projects/<project>/instances/<instance>`.
     *     @type int $page_size
     *           Number of databases to be returned in the response. If 0 or less,
     *           defaults to the server's maximum allowed page size.
     *     @type string $page_token
     *           If non-empty, `page_token` should contain a
     *           [next_page_token][google.spanner.admin.database.v1.ListDatabasesResponse.next_page_token]
     *           from a previous
     *           [ListDatabasesResponse][google.spanner.admin.database.v1.ListDatabasesResponse].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\Admin\Database\V1\SpannerDatabaseAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The instance whose databases should be listed.
     * Values are of the form `projects/<project>/instances/<instance>`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The instance whose databases should be listed.
     * Values are of the form `projects/<project>/instances/<instance>`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
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
     * Number of databases to be returned in the response. If 0 or less,
     * defaults to the server's maximum allowed page size.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Number of databases to be returned in the response. If 0 or less,
     * defaults to the server's maximum allowed page size.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * If non-empty, `page_token` should contain a
     * [next_page_token][google.spanner.admin.database.v1.ListDatabasesResponse.next_page_token]
     * from a previous
     * [ListDatabasesResponse][google.spanner.admin.database.v1.ListDatabasesResponse].
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * If non-empty, `page_token` should contain a
     * [next_page_token][google.spanner.admin.database.v1.ListDatabasesResponse.next_page_token]
     * from a previous
     * [ListDatabasesResponse][google.spanner.admin.database.v1.ListDatabasesResponse].
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}
