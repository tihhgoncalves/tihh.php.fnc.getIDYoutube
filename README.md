# Função de PHP - tihh_getIDYoutube()
Função que retorna o ID dos vídeos do Youtube indiferente de qual versão da URL do vídeo você enviar.

[![Versão](http://app.tiago.art.br/flags/version.php?path=tihhgoncalves/tihh.php.fnc.getIDYoutube)](/releases.md)
[![Versão](http://app.tiago.art.br/flags/size.php?path=tihhgoncalves/tihh.php.fnc.getIDYoutube)](/releases.md)

## Parâmetros
 * ```$url``` - URl do vídeo do Youtube.

### Instalação
Para utilizar esse script, utilize o seguinte comando:

```
  bower install https://github.com/tihhgoncalves/tihh.php.fnc.getIDYoutube.git --save
```

P.S.: Caso prefira, você pode fazer o download do projeto manualmente.

### Exemplo
```
  <?
  
  required('bower_components/tihh.php.fnc.getIDYoutube/load.php');
  
  $id = tihh_getIDYoutube('https://www.youtube.com/watch?v=QgQw1atlioU');
  // retorna $id = QgQw1atlioU
  
  ?>
```
### Autor
![logo](https://raw.githubusercontent.com/tihhgoncalves/tihh.php.fnc.getIDYoutube/master/logo.png)

Esse script de PHP foi desenvolvido por Tihh Gonçalves (tiago@tiago.art.br). 

Mais informações: www.tiago.art.br
