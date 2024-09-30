#!/bin/bash
#1 Arranque por defecto en modo texto
sudo systemctl set-default multi-user.target
echo "Operación Realizada"

#2 Actualización de repositorios
sudo apt update -y
echo "Operación Realizada"

#3 Actualización de paquetes
sudo apt upgrade -y
echo "Operación Realizada"

#4 Instalación de paquetes necesarios
sudo apt install curl wget vim -y
echo "Operación Realizada"

#5 Creación de banner (mensaje de bienvenida)

echo "(  ____ \(  ____ )\__   __/(  ____ \\__   __/\__   __/(  ___  )( (    /|" > /etc/motd
echo "| (    \/| (    )|   ) (   | (    \/   ) (      ) (   | (   ) ||  \  ( |" >> /etc/motd
echo "| |      | (____)|   | |   | (_____    | |      | |   | (___) ||   \ | |" >> /etc/motd
echo "| |      |     __)   | |   (_____  )   | |      | |   |  ___  || (\ \) |" >> /etc/motd
echo "| |      | (\ (      | |         ) |   | |      | |   | (   ) || | \   |" >> /etc/motd
echo "| (____/\| ) \ \_____) (___/\____) |   | |   ___) (___| )   ( || )  \  |" >> /etc/motd
echo "(_______/|/   \__/\_______/\_______)   )_(   \_______/|/     \||/    )_)" >> /etc/motd
cat /etc/motd
echo "Operación Realizada"

#6 Añadir usuario al grupo sudo
sudo usermod -aG sudo $USER
echo "Operación Realizada"

#7 Instalación de servicios: Apache, PHP y SSH
sudo apt install apache2 php libapache2-mod-php ssh -y
echo "Operación Realizada"

#8 Habilitar y arrancar los servicios
sudo systemctl enable apache2
sudo systemctl start apache2
sudo systemctl enable ssh
sudo systemctl start ssh

echo "Completado todos los pasos correctamente"

#Script de Cristian Fernandez Cornejo
