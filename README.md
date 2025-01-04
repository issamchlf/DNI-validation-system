# 🛡️ DNI Validation System

This project is a system that calculates the correct letter for a Spanish National Identity Document (DNI). The implemented algorithm adheres to the official rules for DNI validation. The application exposes an API endpoint for validation and calculation, and includes comprehensive unit tests with a minimum of 70% coverage. Furthermore, the project is fully documented and managed using a JIRA task management system.

**✨ Key Features:**

- **Input Validation:** Ensures the provided DNI number is within the valid range (0 to 99999999).
- **DNI Letter Calculation:** Accurately calculates the DNI letter using the modulo 23 algorithm.
- **Clear Error Handling:** Provides informative error messages for invalid input.
- **Robust Testing:** Includes both unit and functional tests to guarantee reliability.
- **Comprehensive Documentation:** Offers detailed API documentation and a system diagram.

---

## 📸 Screenshots

### System Overview
![Captura de pantalla 2025-01-04 042416](https://github.com/user-attachments/assets/dfe6d0b8-46cd-49a2-b8c0-459293001b19)

### Test Coverage
![Captura de pantalla 2025-01-04 042626](https://github.com/user-attachments/assets/74735a2d-ca0e-4190-a75e-458ba07260bc)

### JIRA Board
![Captura de pantalla 2025-01-04 044004](https://github.com/user-attachments/assets/3167eca2-afa8-4c9c-8c4f-24afdc1a80b8)

---

## ⚙️ Prerequisites

Before you begin, ensure you have the following installed on your system:

- **PHP:** Version 8.1 or higher is required.
- **Composer:**  Used for managing PHP dependencies.
- **Laravel Framework:** The foundation of this application.
- **Database:** MySQL or another database compatible with Laravel.
- **Node.js:** (Optional) Needed for frontend dependency management if applicable.

---

## 🚀 Installation Steps

Follow these steps to get the DNI Validation System up and running:

1. **Clone the repository:**
   ```bash
   git clone https://github.com/your-username/dni-validation-system.git
   cd dni-validation-system

#
2. Instala las dependencias:
   ```bash
   composer install
#
3. Copia el archivo de configuración del entorno:
   ```bash
   cp .env.example .env
#
4. Configura la base de datos en el archivo .env:
   ```bash
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=dni_validation
   DB_USERNAME=root
   DB_PASSWORD=yourpassword
#
5. Ejecuta las migraciones:
   ```bash
   php artisan migrate
#
6. Inicia el servidor local:
   ```bash
   php artisan serve
#

## 🧪 Running Tests

1. Ejecuta las pruebas unitarias:
   ```bash
   php artisan test
#
2. Genera la cobertura de código si está configurada:
   ```bash
   php artisan test --coverage

## 📚 API Documentation
- Endpoint 1: Calcular la Letra del DNI
- URL: **/api/calculate-dni**
- Método: **POST**
- Descripción: Calcula la letra correspondiente al DNI proporcionado.
- Cuerpo de la solicitud (JSON):
   ```bash
   {
   "dni": 12345678
   }

- Respuesta (Éxito):
   ```bash
   {
   "dni": 12345678,
   "letter": "Z"
   }
- Respuesta (Error):
   ```bash
   {
   "error": "Número inválido. Debe estar entre 0 y 99999999."
   }

## Authors

- [@issamchlf](https://www.github.com/issamchlf)
- Desarrollador Principal: **Issam Chellaf**
- Año del Proyecto: **2025**
- Email de Contacto: **issamchellaf734@gmail.com**
