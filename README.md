<p align="center">
<a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a>
</p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

This project combines Laravel's powerful backend capabilities with React's frontend flexibility, using Vite as the build tool.

## Backend (Laravel)

Laravel is a web application framework with expressive, elegant syntax. Key features include:

- [Simple, fast routing engine](https://laravel.com/docs/routing)
- [Powerful dependency injection container](https://laravel.com/docs/container)
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent)
- Database agnostic [schema migrations](https://laravel.com/docs/migrations)
- [Robust background job processing](https://laravel.com/docs/queues)
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting)

### Learning Laravel

- Check out the [Laravel documentation](https://laravel.com/docs)
- Try the [Laravel Bootcamp](https://bootcamp.laravel.com)
- Watch tutorials on [Laracasts](https://laracasts.com)

## Frontend (React + TypeScript + Vite)

The frontend uses React with TypeScript, powered by Vite for rapid development. Available plugins:

- [@vitejs/plugin-react](https://github.com/vitejs/vite-plugin-react/blob/main/packages/plugin-react/README.md) using [Babel](https://babeljs.io/)
- [@vitejs/plugin-react-swc](https://github.com/vitejs/vite-plugin-react-swc) using [SWC](https://swc.rs/)

### ESLint Configuration

For production applications, enable type-aware lint rules:

```js
export default tseslint.config({
  languageOptions: {
    parserOptions: {
      project: ['./tsconfig.node.json', './tsconfig.app.json'],
      tsconfigRootDir: import.meta.dirname,
    },
  },
})
```

For React-specific linting:

```js
import react from 'eslint-plugin-react'

export default tseslint.config({
  settings: { react: { version: '18.3' } },
  plugins: { react },
  rules: {
    ...react.configs.recommended.rules,
    ...react.configs['jsx-runtime'].rules,
  },
})
```

## Contributing

Thank you for considering contributing to this project! For Laravel contributions, please review the [Laravel contribution guide](https://laravel.com/docs/contributions).

## Security Vulnerabilities

- For Laravel: Email Taylor Otwell at [taylor@laravel.com](mailto:taylor@laravel.com)
- For React/frontend: Create an issue in the project repository

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
