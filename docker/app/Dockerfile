FROM centos:centos7

# yum 
RUN yum -y update
RUN yum install -y sudo
RUN yum install -y vim
RUN yum install -y which
RUN yum install -y git

# EPELインストール
RUN yum -y install epel-release
# Remiインストール
RUN rpm -Uvh http://rpms.famillecollet.com/enterprise/remi-release-7.rpm
# PHP7.2のインストール
RUN yum -y install --enablerepo=remi,remi-php72 php php-mbstring php-xml php-xmlrpc php-gd php-pdo php-pecl-mcrypt php-mysqlnd php-pecl-mysql

# install apache2.4
RUN yum -y install httpd
# apatchの自動実行
RUN systemctl enable httpd

# ■composer
# composer-setup.phpをダウンロード
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
# composer-setup.phpを実行し、composerをインストール
RUN php composer-setup.php
# composer-setup.php不要になるので消す。
RUN php -r "unlink('composer-setup.php');"
# グローバルに使うため「composer.phar」を「/usr/local/bin/」の直下に移動させる
RUN mv composer.phar /usr/local/bin/composer

# 不要なファイルを削除
RUN rm -rf /var/www/html

# Redis用のセットアップ
RUN composer require predis/predis

# Nodejsインストール
RUN curl -sL https://rpm.nodesource.com/setup_10.x | sudo bash -
RUN sudo yum install -y nodejs
RUN npm install -y yarn
RUN yarn
RUN yarn add -D ts-loader@^3 typescript@3.0.3

#■ systemdを経由せずhttpdを直接起動する(イメージ起動の時に実行されるコマンド)
#参考URL:https://blog.takekoshi.net/docker-centos7-httpd/
CMD ["/usr/sbin/httpd", "-DFOREGROUND"]




