<?php
use Faker\Factory;

class NewProductPageCest {

    /**
     * Testing a new product insert
     */
    public function testAddingNewProduct(AcceptanceTester $I)
    {
        # Use Faker
        $faker = Factory::create();
        $productName = $faker->words(3, true);
        $sku = str_replace(' ', '-', $productName);

        # Act
        $I->amOnPage('/product/new/');
        $I->fillField('[test=name-input]', $productName);
        $I->fillField('[test=sku-input]', $sku);
        $I->fillField('[test=description-input]', $faker->paragraph(1, true));
        $I->fillField('[test=price-input]', 4.99);
        $I->fillField('[test=available-input]', 50);
        $I->fillField('[test=weight-input]', 1.34);
        $I->click('[test=submit-button]');

        #Affirm
        $I->amOnPage('/product?sku=' . $sku);
        $I->see($productName);
        
    }

    /**
     * Validation test
     */
    public function testValidationIsWorking(AcceptanceTester $I) 
    {
        #Act
        $I->amOnPage('/products/new');
        $I->click('[test=submit-button]');

        #Assert
        $I->seeElement('[test=validation-errors-alert]');
    }
};