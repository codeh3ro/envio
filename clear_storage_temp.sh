#!/bin/bash

# Caminho para a pasta temp
TEMP_DIR="/var/www/storage/app/public/temp"

# Verifica se o diretório existe e limpa os arquivos
if [ -d "$TEMP_DIR" ]; then
  echo "Limpando arquivos em $TEMP_DIR..."
  rm -rf "$TEMP_DIR"/*
  echo "Limpeza concluída."
else
  echo "Diretório $TEMP_DIR não encontrado."
fi