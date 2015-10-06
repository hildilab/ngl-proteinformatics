
link into apache www directory

```bash
ln -s /path/to/repos/ngl-proteinformatics/www/ /var/www/ngl
```

make ngl repository available

```bash
ln -s /path/to/repos/ngl/ /path/to/repos/ngl-proteinformatics/www
```


probably not needed!

```xml
<Directory /var/www/ngl>
    Order allow,deny
    Allow from all
    Require all granted
</Directory>
```
