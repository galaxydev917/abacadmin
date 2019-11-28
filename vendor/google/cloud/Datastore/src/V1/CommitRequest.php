<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1/datastore.proto

namespace Google\Cloud\Datastore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for [Datastore.Commit][google.datastore.v1.Datastore.Commit].
 *
 * Generated from protobuf message <code>google.datastore.v1.CommitRequest</code>
 */
class CommitRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The ID of the project against which to make the request.
     *
     * Generated from protobuf field <code>string project_id = 8;</code>
     */
    private $project_id = '';
    /**
     * The type of commit to perform. Defaults to `TRANSACTIONAL`.
     *
     * Generated from protobuf field <code>.google.datastore.v1.CommitRequest.Mode mode = 5;</code>
     */
    private $mode = 0;
    /**
     * The mutations to perform.
     * When mode is `TRANSACTIONAL`, mutations affecting a single entity are
     * applied in order. The following sequences of mutations affecting a single
     * entity are not permitted in a single `Commit` request:
     * - `insert` followed by `insert`
     * - `update` followed by `insert`
     * - `upsert` followed by `insert`
     * - `delete` followed by `update`
     * When mode is `NON_TRANSACTIONAL`, no two mutations may affect a single
     * entity.
     *
     * Generated from protobuf field <code>repeated .google.datastore.v1.Mutation mutations = 6;</code>
     */
    private $mutations;
    protected $transaction_selector;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_id
     *           The ID of the project against which to make the request.
     *     @type int $mode
     *           The type of commit to perform. Defaults to `TRANSACTIONAL`.
     *     @type string $transaction
     *           The identifier of the transaction associated with the commit. A
     *           transaction identifier is returned by a call to
     *           [Datastore.BeginTransaction][google.datastore.v1.Datastore.BeginTransaction].
     *     @type \Google\Cloud\Datastore\V1\Mutation[]|\Google\Protobuf\Internal\RepeatedField $mutations
     *           The mutations to perform.
     *           When mode is `TRANSACTIONAL`, mutations affecting a single entity are
     *           applied in order. The following sequences of mutations affecting a single
     *           entity are not permitted in a single `Commit` request:
     *           - `insert` followed by `insert`
     *           - `update` followed by `insert`
     *           - `upsert` followed by `insert`
     *           - `delete` followed by `update`
     *           When mode is `NON_TRANSACTIONAL`, no two mutations may affect a single
     *           entity.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Datastore\V1\Datastore::initOnce();
        parent::__construct($data);
    }

    /**
     * The ID of the project against which to make the request.
     *
     * Generated from protobuf field <code>string project_id = 8;</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * The ID of the project against which to make the request.
     *
     * Generated from protobuf field <code>string project_id = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * The type of commit to perform. Defaults to `TRANSACTIONAL`.
     *
     * Generated from protobuf field <code>.google.datastore.v1.CommitRequest.Mode mode = 5;</code>
     * @return int
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * The type of commit to perform. Defaults to `TRANSACTIONAL`.
     *
     * Generated from protobuf field <code>.google.datastore.v1.CommitRequest.Mode mode = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Datastore\V1\CommitRequest_Mode::class);
        $this->mode = $var;

        return $this;
    }

    /**
     * The identifier of the transaction associated with the commit. A
     * transaction identifier is returned by a call to
     * [Datastore.BeginTransaction][google.datastore.v1.Datastore.BeginTransaction].
     *
     * Generated from protobuf field <code>bytes transaction = 1;</code>
     * @return string
     */
    public function getTransaction()
    {
        return $this->readOneof(1);
    }

    /**
     * The identifier of the transaction associated with the commit. A
     * transaction identifier is returned by a call to
     * [Datastore.BeginTransaction][google.datastore.v1.Datastore.BeginTransaction].
     *
     * Generated from protobuf field <code>bytes transaction = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTransaction($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * The mutations to perform.
     * When mode is `TRANSACTIONAL`, mutations affecting a single entity are
     * applied in order. The following sequences of mutations affecting a single
     * entity are not permitted in a single `Commit` request:
     * - `insert` followed by `insert`
     * - `update` followed by `insert`
     * - `upsert` followed by `insert`
     * - `delete` followed by `update`
     * When mode is `NON_TRANSACTIONAL`, no two mutations may affect a single
     * entity.
     *
     * Generated from protobuf field <code>repeated .google.datastore.v1.Mutation mutations = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMutations()
    {
        return $this->mutations;
    }

    /**
     * The mutations to perform.
     * When mode is `TRANSACTIONAL`, mutations affecting a single entity are
     * applied in order. The following sequences of mutations affecting a single
     * entity are not permitted in a single `Commit` request:
     * - `insert` followed by `insert`
     * - `update` followed by `insert`
     * - `upsert` followed by `insert`
     * - `delete` followed by `update`
     * When mode is `NON_TRANSACTIONAL`, no two mutations may affect a single
     * entity.
     *
     * Generated from protobuf field <code>repeated .google.datastore.v1.Mutation mutations = 6;</code>
     * @param \Google\Cloud\Datastore\V1\Mutation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMutations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Datastore\V1\Mutation::class);
        $this->mutations = $arr;

        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionSelector()
    {
        return $this->whichOneof("transaction_selector");
    }

}

