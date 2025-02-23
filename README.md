# SAML Authentication with Laravel and Keycloak

This repository is a personal project to experiment with implementing SAML authentication using Laravel and Keycloak, all within Docker containers.

## How to Run the Containers

### Prerequisites

- Ensure Docker and Docker Compose are installed on your system.

### Steps

1. **Clone the Repository**

   ```bash
   git clone https://github.com/your-username/your-repo-name.git
   cd your-repo-name
   ```

2. **Set Up Environment Variables**

   - Create a `.env` file and configure necessary environment variables.

3. **Build and Run Laravel Container**

   ```bash
   cd docker/laravel
   docker-compose -p saml up --build
   ```

4. **Build and Run Keycloak Container**

   ```bash
   cd docker/keycloak
   docker-compose -p saml up --build
   ```

5. **Run Vite Server**

   To start the Vite development server, execute the following commands:

   ```bash
   # Access the running Laravel container
   docker exec -it saml-app-1 /bin/bash

   # Inside the container, run the Vite development server
   npm run dev -- --host
   ```

### Overview

- **Laravel App**: Accessible at `http://0.0.0.0:8000`
- **Keycloak Admin Console**: Accessible at `http://localhost:8080`