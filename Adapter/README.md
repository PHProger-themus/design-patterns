# Adapter

It helps objects with incompatible interfaces works fine in our system.

### My implementation

Just two services which work with page status, one of them has another interface, so Adapter will wrap its method into its own method which will make it compatible with our system.

Adapter can take several third-party services and turn them into friend services.