# ToweringMedia Core Extension

## Overview
ToweringMedia Core is the foundation extension that provides common functionality for all ToweringMedia Magento 2 extensions.

## Features
- **Base Classes**: Abstract block and helper classes for consistent development
- **Configuration Management**: Centralized configuration for all extensions
- **License Management**: Built-in license key validation
- **Debug Tools**: Debug mode for development and troubleshooting
- **Admin Interface**: Unified admin configuration panel

## Installation
1. Upload the extension files to your Magento installation
2. Run `php bin/magento module:enable ToweringMedia_Core`
3. Run `php bin/magento setup:upgrade`
4. Run `php bin/magento cache:flush`

## Configuration
Go to **Admin → Stores → Configuration → ToweringMedia → Core Settings** to configure:
- Debug Mode
- License Key

## Usage
Other ToweringMedia extensions will automatically depend on this core module and inherit its functionality.

## Requirements
- Magento 2.4.x
- PHP 7.4 or higher

## Support
For support, contact: support@toweringmedia.com

---

**ToweringMedia Core v1.0.0** - The foundation for professional Magento extensions
