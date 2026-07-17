pipeline {
    agent any

    environment {
        DEPLOY_PATH = "/var/www/vrex.com"
        SERVER = "ubuntu@172.31.3.202"   // Private IP of Production Server
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
                        ./ \$SERVER:\$DEPLOY_PATH/
                    """
                }
            }
        }

        stage('Composer Install') {
            steps {
                sshagent(credentials: ['deploy-key']) {
                    sh """
                        ssh -o StrictHostKeyChecking=no \$SERVER '
                        cd \$DEPLOY_PATH &&
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
                        cd \$DEPLOY_PATH &&
                        sudo chown -R ubuntu:www-data . &&
                        sudo chmod -R 775 storage bootstrap/cache
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
                        cd \$DEPLOY_PATH &&
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
                    sh "ssh -o StrictHostKeyChecking=no \$SERVER 'sudo systemctl restart apache2'"
                }
            }
        }
    }
}
