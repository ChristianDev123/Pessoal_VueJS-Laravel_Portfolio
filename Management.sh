#!/bin/bash

development(){
    cd "App Portfólio"
    sudo /opt/lampp/lampp start
    code .
    /usr/bin/mysql-workbench
    php artisan serve &
    npm run watch-poll &
    firefox http://localhost:8000 &
    echo "[AVISO] Se instalou o workbench pelo SNAP abra o app manualmente"
    echo " Modo desenvolvimento ativado... "
}

install(){
    mv .env.example .env
    php artisan migrate
    sudo /opt/lampp/lampp start
    /usr/bin/mysql-workbench
    php artisan serve &
    firefox http://localhost:8000  &
    echo "Projeto instalado"
}

start(){
    sudo /opt/lampp/lampp start
    /usr/bin/mysql-workbench
    php artisan serve &
    firefox http://localhost:8000 &
    echo "Projeto iniciado"
}

stop(){
    killall -9 php
    killall -9 php7.4
    sudo /opt/lampp/lampp stop
    echo "Aplicação finalizada"
}


if [ $1 == "dev" ]; then
development
elif [ $1 == "install" ]; then
install
elif [ $1 == "start" ]; then
start
elif [ $1 == "stop" ]; then
stop
fi
