# Task Management Portal

A web application that connects to the baubuddy.de API to display and manage tasks in a responsive interface. Built with PHP, JavaScript, and Bootstrap.

## Features

- ✨ Fetches and displays task data from baubuddy.de API
- 🔍 Real-time search functionality across all table data
- 🔄 Auto-refresh every 60 minutes without page reload
- 📸 Image upload modal with preview functionality
- 🎨 Color-coded task visualization
- 📱 Responsive design with Bootstrap

## Technical Stack

- Backend: PHP
- Frontend: JavaScript (ES6+)
- UI Framework: Bootstrap 5.3.0
- API: baubuddy.de REST API

## Project Structure

```
├── index.php    # Main application interface
├── api.php      # Backend API handler
└── script.js    # Frontend functionality
```

## Setup

1. Clone the repository:
   ```bash
   git clone https://github.com/PavleCvorovic/Task-Management-Portal.git
   ```

2. Start PHP development server:
   ```bash
   php -S localhost:8000
   ```

3. Access the application at `http://localhost:8000`

## API Integration

The application integrates with the baubuddy.de API using OAuth authentication:

- Automatic token management
- Secure API communication
- Regular data refresh
- Error handling

## Features in Detail

### Task Display
- Table shows task, title, description, and colorCode
- Color indicators based on colorCode values
- Responsive table layout

### Search Functionality
- Real-time search across all table data
- Dynamic filtering
- No page reload required

### Image Upload
- File system image selection
- Preview in modal
- Supports common image formats

### Auto-Refresh
- Automatic data refresh every 60 minutes
- Updates without page reload
- Loading indicator during refresh

## Development

This project was developed as part of a technical assessment for VERO Digital Solutions, based on their [web-portal-task](https://github.com/VERO-Digital-Solutions/web-portal-task) requirements. 
