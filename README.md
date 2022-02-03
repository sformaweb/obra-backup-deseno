# Demo de obra

1. Creación da database "obra" e táboas de proba "usuarios" (funcionarios) e "persoas" (individuos que se rexistrarán no SOL) utilizando phpmyadmin.
2. En cada unha das táboas decídense os campos (columnas) a cubrir, no caso de "persoas" son unha aproximación aos campos que se corresponderían cos do formulario de entrada da app.
3. Dentro da táboa "usuarios" créanse 3 entradas (tamén mediante phpmyadmin), que representan posibles traballadores do SOL con acceso á aplicación.
4. Antes de nada, é necesario instalar algúns paquetes no proxecto: npm, bootstrap, parcel e popper, para obter ditas dependencias de funcionalidade.
   - Coma sempre, facemos un .gitignore para non subir ao repositorio os arquivos innecesarios.
   - Tamén creamos os arquivos style.scss (estilos) e index.php (primeira pantalla de datos).
   - E facemos algúns cambios nas rutas de package.json para que se cree unha carpeta "build", que representará o contido da app.
5. Unha vez iniciada a base de datos e as dependencias do proxecto, comezamos a construir o esquelete de programación da app:
   - Primeiro é imprescindible un php de conexión coa base de datos "obra", seguido dun formulario de login onde se identifican os usuarios e iníciase a sesión.
   - No index.php incluimos un 'require' á conexion.php, un pequeno formulario de búsqueda por nome e unha parte con html para a saída dos datos da base "persoas" por pantalla.
   - Se o futuro login funciona cos usuarios creados, obtemos unha pantalla na que podemos incluir novas "persoas" cun formulario no que os campos a cubrir corresponden coas columnas da táboa "persoas" (nuevo.php).
   - Ademais, créanse os respetivos arquivos php coas funcións de gardar, modificar, eliminar e actualizar rexistros de persoas, adaptados sempre aos campos da táboa.
6. En canto ao login inicial polo que acceden os usuarios (traballadores de SOL), fíxose mediante a creación de dous arquivos: conexion.php (á base de datos "obra") e login.php (formulario simple e código php que recoñece os datos). Tamén hai un salir.php que devólvenos ao login e un inicio.php de proba para confirmar a funcionalidade desta entrada de datos.
7. Na carpeta empresas atópanse os arquivos para a visualización da táboa do mesmo nome e a opción de facer un novo rexistro coma en persoas.

   - **Nota**: agora mesmo a función de gardar saca un erro que se está a solventar.

8. Noutra rama do proxecto fíxose un engadido no arquivo nuevo.php para incluir un apartado de LOPD (subindo un pdf á base).
9. Engadiuse o traballo do equipo de deseño sobre o apartado de persoas, deste modo temos a páxina estilada con header e menú, footer e un layout completo de aplicación.
10. Reestructurouse a árbore de directorios para unha mellor organización de carpetas e fíxose un index principal na base do proxecto.

## Uso de Git e Github

Elaborouse un repositorio común cunha rama "master" principal e diversas ramas fillas con engadidos de diferentes persoas do equipo de programación, co obxectivo de non interferir co traballo individual pero ao mesmo tempo poder ver o progreso dos compañeiros e rescatar os elementos necesarios en cada momento da elaboración das distintas carpetas ou funcionalidades.
