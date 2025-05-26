# Intranet V2V – Template Joomla personnalisé

Ce dépôt contient le développement du **template Joomla 5** personnalisé pour l'intranet interne de **V2V Technologies**, réalisé avec branding GEM-CAR.

---

## 🧱 Structure du projet

```
intranet-v2v/
├── template/
│   └── template_gemcar/        # Template Joomla personnalisé
├── deploy/
│   └── rsync.sh                # Script de déploiement vers le serveur cPanel
├── sql/
│   └── structure_intranet.sql # Dump SQL (optionnel)
├── .gitignore
└── README.md
```

---

## 📦 Contenu du template

- `index.php` – Fichier principal HTML du layout Joomla
- `templateDetails.xml` – Déclaration du template (manifest)
- `css/style.css` – Styles personnalisés (avec couleurs GEM-CAR)
- `js/script.js` – Comportement JS de base
- `images/` – Logo, icônes, éléments graphiques

---

## 🚀 Déploiement

Déploiement simple via le script `rsync` :

```bash
sh deploy/rsync.sh
```

Cela publie le template dans :

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
