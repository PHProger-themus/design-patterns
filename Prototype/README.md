# Prototype

Prototype is used for simple object cloning. But in PHP there are `clone()` function, so here it's more useful with Clones Registry.

### My implementation

I have Registry which stores `Prototype` objects. In this example there are only `Collection` class implementing this interface, so we instantiate some collections and store them in the Registry. Then we can get them, Registry will give us clones of these objects.

By the way, I instantiate objects right into Registry class to make them inaccessible from outside.