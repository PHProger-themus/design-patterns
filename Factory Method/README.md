# Builder

Builder helps us to organize creation of objects which can have different states. If object can be created using different configurations, this pattern can be used.

### My implementation

In my implementation, pattern is used to instantiate DB working classes. I have 2 classes: MySQL and PostgreSQL Managers which contain methods for query building. `Builders` will create instances of these Managers depending on configuration option `driver`. Builders have parent class `DatabaseManagerBuilder` because of the same methods which can be placed in one class, so concrete Builders only define which Manager they will create.

`Director` is used for easy instantiation. It contains `make()` method for this purpose and must take Builder as parameter in constructor or `setBuilder()` method. We can ignore this class and create objects ourselves.