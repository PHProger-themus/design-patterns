# Factory Method

Factory Method pattern helps you to instantiate necessary class according to your input or configuration and work with it.

### My implementation

The code works with different logging systems.

`index.php` has config variable. Then file defines class for logging using `logDriver` config option and `init()` method. This method takes 1 parameter - name of log, so `EmailLogger` will use it as email subject and `FileLogger` will replace ` ` with `_` and use it as file name.

`init()` returns logger object. Later in code you can simply log changes using this object and its `log(string $message)` method.