# Flyweight

This pattern is used for saving memory while creating big number of class instances.

### My implementation

In PHP, there's no necessity to use large number of objects, so my example is quite conceptual. I can define lots of objects, entities, and their static parameters will be defined in array of their types. Types will be stored in Factory. So Entities have only two fields: dynamic state and link to type object.

That's the point of pattern - I can have thousands of entities, but number of types can be, say, 10. Each type has two parameters, so they are not duplicated in these thousands of objects. Objects contain only links to these types.