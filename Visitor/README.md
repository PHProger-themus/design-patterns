# Visitor

Visitor allows you to define additional behaviour to several classes without affecting these classes. This can be useful if you don't have possibility to modify classes, or you need to bypass limitation associated with overloading. In languages with static typing you can overload methods using different class types in the input parameters (let's imagine we need some methods that work with different classes), but when invoked with object of concrete class, ambiguous situation can happen if we're passing object for which there is no method. This pattern can help us.

We can implement special method `accept()` in Elements, this method will invoke necessary Visitor's method and everything's fine! So now we can work only with objects that have `accept()` method and no other.

### My implementation

This simple code collects data from different structures.

I added new methods into `Composite` (TaskGroup) and `Memento` (User) patterns classes. Their `accept()` method invokes Visitor's specific methods. These methods get their data and export them. So we can easily create some structures, add them to array and export their data using loop and `accept()` method for each structure, we also can specify Visitor. Each Visitor - each action for objects.