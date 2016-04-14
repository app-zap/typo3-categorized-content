<?php
namespace AppZap\CategorizedContent\Controller;

use TYPO3\CMS\Core\Database\DatabaseConnection;
use TYPO3\CMS\Frontend\Controller\TypoScriptFrontendController;

class ContentController extends \FluidTYPO3\Fluidcontent\Controller\ContentController
{

    /**
     *
     */
    public function categoryNavigationAction() {
        $categories = $this->getDatabaseConnection()->exec_SELECTgetRows(
            '*',
            'sys_category',
            'pid = ' . (int)$GLOBALS['TSFE']->id . $this->getTyposcriptFrontendController()->sys_page->enableFields('sys_category')
        );
        $this->view->assign('categories', $categories);
    }

    /**
     * @return DatabaseConnection
     */
    protected function getDatabaseConnection() {
        return $GLOBALS['TYPO3_DB'];
    }

    /**
     * @return TypoScriptFrontendController
     */
    protected function getTyposcriptFrontendController() {
        return $GLOBALS['TSFE'];
    }

}
