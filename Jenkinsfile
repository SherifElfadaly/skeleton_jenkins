pipeline {
    agent any
    stages {
        stage('Build - Staging') {
            when {
                branch 'staging'
            }
            steps {
                sh 'sudo docker image prune -f'
                sh 'sudo docker-compose -f docker-compose.yml build --build-arg ENV=stag'
            }
        }
        stage('Build - Production') {
            when {
                branch 'master'
            }
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
    post {
        always {
            sh "docker-compose down -v"
        }
    }
}