<?php
namespace AppZap\CategorizedContent\Controller;

class ContentController extends \FluidTYPO3\Fluidcontent\Controller\ContentController
{

    /**
     * @var \TYPO3\CMS\Extbase\Domain\Repository\CategoryRepository
     * @inject
     */
    protected $categoryRepository;

    /**
     *
     */
    public function categoryNavigationAction() {
        $categories = $this->categoryRepository->findAll();
        $this->view->assign('categories', $categories);
    }

}
