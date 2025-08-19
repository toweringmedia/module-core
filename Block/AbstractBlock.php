<?php
namespace ToweringMedia\Core\Block;

use Magento\Framework\View\Element\Template;
use ToweringMedia\Core\Helper\Data as CoreHelper;

abstract class AbstractBlock extends Template
{
    /**
     * @var CoreHelper
     */
    protected $coreHelper;

    /**
     * @param Template\Context $context
     * @param CoreHelper $coreHelper
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        CoreHelper $coreHelper,
        array $data = []
    ) {
        $this->coreHelper = $coreHelper;
        parent::__construct($context, $data);
    }

    /**
     * Get core helper
     *
     * @return CoreHelper
     */
    public function getCoreHelper()
    {
        return $this->coreHelper;
    }

    /**
     * Check if debug mode is enabled
     *
     * @return bool
     */
    public function isDebugMode()
    {
        return $this->coreHelper->getConfigValue('toweringmedia_core/general/debug_mode');
    }
}
