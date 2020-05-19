<?php
/**
 * Template Name: Surveys Template
 *
 * Description: A Page Template for surveys
 *
 * @package WordPress
 * @subpackage Bluecorona_2015
 * @since Bluecorona 2015 1.0
 */
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<script type="text/javascript">
function xgetParameterByName(name, url) {
  if (!url) url = window.location.href;
  name = name.replace(/[\[\]]/g, "\\$&");
  var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
  results = regex.exec(url);
  if (!results) return null;
  if (!results[2]) return '';
  return decodeURIComponent(results[2].replace(/\+/g, " "));
}
(function(w) {
  w._svc = w._svc || {};
  w._svc.workspaceId = 40174;
  var s = document.createElement('script');
  var sid = xgetParameterByName('sid');
  s.src = '//survey.survicate.com/workspaces/37e988661672fad9de1ce860d2732051/surveys/'+sid+'.js';
  s.async = true;
  var e = document.getElementsByTagName('script')[0];
  e.parentNode.insertBefore(s, e);
})(window);
</script>
</head>
<body class="survicate-body">
</body>
</html>