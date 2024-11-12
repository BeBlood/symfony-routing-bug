# Symfony routing bug

Route for controller B has priority set:

```php
    #[Route(path:  '/b', name: 'b_method', priority: 9999)]
    public function bMethodOne(): Response
```

When the host in `routes.yaml` is commented out, the routing priority works as expected. The `bin/console debug:router` command outputs the following:

```bash
❯ bin/console debug:router
 ---------- -------- -------- ------ ------
  Name       Method   Scheme   Host   Path
 ---------- -------- -------- ------ ------
  b_method   ANY      ANY      ANY    /b
  a_method   ANY      ANY      ANY    /a
 ---------- -------- -------- ------ ------
```

However, when the host is set, the routing priority seems to be lost. The `bin/console debug:router` command then shows a different order:

```bash
❯ bin/console debug:router
 ---------------- -------- -------- ---------------- --------------------------
  Name             Method   Scheme   Host             Path
 ---------------- -------- -------- ---------------- --------------------------
  a_method.fr      ANY      ANY      www.domain.fr    /a
  a_method.en      ANY      ANY      www.domain.com   /a
  b_method.fr      ANY      ANY      www.domain.fr    /b
  b_method.en      ANY      ANY      www.domain.com   /b
 ---------------- -------- -------- ---------------- --------------------------
```
