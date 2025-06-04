# Intranet V2V – Installation Joomla 5

Ce dépôt contient la base du site **Joomla 5** qui sert d'intranet pour **V2V Technologies**. On y retrouve l'installation complète de Joomla ainsi que quelques développements spécifiques (modules, configuration). Un template dédié sera ajouté dans `templates/template_intranet-v2v`.

---

## 📁 Structure du projet (extrait)

```text
intranet-v2v/
├── configuration.php               # Fichier de configuration Joomla
├── modules/
│   └── mod_dashboard_v2v/          # Module personnalisé du tableau de bord
├── templates/
│   ├── cassiopeia/                 # Template Joomla par défaut
│   └── template_intranet-v2v/      # Emplacement du template intranet (vide pour l'instant)
├── images/                         # Médias du site
└── README.md
```

---

## 🛠️ Personnalisations principales

- **Module `mod_dashboard_v2v`** – affiche un tableau de bord avec des KPI (voir `modules/mod_dashboard_v2v/`).
- **Template intranet** – à développer dans `templates/template_intranet-v2v`.

---

## 🚀 Déploiement manuel (SFTP)

Le site peut être mis à jour manuellement sur le serveur de production via un client **SFTP** tel que FileZilla.

### Connexion
- **Hôte** : `intranet.gem-car-cloud.com`
- **Protocole** : SFTP
- **Utilisateur** : `gemcarcloud`
- **Port** : 22
- **Mot de passe ou clé SSH** : selon la configuration actuelle

### Répertoire distant cible
```text
/home/gemcarcloud/public_html/intranet.gem-car-cloud.com/
```

---

## 📋 À faire

- [ ] Développer le template dans `templates/template_intranet-v2v`
- [ ] Finaliser le module de dashboard et ses données réelles
- [ ] Mettre en place le formulaire de suggestions
- [ ] Prévoir la gestion multilingue FR / EN
- [ ] Ajouter les liens et documents internes
