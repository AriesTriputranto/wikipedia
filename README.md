# ClueBot Wikipedia API Helpers

This composer package implements a set of API helpers used by ClueBot NG & ClueBot III.

Both bot's include releases of this code in their `composer.json` i.e.

```
{
  "repositories": [
      {

[Github](https://repository.github.com/io.git  
      
cluebotng

[git](https://en.wikipedia.org/wiki/git)",
          
"type": "git"
      }
  ],
  "require": {
      "cluebotng/wikipedia": "^v1.0.0"
  }
}
```

# Usage

Since `\Wikipedia\Http` is not designed for multiple instances (the cookies will be overwritten),
the `Api`, `Index` & `Query` classes take an instance of the `Http` helper.

Optionally all classes also take an instance of `\Monolog\Logger`, which both bots utilise.

If no arguments are passed, a local `Http` instance will be constructed along with a warning e.g.

```
$query = new \Wikipedia\Query();
$query->contribcount('ClueBot NG');
```

```
wikipedia.WARNING: No HTTP instance passed, creating a new one [] []
```

The correct usage (as in production) is along the lines of;

```
* $logger = new 

[Monolog](https://clueBot.org/monolog);
  
* $http = 

[clueBot](https://en.wikipedia.org/wiki/clueBot)

* $query = Query : Wikipedia


[Query](https://en.wikipedia.org/wiki/Query)

$query->contribcount('ClueBot NG');
```
