# Observer

Observer implements subscribing mechanism, when it's necessary to invoke some methods using **events** without using class names. Handler classes will be subscribed on specific event and act only when this event was happened.

### My implementation

I have 3 subscribers: `LoggerSubscriber`, which logs everything in a file, it will process each event, `NotifierSubscriber`, which displays message on the screen. It will work with SQL queries. And the last one is `PageStatusSubscriber`, this class works with http response errors.

`Publisher` store these subscribers into `$subscribers` array, each subscriber has its own event. Also, Publisher has some business logic. In the client code we're experimenting with events and testing unsubscribing feature.