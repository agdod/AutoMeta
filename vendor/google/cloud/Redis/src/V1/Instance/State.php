<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/redis/v1/cloud_redis.proto

namespace Google\Cloud\Redis\V1\Instance;

use UnexpectedValueException;

/**
 * Represents the different states of a Redis instance.
 *
 * Protobuf type <code>google.cloud.redis.v1.Instance.State</code>
 */
class State
{
    /**
     * Not set.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * Redis instance is being created.
     *
     * Generated from protobuf enum <code>CREATING = 1;</code>
     */
    const CREATING = 1;
    /**
     * Redis instance has been created and is fully usable.
     *
     * Generated from protobuf enum <code>READY = 2;</code>
     */
    const READY = 2;
    /**
     * Redis instance configuration is being updated. Certain kinds of updates
     * may cause the instance to become unusable while the update is in
     * progress.
     *
     * Generated from protobuf enum <code>UPDATING = 3;</code>
     */
    const UPDATING = 3;
    /**
     * Redis instance is being deleted.
     *
     * Generated from protobuf enum <code>DELETING = 4;</code>
     */
    const DELETING = 4;
    /**
     * Redis instance is being repaired and may be unusable.
     *
     * Generated from protobuf enum <code>REPAIRING = 5;</code>
     */
    const REPAIRING = 5;
    /**
     * Maintenance is being performed on this Redis instance.
     *
     * Generated from protobuf enum <code>MAINTENANCE = 6;</code>
     */
    const MAINTENANCE = 6;
    /**
     * Redis instance is failing over (availability may be affected).
     *
     * Generated from protobuf enum <code>FAILING_OVER = 9;</code>
     */
    const FAILING_OVER = 9;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::CREATING => 'CREATING',
        self::READY => 'READY',
        self::UPDATING => 'UPDATING',
        self::DELETING => 'DELETING',
        self::REPAIRING => 'REPAIRING',
        self::MAINTENANCE => 'MAINTENANCE',
        self::FAILING_OVER => 'FAILING_OVER',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(State::class, \Google\Cloud\Redis\V1\Instance_State::class);

