# State

State is used when app needs to act in different ways depending on application state having behaviour with one interface.

### My implementation

In my implementation State is used to create application that can switch itself between Development and Production modes. Context has `appRun()` method which action depends on state, so using `switchMode()` method you can easily switch between the states and use their behaviour. 