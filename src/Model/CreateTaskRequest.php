<?php

namespace Ebay\Sell\Feed\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The type that defines the fields for the <b> createTask</b> method.
 */
class CreateTaskRequest extends AbstractModel
{
    /**
     * The feed type associated with the task. Only use a <strong>feedType</strong>
     * that is available for your API. Available feed types:<ul><li><a
     * href="/api-docs/sell/static/feed/lms-feeds-quick-reference.html#trading-upload-feed-types"
     * target="_blank">Inventory upload feed types</a></li><li><a
     * href="/api-docs/sell/static/feed/lms-feeds-quick-reference.html#merchant-data-upload-feed-types"
     * target="_blank">Fulfillment upload feed types</a></li><li><a
     * href="/api-docs/sell/static/file-exchange-migration/fx-feedtypes.html"
     * target="_blank">File Exchange FeedTypes</a></li></ul>.
     *
     * @var string
     */
    public $feedType = null;

    /**
     * The schemaVersion/version number of the file format (use the schema version of
     * the API to which you are programming):<ul><li><a
     * href="/api-docs/sell/static/lms-migration/lms-to-feed-version-details-schema-version.html"
     * target="_blank">LMS Version Details / Schema Version</a></li><li><a
     * href="/api-docs/sell/static/file-exchange-migration/fx-schema-version.html"
     * target="_blank">File Exchange Schema Version</a></li></ul>.
     *
     * @var string
     */
    public $schemaVersion = null;
}
