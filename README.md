# Proyecto de Repaso Laravel: API de Tareas para Guitarristas de Jazz 🎸🎶

Este proyecto es un ejercicio de repaso con **Laravel**, donde se implementa una **API RESTful** para una aplicación que permite a los guitarristas de jazz registrar y gestionar sus tareas diarias de práctica musical.

## 🎯 Objetivo

Crear una API con Laravel que permita:
- Registrar tareas relacionadas con la práctica del jazz.
- Consultar, editar y eliminar tareas.
- Asociar las tareas a guitarristas específicos (usuarios).

## 🧰 Tecnologías utilizadas

- PHP 8.x
- Laravel 11.x
- MySQL o SQLite
- Laravel Sanctum (para autenticación API)
- Postman o Insomnia para pruebas

## 📁 Estructura básica

```
/app
/routes
/database
```

## 🔐 Autenticación

Se implementa autenticación con **Laravel Sanctum** para proteger las rutas de la API.

## 🚀 Endpoints principales

- `POST /api/login`
- `POST /api/register`
- `GET /api/tareas`
- `POST /api/tareas`
- `PUT /api/tareas/{id}`
- `DELETE /api/tareas/{id}`

## 🤘 Público objetivo

Este proyecto está orientado a guitarristas de jazz que quieren organizar su rutina de práctica y a desarrolladores que quieran practicar APIs con Laravel.

---

Hecho con ❤️ por Narciris una amante del jazz y la programación.
