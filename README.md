<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

Разработать простую систему учета посещений на предприятии.
Есть минимальная информация о рабочем (ФИО, табельный номер, телефон) и
данные о посещении (дата и время прихода, дата и время ухода).
Аутентификацией можно пренебречь.
Необходимо реализовать:
- Rest API реализующий:
- CRUD операции над справочником рабочих
- Фиксацию времени посещения одного рабочего
- Простой интерфейс для отображения табелей посещения рабочих с
  фильтрацией по (дате, рабочему)

# Порядок действий:
- git clone https://github.com/AnotherOneGit/symmetrical-octo-invention.git
- cd symmetrical-octo-invention
- cp .env.example .env
- php artisan key:generate
- Создать БД, указать название, логин, пароль в .env
- php artisan migrate
- php artisan db:seed
- php artisan serve
- http://127.0.0.1:8000/workers

# Запросы к api:
- http://127.0.0.1:8000/api/workers - список работников
- http://127.0.0.1:8000/api/workers/{worker} - работник с id={worker}
- http://127.0.0.1:8000/api/workers/ - POST запрос для создания работника. Поля: name, phone
- http://127.0.0.1:8000/api/workers/{worker} - PUT, DELETE запросы для редактирования, удаления работника
- http://127.0.0.1:8000/api/workers/{worker}/addTime - POST фиксация времени. Поля: start_work, end_work  
