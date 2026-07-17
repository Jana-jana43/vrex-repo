pipeline {
    agent any

    environment {
        SERVER = "ubuntu@172.31.3.202"
        DEPLOY_PATH = "/var/www/vrex.com"
    }

    stages {

        stage('Checkout') {
            steps {
                git branch: 'main',
                    credentialsId: 'github-pat',
                    url: 'https://github.com/Jana-jana43/vrex-repo.git'
            }
        }

        stage('Deploy Files') {
            steps {
                sshagent(credentials: ['deploy-key']) {
                    sh """
                        rsync -avz --delete \
                        --exclude='.git' \
                        --exclude='node_modules' \
                        ./ \$SERVER:/var/www/vrex.com/
                    """
                }
            }
        }

        stage('Composer Install') {
            steps {
                sshagent(credentials: ['deploy-key']) {
                    sh """
                        ssh -o StrictHostKeyChecking=no \$SERVER '
                            cd /var/www/vrex.com &&
                            composer install --no-dev --optimize-autoloader
                        '
                    """
                }
            }
        }

        stage('Permissions') {
            steps {
                sshagent(credentials: ['deploy-key']) {
                    sh """
                        ssh -o StrictHostKeyChecking=no \$SERVER '
                            sudo chown -R ubuntu:www-data /var/www/vrex.com &&
                            sudo find /var/www/vrex.com -type d -exec chmod 775 {} \\; &&
                            sudo find /var/www/vrex.com -type f -exec chmod 664 {} \\; &&
                            sudo chmod -R 775 /var/www/vrex.com/storage &&
                            sudo chmod -R 775 /var/www/vrex.com/bootstrap/cache
                        '
                    """
                }
            }
        }

        stage('Laravel Cache') {
            steps {
                sshagent(credentials: ['deploy-key']) {
                    sh """
                        ssh -o StrictHostKeyChecking=no \$SERVER '
                            cd /var/www/vrex.com &&
                            php artisan optimize:clear &&
                            php artisan config:cache &&
                            php artisan route:cache &&
                            php artisan view:cache
                        '
                    """
                }
            }
        }

        stage('Restart Apache') {
            steps {
                sshagent(credentials: ['deploy-key']) {
                    sh """
                        ssh -o StrictHostKeyChecking=no \$SERVER '
                            sudo systemctl restart apache2
                        '
                    """
                }
            }
        }
    }

    post {
        success {
            echo "========================================="
            echo "Deployment Completed Successfully"
            echo "Server : ${SERVER}"
            echo "Path   : ${DEPLOY_PATH}"
            echo "========================================="
        }

        failure {
            echo "========================================="
            echo "Deployment Failed!"
            echo "Check Jenkins Console Output."
            echo "========================================="
        }
    }
}
