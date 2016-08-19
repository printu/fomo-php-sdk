<?php
namespace Fomo;

include_once 'FomoEventBasic.php';

/**
 * Class FomoEvent
 */
class FomoEvent extends FomoEventBasic
{
    /**
     * @var string Id of the event type (needed only for the update)
     */
    public $id;

    /**
     * @var string Created timestamp (received info)
     */
    public $created_at;

    /**
     * @var string Updated timestamp (received info)
     */
    public $updated_at;

    /**
     * @var string Message template (received info)
     */
    public $message;

    /**
     * @var string Full link (received info)
     */
    public $link;
}