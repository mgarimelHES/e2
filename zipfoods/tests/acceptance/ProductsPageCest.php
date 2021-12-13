<?php
class ProductsPageCest
{
    /**
     * * Test the products load page and check the content
     */
    public function pageLoads(AcceptanceTester $I)
    {
    # Act
      $I->amOnPage('/products');

    #Assert
     $I->seeElement('test-all-products-header1]');
     $productCount = count($I->grabMultiple('.product-link'));
     $I->assertGreaterOrEqual(10, $productCount);
    }
}