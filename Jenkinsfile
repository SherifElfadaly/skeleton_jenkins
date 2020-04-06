pipeline {
    agent { docker { image 'php' } }
    stages {
        stage('Build - Saging') {
            steps {
                sh 'sudo docker image prune -f'
                sh 'sudo docker-compose -f docker-compose.yml build --build-arg ENV=stag'
            }
        stage('Build - Production') {
            steps {
                sh 'sudo docker image prune -f'
                sh 'sudo docker-compose -f docker-compose.yml build --build-arg ENV=prod'
            }
        }
        stage('Deploy') {
            steps {
                sh 'sudo docker-compose -f docker-compose.yml up -d'
            }
        }
    }
}