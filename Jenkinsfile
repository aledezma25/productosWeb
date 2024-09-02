pipeline {
    agent any

    parameters {
        string(name: 'name_container', defaultValue: 'sitio_web', description: 'Nombre del container')
        string(name: 'name_imagen', defaultValue: 'php', description: 'Nombre de la imagen')
        string(name: 'tag_imagen', defaultValue: '7.4-apache', description: 'etiqueta y/o version de la imagen')
        string(name: 'puerto_imagen', defaultValue: '80', description: 'puerto de la imagen')
    }

    stages {
        stage('detener/limpiar') {
            steps {
                script {
                    def docker_running = sh(returnStatus: true, script: 'docker ps')
                    if (docker_running) {
                        sh '''
                        docker stop ${name_container} || true
                        docker rm ${name_container} || true
                        docker system prune -f
                        docker image prune -a -f
                        '''
                    } else {
                        echo 'No Docker containers are running.'
                    }
                }
            }
        }

        stage('run/build') {
            steps {
                sh '''
                docker compose up -d --build
                '''
            }
        }

        stage('verification') {
            steps {
                sh '''
                docker ps -a
                '''
            }
        }
    }
}
