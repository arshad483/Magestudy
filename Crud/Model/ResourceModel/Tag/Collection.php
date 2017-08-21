<?php

namespace Magestudy\Crud\Model\ResourceModel\Tag;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Magestudy\Crud\Model\Tag as Model;
use Magestudy\Crud\Model\ResourceModel\Tag as ResourceModel;

class Collection extends AbstractCollection
{
    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            Model::class,
            ResourceModel::class
        );
    }

    /**
     * @param string $valueField
     * @param string $labelField
     * @param array $additional
     * @return array
     */
    protected function _toOptionArray($valueField = null, $labelField = null, $additional = [])
    {
        if (!$valueField) {
            $valueField = Model::ID;
        }
        if (!$labelField) {
            $labelField = Model::TITLE;
        }
        return parent::_toOptionArray($valueField, $labelField, $additional);
    }
}