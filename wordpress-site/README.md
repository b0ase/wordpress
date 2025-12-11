# WordPress Software & Web Design Site

A professional WordPress theme for advertising software design and website design services.

## Setup Instructions

### Prerequisites
- Docker Desktop installed on your machine
- Basic knowledge of WordPress

### Installation Steps

1. **Start WordPress with Docker:**
   ```bash
   docker compose up -d
   ```

2. **Access WordPress:**
   - Open your browser and go to `http://localhost:8080`
   - Complete the WordPress installation wizard
   - Choose your site title, admin username, and password

3. **Activate the Theme:**
   - Log in to WordPress admin (`http://localhost:8080/wp-admin`)
   - Go to Appearance > Themes
   - Find "Software Design Agency" theme and click Activate

4. **Configure the Site:**
   - Create pages using the provided templates:
     - Homepage (use "Homepage" template)
     - Contact (use "Contact Page" template)
   - Set homepage: Settings > Reading > Homepage displays > A static page
   - Configure menus: Appearance > Menus

## Theme Features

### Custom Post Types
- **Portfolio**: Showcase your completed projects
- **Services**: Detail your service offerings

### Page Templates
- Homepage with hero section and services
- Contact page with form and business information
- Portfolio archive page
- Service single pages

### Key Sections
- Hero banner with call-to-action
- Services grid with descriptions
- Process overview
- Portfolio showcase
- Contact forms and information

## Customization

### Colors
Edit the CSS variables in `style.css`:
```css
:root {
    --primary-color: #2563eb;
    --secondary-color: #1e40af;
    --accent-color: #3b82f6;
}
```

### Content
- Add portfolio items: Dashboard > Portfolio > Add New
- Add services: Dashboard > Services > Add New
- Edit homepage content in `page-templates/homepage.php`

### Plugins Recommended
- Contact Form 7 (for better contact forms)
- Yoast SEO (for search engine optimization)
- WP Super Cache (for performance)
- UpdraftPlus (for backups)

## Development

### File Structure
```
wp-content/themes/software-design-theme/
├── assets/
│   ├── css/
│   ├── js/
│   └── images/
├── inc/
├── page-templates/
│   ├── homepage.php
│   └── contact.php
├── template-parts/
├── style.css
├── functions.php
├── header.php
├── footer.php
├── index.php
├── single-services.php
└── archive-portfolio.php
```

### Docker Commands
- Start: `docker compose up -d`
- Stop: `docker compose down`
- View logs: `docker compose logs -f`
- Access MySQL: `docker compose exec db mysql -u wordpress -p`

## Support
For questions or customization needs, contact your development team.