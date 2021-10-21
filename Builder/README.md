# Builder

Builder helps us to organize creation of objects which can have different states. If object can be created using different configurations, this pattern can be used.

### My implementation

In my implementation, pattern is used to instantiate DB working classes. I have 2 classes: MySQL and PostgreSQL Managers which contain methods for query building. `Builders` will create instances of these Managers depending on configuration option `driver`. Builders have parent class `DatabaseManagerBuilder` because of the same methods which can be placed in one class, so concrete Builders only define which Manager they will create.

`Director` is used for easy instantiation. It contains `make()` method for this purpose and must take Builder as parameter in constructor or `setBuilder()` method. We can ignore this class and create objects ourselves.

There's one moment: we shouldn't specify `getResult()` method in the interface of Builder as we don't know which class will be instantiated. But Builders can create objects of one class. Also, in PHP, we can omit return type in the interface. But in our case all Managers have parent `\classes\DB`, so it can be used as return type.