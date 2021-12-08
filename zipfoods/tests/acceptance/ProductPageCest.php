<?php

class ProductPageCest
{
    /**
     * Test that we can load the product page and see the expected content
     */
    public function pageLoads(AcceptanceTester $I)
    {
/*

        # Act
        $I->amOnPage('/product?sku=driscolls-strawberries');

        # Assert the correct title is set on the page
        $I->seeInTitle('Driscoll’s Strawberries');

        # Assert the existence of certain text on the page
        $I->see('Driscoll’s Strawberries');

        # Assert the existence of a certain element on the page
        $I->seeElement('.product-thumb');

        # Assert the existence of text within a specific element on the page
        $I->see('$4.99', '.product-price');
        
        #test review field for practice
        #$I->cantSeeInField('name');

        # Product Not found
        # Act
        $I->amOnPage('/product?sku=driscolls-strawberriesQ');
        $I->see('Product Not Found');
        $I->see('Sorry');

        # Practice on home page
        $I->amOnPage('/');

        # Assert the 'Welcome' message on this page
        $I->see('Welcome!', 'h2');
        
        # Practice on Products page
        $I->amOnPage('/products');

        # Assert the 10 products on the page
        $productCount = count($I->grabMultiple('.product-link'));
        #dump($productCount);
        $I->assertGreaterThanOrEqual(10,$productCount);

        */

       
    }

    public function newProductTest(AcceptanceTester $I)
    {
        
         # Practice on Products page
         $I->amOnPage('/products/new');
        
        $name = 'XYZ123';
        $I->fillField('[test=new-name-input]', $name);
        
        $sku = 'xyz123';
        $I->fillField('[test=new-sku-input]', $sku);

        $description = 'Lorem 11 ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in pulvinar libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in pulvinar libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.';
        $I->fillField('[test=new-description-input]', $description);

        $price = '15';
        $I->fillField('[test=new-price-input]', $price);

        $available = '15';
        $I->fillField('[test=new-available-input]', $available);

        $weight = 'xyz123';
        $I->fillField('[test=new-weight-input]', $weight);

        $I->click('[test=new-submit-button]');

        # Confirm we see the review confirmation message
        $I->seeElement('[test=new-confirmation]');

        # Confirm we see the review on the page
        $I->see($name, '[test=review-name]');
        $I->see($review, '[test=review-content]');
    }

}