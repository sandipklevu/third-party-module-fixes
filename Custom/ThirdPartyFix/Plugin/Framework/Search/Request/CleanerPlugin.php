<?php

namespace Custom\ThirdPartyFix\Plugin\Framework\Search\Request;

use Magento\Framework\Search\Request;
use Magento\Framework\Search\Request\Cleaner as MageCleaner;
use Psr\Log\LoggerInterface;


class CleanerPlugin
{
    /**
     * Psr Logger  instance
     *
     * @var LoggerInterface
     * @since 100.1.0
     */
    protected $logger;


    /**
     * CleanerPlugin constructor.
     * @param LoggerInterface $logger
     */
    public function __construct(
        LoggerInterface $logger
    )
    {
        $this->logger = $logger;
    }

    /**
     * @param MageCleaner $subject
     * @param $result
     * @param array $requestData
     * @return mixed
     */
    public function afterClean(MageCleaner $subject, $result, array $requestData)
    {
        /*$this->logger->debug(__CLASS__);
        $this->logger->debug(__METHOD__ . ' - ' . __LINE__);*/
        //echo 'afterCleanerFE<pre>'; print_r($result->requestData); die('afterClean');

        return $result;
    }

    /**
     * @param MageCleaner $subject
     * @param array $requestData
     * @return mixed
     */
    public function beforeClean(MageCleaner $subject, array $requestData)
    {
        /*$this->logger->debug('beforeCleanerFE');
        $this->logger->debug(__METHOD__ . ' - ' . __LINE__);*/
        echo 'beforeCleanerFE<pre>'; print_r($requestData); die('TPF_beforeCleaner');

    }
}
