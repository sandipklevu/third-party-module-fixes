<?php

namespace Custom\ThirdPartyFix\Plugin\Framework\Search\Request;

use Magento\Framework\Search\Request\Builder as MageBuilder;

class BuilderPlugin
{

    /**
     * @param MageBuilder $subject
     * @return $this
     */
    public function beforeCreate(MageBuilder $subject)
    {
        $sorter = array('relevance' => 'DESC', 'entity_id' => 'DESC');
        $subject->setSort($sorter);
        return $this;

    }


}
