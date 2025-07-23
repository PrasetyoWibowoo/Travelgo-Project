# Travelgo 🚗✈️

A comprehensive travel booking platform that provides pickup and drop-off services along with ticket booking for various transportation modes.

## 🌟 Features

### Transportation Services
- **Pickup & Drop-off Services**
  - 🏍️ Motorbike rides
  - 🚗 Car rentals and rides
  - 🚌 Bus transportation
- **Ticket Booking**
  - ✈️ Flight tickets
  - 🚂 Train tickets

### Platform Capabilities
- 📱 Responsive web application
- 🔄 Real-time booking system
- 💳 Secure payment integration
- 📍 GPS location tracking
- 🚀 RESTful API architecture
- 📊 Dynamic content management

## 🛠️ Tech Stack

- **Backend**: PHP Laravel Framework
- **Frontend**: Tailwind CSS
- **API**: Full RESTful API implementation
- **Database**: MySQL/PostgreSQL
- **Authentication**: Laravel Sanctum/Passport
- **Real-time**: Laravel Broadcasting (WebSockets)

## 📋 Prerequisites

Before running this project, make sure you have:

- PHP >= 8.1
- Composer
- Node.js & NPM
- MySQL/PostgreSQL
- Git

## 🚀 Installation

1. **Clone the repository**
```bash
git clone https://github.com/yourusername/travelgo.git
cd travelgo
```

2. **Install PHP dependencies**
```bash
composer install
```

3. **Install Node.js dependencies**
```bash
npm install
```

4. **Environment setup**
```bash
cp .env.example .env
php artisan key:generate
```

5. **Configure your `.env` file**
```env
APP_NAME=Travelgo
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=travelgo
DB_USERNAME=your_username
DB_PASSWORD=your_password

# Add your API keys for payment gateways, maps, etc.
```

6. **Database setup**
```bash
php artisan migrate
php artisan db:seed
```

7. **Build assets**
```bash
npm run build
```

8. **Start the development server**
```bash
php artisan serve
```

## 📚 API Documentation

### Authentication Endpoints
```
POST /api/auth/register
POST /api/auth/login
POST /api/auth/logout
GET  /api/auth/user
```

### Booking Endpoints
```
GET    /api/bookings
POST   /api/bookings
GET    /api/bookings/{id}
PUT    /api/bookings/{id}
DELETE /api/bookings/{id}
```

### Transportation Services
```
GET  /api/services/motorbike
GET  /api/services/car
GET  /api/services/bus
GET  /api/services/flight
GET  /api/services/train
```

### Location Services
```
POST /api/location/pickup
POST /api/location/dropoff
GET  /api/location/nearby
```

## 🏗️ Project Structure

```
travelgo/
├── app/
│   ├── Http/Controllers/
│   │   ├── API/
│   │   └── Web/
│   ├── Models/
│   ├── Services/
│   └── Jobs/
├── database/
│   ├── migrations/
│   └── seeders/
├── resources/
│   ├── views/
│   ├── js/
│   └── css/
├── routes/
│   ├── api.php
│   └── web.php
└── public/
```

## 🔧 Configuration

### Payment Gateway Setup
Configure your preferred payment providers in `config/services.php`:

```php
'stripe' => [
    'model' => App\Models\User::class,
    'key' => env('STRIPE_KEY'),
    'secret' => env('STRIPE_SECRET'),
],
```

### Map Integration
Set up Google Maps API or similar service for location tracking:

```php
'google_maps' => [
    'api_key' => env('GOOGLE_MAPS_API_KEY'),
],
```

## 🧪 Testing

Run the test suite:

```bash
# Run all tests
php artisan test

# Run specific test types
php artisan test --filter=BookingTest
php artisan test --testsuite=Feature
```

## 📱 API Usage Example

### Book a Motorbike Ride

```javascript
const bookingData = {
  service_type: 'motorbike',
  pickup_location: {
    lat: -6.2088,
    lng: 106.8456,
    address: 'Jakarta Central'
  },
  dropoff_location: {
    lat: -6.1744,
    lng: 106.8294,
    address: 'Jakarta North'
  },
  scheduled_time: '2024-01-15 14:30:00'
};

fetch('/api/bookings', {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json',
    'Authorization': 'Bearer ' + token
  },
  body: JSON.stringify(bookingData)
})
.then(response => response.json())
.then(data => console.log(data));
```

## 🚀 Deployment

### Production Deployment

1. **Server Requirements**
   - PHP 8.1+
   - Nginx/Apache
   - MySQL/PostgreSQL
   - Redis (recommended)

2. **Environment Setup**
```bash
composer install --optimize-autoloader --no-dev
php artisan config:cache
php artisan route:cache
php artisan view:cache
npm run production
```

3. **Queue Workers**
```bash
php artisan queue:work --daemon
```

## 🤝 Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📄 License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details.

## 📞 Support

For support and queries:
- Email: support@travelgo.com
- Documentation: [docs.travelgo.com](https://docs.travelgo.com)
- Issues: [GitHub Issues](https://github.com/yourusername/travelgo/issues)

## 🎯 Roadmap

- [ ] Mobile app development (React Native/Flutter)
- [ ] Real-time driver tracking
- [ ] Multi-language support
- [ ] Advanced analytics dashboard
- [ ] Integration with more payment gateways
- [ ] AI-powered route optimization

## 👥 Team

- **Project Lead**: PrasetyoWibowoo
- **Backend Development**: Laravel Team
- **Frontend Development**: Tailwind Team
- **API Development**: Full-stack Team

---

**Travelgo** - Making travel booking simple and efficient! 🌍
