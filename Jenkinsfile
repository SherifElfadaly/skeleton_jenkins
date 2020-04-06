pipeline {
    agent any
    stages {
        stage('Build - Staging') {
            when {
                branch 'staging'
            }
            steps {
                sh 'docker image prune -f'
                sh 'docker-compose -f docker-compose.yml build --build-arg ENV=stag'
            }
        }
        stage('Build - Production') {
            when {
                branch 'master'
            }
            steps {
                sh 'docker image prune -f'
                sh 'docker-compose -f docker-compose.yml build --build-arg ENV=prod'
            }
        }
        stage('Deploy') {
            steps {
                sh 'docker-compose -f docker-compose.yml up -d'
            }
        }
    }
}