pipeline {
    agent any

    environment {
        COMPOSE_FILE = 'docker-compose.yml'
    }

    stages {
        stage('Clonar repositorio') {
            steps {
                git url: 'https://github.com/BCMA687/ProyectoCI.git', branch: 'main'
            }
        }

        stage('Levantar contenedores') {
            steps {
                echo 'Levantando Laravel + MariaDB + Nginx...'
                sh 'docker-compose up -d --build'
            }
        }

        stage('Esperar DB') {
            steps {
                echo 'Esperando que MariaDB esté lista...'
                sh 'sleep 20'
            }
        }

        stage('Migraciones y dependencias') {
            steps {
                echo 'Instalando dependencias y migraciones...'
                sh 'docker-compose exec laravel_app composer install'
                sh 'docker-compose exec laravel_app php artisan migrate --seed'
            }
        }

        stage('Ejecutar pruebas') {
            steps {
                echo 'Ejecutando pruebas de Laravel...'
                sh 'docker-compose exec laravel_app php artisan test'
            }
        }

        stage('Finalizar') {
            steps {
                echo 'Apagando contenedores...'
                sh 'docker-compose down'
            }
        }
    }
}
