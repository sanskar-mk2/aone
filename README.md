# AOne Modern Website

A responsive business website built with modern web technologies.

## Tech Stack

- Laravel - PHP web application framework
- Alpine.js - Lightweight JavaScript framework for frontend interactivity
- Tailwind CSS - Utility-first CSS framework
- Vite - Next generation frontend tooling

## Prerequisites

- PHP >= 8.1
- Composer
- Node.js & npm
- MySQL/PostgreSQL

## Setup

1. Clone the repository:
```bash
git clone https://github.com/sanskar-mk2/aone-modern-website.git
cd project-name
```

2. Install PHP dependencies:
```bash
composer install
```

3. Install Node.js dependencies:
```bash
npm install
```

4. Copy the environment file:
```bash
cp .env.example .env
```

5. Generate application key:
```bash
php artisan key:generate
```

6. Configure your database in `.env`

7. Run migrations:
```bash
php artisan migrate
```

## Development

Run the development server:
```bash
php artisan serve
```

Watch for asset changes:
```bash
npm run dev
```

## Building for Production

```bash
npm run build
```

## Features

- Responsive design
- Dynamic form handling
- Modal system
- Success/Error notifications
- Component-based architecture
- SEO-friendly structure

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
