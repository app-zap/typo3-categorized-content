<?php
namespace AppZap\CategorizedContent\Controller;

use TYPO3\CMS\Core\Database\DatabaseConnection;

class ContentController extends \FluidTYPO3\Fluidcontent\Controller\ContentController
{

    /**
     *
     */
    public function categoryNavigationAction() {
        $categories = $this->getDatabaseConnection()->exec_SELECTgetRows(
            '*',
            'sys_category',
            'pid = ' . (int)$GLOBALS['TSFE']->id
        );
        $this->view->assign('categories', $categories);
    }

    /**
     * @return DatabaseConnection
     */
    protected function getDatabaseConnection() {
        return $GLOBALS['TYPO3_DB'];
    }

}
