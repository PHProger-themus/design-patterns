# Facade

Simplifies difficult services using. Defines simple interface containing methods operating with several services.

### My implementation

This code can take contents of `H1` html tag of any page and uppercase it. `WebPageParser` is Facade which uses two another services: `WebPageHandler`, page contents parser and `Tagger` which is supposed to work with different tags.