# Используем официальный образ PHP с Apache
FROM php:8.2-apache

# Копируем исходный код в контейнер
COPY .. /var/www/html/