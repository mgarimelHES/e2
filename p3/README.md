# Project 3
+ By: Murthy Garimella
+ URL: http://e2p3.hesweb.me

## Graduate requirement
*x one of the following:*
+ [x ] I have integrated testing into my application
+ [ ] I am taking this course for undergraduate credit and have opted out of integrating testing into my application

## Outside resources
images courtesy - shutterrock
CSS stylesheets - w3schools.com
https://codeception.com/docs/03-AcceptanceTests

## Notes for instructor
Testing has been included along with sample data using seeds. You may need to uncomment the code in P3Cest.php for selecting other options for rock, paper and scissors

## Codeception testing output
```
Codeception PHP Testing Framework v4.1.22
Powered by PHPUnit 9.5.10 by Sebastian Bergmann and contributors.

Acceptance Tests (4) --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
P3Cest: Play rps
Signature: P3Cest:playRPS
Test: tests/acceptance/P3Cest.php:playRPS
Scenario --
 I am on page "/"
 I fill field "[test=rock-option]","Paper"
 I click "[test=submit-button]"
 I see element "[test=results-output]"
 I grab text from "[test=computer-move]"
 The computer random move is:Paper
 I grab text from "[test=player-move]"
 I see element "[test=tie-outcome]"
 PASSED 

P3Cest: Validate form
Signature: P3Cest:validateForm
Test: tests/acceptance/P3Cest.php:validateForm
Scenario --
 I am on page "/"
 I click "[test=submit-button]"
 I see element "[test=validation-output]"
 PASSED 

P3Cest: Shows history
Signature: P3Cest:showsHistory
Test: tests/acceptance/P3Cest.php:showsHistory
Scenario --
 I am on page "/history"
 I grab multiple "[test=round-results]"
 I assert greater than or equal 10,11
 PASSED 

P3Cest: Shows round details
Signature: P3Cest:showsRoundDetails
Test: tests/acceptance/P3Cest.php:showsRoundDetails
Scenario --
 I am on page "/history"
 I grab text from "[test=round-results]"
 2021-12-13 00:28:49
 I click "2021-12-13 00:28:49"
 I see "2021-12-13 00:28:49"
 PASSED 

-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


Time: 00:00.194, Memory: 12.00 MB

OK (4 tests, 6 assertions)
...