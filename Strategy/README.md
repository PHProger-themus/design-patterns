# Strategy

Strategy looks like State pattern, but there's one difference: Strategies don't change themselves when performing action. Strategy allows programmer choose necessary behaviour while State controls app state.

### My implementation

Strategy here allows you to calculate quadratic equation using both Discriminant method or Viet theorem. These classes solve the problem in `execute()` method, this method is being invoked from `Context` class, so changing Strategy class you change solving way.