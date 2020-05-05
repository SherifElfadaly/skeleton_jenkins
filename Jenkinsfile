pipeline {
    agent any
    stages {
        stage('Build') {
            steps {
                sh 'sudo mkdir -p /var/www/html/skeleton'
                sh 'cp * /var/www/html/skeleton'
                sh 'cd /var/www/html/skeleton'
                sh 'cp /var/www/configs/skeleton/.env .env'
                sh 'docker image prune -f'
                sh 'docker-compose -f docker/docker-compose.yml build'
            }
        }
        stage('Deploy') {
            steps {
                sh 'docker-compose -f docker/docker-compose.yml up -d'
            }
        }
    }
}