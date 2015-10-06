
Installation
============

First, checkout this repository and also the NGL Viewer repository (http://github.com/arose/ngl) into `/path/to/repos`. Then follow the intructions below to create symlinks that make the static files available through an Apache Webserver. Note that the NGL Viewer is not served directly but via a symlink to this repository, which is possible as only static files need to be served.

Further, checkout the MDSrv repository (http://github.com/arose/mdsrv) and follow its installation instructions. Make sure it is accessible through http://servername/mdsrv. The MDSrv instance is connected to this NGL instance by a datasource registered, for example, in `www/index.html`:

```javascript
NGL.DatasourceRegistry.add(
    "file", new NGL.MdsrvDatasource( window.location.origin + "/mdsrv/" )
);
NGL.DatasourceRegistry.listing = NGL.DatasourceRegistry.get( "file" );
NGL.DatasourceRegistry.trajectory = NGL.DatasourceRegistry.get( "file" );
```


symlinks
--------

link into apache www directory

```bash
ln -s /path/to/repos/ngl-proteinformatics/www/ /var/www/ngl
```

make ngl repository available

```bash
ln -s /path/to/repos/ngl/ /path/to/repos/ngl-proteinformatics/www
```


site config
-----------

probably not needed!

```xml
<Directory /var/www/ngl>
    Order allow,deny
    Allow from all
    Require all granted
</Directory>
```


examples
--------

TODO describe how-to add entries to the example menu


update
------

TODO explain how-to keep the repositories updated
