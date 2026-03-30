# Laravel Team Coding Standards and Review Checklist

One-page reference for daily development and code reviews.

## Quick Code Review Checklist

- [ ] Controllers handle HTTP only.
- [ ] Business logic lives in services or domain classes.
- [ ] Single Responsibility Principle is followed.
- [ ] Methods do one thing clearly.
- [ ] No business logic in routes.
- [ ] ORM relationships are used correctly.
- [ ] Database transactions are used for multi-step writes.
- [ ] No database queries inside views.
- [ ] Large datasets are processed in chunks.
- [ ] No hardcoded values or magic strings.
- [ ] User-facing strings are translatable.
- [ ] Dependencies are injected, not instantiated.
- [ ] env() is not used outside config files.
- [ ] Dates are handled as date objects.
- [ ] Comments explain why, not what.
- [ ] Code is formatted with automated tools.

## Team Coding Standards

### Framework and Tooling

- Always use the latest stable Laravel release.
- Use Artisan CLI for scaffolding, migrations, testing, and optimization.
- Enforce automated formatting before merging code.

### Architecture and Responsibilities

- Controllers handle request/response only.
- Business logic belongs in service or domain classes.
- Routes must not contain business logic.
- Follow the Single Responsibility Principle.

### Validation and Requests

- All validation must live in FormRequest classes.
- Controllers must never contain validation rules.

### Database and ORM

- Prefer Eloquent over raw SQL when possible.
- Always eager load relationships needed by views.
- Wrap multi-step writes in database transactions.
- Use chunking for heavy data tasks.

### Configuration and Environment

- Never access env() outside config files.
- Use config() to retrieve environment values.
- Replace hardcoded values with constants or enums.

### HTTP and External Services

- Always set timeouts for outbound HTTP requests.
- External service logic belongs in service classes.

### Data and UX

- Dates must be stored as date objects.
- Format dates only in the presentation layer.
- All user-facing strings must be translatable.

### Documentation

- Prefer clarity through naming.
- Comment only complex or non-obvious logic.

## Principle

Clarity over cleverness. Consistency over preference. Maintainability over speed.
