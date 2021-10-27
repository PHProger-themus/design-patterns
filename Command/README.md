# Command

Turns requests into objects, and you can use them several times avoiding code duplicating. Objects can also be used in queue mechanism.

### My implementation

`Invoker` here is `Queue` class. It can store array of `Commands` and invoke all of them when needed.

`DBChangerCommand`, `LoggerCommand` and `NotifierCommand` are Commands that have `execute()` method. They can do something or return `false`, that indicates an error and the execution of the Queue will be interrupted.