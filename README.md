# Install
### Trait
Add ```HasNovaBadges``` trait to User model.

```php
use Atin\LaravelNovaBadges\Traits\HasNovaBadges;

class User extends Authenticatable
{
    use HasNovaBadges;
```