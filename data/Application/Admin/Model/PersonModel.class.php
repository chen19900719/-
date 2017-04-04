<?php
namespace Admin\Model;

use Think\Model\RelationModel;

class PersonModel extends RelationModel
{
    protected $_link = array(
//        'department' => array(
//            'mapping_type' => self::BELONGS_TO
//        ),

        'department' => array(
            'mapping_type' => self::MANY_TO_MANY,
            'class_name' => 'Department',
            'mapping_name' => 'departments',
            'foreign_key' => 'person_id',
            'relation_foreign_key' => 'department_id',
            'relation_table' => 'think_department_person',
        ),
    );


}