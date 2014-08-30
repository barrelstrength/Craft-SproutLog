# Sprout Log

Output messages to a log file from your Twig templates

```
{% do log('This just happened.') %}
```

Your log file will appear in the `logs` folder:

```
craft/storage/runtime/logs/sproutlog.log
```

## Notes

Sprout Log makes it possible to output messages to a log file in your Twig templates by using Twig's `do` tag to run the Sprout Log `log()` filter.

The `log` function is a wrapper for the plugin-specific `Craft::log()` method.  The function called is `SproutLogPlugin::log($message)`.

While it's unlikely this will be useful in many situations, when dealing with complex Twig processing order challenges, or writing articles on the processing order at Straight Up Craft, it's handy to be able to log points in time when Twig is processing to make sure you think you know what you think you know.

