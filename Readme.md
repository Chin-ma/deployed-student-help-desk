# Deployed Student Help Desk

## Application Overview

The Deployed Student Help Desk is a web-based application designed to assist students with their queries and issues. The application provides a platform for students to submit their questions and receive timely responses from the support team. It aims to streamline the communication process and ensure that students get the help they need efficiently.

## Deployment

### Using Docker

1. **Build the Docker Image:**
    ```sh
    docker build -t student-help-desk .
    ```

### Using Kubernetes

1. **Apply the Kubernetes Configuration:**
    ```sh
    kubectl apply -f backend.yaml
    kubectl apply -f frontend.yaml
    kubectl apply -f mysql-data.yaml
    ```
2. **Port Forward the Deployment:**
    ```sh
     kubectl port-forward -n student-help-desk-service svc/frontend-service 8000:80
    ```
