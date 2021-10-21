# Singleton

Used when we need only one instance of some object, usually it's object which stores settings or global state.

### My implementation

My Singleton can have inheritors. That's achievable by using protected constructor and array of instances in the main singleton class. `getInstance()` method defines each object using its class as array key.

We can use only one Singleton class, in this case we don't need array.