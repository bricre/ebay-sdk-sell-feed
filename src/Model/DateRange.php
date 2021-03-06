<?php

namespace Ebay\Sell\Feed\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The type that defines the fields for a date range.
 */
class DateRange extends AbstractModel
{
    /**
     * The beginning date in the range. If the parent type is included, both the
     * <strong>from</strong> and/or the <strong>to</strong> fields become conditionally
     * required.<br /><br /><b>Format: </b>UTC <code>yyyy-MM-ddThh:mm:ss.SSSZ </code>
     * <br /><br /> <b> For example: </b> Tasks within a range  <br />
     * <code>yyyy-MM-ddThh:mm:ss.SSSZ..yyyy-MM-ddThh:mm:ss.SSSZ </code> <br /><br />
     * Tasks created on March 31, 2021  <br
     * /><code>2021-03-31T00:00:00.000Z..2021-03-31T00:00:00.000Z</code>.
     *
     * @var string
     */
    public $from = null;

    /**
     * The end date for the date range, which is inclusive. If the parent type is
     * included, both the <strong>from</strong> and/or the <strong>to</strong> fields
     * become conditionally required.  <br /><br /> <b> For example: </b> <br /><br
     * />Tasks within a range  <br />
     * <code>yyyy-MM-ddThh:mm:ss.SSSZ..yyyy-MM-ddThh:mm:ss.SSSZ </code> <br /><br />
     * Tasks created on March 31, 2021 <br />
     * <code>2021-03-31T00:00:00.000Z..2021-03-31T00:00:00.000Z</code>.
     *
     * @var string
     */
    public $to = null;
}
