## Summary

- [ ] Describe what changed and why.

## Laravel Team Standards Checklist

- [ ] Controllers only handle HTTP flow; business logic is in services/domain classes.
- [ ] No business logic in routes.
- [ ] SRP followed; methods do one thing clearly.
- [ ] Validation moved to FormRequest classes.
- [ ] Eloquent relationships are used correctly.
- [ ] Eager loading added for relationships used in views.
- [ ] Multi-step writes are wrapped in database transactions.
- [ ] No database queries in views.
- [ ] Large dataset jobs use chunking/lazy strategies.
- [ ] No hardcoded config values or magic strings.
- [ ] User-facing strings are translatable.
- [ ] Dependencies are injected, not instantiated directly.
- [ ] No env() usage outside config files.
- [ ] Date handling uses date objects and formatting in presentation layer.
- [ ] Comments explain why, not what.
- [ ] Formatting has been run (`composer run format` or `composer run lint`).

## Validation

- [ ] `composer run lint`
- [ ] `composer test`
