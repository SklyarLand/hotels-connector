<?php

namespace Bronevik\HotelsConnector\Element;

class GetServiceMessagesRequest extends BaseRequest
{
    /**
     * Идентификатор услуги, по которой будет поиск комментариев.
     * The identifier of the service that will be searched for comments.
     *
     * @var int | null
     */
    public $serviceId;

    /**
     * Идентификаторы комментариев, по которым будет поиск комментариев.
     * Comment identifiers for which comments will be searched.
     *
     * @var ServiceMessages | null
     */
    public $serviceMessages;

    /**
     * @param int | null $serviceId
     */
    public function setServiceId($serviceId)
    {
        $this->serviceId = $serviceId;
    }

    /**
     * @return int | null
     */
    public function getServiceId()
    {
        return $this->serviceId;
    }

    /**
     * @param ServiceMessages | null $serviceMessages
     */
    public function setServiceMessages($serviceMessages)
    {
        $this->serviceMessages = $serviceMessages;
    }

    /**
     * @return ServiceMessages | null
     */
    public function getServiceMessages()
    {
        return $this->serviceMessages;
    }
}
