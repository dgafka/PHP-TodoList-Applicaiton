Feature: As user
  I want to manage my task
  and I want to see the results in my task list

  Background:
    Given is user "Daris"

  Scenario: As user I want to create task to see it in my task list
    When I create task with:
    | id  | name          | description | time             |
    | 1   | Home - dishes | Wash dishes | 2014-02-01 12:00 |
    Then I should see task named "Home - dishes" on my task list

  Scenario: As user I want to edit my task
    When I create task with:
      | id  | name          | description | time             |
      | 1   | Home - dishes | Wash dishes | 2014-02-01 12:00 |
    And I edit description of task with id 1 with "I washed dishes yestarday"
    Then when I pick first task from my task list I will see description named "I washed dishes yestarday"

  Scenario: As user I want to delete my task
    When I create task with:
      | id  | name          | description | time             |
      | 1   | Home - dishes | Wash dishes | 2014-02-01 12:00 |
    Then I should have 1 task on my task list
    When I delete task with id of 1
    Then I should have 0 task on my task list

  Scenario: As user I add multiple task to my task list
    When I create task with:
      | id  | name          | description | time             |
      | 1   | Some name1    | desc1       | 2014-02-01 12:00 |
      | 2   | Some name2    | desc2       | 2014-02-03 12:00 |
      | 3   | Some name3    | desc3       | 2014-02-04 12:00 |
    Then I should have 3 task on my task list
    And task with name "Some name2" should have id of 2