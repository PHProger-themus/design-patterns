# Chain of Responsibility

Builds chain of objects that can handle some request and pass it to the next object.

### My implementation

Validation system. You can add validation classes, write some logic and use it in order to process input value.

There should be instantiated validation classes. Link it together using `setNext()` method, use fluent interface for convenience. Then check your input value and repeat process for the next value.