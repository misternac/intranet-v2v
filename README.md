# Intranet V2V – Template Joomla personnalisé

Ce dépôt contient le développement du **template Joomla 5** personnalisé pour l'intranet interne de **V2V Technologies**, basé sur le branding GEM-CAR.

---

## 📁 Structure du projet

```
intranet-v2v/
├── template/
│   └── template_gemcar/        # Template Joomla personnalisé
├── deploy/
│   └── rsync.sh                # (optionnel) Script local de déploiement
├── sql/
│   └── structure_intranet.sql # Dump SQL (optionnel)
├── .gitignore                  # Filtres adaptés à Joomla
├── .gitlab-ci.yml             # Pipeline GitLab CI/CD
└── README.md
```

---

## 🚀 Déploiement automatisé avec GitLab CI/CD

Le pipeline CI contient **deux jobs manuels** :

### 1. ✅ `test_ssh_connection`
- Vérifie que GitLab peut se connecter au serveur via SSH
- Affiche un message de succès si la connexion fonctionne

### 2. 🚀 `deploy_template`
- Déploie le template Joomla (`template/template_gemcar/`) vers :
  ```
  /home/gemcarcloud/public_html/intranet.gem-car-cloud.com/templates/template_gemcar/
  ```

---

## 🔐 Configuration SSH requise

1. Générez une paire de clés SSH :
   ```bash
   ssh-keygen -t rsa -b 4096 -C "deploy@intranet-v2v"
   ```

2. Ajoutez la **clé publique** (`.pub`) sur le serveur dans `~/.ssh/authorized_keys`

3. Ajoutez la **clé privée** dans GitLab :
   - Menu : `Settings > CI/CD > Variables`
   - Key : `SSH_PRIVATE_KEY`
   - Value : (collez le contenu complet)
   - Masked ❌ (ne pas cocher), Protected ✅

---

## 🧪 Lancer le pipeline

1. Dans GitLab : `CI/CD > Pipelines > Run pipeline`
2. Branche : `main`
3. Cliquez manuellement sur :
   - `test_ssh_connection` pour tester
   - `deploy_template` pour envoyer les fichiers

---

## 📋 À faire

- [ ] Ajouter la page d'accueil avec le Dashboard KPI
- [ ] Intégrer les modules d'actualités et événements
- [ ] Créer le formulaire de suggestions
- [ ] Gérer la structure multilingue FR / EN
- [ ] Ajouter les liens et documents internes
