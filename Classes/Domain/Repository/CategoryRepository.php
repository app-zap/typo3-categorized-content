<?php
namespace AppZap\CategorizedContent\Domain\Repository;

class CategoryRepository extends \TYPO3\CMS\Extbase\Domain\Repository\CategoryRepository
{

    /**
     * Overwrite parent init code that disabled storage page
     *
     * @return void
     */
    public function initializeObject()
    {
    }

}
