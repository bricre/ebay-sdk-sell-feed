<?php

namespace Ebay\Sell\Feed\Model;

use OpenAPI\Runtime\AbstractModel;

class CreateInventoryTaskRequest extends AbstractModel
{
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

    /**
     * The feed type associated with the inventory task you are about to create. Use a
     * <strong>feedType</strong> that is available for your API. Presently, only one
     * feed type is
     * available:<ul><li><code>LMS_ACTIVE_INVENTORY_REPORT</code></li></ul><br/><br/>See
     * <a
     * href="/api-docs/sell/static/feed/lms-feeds-quick-reference.html#merchant-data-reports-download-feed-types"
     * target="_blank">Report download feed types</a> for more information.
     *
     * @var string
     */
    public $feedType = null;

    /**
     * The container for the filter fields. This container is used to set the filter
     * criteria for the ActiveInventoryReport. A seller can set date range filters
     * and/or can retrieve listings in a specific state, date, or format.
     *
     * @var \Ebay\Sell\Feed\Model\InventoryFilterCriteria
     */
    public $filterCriteria = null;

    /**
     * The inventory file template used to return specific types of inventory tasks.
     * Presently not applicable for <code>LMS_ACTIVE_INVENTORY_REPORT</code>. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/feed/types/api:InventoryFileTemplateEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $inventoryFileTemplate = null;
}
