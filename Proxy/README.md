# Proxy

Replaces original service in order to make service methods easier to use or applying cache mechanism or checking certain requests.

### My implementation

I have simple text checker service. It breaks text into words and process each one, displaying letters count and first letter.

This service can do unnecessary work while processing similar word several times, so here we can use `TextCheckerProxy` - Proxy which will cache results of processing all the words, and if one of them will be met next time, it will be retrieved from cache. 