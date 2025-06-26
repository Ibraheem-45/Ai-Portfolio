# Use the official PHP 8 image
FROM php:8.0-cli

# Set working directory
WORKDIR /app

# Copy all files to container
COPY . .

# Expose port 10000
EXPOSE 10000

# Start PHP built-in server
CMD ["php", "-S", "0.0.0.0:10000"]
