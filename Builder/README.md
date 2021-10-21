# Abstract Factory

Simple creation of object family of objects that should be used later. Family itself depends on configuration.

If [Factory Method](../Factory%20Method/README.md) works with one object, Abstract Factory will take care of several objects.

### My implementation

The example is not particularly entertaining, but it shows the essence of the template well.

You can shuffle and analyze different data types (string and arrays only here, but who's stopping you from adding more?) by creating `analyzer` and `shuffler` classes. Just specify necessary type factory and go ahead!