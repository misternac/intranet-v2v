# Intranet V2V – Template Joomla personnalisé

Ce dépôt contient le développement du **template Joomla 5** personnalisé pour l'intranet interne de **V2V Technologies**, basé sur le branding GEM-CAR.

---

## 📁 Structure du projet

```
intranet-v2v/
├── template/
│   └── template_gemcar/        # Template Joomla personnalisé
├── sql/
│   └── structure_intranet.sql # Dump SQL (optionnel)
├── .gitignore                  # Filtres adaptés à Joomla
└── README.md
```

---

## 🛠️ Contenu du template

- `index.php` – Structure HTML principale du site
- `templateDetails.xml` – Manifest Joomla pour le template
- `css/style.css` – Feuilles de styles personnalisées (couleurs GEM-CAR)
- `js/script.js` – Comportement JavaScript du site
- `images/` – Logos et éléments graphiques

---

## 🚀 Déploiement manuel (SFTP)

Le template doit être copié manuellement sur le serveur de production via un client **SFTP** comme FileZilla :

### Connexion :
- **Hôte** : `intranet.gem-car-cloud.com`
- **Protocole** : SFTP
- **Utilisateur** : `gemcarcloud`
- **Port** : 22
- **Mot de passe ou clé SSH** : selon configuration actuelle

### Répertoire distant cible :
```
/home/gemcarcloud/public_html/intranet.gem-car-cloud.com/templates/template_gemcar/
```

---

## 📋 À faire

- [ ] Ajouter la page d'accueil avec le Dashboard KPI
- [ ] Intégrer les modules d'actualités et événements
- [ ] Créer le formulaire de suggestions
- [ ] Gérer la structure multilingue FR / EN
- [ ] Ajouter les liens et documents internes
