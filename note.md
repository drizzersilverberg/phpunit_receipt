## What Is Unit Testing ?
* Software testing method
* Individual units of source code tested
* Determines whether code is fit for use

### Unit Testing (Generally)
Unit testing is testing isolated units of code to ensure correctness.

### What's a unit of code?
A single function or code

### Test-Driven Development
* Write Test
* Run Test
* Write Code
* Run Test
* Repeat until completed

### TDD Pattern
Similar to: [http://www.agiledata.org/images](http://www.agiledata.org/images)

## Why Unit Test?
* Ensure code works correctly
* Additional documentation
* Reduces the chance of bugs
* Improves the ability to refactor
* Helps to write better designed code

### Ensure Code Works
* Test are run multiple times.
* Test first, code changed second.

### Additional Documentation
* How to use a method
* Typical and unusual scenarios

### Reduce Bugs
* TDD produces less bugs
Reference: [http://link.springer.com/article/10.1007/s10664-008-9062-z](http://link.springer.com/article/10.1007/s10664-008-9062-z)

#### Quality Improvement with TDD
* 40%-90% defect density decrease
* 15%-35% initial development time increase

#### Agile Software Development Using TDD
* Increased quality
* Ease of coding
* More focused planning and design
* Enabled timely feedback
* Less bugs with TDD
Reference: https:://goo.gl/nBxsEN

### TDD improves your ability to refactor your code
### TDD forces you to write better designed software

## Automated Unit Testing VS Manual Testing

### Automated Unit Testing
* Similar to conventional testing by hand
* Automated tests
* Isolated tests
* No forgotten or missed tests

`Special cases are the bane of manual testing`
`Unit testing is faster than manual testing`
`Unit Testing and TDD is not a silver bullet`

### Other Types of Testing
* Integration
Test the integration of your software
* Functional
Ensure the functions of your application
* Behavior
Test series of step to ensure some behavior in the application is correct
* Acceptance
Typically done by stakeholders to ensure application meets the designed requirement

## An Extended Unit Test
`Arrange - Act - Assert`
* Arrange
All necessary preconditions and inputs for test case.
* Act
On the object or method under test.
* Assert
That the expected result have occured.

### General Principles
* Test in isolation
* Test only a few things at once or even just one thing at once
* Test should be easy to write, a hard test generally means re-write your implementation

## Test Double
`a generic term for any case where you replace a production object for testing purposes`
[http://www.martinfowler.com/bliki/TestDouble.html](http://www.martinfowler.com/bliki/TestDouble.html)

### Test Double, Why do and use them?
`Unit Testing, test your code in isolation`
* Replace a dependency
* Ensure a condition occurs
* Improve the performance of our tests
* Make it fast
* Make it isolated
* Make it fully covered

### Test Doubles
* Dummy
Replaces an object typically as an input, thas isn't used or needed for the test.
* Fake
Replaces an object in which we need a simplified version of the object, typically to achieve speed improvement or to eliminate side effects.
* Stub
Provides a preset answer to method calls that we have decided ahead of time.
* Spy
A spy acts as higher level stub, it allows us to also record information about what happenend with this test double
* Mock
A mock acts as a higher level stub, they are pre-programmed with expectations, including the ability to both respond to calls they know about and don't know about.

`Test Doubles are core to unit testing`

### The TDD Cycle

## TDD Advantages

### `TDD: A lower cost to changes`
* More Tests + More Coverage = Less Defects
* Less Defects = Less Time Spent on Bugs
* Less Time on Bugs = More Time on Features
* More Test + More Coverage = Easier Refactoring
* More Test + More Coverage = Easier Additional Features

### `TDD: Build More Features and Less Bugs`

## Contact Form Test

### Test Cases
* No email address
* Invalid email address
* No name entered in
* Email sent
* Email has correct information

### Additional Features
* Change in the email format
* Add a BCC to the email
* Add a url field with validation

### TDD Pattern
* Validation
* sendEmail
* formatEmail
* Get/Post Request

### TDD and Unit Testing
* Better Developer
* Better Software
* Less Time on Bugs
* More Time on Features
