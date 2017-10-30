<?
/**
 * Função que retorna o ID dos vídeos do Youtube
 * indiferente de qual versão da URL do vídeo você enviar.
 *
 * Versão 1.0
 *
 * @param $url
 * @return string
 */
function tihh_getIDYoutube($url){
  $re = '/[http|https]:\/\/(?:youtu\.be\/|(?:[a-z]{2,3}\.)?youtube\.com\/watch(?:\?|#\!)v=)([\w-]{11}).*/im';

  preg_match_all($re, $url, $matches, PREG_SET_ORDER, 0);

  if(!empty($matches[0][1]))
    return $matches[0][1];
  else
    return false;
}
?>