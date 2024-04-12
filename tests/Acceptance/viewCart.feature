Feature: Viewing Cart contents
  As a customer
  I want to view the contents of my shopping cart
  So that I can see the items I have selected and their prices

Scenario: Viewing cart with items
  Given I have added products to my shopping cart
  When I click on the cart icon
  Then I should be redirected to the cart page
  And I should see all the items I have added to the cart listed with their prices