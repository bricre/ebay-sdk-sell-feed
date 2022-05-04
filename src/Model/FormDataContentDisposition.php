<?php

namespace Ebay\Sell\Feed\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The metadata for the file.
 */
class FormDataContentDisposition extends AbstractModel
{
    /**
     * The file creation date. <br /><br /><b> Format: </b> UTC
     * <code>yyyy-MM-ddThh:mm:ss.SSSZ</code><p><b>For example:</b><p>Created on
     * September 8, 2019</p><p><code>2019-09-08T00:00:00.000Z</code></p>.
     *
     * @var string
     */
    public $creationDate = null;

    /**
     * The name of the file including its extension (for example, xml or csv) to be
     * uploaded.
     *
     * @var string
     */
    public $fileName = null;

    /**
     * The file modified date. <br /><br /><b> Format: </b> UTC
     * <code>yyyy-MM-ddThh:mm:ss.SSSZ</code><p><b>For example:</b><p>Created on
     * September 9, 2019</p><p><code>2019-09-09T00:00:00.000Z</code></p>.
     *
     * @var string
     */
    public $modificationDate = null;

    /**
     * A content identifier. The only presently supported name is <code>file</code>.
     *
     * @var string
     */
    public $name = null;

    /**
     * The parameters you want associated with the file.
     *
     * @var object
     */
    public $parameters = null;

    /**
     * The date you read the file. <br /><br /><b> Format: </b> UTC
     * <code>yyyy-MM-ddThh:mm:ss.SSSZ</code><p><b>For example:</b><p>Created on
     * September 10, 2019</p><p><code>2019-09-10T00:00:00.000Z</code></p>.
     *
     * @var string
     */
    public $readDate = null;

    /**
     * The size of the file.
     *
     * @var int
     */
    public $size = null;

    /**
     * The file type. The only presently supported type is <code>form-data</code>.
     *
     * @var string
     */
    public $type = null;
}
