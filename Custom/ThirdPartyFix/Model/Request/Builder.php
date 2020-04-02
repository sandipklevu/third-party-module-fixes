<?php
/**
 * Overridden class on the AmastyBuilder
 */
namespace Custom\ThirdPartyFix\Model\Request;

use Amasty\Shopby\Model\Request\Builder as amRequestBuilder;
use Magento\Framework\ObjectManagerInterface;

class Builder extends amRequestBuilder
{
    /**
     * @var array
     */
    private $data = [
        'dimensions' => [],
        'placeholder' => [],
    ];

    /**
     * Builder constructor.
     * @param ObjectManagerInterface $objectManager
     * @param \Magento\Framework\Search\Request\Config $config
     * @param \Magento\Framework\Search\Request\Binder $binder
     * @param \Magento\Framework\Search\Request\Cleaner $cleaner
     * @param \Magento\Framework\App\Request\Http $http
     */
    public function __construct(
        ObjectManagerInterface $objectManager,
        \Magento\Framework\Search\Request\Config $config,
        \Magento\Framework\Search\Request\Binder $binder,
        \Magento\Framework\Search\Request\Cleaner $cleaner,
        \Magento\Framework\App\Request\Http $http
    )
    {
        parent::__construct($objectManager, $config, $binder, $cleaner, $http);

    }

    /** Call create method to set the setSort()
     * @return \Magento\Framework\Search\RequestInterface|void
     */
    public function create()
    {
        //$this->setSorting();
        parent::create();
    }

    public function setSorting()
    {
        $sorter = array('relevance' => 'DESC', 'entity_id' => 'aSC');
        //$this->data['sort'] = $sorter;
        parent::setSort($sorter);
    }


}
