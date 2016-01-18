#! /bin/bash

for module in express ws websocket node-static socket.io; do echo installing $module; npm install $module;echo 'done'; done