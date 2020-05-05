pipeline {
    agent any
    stages {
        stage('Build') {
            steps {
                sh 'cp /var/www/configs/skeleton/.env docker/.env'
                sh 'cd docker'
                sh 'docker image prune -f'
                sh 'docker-compose -f docker-compose.yml build'
            }
        }
        stage('Deploy') {
            steps {
                sh 'cd docker'
                sh 'docker-compose -f docker-compose.yml up -d'
            }
        }
    }
}