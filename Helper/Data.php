<?php
namespace ToweringMedia\Core\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
    /**
     * Get module configuration value
     *
     * @param string $field
     * @param string $storeId
     * @return mixed
     */
    public function getConfigValue($field, $storeId = null)
    {
        return $this->scopeConfig->getValue(
            $field,
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }

    /**
     * Check if module is enabled
     *
     * @param string $moduleName
     * @return bool
     */
    public function isModuleEnabled($moduleName)
    {
        return $this->_moduleManager->isEnabled($moduleName);
    }

    /**
     * Get extension version
     *
     * @return string
     */
    public function getExtensionVersion()
    {
        return '1.0.0';
    }
}
