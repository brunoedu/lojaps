<?php
/**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

class CategoryLangCore extends DataLangCore
{
    // Don't replace domain in init() with $this->domain for translation parsing
    protected $domain = 'Admin.Catalog.Feature';

    protected $keys = array('id_category', 'id_shop');

    protected $fieldsToUpdate = array('name', 'link_rewrite');

    protected function init()
    {
        $this->fieldNames = array(
            'name' => array(
                md5('Root') => $this->translator->trans('Root', array(), 'Admin.Catalog.Feature', $this->locale),
                md5('Home') => $this->translator->trans('Home', array(), 'Admin.Catalog.Feature', $this->locale),
            ),
            'link_rewrite' => array(
                md5('root') => $this->slugify($this->translator->trans('Root', array(), 'Admin.Catalog.Feature', $this->locale)),
                md5('home') => $this->slugify($this->translator->trans('Home', array(), 'Admin.Catalog.Feature', $this->locale)),
            ),
        );
    }
}
