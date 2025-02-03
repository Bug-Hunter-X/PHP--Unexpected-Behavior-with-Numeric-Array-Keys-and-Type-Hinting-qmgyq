# PHP Unexpected Behavior with Numeric Array Keys and Type Hinting

This example demonstrates a potential issue in PHP related to type hinting and array keys.  The `incrementArrayValue` function expects a string key, but the second call uses a numeric value (1) as a key. This causes an error. The issue revolves around PHP's loose typing and how it interacts with type hints.

## Bug Description
The bug occurs because the function attempts to perform an increment operation on a key that is not a string, resulting in an error. The strict type check does not catch this because the variable holds a numeric value, which PHP can cast to a string for array access, but will still result in unexpected behaviour when incrementing a value.