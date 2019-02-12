<?php
$xpdo_meta_map['ordersPortArrive']= array (
  'package' => 'orders',
  'version' => '1.1',
  'table' => 'orders_port_arrive',
  'extends' => 'xPDOSimpleObject',
  'tableMeta' => 
  array (
    'engine' => 'InnoDB',
  ),
  'fields' => 
  array (
    'name' => '',
  ),
  'fieldMeta' => 
  array (
    'name' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '200',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
  ),
  'indexes' => 
  array (
    'name' => 
    array (
      'alias' => 'name',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'name' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
  ),
  'composites' => 
  array (
    'PortArriveItem' => 
    array (
      'class' => 'ordersItem',
      'local' => 'id',
      'foreign' => 'port_arrive',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
  ),
);
