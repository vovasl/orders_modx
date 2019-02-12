<?php

class ordersCarCarrierRemoveProcessor extends modObjectProcessor
{
    public $objectType = 'ordersCarCarrier';
    public $classKey = 'ordersCarCarrier';
    public $languageTopics = ['orders'];
    //public $permission = 'remove';


    /**
     * @return array|string
     */
    public function process()
    {
        if (!$this->checkPermissions()) {
            return $this->failure($this->modx->lexicon('access_denied'));
        }

        $ids = $this->modx->fromJSON($this->getProperty('ids'));
        if (empty($ids)) {
            return $this->failure($this->modx->lexicon('orders_car_carrier_err_ns'));
        }

        foreach ($ids as $id) {
            /** @var ordersItem $object */
            if (!$object = $this->modx->getObject($this->classKey, $id)) {
                return $this->failure($this->modx->lexicon('orders_car_carrier_err_nf'));
            }

            $object->remove();
        }

        return $this->success();
    }

}

return 'ordersCarCarrierRemoveProcessor';