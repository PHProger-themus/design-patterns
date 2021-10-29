# Template Method

Template Method is method which consists of sub-methods, parts of algorithm. Different realizations provide different solving ways.

### My implementation

I have simple search mechanism. You can search in array and in string, and also add another data type. Base class `Searcher` have some methods, some of them have initial behaviour, but abstract methods need to be implemented. This is done by child classes, so when we're instantiating them, we're performing different realizations.