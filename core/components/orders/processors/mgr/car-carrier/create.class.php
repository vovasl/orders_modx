<?php

class ordersCarCarrierCreateProcessor extends modObjectCreateProcessor
{
    public $objectType = 'ordersCarCarrier';
    public $classKey = 'ordersCarCarrier';
    public $languageTopics = ['orders'];
    //public $permission = 'create';


    /**
     * @return bool
     */
    public function beforeSet()
    {
        $name = trim($this->getProperty('name'));
        if (empty($name)) {
            $this->modx->error->addField('name', $this->modx->lexicon('orders_car_carrier_err_name'));
        } elseif ($this->modx->getCount($this->classKey, ['name' => $name])) {
            $this->modx->error->addField('name', $this->modx->lexicon('orders_car_carrier_err_ae'));
        }

        return parent::beforeSet();
    }

}

return 'ordersCarCarrierCreateProcessor';