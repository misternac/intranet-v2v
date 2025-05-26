#!/bin/bash

# Script de déploiement du template Joomla vers le serveur cPanel

# Configuration du serveur distant
USER="gemcarcloud"
HOST="intranet.gem-car-cloud.com"
REMOTE_PATH="/home/gemcarcloud/public_html/intranet.gem-car-cloud.com/templates/template_intranet-v2v/"

# Chemin local vers le dossier du template
LOCAL_PATH="template/template_intranet-v2v/"

# Commande rsync
rsync -avz --delete \
  "$LOCAL_PATH" \
  "$USER@$HOST:$REMOTE_PATH"

echo "✅ Déploiement terminé avec succès !"
