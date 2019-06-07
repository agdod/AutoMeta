<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/workflow_templates.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request to delete a workflow template.
 * Currently started workflows will remain running.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.DeleteWorkflowTemplateRequest</code>
 */
class DeleteWorkflowTemplateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The "resource name" of the workflow template, as described
     * in https://cloud.google.com/apis/design/resource_names of the form
     * `projects/{project_id}/regions/{region}/workflowTemplates/{template_id}`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Optional. The version of workflow template to delete. If specified,
     * will only delete the template if the current server version matches
     * specified version.
     *
     * Generated from protobuf field <code>int32 version = 2;</code>
     */
    private $version = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The "resource name" of the workflow template, as described
     *           in https://cloud.google.com/apis/design/resource_names of the form
     *           `projects/{project_id}/regions/{region}/workflowTemplates/{template_id}`
     *     @type int $version
     *           Optional. The version of workflow template to delete. If specified,
     *           will only delete the template if the current server version matches
     *           specified version.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\WorkflowTemplates::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The "resource name" of the workflow template, as described
     * in https://cloud.google.com/apis/design/resource_names of the form
     * `projects/{project_id}/regions/{region}/workflowTemplates/{template_id}`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The "resource name" of the workflow template, as described
     * in https://cloud.google.com/apis/design/resource_names of the form
     * `projects/{project_id}/regions/{region}/workflowTemplates/{template_id}`
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
     * Optional. The version of workflow template to delete. If specified,
     * will only delete the template if the current server version matches
     * specified version.
     *
     * Generated from protobuf field <code>int32 version = 2;</code>
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Optional. The version of workflow template to delete. If specified,
     * will only delete the template if the current server version matches
     * specified version.
     *
     * Generated from protobuf field <code>int32 version = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkInt32($var);
        $this->version = $var;

        return $this;
    }

}

