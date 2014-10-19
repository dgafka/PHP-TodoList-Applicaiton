Feature: As user
  I want to add new task
  To see it in my task list

  Background:
    Given is user "Daris"

  Scenario: As user I want to create task to see it in my task list
    When I create task with:
      | name          | description | time             |
      | Home - dishes | Wash dishes | 2014-02-01 12:00 |
    Then I should see task named "Home - dishes" on my task list

  Scenario: As user I want to edit my task
    When I create task with:
      | name          | description | time             |
      | Home - dishes | Wash dishes | 2014-02-01 12:00 |
    And I edit description of task named "Home - dishes" with "I washed dishes yestarday"
    Then when I pick first task from my task list I will see description named "I washed dishes yestarday"

  Scenario: As user I want to delete my task
    When I create task with:
      | name          | description | time             |
      | Home - dishes | Wash dishes | 2014-02-01 12:00 |
    Then I should have 1 task on my task list
    When I delete task named "Home - dishes"
    Then I should have 0 task on my task list

  Scenario: As user I add task without name
    When I create task with:
      | name          | description | time             |
      |               | Description | 2014-02-01 12:00 |
    Then I should receive an error while trying to create it

  Scenario: As user I add task without description
    When I create task with:
      | name          | description | time             |
      | Some name     |             | 2014-02-01 12:00 |
    Then I should receive an error while trying to create it

  Scenario: As user I add multiple task to my task list
    When I create task with:
      | name          | description | time             |
      | Some name1    | desc1       | 2014-02-01 12:00 |
      | Some name2    | desc2       | 2014-02-03 12:00 |
      | Some name3    | desc3       | 2014-02-04 12:00 |
    Then I should have 3 task on my task list