# Wrapper for FreeToGame API

This is a PHP wrapper for the [FreeToGame API](https://www.freetogame.com/api-doc)

## Basic installation
You can install this package via composer using:
```shell
composer require nellyt/free-to-game-api-wrapper
```

## Usage
### Basic
```php
require ('vendor/autoload.php');

$client = new \FreeToGame\Client();

$response = $client->fetchList();
$response = $client->fetchDetails($gameId);

$response->getResponse()->getStatusCode();

$response->getData();
```

### Filters
Filters are used when fetching lists of games. There are three types of filter:
1. Platform
2. Category
3. Tags

Filters are added to a _FilterCollection_ instance, which is passed to the client.

#### Platform filters
```php
$platformFilter = new \FreeToGame\Filters\PlatformFilter(new \FreeToGame\Filters\Platforms\Browser());

$filterCollection = new \FreeToGame\Filters\FilterCollection();
$filterCollection->setPlatformFilter($platformFilter);

$response = $client->fetchList($filterCollection);
```

#### Category / Tag filters
Lists of games can be filtered by **category or tags**, not both. Tag filters require an array of _SearchTerms_, while 
category filters accept only one.

##### Category
```php
$categoryFilter = new \FreeToGame\Filters\CategoryFilter(new \FreeToGame\Filters\SearchTerms\Shooter());

$filterCollection = new \FreeToGame\Filters\FilterCollection();
$filterCollection->setCategoryFilter($categoryFilter);

$response = $client->fetchList($filterCollection);
```

##### Tag
```php
$searchTerms = [
    new \FreeToGame\Filters\SearchTerms\Shooter(),
    new \FreeToGame\Filters\SearchTerms\Strategy(),
    new \FreeToGame\Filters\SearchTerms\Racing(),
];

$tagFilter = new \FreeToGame\Filters\TagFilter($searchTerms);
$filterCollection = new \FreeToGame\Filters\FilterCollection();
$filterCollection->setTagFilter($tagFilter);

$response = $client->fetchList($filterCollection);
```

### Sort By
Lists of games can be sorted. 
```php
$sort = new \FreeToGame\Sort\AlphabeticalSort();

$response = $client->fetchList(null, $sort);
```

### Example: filtered and sorted
```php
$searchTerms = [
    new \FreeToGame\Filters\SearchTerms\Shooter(),
    new \FreeToGame\Filters\SearchTerms\Strategy(),
    new \FreeToGame\Filters\SearchTerms\Racing(),
];

$tagFilter = new \FreeToGame\Filters\TagFilter($searchTerms);
$filterCollection = new \FreeToGame\Filters\FilterCollection();
$filterCollection->setTagFilter($tagFilter);

$sort = new \FreeToGame\Sort\AlphabeticalSort();

$response = $client->fetchList($filterCollection, $sort);
```

### Sort Options
The list of sorting options is:
1. AlphabeticalSort
2. PopularitySort
3. ReleaseDateSort
4. RelevanceSort
5. Sort

### Search Terms
The list of search terms is:
1. Action
2. ActionRolePlayingGame
3. Anime
4. BattleRoyale
5. Card
6. Fantasy
7. Fighting
8. FirstPerson
9. Flight
10. Horror
11. LowSpecifications
12. MartialArts
13. MassivelyMultiplayerOnline
14. MassivelyMultiplayerOnlineFirstPersonShooter
15. MassivelyMultiplayerOnlineRealTimeStrategy
16. MassivelyMultiplayerOnlineRolePlayingGame
17. MassivelyMultiplayerOnlineThirdPersonShooter
18. Military
19. MultiplayerOnlineBattleArena
20. OpenWorld
21. Permadeath
22. Pixel
23. PlayerVersusEnvironment
24. PlayerVersusPlayer
25. Racing
26. Sailing
27. Sandbox
28. ScienceFiction
29. SearchTerm
30. Shooter
31. SideScroller
32. Social
33. Space
34. Sports
35. Strategy
36. Superhero
37. Survival
38. Tank
39. ThirdPerson
40. ThreeDimensions
41. TopDown
42. TowerDefense
43. TurnBased
44. TwoDimensions
45. Voxel
46. Zombie
