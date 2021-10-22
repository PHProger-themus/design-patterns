# Bridge

Keeps Abstraction and Implementation separate from each other, so we can easily modify them without affecting each other.

### My implementation

I have two MySQL Query Builders, let's assume that MySQL and PostgreSQL have different syntax. Abstraction invokes necessary methods from these two Implementation classes (they're set using constructor or special method) and does action, so we can use any combination of Abstraction methods and Implementation classes.

Abstraction can be divided into classes also.