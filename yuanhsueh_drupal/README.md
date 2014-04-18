yuanhsueh_drupal
================

#### Setup

#### Development
* project location: 
  * main: `cd /Users/yuanhsueh/Projects/yuanhsueh/yuanhsueh_drupal`
  * theme: `cd /Users/yuanhsueh/Projects/yuanhsueh/yuanhsueh_drupal/sites/all/themes/bootstrap/`
  * subtheme: `cd /Users/yuanhsueh/Projects/yuanhsueh/yuanhsueh_drupal/sites/all/themes/bootstrap_subtheme/`
  * modules: 
    * Jquery Update: https://drupal.org/project/jquery_update
    * (NOT used) Menu Token: https://drupal.org/project/menu_token
    * (NOT used) Entity: https://drupal.org/project/entity
    * (NOT used) Token: https://drupal.org/project/token
    * (NOT used) Ctools: https://drupal.org/project/ctools

#### Staging
* project site: `http://162.243.149.182:109` (baham)
* project access: `ssh baham`

* deploy:
  * modules from local: `scp -r /Users/yuanhsueh/Projects/yuanhsueh/yuanhsueh_drupal/sites/all/modules/* xgadmin@baham:/home/xgadmin/yuanhsueh_drupal/sites/all/modules`
  * theme from local: `scp -r /Users/yuanhsueh/Projects/yuanhsueh/yuanhsueh_drupal/sites/all/themes/bootstrap/* xgadmin@baham:/home/xgadmin/yuanhsueh_drupal/sites/all/themes/bootstrap`
  * subtheme from local: `scp -r /Users/yuanhsueh/Projects/yuanhsueh/yuanhsueh_drupal/sites/all/themes/bootstrap_subtheme/* xgadmin@baham:/home/xgadmin/yuanhsueh_drupal/sites/all/themes/bootstrap_subtheme`
* nginx
  * log
    * tail -f 300 /var/log/nginx/yuanhsueh_drupal_access.log
    * tail -f 300 /var/log/nginx/yuanhsueh_drupal_error.log

#### Production
* domain:

