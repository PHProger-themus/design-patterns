# Mediator

Mediator is used to control a bunch of classes and their relations. If your classes invoke methods of each other a lot, use this pattern.

### My implementation

This example is quite conceptual. I have `ClassA` that can say hello and bye to world. `ClassB` uses its methods to tell a story or greet the world on behalf of some person.

`Mediator` has event methods which perform necessary actions, so `ClassB` sends request to Mediator and specifies event. Mediator will use `ClassA` and `ClassB` methods.