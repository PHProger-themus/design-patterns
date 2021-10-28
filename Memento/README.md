# Memento

Saving backups of object. It's useful when we need to store all the object states in order to have opportunity to restore any of them later.

### My implementation

Class `User` have user information: name, age and bio. User can change his information and make backups of his previous profile information. That's what `UserStatesStorage` class provides - it can save states into its states storage and then restore some of them by the key.