pipeline {
    agent any
    stages {
        stage('Build') {
            steps {
                sh 'cp /var/www/configs/skeleton/.env docker/.env'
                sh 'sudo docker image prune -f'
                sh 'sudo docker-compose -f docker-compose.yml build'
            }
        }
        stage('Deploy') {
            steps {
                sh 'sudo docker-compose -f docker-compose.yml up -d'
            }
        }
    }
}