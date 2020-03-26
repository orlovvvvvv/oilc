<?php
$Ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
$http_lang = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);
$fd = fopen("logs2.txt", 'a+') or die("не удалось создать файл");
$date = date('d.m.Y, H:i:s');
$arr = $date.'/'.$_SERVER['HTTP_CF_IPCOUNTRY'].'/'.$http_lang.'/'.$_SERVER['HTTP_REFERER'].'/'.$_SERVER['HTTP_USER_AGENT'].'/'.$Ip." \r\n\n\n";
fwrite($fd, $arr);
fclose($fd);
$Explode = $_SERVER['QUERY_STRING'];

$LandLink = "../?".$Explode;

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <base href="oil/news/">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Правда о запрете Telegram</title>
    <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
   ym(61369459, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/61369459" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
    <!-- Facebook Pixel Code -->
  <!--   <script>
      ! function (f, b, e, v, n, t, s) {
          if (f.fbq) return;
          n = f.fbq = function () {
              n.callMethod ?
                  n.callMethod.apply(n, arguments) : n.queue.push(arguments)
          };
          if (!f._fbq) f._fbq = n;
          n.push = n;
          n.loaded = !0;
          n.version = '2.0';
          n.queue = [];
          t = b.createElement(e);
          t.async = !0;
          t.src = v;
          s = b.getElementsByTagName(e)[0];
          s.parentNode.insertBefore(t, s)
      }(window, document, 'script',
          'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '<?php echo $FacebookPixel?>');
      fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
          src="<?php echo $LandLink;?>tr?id=<?php echo $FacebookPixel?>&ev=PageView&noscript=1" /></noscript>
  End Facebook Pixel Code -->
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon"
        href="https://star.durov2019.site/site/telegram10/preview/img/apple-touch-icon-precomposed.png">
    <link rel="apple-touch-icon" sizes="72x72"
        href="https://star.durov2019.site/site/telegram10/preview/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" sizes="114x114"
        href="https://star.durov2019.site/site/telegram10/preview/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" sizes="144x144"
        href="https://star.durov2019.site/site/telegram10/preview/img/apple-touch-icon-144x144-precomposed.png">
    <link rel="stylesheet" href="assets/template.min.css">
    <link rel="stylesheet" href="assets/label.css">

    <style type="text/css">
        .sharing {
            list-style: none;
            margin: -0.2em;
            padding: 0;
        }

        .sharing__item,
        .sharing__counter {
            display: inline-block;
            vertical-align: top;
        }

        .sharing__item {
            display: inline-block;
            vertical-align: top;
            margin: 0 0.2em;
        }

        .sharing__counter {
            position: relative;
            line-height: 23px;
            font-size: 1.3em;
            padding: 0 0.5em;
            margin-left: 8px;
            border: 1px solid #ccc;
            border-radius: 0.2em;
            background-color: #ffffff;
        }

        .sharing__counter:after,
        .sharing__counter:before {
            content: '';
            display: block;
            position: absolute;
            width: 0;
            height: 0;
        }

        .sharing__counter:after {
            top: 50%;
            right: 100%;
            margin-top: -5px;
            margin-right: -2px;
            border-bottom: 6px solid transparent;
            border-top: 6px solid transparent;
            border-left: 8px solid transparent;
            border-right: 8px solid #FFF;
        }

        .sharing__counter:before {
            top: 50%;
            right: 100%;
            margin-top: -5px;
            border-bottom: 6px solid transparent;
            border-top: 6px solid transparent;
            border-left: 8px solid transparent;
            border-right: 8px solid #CCC;
        }

        .sharing__link {
            display: inline-block;
            vertical-align: top;
            width: 25px;
            height: 25px;
            cursor: pointer;
            background-repeat: no-repeat;
            background-image: url(data:image/svg+xml;base64,PHN2ZyBpZD0iTGF5ZXJfMSIgZGF0YS1uYW1lPSJMYXllciAxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAzMTIgMjQiPjxkZWZzPjxzdHlsZT4uY2xzLTF7ZmlsbDojZmY2NzFkO30uY2xzLTIsLmNscy03e2ZpbGw6I2ZmZjt9LmNscy0ze2ZpbGw6IzM0NGY4NTt9LmNscy00e2ZpbGw6IzJhYTllMDt9LmNscy01e2ZpbGw6I2YyODQwMDt9LmNscy02e2ZpbGw6I2RkNTA0NDt9LmNscy03e2ZpbGwtcnVsZTpldmVub2RkO30uY2xzLTh7ZmlsbDojNGQ3NWEzO30uY2xzLTl7ZmlsbDojMDBiMGVhO30uY2xzLTEwe2ZpbGw6IzE1Mzc0Yzt9LmNscy0xMXtmaWxsOiMyOWFjZGY7fS5jbHMtMTJ7ZmlsbDojZDJlNWYxO30uY2xzLTEze2ZpbGw6I2I1Y2ZlNDt9LmNscy0xNHtmaWxsOnJlZDt9LmNscy0xNXtmaWxsOiMyNWQzNjY7fS5jbHMtMTZ7ZmlsbDojZmRmZmZlO30uY2xzLTE3e2ZpbGw6IzAwODRmZjt9LmNscy0xOHtmaWxsOiNmZjU3MDA7fTwvc3R5bGU+PC9kZWZzPjx0aXRsZT5BbGxfaW5fT25lXzI0eDI0X2VhY2hfUmVzcG9uc2l2ZTwvdGl0bGU+PHJlY3QgY2xhc3M9ImNscy0xIiB4PSI5NiIgd2lkdGg9IjI0IiBoZWlnaHQ9IjI0Ii8+PHBhdGggY2xhc3M9ImNscy0yIiBkPSJNMTA4LDEyLjY1YTQuNDYsNC40NiwwLDEsMC00LjQ2LTQuNDZBNC40Niw0LjQ2LDAsMCwwLDEwOCwxMi42NVptMC02LjNhMS44NSwxLjg1LDAsMSwxLTEuODQsMS44NEExLjg1LDEuODUsMCwwLDEsMTA4LDYuMzVaIi8+PHBhdGggY2xhc3M9ImNscy0yIiBkPSJNMTA5LjgsMTYuMjhhOC42MSw4LjYxLDAsMCwwLDIuNTktMS4wN0ExLjMxLDEuMzEsMCwxLDAsMTExLDEzYTUuNjUsNS42NSwwLDAsMS02LDAsMS4zMSwxLjMxLDAsMCwwLTEuMzksMi4yMSw4LjUsOC41LDAsMCwwLDIuNTksMS4wN2wtMi40OSwyLjQ5YTEuMywxLjMsMCwxLDAsMS44NCwxLjg1TDEwOCwxOC4xN2wyLjQ1LDIuNDVhMS4zLDEuMywwLDEsMCwxLjg0LTEuODVaIi8+PHJlY3QgY2xhc3M9ImNscy0zIiB4PSI0OCIgd2lkdGg9IjI0IiBoZWlnaHQ9IjI0Ii8+PHBhdGggY2xhc3M9ImNscy0yIiBkPSJNNjMuNjIsOS4xNUg2NVY2LjM4SDYyLjYxYy0yLjQ2LDAtMy44NywyLjQ4LTMuODQsNC4xNnYxLjM4SDU2djIuNzdoMi43N1YyM2gzLjQ2VjE0LjY5SDY1VjExLjkySDYyLjIzVjEwLjVBMS4zOCwxLjM4LDAsMCwxLDYzLjYyLDkuMTVaIi8+PHJlY3QgY2xhc3M9ImNscy00IiB4PSIyNCIgd2lkdGg9IjI0IiBoZWlnaHQ9IjI0Ii8+PHBhdGggY2xhc3M9ImNscy0yIiBkPSJNNDQuMzQsNy41QTYuNjEsNi42MSwwLDAsMSw0Mi40NSw4LDMuMzIsMy4zMiwwLDAsMCw0My45LDYuMmE2LjYyLDYuNjIsMCwwLDEtMi4wOS44LDMuMjgsMy4yOCwwLDAsMC01LjY4LDIuMjUsMy4wNiwzLjA2LDAsMCwwLC4wOS43NCw5LjMxLDkuMzEsMCwwLDEtNi43Ny0zLjQzLDMuMzEsMy4zMSwwLDAsMCwxLDQuMzlBMy4zLDMuMywwLDAsMSwyOSwxMC41M3YuMDVhMy4yOSwzLjI5LDAsMCwwLDIuNjQsMy4yMSwzLjEsMy4xLDAsMCwxLS44Ny4xMiwzLDMsMCwwLDEtLjYxLS4wNiwzLjI4LDMuMjgsMCwwLDAsMy4wNiwyLjI4LDYuNTgsNi41OCwwLDAsMS00LjA3LDEuNDEsNi44NCw2Ljg0LDAsMCwxLS43OS0uMDVBOS4zNCw5LjM0LDAsMCwwLDQyLjcxLDkuNjNjMC0uMTUsMC0uMjksMC0uNDNBNi42Myw2LjYzLDAsMCwwLDQ0LjM0LDcuNVoiLz48cmVjdCBjbGFzcz0iY2xzLTIiIHg9IjE2OCIgd2lkdGg9IjI0IiBoZWlnaHQ9IjI0Ii8+PHJlY3QgY2xhc3M9ImNscy01IiB4PSIyMTYiIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIvPjxyZWN0IGNsYXNzPSJjbHMtNiIgeD0iMTIwIiB3aWR0aD0iMjQiIGhlaWdodD0iMjQiLz48cGF0aCBjbGFzcz0iY2xzLTciIGQ9Ik0xMjksMTEuMjZ2Mi41MWgzLjM4YTMuNTIsMy41MiwwLDEsMS0xLTMuOTVsMS43Ny0xLjczYTYsNiwwLDEsMCwyLDQuNDMsNi41Nyw2LjU3LDAsMCwwLS4xMy0xLjI2Wm0xMC45LjE5VjkuMzdoLTEuNTJ2Mi4wOEgxMzYuM1YxM2gyLjA5djIuMDloMS41MlYxM0gxNDJWMTEuNDVaIi8+PHJlY3QgY2xhc3M9ImNscy04IiB3aWR0aD0iMjQiIGhlaWdodD0iMjQiLz48cGF0aCBjbGFzcz0iY2xzLTciIGQ9Ik0xMS4zMiwxNi42NmgxYS44OS44OSwwLDAsMCwuNDYtLjIxLjc1Ljc1LDAsMCwwLC4xNC0uNDRzMC0xLjM2LjYxLTEuNTcsMS40MywxLjMyLDIuMjcsMS45YTEuNTgsMS41OCwwLDAsMCwxLjEzLjM1bDIuMjcsMHMxLjE5LS4wOC42My0xYTcuNjUsNy42NSwwLDAsMC0xLjY5LTJjLTEuNDItMS4zMy0xLjIzLTEuMTEuNDgtMy40QzE5LjY5LDguOTEsMjAuMSw4LjA2LDIwLDcuN3MtLjg5LS4yNi0uODktLjI2bC0yLjU2LDBhLjU0LjU0LDAsMCwwLS4zMy4wNi43NC43NCwwLDAsMC0uMjIuMjcsMTYuMDcsMTYuMDcsMCwwLDEtLjk0LDJjLTEuMTQsMS45My0xLjYsMi0xLjc4LDEuOTEtLjQ0LS4yOC0uMzMtMS4xMi0uMzMtMS43MiwwLTEuODguMjktMi42Ni0uNTUtMi44NkE0LjMzLDQuMzMsMCwwLDAsMTEuMTgsN2E1LjQxLDUuNDEsMCwwLDAtMi4xMy4yMmMtLjI5LjE0LS41MS40Ni0uMzguNDhhMS4xNSwxLjE1LDAsMCwxLC43Ni4zNywyLjUsMi41LDAsMCwxLC4yNSwxLjE2cy4xNSwyLjIxLS4zNSwyLjQ4Yy0uMzQuMTktLjgyLS4xOS0xLjgzLTJhMTYuMjIsMTYuMjIsMCwwLDEtLjkxLTEuODkuODMuODMsMCwwLDAtLjIxLS4yOUExLjI1LDEuMjUsMCwwLDAsNiw3LjQzSDMuNTZzLS4zNywwLS41LjE3UzMsOCwzLDhhMjgsMjgsMCwwLDAsNC4wNiw2LjcsNS44Nyw1Ljg3LDAsMCwwLDQuMjIsMS45MloiLz48cmVjdCBjbGFzcz0iY2xzLTkiIHg9IjE0NCIgd2lkdGg9IjI0IiBoZWlnaHQ9IjI0Ii8+PHBhdGggY2xhc3M9ImNscy0yIiBkPSJNMTYyLjQyLDE1LjQ3Yy0uMjktMS40My0uNTctMi43Mi0uNTctMi43MmgwYTkuODUsOS44NSwwLDAsMC01LjA3LDUuMTFsMi42OS41OGE1LjgxLDUuODEsMCwwLDEsMi45NS0zIi8+PHBhdGggY2xhc3M9ImNscy0xMCIgZD0iTTE1Ni43OCwxNy44NmE5Ljg1LDkuODUsMCwwLDEsNS4wNy01LjExaDBsLTgtOGgwQTkuOSw5LjksMCwwLDAsMTQ4LjgsOS45WiIvPjxwYXRoIGNsYXNzPSJjbHMtMTAiIGQ9Ik0xNjIuNDIsMTUuNDdhNS43NCw1Ljc0LDAsMCwwLTIuOTUsM2wzLjczLjc3WiIvPjxwYXRoIGNsYXNzPSJjbHMtMiIgZD0iTTIyOC4wNiwxNy45NFYxOGgxLjh2LS4wNmE3Ljc4LDcuNzgsMCwwLDAtNy44MS03Ljc4aDBWMTJoMEE2LDYsMCwwLDEsMjI4LjA2LDE3Ljk0WiIvPjxwYXRoIGNsYXNzPSJjbHMtMiIgZD0iTTIyMiwxNi4zN2ExLjYzLDEuNjMsMCwxLDAsMS42My0xLjYzQTEuNjMsMS42MywwLDAsMCwyMjIsMTYuMzdaIi8+PHBhdGggY2xhc3M9ImNscy0yIiBkPSJNMjMyLjIsMTcuOTRhLjEzLjEzLDAsMCwxLDAsLjA2SDIzNHYtLjA2QTExLjkzLDExLjkzLDAsMCwwLDIyMi4wNSw2aDB2MS44aDBBMTAuMTUsMTAuMTUsMCwwLDEsMjMyLjIsMTcuOTRaIi8+PHJlY3QgY2xhc3M9ImNscy0xMSIgeD0iMTkyIiB3aWR0aD0iMjQiIGhlaWdodD0iMjQiLz48cGF0aCBjbGFzcz0iY2xzLTIiIGQ9Ik0yMTEsNi40NmwtMi4zOCwxMmEuODcuODcsMCwwLDEtMS4yNC40M2wtNS40OC00LjItMi0xLTMuMzUtMS4xM3MtLjUxLS4xOC0uNTYtLjU4LjU4LS42MS41OC0uNjFMMjA5LjksNi4xNFMyMTEsNS42NiwyMTEsNi40NloiLz48cGF0aCBjbGFzcz0iY2xzLTEyIiBkPSJNMjAxLjQ4LDE4LjI5cy0uMTYsMC0uMzYtLjY1LTEuMjEtNC0xLjIxLTRMMjA4LDguNThzLjQ2LS4yOC40NSwwYzAsMCwuMDguMDUtLjE3LjI4cy02LjMyLDUuNjktNi4zMiw1LjY5Ii8+PHBhdGggY2xhc3M9ImNscy0xMyIgZD0iTTIwNCwxNi4yNmwtMi4xNiwyYS4zOS4zOSwwLDAsMS0uMzYuMDVsLjQyLTMuNjciLz48cmVjdCBjbGFzcz0iY2xzLTE0IiB4PSI3MiIgd2lkdGg9IjI0IiBoZWlnaHQ9IjI0Ii8+PGcgaWQ9IkxvemVuZ2UiPjxwYXRoIGNsYXNzPSJjbHMtMiIgZD0iTTkxLjg0LDkuMzdhMy4zMywzLjMzLDAsMCwwLS42NC0xLjU1LDIuMywyLjMsMCwwLDAtMS42LS42NkM4Ny4zNiw3LDg0LDcsODQsN2gwcy0zLjM2LDAtNS42LjE2YTIuMjgsMi4yOCwwLDAsMC0xLjYuNjYsMy4yMiwzLjIyLDAsMCwwLS42NCwxLjU1QTIzLjIzLDIzLjIzLDAsMCwwLDc2LDExLjl2MS4xOWEyMywyMywwLDAsMCwuMTYsMi41MywzLjIyLDMuMjIsMCwwLDAsLjY0LDEuNTUsMi42NiwyLjY2LDAsMCwwLDEuNzYuNjdDNzkuODQsMTgsODQsMTgsODQsMThzMy4zNiwwLDUuNi0uMTZhMi4zMiwyLjMyLDAsMCwwLDEuNi0uNjcsMy4zMywzLjMzLDAsMCwwLC42NC0xLjU1QTIzLDIzLDAsMCwwLDkyLDEzLjA5VjExLjlBMjMuMjMsMjMuMjMsMCwwLDAsOTEuODQsOS4zN1ptLTkuNDksNS4xNnYtNC40bDQuMzIsMi4yMVoiLz48L2c+PHJlY3QgY2xhc3M9ImNscy0xNSIgeD0iMjQwIiB3aWR0aD0iMjQiIGhlaWdodD0iMjQiLz48cGF0aCBpZD0iV0FfTG9nbyIgZGF0YS1uYW1lPSJXQSBMb2dvIiBjbGFzcz0iY2xzLTE2IiBkPSJNMjU3LjEsNy41YTcuMTcsNy4xNywwLDAsMC0xMS4yOCw4LjY1bC0xLDMuNzIsMy44LTFhNy4xOSw3LjE5LDAsMCwwLDMuNDMuODdoMEE3LjE3LDcuMTcsMCwwLDAsMjU3LjEsNy41Wm0tNS4wNywxMWgwYTUuOTEsNS45MSwwLDAsMS0zLS44M2wtLjIxLS4xMy0yLjI2LjYuNi0yLjItLjE0LS4yM0E2LDYsMCwwLDEsMjUyLDYuNjFhNiw2LDAsMSwxLDAsMTEuOTJabTMuMjctNC40NmMtLjE4LS4wOS0xLjA2LS41Mi0xLjIzLS41OHMtLjI4LS4wOS0uNC4wOWE5LDksMCwwLDEtLjU3LjdjLS4xLjEyLS4yLjEzLS4zOCwwYTQuNTIsNC41MiwwLDAsMS0xLjQ0LS44OCw1LjE5LDUuMTksMCwwLDEtMS0xLjI1Yy0uMTEtLjE3LDAtLjI3LjA4LS4zNnMuMTgtLjIxLjI3LS4zMWExLjMzLDEuMzMsMCwwLDAsLjE4LS4zLjMzLjMzLDAsMCwwLDAtLjMybC0uNTUtMS4zM2MtLjE1LS4zNS0uMjktLjMtLjQtLjMxaC0uMzVhLjY2LjY2LDAsMCwwLS40OC4yMiwyLDIsMCwwLDAtLjYyLDEuNSwzLjQ4LDMuNDgsMCwwLDAsLjczLDEuODUsOCw4LDAsMCwwLDMuMDYsMi43MSwxMC43LDEwLjcsMCwwLDAsMSwuMzcsMi4zNiwyLjM2LDAsMCwwLDEuMTMuMDcsMS44NSwxLjg1LDAsMCwwLDEuMjEtLjg1LDEuNDIsMS40MiwwLDAsMCwuMS0uODVDMjU1LjYsMTQuMjEsMjU1LjQ4LDE0LjE2LDI1NS4zLDE0LjA3WiIvPjxyZWN0IGNsYXNzPSJjbHMtMTciIHg9IjI2NCIgd2lkdGg9IjI0IiBoZWlnaHQ9IjI0Ii8+PHBhdGggZD0iTTE4MCw1Ljc3YzIuMTQsMCwyLjM5LDAsMy4yMy4wNWE0LjUyLDQuNTIsMCwwLDEsMS40OS4yOCwyLjQyLDIuNDIsMCwwLDEsLjkyLjU5LDIuNTcsMi41NywwLDAsMSwuNi45Miw0LjM5LDQuMzksMCwwLDEsLjI3LDEuNDljMCwuODQuMDUsMS4xLjA1LDMuMjNzMCwyLjM5LS4wNSwzLjIzYTQuMzMsNC4zMywwLDAsMS0uMjcsMS40OSwyLjY3LDIuNjcsMCwwLDEtMS41MiwxLjUyLDQuMzMsNC4zMywwLDAsMS0xLjQ5LjI3Yy0uODQsMC0xLjA5LjA1LTMuMjMuMDVzLTIuMzksMC0zLjIzLS4wNWE0LjMzLDQuMzMsMCwwLDEtMS40OS0uMjcsMi42NywyLjY3LDAsMCwxLTEuNTItMS41Miw0LjMzLDQuMzMsMCwwLDEtLjI3LTEuNDljMC0uODQtLjA1LTEuMDktLjA1LTMuMjNzMC0yLjM5LjA1LTMuMjNhNC4zOSw0LjM5LDAsMCwxLC4yNy0xLjQ5LDIuNTcsMi41NywwLDAsMSwuNi0uOTIsMi40MiwyLjQyLDAsMCwxLC45Mi0uNTksNC41Miw0LjUyLDAsMCwxLDEuNDktLjI4Yy44NCwwLDEuMDktLjA1LDMuMjMtLjA1bTAtMS40NGMtMi4xNywwLTIuNDUsMC0zLjMsMGE1Ljg1LDUuODUsMCwwLDAtMS45NC4zNyw0LjA4LDQuMDgsMCwwLDAtMS40Mi45Miw0LDQsMCwwLDAtLjkyLDEuNDJBNS44NSw1Ljg1LDAsMCwwLDE3Mi4wNSw5YzAsLjg2LS4wNSwxLjEzLS4wNSwzLjNzMCwyLjQ1LjA1LDMuM2E1Ljg1LDUuODUsMCwwLDAsLjM3LDEuOTQsNCw0LDAsMCwwLDIuMzQsMi4zNCw1Ljg1LDUuODUsMCwwLDAsMS45NC4zN2MuODUsMCwxLjEzLDAsMy4zLDBzMi40NSwwLDMuMywwYTUuODUsNS44NSwwLDAsMCwxLjk0LS4zNyw0LDQsMCwwLDAsMi4zNC0yLjM0LDUuODUsNS44NSwwLDAsMCwuMzctMS45NGMwLS44NS4wNS0xLjEzLjA1LTMuM1MxODgsOS44OSwxODgsOWE1Ljg1LDUuODUsMCwwLDAtLjM3LTEuOTQsNCw0LDAsMCwwLS45Mi0xLjQyLDQuMDgsNC4wOCwwLDAsMC0xLjQyLS45Miw1Ljg1LDUuODUsMCwwLDAtMS45NC0uMzdjLS44NSwwLTEuMTMsMC0zLjMsMFoiLz48cGF0aCBkPSJNMTgwLDguMjJhNC4xMSw0LjExLDAsMSwwLDQuMTEsNC4xMUE0LjExLDQuMTEsMCwwLDAsMTgwLDguMjJaTTE4MCwxNWEyLjY3LDIuNjcsMCwxLDEsMi42Ny0yLjY3QTIuNjgsMi42OCwwLDAsMSwxODAsMTVaIi8+PGNpcmNsZSBjeD0iMTg0LjI3IiBjeT0iOC4wNiIgcj0iMC45NiIvPjxwYXRoIGNsYXNzPSJjbHMtMiIgZD0iTTI3Niw0LjVhNy4yNCw3LjI0LDAsMCwwLTcuNSw2Ljk0LDYuNzMsNi43MywwLDAsMCwyLjgsNS40MVYxOS41bDIuNTUtMS40YTgsOCwwLDAsMCwyLjE1LjI5LDcuMjQsNy4yNCwwLDAsMCw3LjUtN0E3LjI0LDcuMjQsMCwwLDAsMjc2LDQuNVptLjc1LDkuMzUtMS45MS0yLTMuNzMsMiw0LjEtNC4zNSwyLDIsMy42OC0yLTQuMSw0LjM1WiIvPjxyZWN0IGNsYXNzPSJjbHMtMTgiIHg9IjI4OCIgd2lkdGg9IjI0IiBoZWlnaHQ9IjI0Ii8+PHBhdGggY2xhc3M9ImNscy0yIiBkPSJNMzA4LDEyYTEuNzgsMS43OCwwLDAsMS0xLDEuNjEsMy40NCwzLjQ0LDAsMCwxLC4xLjg2LDQuMDgsNC4wOCwwLDAsMS0uOTUsMi41OSw2LjM1LDYuMzUsMCwwLDEtMi41OSwxLjg4LDkuNDUsOS40NSwwLDAsMS03LjE0LDAsNi4zNSw2LjM1LDAsMCwxLTIuNTktMS44OCw0LjA2LDQuMDYsMCwwLDEtLjk1LTIuNTksMy41OCwzLjU4LDAsMCwxLC4xLS44NSwxLjY2LDEuNjYsMCwwLDEtLjczLS42NiwxLjcxLDEuNzEsMCwwLDEtLjI4LTEsMS43OSwxLjc5LDAsMCwxLDEuNzgtMS44LDEuNzIsMS43MiwwLDAsMSwxLjI5LjU3LDguMzIsOC4zMiwwLDAsMSw0LjYtMS40NmwxLTQuN2EuMjYuMjYsMCwwLDEsLjEzLS4xOS4zMi4zMiwwLDAsMSwuMjMsMGwzLjMuNzRhMS4xNCwxLjE0LDAsMCwxLC40OC0uNTQsMS4yNSwxLjI1LDAsMCwxLC43LS4yMSwxLjM1LDEuMzUsMCwwLDEsMS4zNCwxLjM1LDEuMzQsMS4zNCwwLDAsMS0uMzksMSwxLjMsMS4zLDAsMCwxLS45NS4zOSwxLjI4LDEuMjgsMCwwLDEtLjk0LS4zOSwxLjM0LDEuMzQsMCwwLDEtLjM5LTFsLTMtLjY3LS45Myw0LjI2QTguNDIsOC40MiwwLDAsMSwzMDUsMTAuNzZhMS43NCwxLjc0LDAsMCwxLDIuNTMsMEExLjc0LDEuNzQsMCwwLDEsMzA4LDEyWm0tMTIuMjcsMS44YTEuMywxLjMsMCwwLDAsLjM5Ljk1LDEuMjUsMS4yNSwwLDAsMCwuOTQuNCwxLjI3LDEuMjcsMCwwLDAsLjk1LS40LDEuMzUsMS4zNSwwLDAsMC0uOTUtMi4zLDEuMjQsMS4yNCwwLDAsMC0uOTMuNCwxLjMxLDEuMzEsMCwwLDAtLjQsMVpNMzAzLDE3YS4zMy4zMywwLDAsMC0uMjItLjU2LjMyLjMyLDAsMCwwLS4yMy4wOSwyLjI1LDIuMjUsMCwwLDEtMS4wOC41Niw1Ljc3LDUuNzcsMCwwLDEtMi44NiwwLDIuMywyLjMsMCwwLDEtMS4wOC0uNTYuMzIuMzIsMCwwLDAtLjIzLS4wOS4yOS4yOSwwLDAsMC0uMjIuMDkuMjkuMjksMCwwLDAtLjEuMjMuMzEuMzEsMCwwLDAsLjEuMjQsMi41NCwyLjU0LDAsMCwwLDEsLjYxLDUuNTUsNS41NSwwLDAsMCwxLjEuMjcsNy4zMiw3LjMyLDAsMCwwLC44MSwwLDcuNTcsNy41NywwLDAsMCwuODEsMCw1LjMyLDUuMzIsMCwwLDAsMS4wOS0uMjdBMi41MSwyLjUxLDAsMCwwLDMwMywxN1ptMC0xLjg1YTEuMjUsMS4yNSwwLDAsMCwuOTQtLjQsMS4zLDEuMywwLDAsMCwuMzktLjk1LDEuMzcsMS4zNywwLDAsMC0xLjMzLTEuMzUsMS4zNSwxLjM1LDAsMCwwLS45NSwyLjMsMS4yNywxLjI3LDAsMCwwLC45NS40WiIvPjwvc3ZnPg==);
            background-size: 1300% 100%;
            background-position-y: 0;
        }

        .sharing__link_facebook {
            background-position-x: -50px;
        }

        .sharing__link_twitter {
            background-position-x: -25px;
        }

        .sharing__link_reddit {
            background-position-x: -300px;
        }

        .sharing__link_google {
            background-position-x: -125px;
        }

        .sharing__link_telegram {
            background-position-x: -200px;
        }

        .sharing__link_whatsapp {
            background-position-x: -250px;
        }

        .sharing__link_fbmessenger {
            background-position-x: -275px;
        }

        .sharing__link_ok {
            background-position-x: -100px;
        }
    </style>
    <style type="text/css">
        .slider24smi11671 {
            position: relative;
            overflow: hidden;
        }

        .slider24smi__inner11671 {
            position: relative;
        }

        .slider24smi__edge-button11671 {
            position: absolute;
            top: 50%;
            width: 39px;
            height: 54px;
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            border-radius: 2px;
            margin-top: -27px;
            z-index: 10;
            text-indent: -9999px;
            overflow: hidden;
            cursor: pointer;
        }

        .slider24smi__edge-left11671 .slider24smi__edge-button11671 {
            transition: left 0.5s ease;
            left: -60px;
            box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.4), 0 4px 22px 0 rgba(0, 0, 0, 0.4);
        }

        .slider24smi__edge-right11671 .slider24smi__edge-button11671 {
            transition: right 0.5s ease;
            right: -60px;
            box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.4), 0 4px 22px 0 rgba(0, 0, 0, 0.4);
        }

        .slider24smi_button-left11671 .slider24smi__edge-left11671 .slider24smi__edge-button11671 {
            left: 15px;
        }

        .slider24smi_button-right11671 .slider24smi__edge-right11671 .slider24smi__edge-button11671 {
            right: 15px;
        }

        .slider24smi__cards11671 {
            overflow: hidden;
        }

        .slider24smi__scroller11671 {
            white-space: nowrap;
            overflow-x: scroll;
            overflow-y: hidden;
            box-sizing: content-box;
            padding-top: 10px;
            -webkit-overflow-scrolling: touch;
            margin-bottom: -10px;
            padding-bottom: 10px;
        }

        .slider24smi__slide11671 {
            white-space: normal;
            display: inline-block;
        }

        .slider24smi_moving11671 .slider24smi__slide11671 {
            pointer-events: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .slider24smi_moving11671 .slider24smi__scroller11671 {
            cursor: move;
        }

        .slider24smi__edge-shadow11671 {
            position: absolute;
            top: 0;
            bottom: 20px;
            width: 18px;
            pointer-events: none;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: left;
            opacity: 0;
            z-index: 1;
            transition: opacity 0.1s ease;
        }

        .slider24smi__edge-right11671 .slider24smi__edge-shadow11671 {
            background-position: right;
            right: 0;
        }

        .slider24smi_edge_left11671 .slider24smi__edge-left11671 .slider24smi__edge-shadow11671,
        .slider24smi_edge_right11671 .slider24smi__edge-right11671 .slider24smi__edge-shadow11671 {
            opacity: 1;
        }

        .slider24smi__slide11671 {
            margin-right: 16px;
            width: 192px;
            position: relative;
            overflow: hidden;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            transition: box-shadow;
            transition-duration: 0.5s;
            transition-property: box-shadow;
            will-change: box-shadow;
            height: 256px;
        }

        .slider24smi__slide11671 a {
            display: block;
            position: relative;
            height: 256px;
        }

        .slider24smi__slide11671 a:before,
        .slider24smi__slide11671 a:after {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            width: 100%;
            content: "";
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            z-index: 2;
        }

        .slider24smi__slide11671:hover {
            box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.4), 0 4px 22px 0 rgba(0, 0, 0, 0.4);
        }

        .slider24smi__slide11671 img {
            display: block;
            width: 100%;
            height: 176px;
        }

        .slider24smi__slide11671 .slider24smi__slide-text11671 a:before {
            background: none;
        }

        .slider24smi__slide11671 .slider24smi__slide-text11671 {
            bottom: 28px;
            z-index: 6;
            padding: 0 10px;
            display: table;
            position: absolute;
            height: 90px;
            vertical-align: bottom;
            margin-bottom: 7px;
        }

        .slider24smi__slide11671 .slider24smi__slide-text11671 h3 {
            font-family: "PT Sans", sans-serif;
            font-size: 16px;
            font-weight: 600;
            font-style: normal;
            text-decoration: none;
            line-height: 1.1;
            margin: 0 !important;
            vertical-align: bottom;
            display: table-cell;
        }

        .slider24smi__slide11671 a:hover {
            text-decoration: none !important;
        }

        .slider24smi__shadow11671 {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }

        .slider24smi_wrapper11671 {
            background: #fff;
            padding: 10px;
        }

        .slider-content {}

        .source-content11671 {
            font-family: "PT Sans", sans-serif;
            font-size: 12px;
            font-weight: normal;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.38;
            letter-spacing: normal;
            padding: 229px 10px 10px 10px;
            z-index: 6;
            width: 192px;
            opacity: 0.5;
        }

        .slider_source11671 {
            position: absolute;
            bottom: 0;
        }

        .slider_source11671 a:hover {
            text-decoration: none !important;
        }

        .slider24smi__img-wrapper11671 {
            position: absolute;
            top: 0px;
            z-index: 6;
            width: 192px;
            height: 176px;
        }

        .smiheader11671 {
            font-family: Montserrat, Arial, sans-serif;
            font-size: 24px;
            line-height: 30px;
            font-weight: bold;
            color: #000;
            position: relative;
            padding-right: 38px;
            text-align: left;
        }
    </style>
    <style type="text/css">
        .smiinformer10978 * {
            font-size: 0;
            padding: 0;
            margin: 0;
            border-width: 0;
            box-sizing: border-box;
        }

        .smiinformer10978 {
            border: 1px solid #d4d4d4;
            width: 100%;
            margin: 10px 0;
            padding: 0 10px;
            background: #FFF;
        }

        .smiteaser-container10978 {
            display: inline-block;
            width: 100%;
            vertical-align: top;
            border-bottom: 1px solid #e6e6e6
        }

        .smiteaser-container10978:after {
            display: table;
            content: "";
        }

        .smiteaser10978 {
            margin: 10px 0;
        }

        .smiteaser-row10978:last-child .smiteaser-container10978 {
            border: 0;
        }

        .smiteaser10978:after {
            content: "";
            display: table;
            clear: both;
        }

        .smiimg10978 {
            float: left;
            margin-right: 5px;
            margin-bottom: 10px;
        }

        .smiimg10978 img {
            border: 0px solid #fff;
        }

        a.smititle10978 {
            font-family: DIN Pro;
            font-size: 16px;
            color: #0000CC;
            font-weight: normal;
            font-style: normal;
            text-decoration: none;
        }

        a.smititle10978:hover {
            color: #000;
            font-weight: normal;
            font-style: normal;
            text-decoration: underline;
        }

        .smicat10978 {
            font-size: 11px;
            color: #000;
        }

        .smitext10978 {
            text-align: left;
            line-height: 16px;
        }

        .smi_logo img {
            width: 75px;
        }

        .smi_logo {
            margin-left: 10px;
            margin-top: 3px;
        }
    </style>
    <style type="text/css">
        @-webkit-keyframes spl_seoInserted {
            0% {
                outline-color: #fff
            }

            to {
                outline-color: #000
            }
        }

        @keyframes spl_seoInserted {
            0% {
                outline-color: #fff
            }

            to {
                outline-color: #000
            }
        }

        [data-spot-im-seo] {
            -webkit-animation-duration: 10ms;
            animation-duration: 10ms;
            -webkit-animation-name: spl_seoInserted;
            animation-name: spl_seoInserted
        }
    </style>
    <style>
        @keyframes community-promo {
            from {
                outline-color: #fff;
            }

            to {
                outline-color: #000;
            }
        }

        [data-spotim-module="community-promo"]:not([data-ready="true"]) {
            animation-duration: 10ms;
            animation-name: community-promo;
        }
    </style>
    <style type="text/css">
        .zen-widget.widget {
            width: 100%;
            display: block;
            position: relative;
            overflow: hidden;
            background-color: #fff;
            padding: 18px 0 16px 0;
            text-align: left;
            -webkit-overflow-scrolling: touch;
        }

        .zen-widget.widget_hidden {
            display: none;
        }

        .zen-widget.widget__header {
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            -webkit-flex-flow: row nowrap;
            flex-flow: row nowrap;
            -webkit-align-items: center;
            align-items: center;
            color: #000;
            margin-bottom: 16px;
            margin-left: 16px;
            margin-right: 16px;
        }

        .zen-widget.widget__header-left {
            -webkit-flex: 0 0 auto;
            flex: 0 0 auto;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-flow: row nowrap;
            flex-flow: row nowrap;
            -webkit-align-items: center;
            align-items: center;
        }

        .zen-widget.widget__header-right {
            -webkit-flex: 0 0 auto;
            flex: 0 0 auto;
        }

        .zen-widget.widget__header-info {
            margin: 0 6px;
        }

        .zen-widget.widget__header-logo {
            line-height: 1;
            white-space: nowrap;
            vertical-align: bottom;
            font-family: 'logotype-ysans';
            display: block;
        }

        .zen-widget.widget__header-logo,
        .zen-widget.widget__header-logo:hover,
        .zen-widget.widget__header-logo:visited,
        .zen-widget.widget__header-logo:active {
            color: #000 !important;
            text-decoration: none !important;
        }

        .zen-widget.widget__header_size_l .zen-widget.widget__header-logo,
        .zen-widget.widget__header_size_m .zen-widget.widget__header-logo {
            font-size: 21px;
        }

        .zen-widget.widget__header_size_s .zen-widget.widget__header-logo {
            font-size: 17px;
        }

        .zen-widget.widget__header-icon {
            background-image: url("data:image/svg+xml,%3C?xml version='1.0' encoding='UTF-8'?%3E %3Csvg width='48px' height='48px' viewBox='0 0 48 48' version='1.1' xmlns='https://www.w3.org/2000/svg' xmlns:xlink='https://www.w3.org/1999/xlink'%3E %3C!-- Generator: sketchtool 50 (54983) - https://www.bohemiancoding.com/sketch --%3E %3Ctitle%3E73188D09-4670-44FA-B659-625E4B180F22%3C/title%3E %3Cdesc%3ECreated with sketchtool.%3C/desc%3E %3Cdefs%3E %3Ccircle id='path-1' cx='24' cy='24' r='24'%3E%3C/circle%3E %3ClinearGradient x1='91.7771101%25' y1='50%25' x2='7.77982326%25' y2='50%25' id='linearGradient-3'%3E %3Cstop stop-color='%23F8B3B2' offset='0%25'%3E%3C/stop%3E %3Cstop stop-color='%23F8B3B2' offset='100%25'%3E%3C/stop%3E %3C/linearGradient%3E %3C/defs%3E %3Cg id='Page-2' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E %3Cg id='widget_new_logo_desktop' transform='translate(-183.000000, -60.000000)'%3E %3Cg id='icon' transform='translate(183.000000, 60.000000)'%3E %3Cmask id='mask-2' fill='white'%3E %3Cuse xlink:href='%23path-1'%3E%3C/use%3E %3C/mask%3E %3Cuse id='Mask' fill='%23FF0000' xlink:href='%23path-1'%3E%3C/use%3E %3Cpolygon id='Rectangle' fill='url(%23linearGradient-3)' mask='url(%23mask-2)' transform='translate(24.535281, 23.440157) rotate(-41.000000) translate(-24.535281, -23.440157) ' points='15.5761896 20.1267812 33.4943715 21.1721382 33.4943715 26.7535335 15.5761896 25.7081765'%3E%3C/polygon%3E %3Cpolygon id='Rectangle' fill='%23D00000' mask='url(%23mask-2)' transform='translate(23.576390, 42.074878) rotate(-41.000000) translate(-23.576390, -42.074878) ' points='13.3309574 38.6840901 33.8218233 39.8842708 33.8218233 45.4656661 13.3309574 44.2654855'%3E%3C/polygon%3E %3Cpolygon id='Rectangle' fill='%23D00000' mask='url(%23mask-2)' transform='translate(24.699099, 5.446272) rotate(-41.000000) translate(-24.699099, -5.446272) ' points='15.5545795 2.09650637 33.8436184 3.21464248 33.8436184 8.79603783 15.5545795 7.67790172'%3E%3C/polygon%3E %3Cpolygon id='Rectangle' fill='%23FFFFFF' mask='url(%23mask-2)' points='15.627907 8.93023256 33.4883721 14.7774086 33.4883721 20.0930233 15.627907 14.2458472'%3E%3C/polygon%3E %3Cpolygon id='Rectangle' fill='%23FFFFFF' mask='url(%23mask-2)' points='15.627907 26.7906977 33.4883721 32.6378738 33.4883721 37.9534884 15.627907 32.1063123'%3E%3C/polygon%3E %3C/g%3E %3C/g%3E %3C/g%3E %3C/svg%3E");
            background-position: center;
            background-size: contain;
            border-radius: 50%;
            background-repeat: no-repeat;
            overflow: hidden;
        }

        .zen-widget.widget__header_size_s .zen-widget.widget__header-icon {
            width: 20px;
            height: 20px;
        }

        .zen-widget.widget__header_size_m .zen-widget.widget__header-icon {
            width: 27px;
            height: 27px;
        }

        .zen-widget.widget__header_size_l .zen-widget.widget__header-icon {
            width: 48px;
            height: 48px;
        }

        .zen-widget.widget__header-desc {
            display: block;
            font-size: 15px;
            line-height: 18px;
            vertical-align: bottom;
            font-family: 'regular-ysans';
            position: relative;
            margin-top: 2px;
        }

        .zen-widget.widget__header_size_s .zen-widget.widget__header-desc {
            display: none;
        }

        .zen-widget.widget__header_promo .zen-widget.widget__header-desc {
            display: none;
        }

        .zen-button.zen-widget.widget__header-button {
            height: 38px;
            min-width: 190px;
            text-transform: none;
            font-size: 15px;
            line-height: 18px;
            padding: 10px 19px;
            letter-spacing: normal;
        }

        .zen-button.zen-widget.widget__header-button_is-mobile {
            padding: 4px 14px;
            min-width: 153px;
            line-height: 15px;
            font-size: 13px;
        }

        .zen-widget.widget__header_size_s .zen-button.zen-widget.widget__header-button {
            min-width: 140px;
            padding: 3px 10px;
            height: 36px;
        }

        .zen-widget.widget_need-edges .zen-widget.widget__header {
            margin-left: 0;
            margin-right: 0;
        }

        .zen-widget.widget.card-size_s,
        .zen-widget.widget.card-size_m {
            padding: 9px 0 8px 0;
        }

        .zen-widget.widget.card-size_s .zen-widget.widget__header,
        .zen-widget.widget.card-size_m .zen-widget.widget__header {
            margin-bottom: 10px;
        }

        .zen-widget.widget.card-size_s .zen-widget.widget__header-logo,
        .zen-widget.widget.card-size_m .zen-widget.widget__header-logo {
            font-size: 19px;
            line-height: 1.33;
        }

        .zen-widget.widget.card-size_s .zen-widget.widget__header-desc,
        .zen-widget.widget.card-size_m .zen-widget.widget__header-desc {
            font-size: 13px;
            line-height: normal;
            margin-top: 0;
        }

        .zen-widget.widget.card-size_s .zen-widget.widget__header-info,
        .zen-widget.widget.card-size_m .zen-widget.widget__header-info {
            margin: 0;
        }

        .zen-widget.widget.card-size_s .zen-widget.widget__header-icon,
        .zen-widget.widget.card-size_m .zen-widget.widget__header-icon {
            display: none;
        }

        .zen-widget.widget.vertical {
            width: auto;
            height: calc(100% - 18px);
            padding: 9px 0 5px 0;
            margin: 0;
        }

        .zen-widget.widget.vertical .zen-widget.widget__header-logo {
            font-weight: bold;
        }

        .zen-widget.widget.vertical .zen-widget.widget__header_size_s .zen-widget.widget__header-logo {
            font-size: 21px;
            line-height: 24px;
        }

        .zen-widget.widget.vertical .zen-widget.widget__header {
            padding: 0 5px;
        }

        .zen-widget.widget.vertical .zen-widget.widget__header-icon._shown_s {
            display: inline-block;
            margin-right: 9px;
            width: 27px;
            height: 27px;
        }

        .zen-widget.widget.vertical .zen-widget.widget__header-icon._shown_m,
        .zen-widget.widget.vertical .zen-widget.widget__header-icon._shown_l {
            display: inline-block;
            margin-right: 11px;
            width: 35px;
            height: 35px;
        }

        .zen-widget.widget.vertical .zen-widget.widget__header-icon._hidden {
            display: none;
        }


        @-moz-keyframes jump {
            from {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }

            to {
                transform: translateY(0);
            }
        }

        @-webkit-keyframes jump {
            from {
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }

            50% {
                -webkit-transform: translateY(-10px);
                transform: translateY(-10px);
            }

            to {
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }
        }

        @-o-keyframes jump {
            from {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }

            to {
                transform: translateY(0);
            }
        }

        @keyframes jump {
            from {
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }

            50% {
                -webkit-transform: translateY(-10px);
                transform: translateY(-10px);
            }

            to {
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }
        }

        @-moz-keyframes select-button {
            from {
                transform: scale(1);
            }

            50% {
                transform: scale(1.5);
            }

            to {
                transform: scale(1);
            }
        }

        @-webkit-keyframes select-button {
            from {
                -webkit-transform: scale(1);
                transform: scale(1);
            }

            50% {
                -webkit-transform: scale(1.5);
                transform: scale(1.5);
            }

            to {
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        @-o-keyframes select-button {
            from {
                transform: scale(1);
            }

            50% {
                transform: scale(1.5);
            }

            to {
                transform: scale(1);
            }
        }

        @keyframes select-button {
            from {
                -webkit-transform: scale(1);
                transform: scale(1);
            }

            50% {
                -webkit-transform: scale(1.5);
                transform: scale(1.5);
            }

            to {
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        .doc-image {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
        }

        .doc-image__wrap {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
        }

        .doc-image__image {
            position: relative;
            transition: opacity 0.3s ease-in-out;
            opacity: 0;
        }

        .doc-image__image._is-loaded {
            opacity: 1;
        }

        .doc-image__image._is-blurred {
            -webkit-filter: blur(5px);
            filter: blur(5px);
        }

        .doc-image__image._mode_bci {
            width: 100%;
            height: 100%;
            background-position: 0px -20px;
            background-size: 100% auto;
            background-repeat: no-repeat;
        }

        .doc-image__image._mode_bci._aspect-ratio_tall {
            background-position: 0 0;
        }

        .doc-image__image._mode_bi {
            width: 66%;
            height: 100%;
            top: 0;
            right: 0;
            position: absolute;
            background-size: cover;
        }

        .doc-image__image._mode_si {
            width: 100%;
            height: 60%;
            top: 0;
            right: 0;
            position: absolute;
            background-size: cover;
            background-position: center;
        }

        .doc-image__image._type_wide {
            position: absolute;
            top: 0;
            right: 0;
            width: 60%;
            height: 100%;
        }

        .doc-image__preview {
            background-repeat: no-repeat;
            background-size: cover;
            position: absolute;
            top: 0;
            opacity: 1;
        }

        .doc-image__preview._mode_bci {
            width: 100%;
            height: 60%;
        }

        .zen-page._theme_black .doc-image__preview._mode_bci {
            display: none;
        }

        .doc-image__preview._mode_bi {
            width: 66%;
            height: 100%;
            right: 0;
        }

        .doc-image__preview._mode_si {
            width: 100%;
            height: 60%;
        }

        .doc-image__preview._type_wide {
            width: 60%;
            height: 100%;
            right: 0;
        }

        .doc-image__fade {
            position: absolute;
            top: 0;
            opacity: 0;
        }

        .doc-image__fade._is-visible {
            opacity: 1;
        }

        .doc-image__fade._mode_bci {
            width: 100%;
            height: 60%;
            transition: opacity 0.3s ease-in-out;
            transition-delay: 0.3s;
        }

        .zen-page._theme_black .doc-image__fade._mode_bci {
            height: 100%;
            opacity: 1;
        }

        .doc-image__fade._mode_bi {
            width: 67%;
            height: 100%;
            right: 0;
            z-index: 1;
        }

        .doc-image__fade._mode_si {
            width: 100%;
            height: 60%;
            z-index: 1;
        }

        .doc-image__fade._type_wide {
            width: 60%;
            height: 100%;
            right: 0;
        }


        .widget-card {
            display: inline-block;
            height: 256px;
            width: 192px;
            margin: 0 16px 0 0;
            text-decoration: none;
            position: relative;
            overflow: hidden;
            text-align: left;
            border-radius: 4px;
            transition: box-shadow;
            transition-duration: 0.8s;
            transition-property: box-shadow;
            will-change: box-shadow;
            -webkit-tap-highlight-color: transparent;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .widget-card_size_s:hover .widget-card__close-cross,
        .widget-card_size_m:hover .widget-card__close-cross,
        .widget-card_mobile .widget-card__close-cross {
            opacity: 0.5;
        }

        .widget-card_theme_b:hover {
            box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.18), 0 4px 22px 0 rgba(0, 0, 0, 0.12);
        }

        .widget-card_theme_w:hover {
            box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.2), 0 4px 22px 0 rgba(0, 0, 0, 0.5);
        }

        .widget-card_theme_b.widget-card_size_s:hover,
        .widget-card_theme_b.widget-card_size_m:hover {
            box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.18), 0 4px 9px 0 rgba(0, 0, 0, 0.12);
        }

        .widget-card_theme_w.widget-card_size_s:hover,
        .widget-card_theme_w.widget-card_size_m:hover {
            box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.2), 0 4px 9px 0 rgba(0, 0, 0, 0.5);
        }

        .widget-card_theme_b.widget-card_size_s.widget-card_orientation_vertical:hover,
        .widget-card_theme_b.widget-card_size_m.widget-card_orientation_vertical:hover {
            box-shadow: 0 0 2px 0 rgba(0, 0, 0, 0.18), 0 2px 6px 0 rgba(0, 0, 0, 0.12);
        }

        .widget-card_theme_w.widget-card_size_s.widget-card_orientation_vertical:hover,
        .widget-card_theme_w.widget-card_size_m.widget-card_orientation_vertical:hover {
            box-shadow: 0 0 2px 0 rgba(0, 0, 0, 0.2), 0 2px 6px 0 rgba(0, 0, 0, 0.5);
        }

        .widget-card_type_text {
            background-color: #fff;
        }

        .widget-card__background {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            border-radius: 4px;
            overflow: hidden;
            z-index: 2;
            will-change: box-shadow;
        }

        .widget-card__title {
            font-family: 'bold-ysans';
            font-weight: bold;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            white-space: normal;
            word-wrap: break-word;
            word-break: break-word;
            -webkit-line-clamp: 6;
            -webkit-flex-shrink: 0;
            flex-shrink: 0;
            transition: opacity 0.1s ease-out;
            max-height: 132px;
            box-sizing: content-box;
            padding-bottom: 0.2em;
        }

        .widget-card__title_read .widget-card__title {
            opacity: 0.2;
        }

        .widget-card_theme_w .widget-card__title {
            color: #fff;
        }

        .widget-card_theme_b .widget-card__title {
            color: #000;
        }

        .widget-card__content {
            padding-left: 12px;
            padding-right: 12px;
            padding-bottom: 52px;
            position: relative;
            height: 100%;
            max-height: 100%;
            box-sizing: border-box;
            overflow: hidden;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: column;
            flex-direction: column;
            z-index: 3;
            border-radius: 4px;
            will-change: transition;
        }

        .widget-card_type_text .widget-card {
            -webkit-justify-content: flex-start;
            justify-content: flex-start;
        }

        .widget-card_type_image .widget-card__content {
            padding-top: 96px;
            -webkit-justify-content: flex-end;
            justify-content: flex-end;
        }

        .widget-card_type_text .widget-card__content {
            padding-top: 16px;
            -webkit-justify-content: flex-start;
            justify-content: flex-start;
        }

        .widget-card__text-fade {
            position: absolute;
            width: 100%;
            height: 36px;
            bottom: 40px;
            left: 0;
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, #fff 60%);
            transition: visibility 0s linear 0.1s;
        }

        .widget-card__dislike-overlay {
            display: block;
            position: absolute;
            z-index: 1;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(30, 27, 29, 0.88);
            pointer-events: none;
            opacity: 0;
            transition: opacity 0.1s ease-in;
        }

        .widget-card__dislike-overlay-text {
            font-family: 'bold-ysans';
            font-weight: bold;
            font-size: 16px;
            line-height: 1.3;
            text-align: center;
            width: 100%;
            color: #fff !important;
            cursor: default;
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            padding: 0 12px;
            box-sizing: border-box;
        }

        .widget-card_disliked .widget-card__dislike-overlay {
            opacity: 1;
        }

        .widget-card__bottom {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 32px;
        }

        .widget-card__buttons {
            right: 0;
            display: -webkit-flex;
            display: flex;
            position: absolute;
            bottom: 2px;
        }

        .widget-card__button {
            width: 42px;
            height: 42px;
            cursor: pointer;
            transition: opacity 0.1s ease-out;
            position: relative;
        }

        .widget-card__button_color_w {
            opacity: 0.6;
        }

        .widget-card__button_color_w:hover {
            opacity: 0.75;
        }

        .widget-card__button_color_b {
            opacity: 0.4;
        }

        .widget-card__button_color_b:hover {
            opacity: 0.55;
        }

        .widget-card__button_type_like svg {
            position: absolute;
            top: 5px;
            left: 12px;
        }

        .widget-card__button_type_dislike svg {
            position: absolute;
            top: 5px;
            left: 7px;
        }

        .widget-card__button_hidden {
            display: none;
        }

        .widget-card_disliked .widget-card__button_type_dislike {
            opacity: 1 !important;
        }

        .widget-card_liked .widget-card__button_type_like {
            -webkit-animation-name: select-button;
            animation-name: select-button;
            -webkit-animation-duration: 0.3s;
            animation-duration: 0.3s;
            -webkit-animation-iteration-count: 1;
            animation-iteration-count: 1;
            -webkit-animation-direction: normal;
            animation-direction: normal;
            -webkit-animation-timing-function: cubic-bezier(0.25, 0.1, 0.5, 1);
            animation-timing-function: cubic-bezier(0.25, 0.1, 0.5, 1);
            opacity: 1 !important;
        }

        .widget-card .doc-image {
            z-index: 3;
        }

        .widget-card__close-cross {
            position: relative;
            z-index: 4;
            width: 16px;
            height: 16px;
            border-radius: 1.5px;
            bottom: calc(100% - 4px);
            left: calc(100% - 20px);
            background-color: #000;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .widget-card__close-cross.mobile {
            opacity: 0.5;
        }

        .widget-card__close-cross_line {
            display: inline-block;
            width: 8px;
            height: 1px;
            background-color: #fff;
            position: absolute;
            top: 50%;
            left: 50%;
        }

        .widget-card__close-cross_line:first-child {
            -webkit-transform: translate(-50%, -50%) rotate(45deg);
            transform: translate(-50%, -50%) rotate(45deg);
        }

        .widget-card__close-cross_line:last-child {
            -webkit-transform: translate(-50%, -50%) rotate(-45deg);
            transform: translate(-50%, -50%) rotate(-45deg);
        }

        .widget-card_size_s {
            height: 148px;
            width: 230px;
            margin-right: 10px;
        }

        .widget-card_size_m {
            height: 186px;
            width: 230px;
            margin-right: 10px;
        }

        .widget-card_orientation_vertical {
            margin-right: 0;
            margin-bottom: 5px;
        }

        .widget-card_size_s.widget-card_orientation_vertical {
            height: 120px;
            width: 290px;
        }

        .widget-card_size_m.widget-card_orientation_vertical {
            height: 170px;
        }

        .widget-card_size_m.widget-card_orientation_vertical .widget-card__content {
            padding: 14px 14px 30px 14px;
        }

        .widget-card_size_s.widget-card_orientation_vertical .widget-card__content {
            padding: 12px 14px;
            -webkit-justify-content: center;
            justify-content: center;
        }

        .widget-card_size_s.widget-card_orientation_vertical .widget-card__title {
            width: 65%;
            max-height: 80px;
        }

        .widget-card_size_s.widget-card_orientation_vertical.widget-card_big-font .widget-card__title {
            font-size: 16px !important;
        }

        .widget-card_size_s.widget-card_orientation_vertical .widget-card__domain-logo {
            position: relative;
            top: auto;
            left: auto;
            right: auto;
            bottom: auto;
        }

        .widget-card_size_s.widget-card_orientation_vertical .widget-card__bottom {
            position: relative;
            width: 60%;
            height: auto;
            margin-top: 6px;
        }

        .widget-card_size_s .widget-card__content,
        .widget-card_size_m .widget-card__content {
            padding-top: 12px;
            padding-bottom: 32px;
        }

        .widget-card_size_s .widget-card__title,
        .widget-card_size_m .widget-card__title {
            font-size: 15px !important;
            line-height: 20px !important;
            padding-bottom: 0;
        }

        .widget-card_size_s .widget-card__domain-logo,
        .widget-card_size_m .widget-card__domain-logo {
            font-size: 11px !important;
            line-height: 11px !important;
            width: 206px;
            height: 11px;
            font-weight: bold;
            bottom: 13px;
        }

        .doc__domain-logo {
            bottom: 15px;
            left: 12px;
            font-size: 14px;
            line-height: 16px;
            height: 16px;
            background-size: auto 16px;
            overflow-x: hidden;
            overflow-y: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            position: absolute;
            right: 46px;
            background-repeat: no-repeat;
            background-position: left bottom;
            opacity: 0.4;
            text-transform: uppercase;
            display: block;
            vertical-align: middle;
            width: 104px;
            font-family: 'medium-ysans';
        }

        @-moz-keyframes select-button {
            from {
                transform: scale(1);
            }

            50% {
                transform: scale(1.8);
            }

            to {
                transform: scale(1);
            }
        }

        @-webkit-keyframes select-button {
            from {
                -webkit-transform: scale(1);
                transform: scale(1);
            }

            50% {
                -webkit-transform: scale(1.8);
                transform: scale(1.8);
            }

            to {
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        @-o-keyframes select-button {
            from {
                transform: scale(1);
            }

            50% {
                transform: scale(1.8);
            }

            to {
                transform: scale(1);
            }
        }

        @keyframes select-button {
            from {
                -webkit-transform: scale(1);
                transform: scale(1);
            }

            50% {
                -webkit-transform: scale(1.8);
                transform: scale(1.8);
            }

            to {
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        .ad-card {
            cursor: pointer;
            overflow: hidden;
            border-radius: 4px;
            display: none;
            transition: box-shadow 0.8s;
            will-change: box-shadow, opacity;
            -webkit-tap-highlight-color: transparent;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            white-space: normal;
        }

        .ad-card._visible {
            display: inline-block;
            width: 100%;
        }

        .ad-card._size_l:hover {
            box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.18), 0 4px 22px 0 rgba(0, 0, 0, 0.12);
        }

        .ad-card._size_s:hover,
        .ad-card._size_m:hover {
            box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.18), 0 4px 9px 0 rgba(0, 0, 0, 0.12);
        }

        .ad-card._orientation_vertical:hover {
            box-shadow: 0 0 2px 0 rgba(0, 0, 0, 0.18), 0 2px 6px 0 rgba(0, 0, 0, 0.12);
        }

        .ad-card._orientation_horizontal.ad-card._size_l {
            height: 256px;
            max-width: 192px;
            margin-right: 16px;
        }

        .ad-card._orientation_horizontal.ad-card._size_m {
            height: 186px;
            max-width: 230px;
            margin-right: 10px;
        }

        .ad-card._orientation_horizontal.ad-card._size_s {
            height: 148px;
            max-width: 230px;
            margin-right: 10px;
        }

        .ad-card._orientation_vertical {
            margin-bottom: 5px;
        }

        .ad-card._orientation_vertical.ad-card._size_l,
        .ad-card._orientation_vertical.ad-card._size_m {
            height: 170px;
            max-width: 230px;
        }

        .ad-card._orientation_vertical.ad-card._size_s {
            height: 120px;
            max-width: 290px;
        }

        .scroller {
            position: relative;
            padding: 12px 0 16px 0;
            margin: -12px 0 -16px 0;
        }

        .scroller._type_vertical {
            overflow: hidden;
            padding: 0;
            margin: auto;
            height: calc(100% - 36px);
        }

        .scroller._type_vertical._size_s {
            height: calc(100% - 50px);
            padding: 0;
            margin: 0;
        }

        .scroller._size_s {
            padding: 12px 0 8px 0;
            margin: -12px 0 -8px 0;
        }

        .scroller__edge {
            position: absolute;
            top: 0;
            bottom: 0;
            z-index: 1;
        }

        .scroller__edge._position_backward.scroller__edge._type_vertical,
        .scroller__edge._position_forward.scroller__edge._type_vertical {
            left: 0;
            right: 0;
        }

        .scroller__edge._position_backward {
            left: -1px;
        }

        .scroller__edge._position_backward._size_s {
            left: -5px;
        }

        .scroller__edge._position_backward._size_m {
            left: -3px;
        }

        .scroller__edge._position_forward {
            right: -1px;
        }

        .scroller__edge._position_forward._size_s {
            right: -5px;
        }

        .scroller__edge._position_forward._size_m {
            right: -3px;
        }

        .scroller__edge._position_backward.scroller__edge._type_vertical {
            top: 0;
            bottom: auto;
        }

        .scroller__edge._position_forward.scroller__edge._type_vertical {
            top: auto;
            bottom: 0;
        }

        .scroller__shadow {
            position: absolute;
            width: 18px;
            pointer-events: none;
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAJQCAYAAADmLMZmAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABWWlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS40LjAiPgogICA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPgogICAgICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgICAgICAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyI+CiAgICAgICAgIDx0aWZmOk9yaWVudGF0aW9uPjE8L3RpZmY6T3JpZW50YXRpb24+CiAgICAgIDwvcmRmOkRlc2NyaXB0aW9uPgogICA8L3JkZjpSREY+CjwveDp4bXBtZXRhPgpMwidZAAAGQ0lEQVR4Ae2U0XIbOQwErST//8nxCWuPC0txt6U6rvLSrFJAYihi3J749vH+dTsbeSqeffFJ7eX3X/7CBUZ2HnaHJ4fRtWfenN3ZejOBBp7p9N6oj+ePh8bZNNDO3hq1w/MfGLJC7sNn+95bRmj3aPspej/7sdb16m39KwkdDY6B1H7vdpWhDKmhWdVL/3B/haEMLSPZzwykl7rdX2EoQ+vBvtLfDbxfyHlaVxjqJsZ9TFV/NPBr1lttKAZSZ0ZK62ay3+pqQ2UgK0TqnH03szNyv3OZoRraV87dVPZlIp/q/VpJKIPLTAb2fXrb4Bo++Vz2d6iM1IrJbqbvH0xV48qV4ZmRc4zUOfutrjZUA2plcN+nVzP7vhv6vdpQDFTtKwZ6nRq7wtBoJOduJvtOZ9tfaaiG1srwvk+v18sNxUBqH177MpC6manelYTKSK0aOq70YqrO22eVoQzI4PFc/Z+hB/uN0ipDMZLB/TzrxVy0nG8rDc2oZGBqBo/n9JcaqiF9ZUjvZR/zD3UloQyb1QwuLftpfZehmIyJ8Zz+pb+yDE3N0JxT09/quwmNJsbzWwll+Gn9V4QOTWnoEM23ICEJEQHSzZCEiADpZkhCRIB0MyQhIkC6GZIQESDdDEmICJBuhiREBEg3QxIiAqSbIQkRAdLNkISIAOlmSEJEgHQzJCEiQLoZkhARIN0MSYgIkG6GJEQESDdDEiICpJshCREB0s2QhIgA6WZIQkSAdDMkISJAuhmSEBEg3QxJiAiQboYkRARIN0MSIgKkmyEJEQHSzZCEiADpZkhCRIB0MyQhIkC6GZIQESDdDEmICJBuhiREBEg3QxIiAqSbIQkRAdLNkISIAOlmSEJEgHQzJCEiQLoZkhARIN0MSYgIkG6GJEQESDdDEiICpJshCREB0s2QhIgA6WZIQkSAdDMkISJAuhmSEBEg3QxJiAiQboYkRARIN0MSIgKkmyEJEQHSzZCEiADpZkhCRIB0MyQhIkC6GZIQESDdDEmICJBuhiREBEg3QxIiAqSbIQkRAdLNkISIAOlmSEJEgHQzJCEiQLoZkhARIN0MSYgIkG6GJEQESDdDEiICpJshCREB0s2QhIgA6WZIQkSAdDMkISJAuhmSEBEg3QxJiAiQboYkRARIN0MSIgKkmyEJEQHSzZCEiADpZkhCRIB0MyQhIkC6GZIQESDdDEmICJBuhiREBEg3QxIiAqSbIQkRAdLNkISIAOlmSEJEgHQzJCEiQLoZkhARIN0MSYgIkG6GJEQESDdDEiICpJshCREB0s2QhIgA6WZIQkSAdDMkISJAuhmSEBEg3QxJiAiQboYkRARIN0MSIgKkmyEJEQHSzZCEiADpZkhCRIB0MyQhIkC6GZIQESDdDEmICJBuhiREBEg3QxIiAqSbIQkRAdLNkISIAOlmSEJEgHQzJCEiQLoZkhARIN0MSYgIkG6GJEQESDdDEiICpJshCREB0s2QhIgA6WZIQkSAdDMkISJAuhmSEBEg3QxJiAiQboYkRARIN0MSIgKkmyEJEQHSzZCEiADpZkhCRIB0MyQhIkC6GZIQESDdDEmICJBuhiREBEg3QxIiAqSbIQkRAdLNkISIAOlmSEJE4Fv/HO7l/PnODGXo4OUj/a2+01AZyfCYyvmnvstQBnZT6e3qlYZqUIaFSGr6D3WloTyeoanpV82ntOx3daWh0UDOGT6ey0itSwzl8a8R81/VbvBo5H7+W58rCMVU6mi2+umViZ3RP/nWRbWG3cah3+cyU1pq7W9XEgqFELjP29MYztuv7F2Ejsx0OnXn9rv+/Z+rUNfakH9tf/bP9r6/tt5QjP0MyOZeZ+bG+x+rCWVAH9572VetVfd2610ZOgp2Zaivz5WE6uEZmQwMjdT0U7f/lVcYqgExluGp0Xqt/c+fiCsN1aBa3cxXZ97btNWGuoFQiomxjkYv+ZWNhnIeh4/mcl4S6gzNo3340T53e11GaDQ0ns9MJcz1nUsNdVPdUPWzHsyUcHQ5X3q2Hr3T+9mPNT62fsRnB5/dO3qr92f73ltGKD/lkeHd0Pulw/MoHD34bJ/eG/Xx/OD02cFn9x6GTC7P7my9mTD5/sutV97d3d0dXh7LX3j5/Ze/wB7wxunM/wBrn23+ctcZhQAAAABJRU5ErkJggg==);
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            opacity: 0;
            transition: opacity 0.1s ease;
        }

        .scroller__shadow._visible {
            opacity: 1;
        }

        .scroller__shadow._type_horizontal {
            top: 0;
            bottom: 0;
        }

        .scroller__shadow._type_vertical {
            left: -5px;
            right: -5px;
            width: auto;
            height: 18px;
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAlAAAAAkCAYAAABGzgS7AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABWWlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS40LjAiPgogICA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPgogICAgICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgICAgICAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyI+CiAgICAgICAgIDx0aWZmOk9yaWVudGF0aW9uPjE8L3RpZmY6T3JpZW50YXRpb24+CiAgICAgIDwvcmRmOkRlc2NyaXB0aW9uPgogICA8L3JkZjpSREY+CjwveDp4bXBtZXRhPgpMwidZAAAEtUlEQVR4Ae3a23IcNwwFQDnx//+xo+xZ60xBNEd7kRL7oVk1BogBOVv9hLL97eXl5dvlyUpc878utTypN/97k7fW2N55tvfPb1yuOr6Z3CJAgAABAgQI3CPw+tY0Y/I8/4yYvM+Pt3yNed/aerZ3Xlqud1+/9z27G+vaeOnpBbk4Q1D2zRO72tfY3g5Q6VuHqJ4VCRAgQIAAAQL3CmTWyJox+ToEZT+f2bPm2ef5cK0DVA50uMnBXtBaL+3AlHrz9M/V3vYk9klf8qzGnzt/EiBAgAABAgRuC3RGmbGzR2NmlORzeGo+6+3vV9d96qkdax2g+iJNGWxm7MHEPrvhqe/m+eR9LukxNKVmESBAgAABAgSeEZizSc53BmmcA1RqHZ4a27fG3jVj8mPNASqH50DTfWLWjPcOTunr/4PKHbshKnWLAAECBAgQIPCMwJxPZp4ZJPs8zWdM3qd9M15eH7NP8qy8v645QLWWl48OUjmTQWnG3JFaflwHp97beHllESBAgAABAgQ+JdDBJrFPLuzAlFrzNba/MeeSz7XuX3YDVA+0OcNO87zLh+dglFoHovYm5klv88Ssxp+7X/etiwQIECBAgACBM4E5m6Sn+8SPnt0A1VrP9b7emf27tQ5QacyA05jm3eEOUXnfISl9/ee6s6Gpw1NjzlsECBAgQIAAgc8IdFbZxdT6rINS6rta78lvat6Y2vVvoFI4G2jmu3cHL2c6OM1hqf2zlu/0/sZZS24RIECAAAECBJ4RmPNJ8xmTP/L0N/SO7md8Xf8GKi9zIIPOjKm3lny32p++Dkpnsef7vnuRAAECBAgQIHCvwDrkdL+Lqc169zPmu903nzH5de0GqL5LzCUZchKzZp5933cQStzl6W19zbO3CBAgQIAAAQLPCnROyfk17z7x0fz095wNUPnAHHhyQT/ay2bPmqen5xtnrXeIBAgQIECAAIGvEpizSvPGfCN592ve94lztX/WtkPObNgNP601pj/5um89ca7ZN+tyAgQIECBAgMCzArtBp7XG3J183bc+45pn3/U6h5mZtyFx1nf5rraeO7tv1uUECBAgQIAAgWcF5lA075j1Xb6r5fys/3Lf2fAzG5PPvnU/38183nFWnz1yAgQIECBAgMBXCHw4/Lx9YPbMPK/X/fxN13frYLPu54Hdu3truWfXO++XEyBAgAABAgQ+K3A2/Ozq99b6m47+3VCzq/Vg41nPWb3nRAIECBAgQIDA7xI4BqDlB5zVZ9u7nrOB56w+L2r+X/X2fpEAAQIECBAgcI/AuyHnxoFP9d4afm69v/Hbjtdfdc9xoYQAAQIECBAgcCLwyHB0csW1fHrPo4PNo/0f/SjvCBAgQIAAAQJ/ksDpwPQn/Ui/hQABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgAABAgQIECBAgMD/LfAv9qphYKDYdu8AAAAASUVORK5CYII=);
        }

        .scroller__shadow._type_vertical._size_s {
            height: 20px;
            left: -15px;
            right: -15px;
        }

        .scroller__shadow._position_backward {
            -webkit-transform: scaleX(-1);
            transform: scaleX(-1);
        }

        .scroller__shadow._position_forward {
            right: 0;
        }

        .scroller__shadow._position_backward.scroller__shadow._type_vertical {
            top: -2px;
            bottom: auto;
            -webkit-transform: scaleX(1);
            transform: scaleX(1);
        }

        .scroller__shadow._position_forward.scroller__shadow._type_vertical {
            top: auto;
            bottom: -2px;
            -webkit-transform: scaleY(-1);
            transform: scaleY(-1);
        }

        .scroller._hide-edges.scroller._size_l .scroller__shadow {
            display: none;
        }

        .scroller__button {
            position: absolute;
            z-index: 2;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            will-change: transform;
            height: 68px;
            width: 44px;
            display: block;
            cursor: pointer;
            transition: -webkit-transform 0.5s ease;
            transition: transform 0.5s ease;
            transition: transform 0.5s ease, -webkit-transform 0.5s ease;
            border-radius: 3px;
            background-color: #fff;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.18);
        }

        .scroller__button._position_backward {
            left: 100%;
            -webkit-transform: translateY(-50%) translateX(-100%) translateX(-20px);
            transform: translateY(-50%) translateX(-100%) translateX(-20px);
        }

        .scroller__button._position_backward._visible {
            left: 0;
            -webkit-transform: translateY(-50%) translateX(12px);
            transform: translateY(-50%) translateX(12px);
        }

        .scroller__button._position_forward {
            right: 100%;
            -webkit-transform: translateY(-50%) translateX(100%) translateX(20px);
            transform: translateY(-50%) translateX(100%) translateX(20px);
        }

        .scroller__button._position_forward._visible {
            right: 0;
            -webkit-transform: translateY(-50%) translateX(-12px);
            transform: translateY(-50%) translateX(-12px);
        }

        .scroller__button._type_vertical.scroller__button._position_backward {
            top: auto;
            left: 50%;
            -webkit-transform: translateX(-50%) translateY(-100%) rotate(90deg);
            transform: translateX(-50%) translateY(-100%) rotate(90deg);
        }

        .scroller__button._type_vertical.scroller__button._position_backward._visible {
            -webkit-transform: translateX(-50%) translateY(-24px) rotate(90deg);
            transform: translateX(-50%) translateY(-24px) rotate(90deg);
        }

        .scroller__button._type_vertical.scroller__button._position_forward {
            top: auto;
            left: 50%;
            -webkit-transform: translateX(-50%) translateY(10%) rotate(90deg);
            transform: translateX(-50%) translateY(10%) rotate(90deg);
        }

        .scroller__button._type_vertical.scroller__button._position_forward._visible {
            -webkit-transform: translateX(-50%) translateY(-42px) rotate(90deg);
            transform: translateX(-50%) translateY(-42px) rotate(90deg);
        }

        .scroller__arrow {
            display: block;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
            height: 18px;
            width: 12px;
            background-position: center;
            background-image: url("data:image/svg+xml,%3Csvg width='12' height='18' xmlns='https://www.w3.org/2000/svg'%3E%3Cpath d='M12 9L0 18V0z' fill='%23000' fill-rule='evenodd'/%3E%3C/svg%3E");
            background-size: contain;
        }

        .scroller__arrow._position_backward {
            -webkit-transform: translateX(-50%) translateY(-50%) scaleX(-1);
            transform: translateX(-50%) translateY(-50%) scaleX(-1);
        }

        .scroller__cards {
            position: relative;
            z-index: 0;
        }

        .scroller__cards._type_vertical {
            height: 100%;
            margin: auto;
        }

        .scroller._hide-edges .scroller__cards-scroller._type_horizontal {
            padding: 0 0px 46px 16px;
        }

        .scroller__cards-scroller {
            white-space: nowrap;
            text-align: left;
            width: auto;
            overflow-x: scroll;
            overflow-y: hidden;
            padding: 0 0 46px 0;
            margin: 0 0 -46px 0;
            box-sizing: content-box;
        }

        .scroller__cards-scroller._type_vertical {
            white-space: normal;
            height: 100%;
            overflow-x: hidden;
            overflow-y: scroll;
            padding: 0 45px 0 5px;
            margin: 0 -45px 0 0;
        }

        .scroller__cards-scroller._is-mobile {
            padding: 12px 0 46px 16px;
        }

        .scroller__cards-scroller::-webkit-scrollbar {
            display: none;
        }

        .scroller__cards-scroller .widget-card {
            vertical-align: top;
            white-space: normal;
        }

        .zen-button._theme_unified,
        .zen-button._theme_clear,
        .zen-button._theme_link {
            font-family: sans-serif;
            font-weight: 400;
            -webkit-font-smoothing: antialiased;
        }

        .fonts-loaded .zen-button._theme_unified,
        .fonts-loaded .zen-button._theme_clear,
        .fonts-loaded .zen-button._theme_link {
            font-family: regular-ysans, sans-serif;
        }

        .fonts-for-coccoc .zen-button._theme_unified,
        .fonts-for-coccoc .zen-button._theme_clear,
        .fonts-for-coccoc .zen-button._theme_link {
            font-family: Arial, sans-serif;
        }

        .zen-button._theme_normal,
        .zen-button._theme_pseudo,
        .zen-button._theme_red,
        .zen-button._type_link {
            font-family: sans-serif;
            font-weight: 500;
            -webkit-font-smoothing: antialiased;
        }

        .fonts-loaded .zen-button._theme_normal,
        .fonts-loaded .zen-button._theme_pseudo,
        .fonts-loaded .zen-button._theme_red,
        .fonts-loaded .zen-button._type_link {
            font-family: medium-ysans, sans-serif;
        }

        .fonts-for-coccoc .zen-button._theme_normal,
        .fonts-for-coccoc .zen-button._theme_pseudo,
        .fonts-for-coccoc .zen-button._theme_red,
        .fonts-for-coccoc .zen-button._type_link {
            font-family: Arial, sans-serif;
        }

        /**
 * 1. Значения padding и margin каждый браузер выставляет по-своему – сбрасываем в ноль.
 * 2. Не должно быть возможности выделить контент кнопки, в т.ч. кнопки-ссылки.
 * 3. У содержимого кнопок-ссылок не должно быть подчеркивания.
 * 4. Кнопка не предполагает многострочного содержимого.
 * 5. Чтобы FF под MacOS не делал blur после программного выставления фокуса по mousedown.
 *    Подробности: https://jsfiddle.net/mishaberezin/892yppts/10/.
 * 6. Для кнопок-ссылок.
 * 7. Убираем нативную подсветку на iOS и Android.
 * 8. В IE по дефолту hidden, в остальных браузерах visible, требуется нормализация.
 *    В пользу visible, т.к. мы используем тень для отображения фокуса.
 * 9. Такой сброс стилей нужен для всех тем.
 * 10. Сбрасываем браузерные стили для кнопок, в особенности для link.
 */
        .zen-button {
            display: inline-block
                /*6*/
            ;
            overflow: visible
                /*8*/
            ;
            box-sizing: border-box;
            margin: 0
                /*1*/
            ;
            padding: 0
                /*1*/
            ;
            -moz-user-focus: ignore
                /*5*/
            ;
            -webkit-user-select: none
                /*2*/
            ;
            -moz-user-select: none
                /*2*/
            ;
            -ms-user-select: none
                /*2*/
            ;
            user-select: none
                /*2*/
            ;
            text-align: center
                /*10*/
            ;
            white-space: nowrap
                /*4*/
            ;
            -webkit-text-decoration: none
                /*3*/
            ;
            text-decoration: none
                /*3*/
            ;
            background: transparent
                /*9*/
            ;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
                /*7*/
            ;
            touch-action: manipulation;
            border: none;
            outline: none;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.34s, -webkit-transform 0.1s ease-out;
            transition: background-color 0.34s, transform 0.1s ease-out;
            transition: background-color 0.34s, transform 0.1s ease-out, -webkit-transform 0.1s ease-out;
            -webkit-transform: scale(1);
            transform: scale(1);
            -webkit-font-smoothing: antialiased;
        }

        .zen-button._size_m {
            height: 36px;
            padding: 10px;
            font-size: 12px;
            letter-spacing: 0.8px;
            min-width: 40px;
        }

        .zen-button._size_l {
            height: 36px;
            padding: 10px 10px 12px;
            font-size: 13px;
            min-width: 40px;
        }

        .zen-button._size_menu {
            height: 32px;
            padding: 8px 16px;
            font-size: 14px;
            width: 100%;
            text-align: left;
            min-width: 40px;
        }

        .zen-button._theme_normal {
            background-color: #07f;
            color: #fff;
            text-transform: uppercase;
        }

        .zen-button._theme_normal:hover {
            background-color: #006deb;
        }

        .zen-button._theme_normal._pressed {
            background-color: #0069e1;
            -webkit-transform: scale(0.99);
            transform: scale(0.99);
        }

        .utilityfocus .zen-button._theme_normal:focus {
            background-color: #0069e0;
            box-shadow: inset 0 0 0 2px #fff;
        }

        .zen-button._theme_unified {
            background-color: #07f;
            color: #fff;
            font-size: 14px;
            line-height: 18px;
            letter-spacing: initial;
        }

        .zen-button._theme_unified:hover {
            background-color: #006deb;
        }

        .zen-button._theme_unified._pressed {
            background-color: #0069e1;
            -webkit-transform: scale(0.99);
            transform: scale(0.99);
        }

        .utilityfocus .zen-button._theme_unified:focus {
            background-color: #0069e0;
            box-shadow: inset 0 0 0 2px #fff;
        }

        .zen-button._theme_normal._disabled {
            cursor: default;
            background-color: rgba(0, 0, 0, 0);
            color: #000;
        }

        .zen-button._theme_normal._disabled:hover {
            background-color: rgba(0, 0, 0, 0);
        }

        .zen-button._theme_normal._disabled._pressed {
            background-color: rgba(0, 0, 0, 0);
            -webkit-transform: none;
            transform: none;
        }

        .utilityfocus .zen-button._theme_normal._disabled:focus {
            background-color: rgba(0, 0, 0, 0);
            box-shadow: none;
        }

        .zen-button._theme_unified._disabled {
            cursor: default;
            background-color: #eaeaea;
            color: rgba(0, 0, 0, 0.4);
        }

        .zen-button._theme_pseudo {
            background-color: rgba(0, 0, 0, 0);
            color: #07f;
            text-transform: uppercase;
        }

        .zen-button._theme_pseudo:hover {
            background-color: #fff;
        }

        .zen-button._theme_pseudo._pressed {
            background-color: rgba(0, 0, 0, 0.04);
            -webkit-transform: scale(0.99);
            transform: scale(0.99);
        }

        .utilityfocus .zen-button._theme_pseudo:focus {
            background-color: rgba(0, 0, 0, 0);
            box-shadow: inset 0 0 0 2px #07f;
        }

        .zen-button._theme_clear {
            color: #000;
        }

        .zen-button._theme_clear:hover {
            color: #333;
        }

        .zen-button._theme_clear._pressed {
            color: #666;
        }

        .zen-button._theme_red {
            background-color: #dc1010;
            color: #fff;
            text-transform: uppercase;
        }

        .zen-button._theme_red:hover {
            background-color: #c50000;
        }

        .zen-button._theme_red._pressed {
            background-color: #b00c0c;
            -webkit-transform: scale(0.99);
            transform: scale(0.99);
        }

        .utilityfocus .zen-button._theme_red:focus {
            background-color: #dc1010;
            box-shadow: inset 0 0 0 2px #fff;
        }

        .zen-button._type_link {
            text-decoration: none;
        }

        .zen-button._theme_link {
            padding: 0 10px;
            line-height: 1;
            height: auto;
            letter-spacing: normal;
            color: #07f;
        }

        .zen-button._theme_link._size_m {
            font-size: 14px;
        }

        .zen-button._theme_link:hover {
            color: #006deb;
        }

        .zen-button._theme_link._pressed {
            color: #0069e1;
        }

        .utilityfocus .zen-button._theme_link:focus {
            color: #0069e0;
        }

        .zen-button._stretch {
            width: 100%;
            height: 100%;
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            -webkit-justify-content: center;
            justify-content: center;
        }

        .widget-promo-card {
            display: -webkit-inline-flex;
            display: inline-flex;
            cursor: pointer;
            overflow: hidden;
            border-radius: 4px;
            text-decoration: none !important;
            position: relative;
            font-family: 'bold-ysans';
        }

        .widget-promo-card__back,
        .widget-promo-card__back-preview {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-position: center;
            background-size: 100% 100%;
            background-repeat: no-repeat;
        }

        .widget-promo-card__source-title {
            position: absolute;
            left: 23px;
            right: 10px;
            bottom: 113px;
            line-height: 20px;
            font-weight: bold;
            text-align: left;
            color: #fff;
            text-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
        }

        .widget-promo-card__source-title._size_l {
            font-size: 16px;
        }

        .widget-promo-card__source-title._size_m {
            font-size: 14px;
        }

        .widget-promo-card__source-title._size_s {
            font-size: 11px;
        }

        .widget-promo-card__app-title {
            position: absolute;
            left: 23px;
            bottom: 74px;
            font-size: 16px;
            font-weight: bold;
            line-height: 1.25;
            text-align: left;
            color: #fff;
            text-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
        }

        .widget-promo-card__download-title {
            position: absolute;
            display: block;
            height: 34px;
            bottom: 4px;
            left: 76px;
            right: 0;
            font-size: 14px;
            font-weight: bold;
            color: #fff;
            font-family: 'bold-ysans';
            line-height: 1.1;
        }

        .widget-invite-card {
            display: -webkit-inline-flex;
            display: inline-flex;
            cursor: pointer;
            overflow: hidden;
            border-radius: 4px;
            text-decoration: none !important;
            position: relative;
        }

        .widget-invite-card_s .widget-invite-card__title {
            margin: 56px 12px 32px 12px;
        }

        .widget-invite-card_m .widget-invite-card__title {
            margin: 96px 12px 32px 12px;
        }

        .widget-invite-card_m.widget-invite-card_vertical .widget-invite-card__title {
            margin: 78px 12px 32px 12px;
        }

        .widget-invite-card_s.widget-invite-card_vertical .widget-invite-card__title {
            margin: 30px 12px 32px 12px;
        }

        .widget-invite-card_s .widget-invite-card__title,
        .widget-invite-card_m .widget-invite-card__title {
            font-size: 15px;
            line-height: 20px;
        }

        .widget-invite-card_s .widget-invite-card__to-feed,
        .widget-invite-card_m .widget-invite-card__to-feed {
            font-size: 11px;
            line-height: 11px;
            bottom: 13px;
        }

        .widget-invite-card_s .widget-invite-card__to-feed:before,
        .widget-invite-card_m .widget-invite-card__to-feed:before {
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .widget-invite-card__title {
            margin: 132px 22px 50px;
            overflow: visible;
            text-align: left;
            position: relative;
            font-family: bold-ysans;
            font-size: 16px;
            font-weight: bold;
            line-height: 1.25;
            z-index: 1;
            will-change: transition;
        }

        .widget-invite-card__title,
        .widget-invite-card__title:hover,
        .widget-invite-card__title:visited,
        .widget-invite-card__title:active {
            color: #fff !important;
            text-decoration: none !important;
        }

        .widget-invite-card__hover-mask {
            position: absolute;
            pointer-events: none;
            background-color: #fff;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            transition: opacity 0.1s ease-out;
            opacity: 0;
        }

        .widget-invite-card:hover .widget-invite-card__hover-mask {
            opacity: 0.3;
        }

        .widget-invite-card__background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 4px;
            background-color: #07f;
        }

        .widget-invite-card__oval-1,
        .widget-invite-card__oval-2,
        .widget-invite-card__oval-3 {
            position: absolute;
            border-radius: 50%;
            overflow: hidden;
        }

        .widget-invite-card__oval-1 {
            background-color: #005bc3;
            width: 241px;
            height: 241px;
            top: -64px;
            left: -24px;
        }

        .widget-invite-card_vertical .widget-invite-card__oval-1 {
            left: auto;
            right: -24px;
        }

        .widget-invite-card__oval-2 {
            background-color: #003d83;
            width: 165px;
            height: 165px;
            top: -27px;
            left: 13px;
        }

        .widget-invite-card_vertical .widget-invite-card__oval-2 {
            left: auto;
            right: 13px;
        }

        .widget-invite-card__oval-3 {
            background-color: #092a50;
            width: 111px;
            height: 111px;
            top: 0;
            left: 40px;
        }

        .widget-invite-card_vertical .widget-invite-card__oval-3 {
            left: auto;
            right: 40px;
        }

        .widget-invite-card__logo {
            position: absolute;
            background-image: url("data:image/svg+xml,%3C?xml version='1.0' encoding='UTF-8'?%3E %3Csvg width='48px' height='48px' viewBox='0 0 48 48' version='1.1' xmlns='https://www.w3.org/2000/svg' xmlns:xlink='https://www.w3.org/1999/xlink'%3E %3C!-- Generator: sketchtool 50 (54983) - https://www.bohemiancoding.com/sketch --%3E %3Ctitle%3E73188D09-4670-44FA-B659-625E4B180F22%3C/title%3E %3Cdesc%3ECreated with sketchtool.%3C/desc%3E %3Cdefs%3E %3Ccircle id='path-1' cx='24' cy='24' r='24'%3E%3C/circle%3E %3ClinearGradient x1='91.7771101%25' y1='50%25' x2='7.77982326%25' y2='50%25' id='linearGradient-3'%3E %3Cstop stop-color='%23F8B3B2' offset='0%25'%3E%3C/stop%3E %3Cstop stop-color='%23F8B3B2' offset='100%25'%3E%3C/stop%3E %3C/linearGradient%3E %3C/defs%3E %3Cg id='Page-2' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E %3Cg id='widget_new_logo_desktop' transform='translate(-183.000000, -60.000000)'%3E %3Cg id='icon' transform='translate(183.000000, 60.000000)'%3E %3Cmask id='mask-2' fill='white'%3E %3Cuse xlink:href='%23path-1'%3E%3C/use%3E %3C/mask%3E %3Cuse id='Mask' fill='%23FF0000' xlink:href='%23path-1'%3E%3C/use%3E %3Cpolygon id='Rectangle' fill='url(%23linearGradient-3)' mask='url(%23mask-2)' transform='translate(24.535281, 23.440157) rotate(-41.000000) translate(-24.535281, -23.440157) ' points='15.5761896 20.1267812 33.4943715 21.1721382 33.4943715 26.7535335 15.5761896 25.7081765'%3E%3C/polygon%3E %3Cpolygon id='Rectangle' fill='%23D00000' mask='url(%23mask-2)' transform='translate(23.576390, 42.074878) rotate(-41.000000) translate(-23.576390, -42.074878) ' points='13.3309574 38.6840901 33.8218233 39.8842708 33.8218233 45.4656661 13.3309574 44.2654855'%3E%3C/polygon%3E %3Cpolygon id='Rectangle' fill='%23D00000' mask='url(%23mask-2)' transform='translate(24.699099, 5.446272) rotate(-41.000000) translate(-24.699099, -5.446272) ' points='15.5545795 2.09650637 33.8436184 3.21464248 33.8436184 8.79603783 15.5545795 7.67790172'%3E%3C/polygon%3E %3Cpolygon id='Rectangle' fill='%23FFFFFF' mask='url(%23mask-2)' points='15.627907 8.93023256 33.4883721 14.7774086 33.4883721 20.0930233 15.627907 14.2458472'%3E%3C/polygon%3E %3Cpolygon id='Rectangle' fill='%23FFFFFF' mask='url(%23mask-2)' points='15.627907 26.7906977 33.4883721 32.6378738 33.4883721 37.9534884 15.627907 32.1063123'%3E%3C/polygon%3E %3C/g%3E %3C/g%3E %3C/g%3E %3C/svg%3E");
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            width: 53px;
            height: 53px;
            left: 70px;
            top: 29px;
            border-radius: 50%;
            overflow: hidden;
        }

        .widget-invite-card_vertical .widget-invite-card__logo {
            left: auto;
            right: 70px;
        }

        .widget-invite-card__to-feed {
            position: absolute;
            left: 22px;
            right: 23px;
            bottom: 14px;
            font-size: 12.7px;
            font-weight: 500;
            line-height: 1.58;
            display: block;
            font-family: medium-ysans;
            z-index: 1;
            will-change: transition;
        }

        .widget-invite-card__to-feed,
        .widget-invite-card__to-feed:hover,
        .widget-invite-card__to-feed:visited,
        .widget-invite-card__to-feed:active {
            color: #fff !important;
            text-decoration: none !important;
        }

        .widget-invite-card__to-feed:before {
            content: ' ';
            position: absolute;
            height: 8px;
            width: 6px;
            left: -11px;
            top: 6px;
            background-image: url("data:image/svg+xml,%3C?xml version='1.0' encoding='UTF-8'?%3E %3Csvg width='12px' height='18px' viewBox='0 0 12 18' version='1.1' xmlns='https://www.w3.org/2000/svg' xmlns:xlink='https://www.w3.org/1999/xlink'%3E %3C!-- Generator: sketchtool 46.2 (44496) - https://www.bohemiancoding.com/sketch --%3E %3Ctitle%3E70F185A9-0B84-49E4-BA85-5E8AF9DFF641%3C/title%3E %3Cdesc%3ECreated with sketchtool.%3C/desc%3E %3Cdefs%3E%3C/defs%3E %3Cg id='Page-2' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E %3Cg id='1024-mini' transform='translate(-1014.000000, -570.000000)' fill='%23FFFFFF'%3E %3Cg id='Последняя' transform='translate(720.000000, 429.000000)'%3E %3Cg id='Next' transform='translate(276.000000, 116.000000)'%3E %3Cpolygon id='Next-Icon' points='30 34 18 43 18 25'%3E%3C/polygon%3E %3C/g%3E %3C/g%3E %3C/g%3E %3C/g%3E %3C/svg%3E");
            background-position: center;
            background-repeat: no-repeat;
            background-size: contain;
        }
    </style>
    <style type="text/css" class="mb-style-tag">
        .aNLP4g6 {
            width: 100%;
            height: inherit;
            min-height: inherit;
            max-height: inherit
        }
    </style>
    <style type="text/css">
        #pd7d71793 .k48a9c5a7 {
            position: fixed !important;
            left: -1000px !important;
            top: -1000px !important;
            width: 1px !important;
            height: 1px !important;
            display: block !important
        }
    </style>
    <style type="text/css">
        .y5252748b {
            opacity: 1 !important;
            white-space: normal !important
        }

        .y5252748b,
        .y5252748b yatag {
            display: block !important;
            font-family: inherit !important
        }

        .y5252748b,
        .y5252748b,
        .y5252748b a,
        .y5252748b b,
        .y5252748b em,
        .y5252748b iframe,
        .y5252748b img,
        .y5252748b table,
        .y5252748b tbody,
        .y5252748b td,
        .y5252748b tr,
        .y5252748b yatag {
            box-sizing: content-box !important;
            color: inherit !important;
            font-size: inherit !important;
            font-weight: inherit !important;
            -webkit-hyphens: manual !important;
            -ms-hyphens: manual !important;
            hyphens: manual !important
        }

        .y5252748b,
        .y5252748b a,
        .y5252748b b,
        .y5252748b em,
        .y5252748b iframe,
        .y5252748b img,
        .y5252748b table,
        .y5252748b tbody,
        .y5252748b td,
        .y5252748b tr {
            background: none !important;
            border: none !important;
            border-radius: 0 !important;
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            clear: none !important;
            float: none !important;
            font-variant: normal !important;
            letter-spacing: normal !important;
            line-height: normal !important;
            margin: 0 !important;
            max-height: none !important;
            max-width: none !important;
            min-height: 0 !important;
            min-width: 0 !important;
            outline: none !important;
            padding: 0 !important;
            position: static !important;
            text-align: left !important;
            text-decoration: none !important;
            text-indent: 0 !important;
            text-transform: none !important;
            vertical-align: baseline !important;
            visibility: visible !important;
            word-spacing: normal !important
        }

        .y5252748b,
        .y5252748b a,
        .y5252748b b,
        .y5252748b em,
        .y5252748b img,
        .y5252748b table,
        .y5252748b tbody,
        .y5252748b td,
        .y5252748b tr {
            height: auto !important
        }

        .y5252748b table {
            display: table !important;
            empty-cells: hide !important;
            table-layout: fixed !important
        }

        .y5252748b table,
        .y5252748b td {
            font-size: 100% !important
        }

        .y5252748b td {
            display: table-cell !important;
            vertical-align: middle !important
        }

        .y5252748b {
            position: relative !important;
            z-index: 1 !important;
            -webkit-font-smoothing: antialiased !important;
            -webkit-text-size-adjust: none !important
        }

        .y5252748b .ma6c1abcf,
        .y5252748b .ma6c1abcf:hover,
        .y5252748b .ma6c1abcf:hover b,
        .y5252748b .ma6c1abcf b {
            display: inline !important;
            color: #0000CC !important;
            text-decoration: none !important;
            border-bottom-color: rgba(0, 0, 204, 0.4) !important;
            border-bottom-width: 1px !important;
            border-bottom-style: solid !important
        }

        .y5252748b .ma6c1abcf:hover,
        .y5252748b .ma6c1abcf:hover b {
            color: #0088CC !important;
            border-bottom-color: rgba(0, 136, 204, 0.4) !important
        }

        .y5252748b a:focus {
            -webkit-user-select: none !important;
            -moz-user-select: none !important;
            -ms-user-select: none !important;
            user-select: none !important
        }

        .y5252748b .g3585f195 {
            -webkit-flex-flow: row nowrap !important;
            -ms-flex-flow: row nowrap !important;
            flex-flow: row nowrap !important;
            min-width: 1px !important;
            min-height: 1px !important
        }

        .y5252748b .g3585f195,
        .y5252748b .ua1b210a5 {
            display: -webkit-flex !important;
            display: -ms-flexbox !important;
            display: flex !important
        }

        .y5252748b .ua1b210a5 {
            overflow: hidden !important;
            -webkit-justify-content: space-between !important;
            -ms-flex-pack: justify !important;
            justify-content: space-between !important;
            -webkit-align-content: space-between !important;
            -ms-flex-line-pack: justify !important;
            align-content: space-between !important;
            -webkit-flex-wrap: wrap !important;
            -ms-flex-wrap: wrap !important;
            flex-wrap: wrap !important;
            margin: 0 !important;
            border: solid #EBEBEB !important;
            border-width: 1px !important;
            border-radius: 0 !important;
            box-sizing: border-box !important
        }

        .y5252748b .qcf4c84b0 {
            -webkit-align-items: flex-start !important;
            -ms-flex-align: start !important;
            align-items: flex-start !important
        }

        .y5252748b .mbb4d3870 {
            -webkit-flex-direction: row !important;
            -ms-flex-direction: row !important;
            flex-direction: row !important
        }

        .y5252748b .hdaf7b18c {
            -webkit-flex-direction: column !important;
            -ms-flex-direction: column !important;
            flex-direction: column !important
        }

        .y5252748b .kd27f1ade,
        .y5252748b .f39b2ea51 {
            border-width: 0 !important
        }

        .y5252748b .kd27f1ade .dd4beb21c {
            border-width: 1px !important
        }

        .y5252748b .a6150d172 .dd4beb21c {
            border-width: 0 !important;
            border-radius: 0 !important
        }

        .y5252748b .hae2fca90 .dd4beb21c {
            margin: -1px !important;
            border-radius: 0 !important
        }
    </style>
    <style type="text/css">
        .fb_hidden {
            position: absolute;
            top: -10000px;
            z-index: 10001
        }

        .fb_reposition {
            overflow: hidden;
            position: relative
        }

        .fb_invisible {
            display: none
        }

        .fb_reset {
            background: none;
            border: 0;
            border-spacing: 0;
            color: #000;
            cursor: auto;
            direction: ltr;
            font-family: "lucida grande", tahoma, verdana, arial, sans-serif;
            font-size: 11px;
            font-style: normal;
            font-variant: normal;
            font-weight: normal;
            letter-spacing: normal;
            line-height: 1;
            margin: 0;
            overflow: visible;
            padding: 0;
            text-align: left;
            text-decoration: none;
            text-indent: 0;
            text-shadow: none;
            text-transform: none;
            visibility: visible;
            white-space: normal;
            word-spacing: normal
        }

        .fb_reset>div {
            overflow: hidden
        }

        @keyframes fb_transform {
            from {
                opacity: 0;
                transform: scale(.95)
            }

            to {
                opacity: 1;
                transform: scale(1)
            }
        }

        .fb_animate {
            animation: fb_transform .3s forwards
        }

        .fb_dialog {
            background: rgba(82, 82, 82, .7);
            position: absolute;
            top: -10000px;
            z-index: 10001
        }

        .fb_dialog_advanced {
            border-radius: 8px;
            padding: 10px
        }

        .fb_dialog_content {
            background: #fff;
            color: #373737
        }

        .fb_dialog_close_icon {
            cursor: pointer;
            display: block;
            height: 15px;
            position: absolute;
            right: 18px;
            top: 17px;
            width: 15px
        }

        .fb_dialog_mobile .fb_dialog_close_icon {
            left: 5px;
            right: auto;
            top: 5px
        }

        .fb_dialog_padding {
            background-color: transparent;
            position: absolute;
            width: 1px;
            z-index: -1
        }

        .fb_dialog_close_icon:hover {}

        .fb_dialog_close_icon:active {}

        .fb_dialog_iframe {
            line-height: 0
        }

        .fb_dialog_content .dialog_title {
            background: #6d84b4;
            border: 1px solid #365899;
            color: #fff;
            font-size: 14px;
            font-weight: bold;
            margin: 0
        }

        .fb_dialog_content .dialog_title>span {
            float: left;
            padding: 5px 0 7px 26px
        }

        body.fb_hidden {
            height: 100%;
            left: 0;
            margin: 0;
            overflow: visible;
            position: absolute;
            top: -10000px;
            transform: none;
            width: 100%
        }

        .fb_dialog.fb_dialog_mobile.loading {
            min-height: 100%;
            min-width: 100%;
            overflow: hidden;
            position: absolute;
            top: 0;
            z-index: 10001
        }

        .fb_dialog.fb_dialog_mobile.loading.centered {
            background: none;
            height: auto;
            min-height: initial;
            min-width: initial;
            width: auto
        }

        .fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner {
            width: 100%
        }

        .fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content {
            background: none
        }

        .loading.centered #fb_dialog_loader_close {
            clear: both;
            color: #fff;
            display: block;
            font-size: 18px;
            padding-top: 20px
        }

        #fb-root #fb_dialog_ipad_overlay {
            background: rgba(0, 0, 0, .4);
            bottom: 0;
            left: 0;
            min-height: 100%;
            position: absolute;
            right: 0;
            top: 0;
            width: 100%;
            z-index: 10000
        }

        #fb-root #fb_dialog_ipad_overlay.hidden {
            display: none
        }

        .fb_dialog.fb_dialog_mobile.loading iframe {
            visibility: hidden
        }

        .fb_dialog_mobile .fb_dialog_iframe {
            position: sticky;
            top: 0
        }

        .fb_dialog_content .dialog_header {
            background: linear-gradient(from(#738aba), to(#2c4987));
            border-bottom: 1px solid;
            border-color: #1d3c78;
            box-shadow: white 0 1px 1px -1px inset;
            color: #fff;
            font: bold 14px Helvetica, sans-serif;
            text-overflow: ellipsis;
            text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0;
            vertical-align: middle;
            white-space: nowrap
        }

        .fb_dialog_content .dialog_header table {
            height: 43px;
            width: 100%
        }

        .fb_dialog_content .dialog_header td.header_left {
            font-size: 12px;
            padding-left: 5px;
            vertical-align: middle;
            width: 60px
        }

        .fb_dialog_content .dialog_header td.header_right {
            font-size: 12px;
            padding-right: 5px;
            vertical-align: middle;
            width: 60px
        }

        .fb_dialog_content .touchable_button {
            background: linear-gradient(from(#4267B2), to(#2a4887));
            background-clip: padding-box;
            border: 1px solid #29487d;
            border-radius: 3px;
            display: inline-block;
            line-height: 18px;
            margin-top: 3px;
            max-width: 85px;
            padding: 4px 12px;
            position: relative
        }

        .fb_dialog_content .dialog_header .touchable_button input {
            background: none;
            border: none;
            color: #fff;
            font: bold 12px Helvetica, sans-serif;
            margin: 2px -12px;
            padding: 2px 6px 3px 6px;
            text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0
        }

        .fb_dialog_content .dialog_header .header_center {
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            line-height: 18px;
            text-align: center;
            vertical-align: middle
        }

        .fb_dialog_content .dialog_content {
            border: 1px solid #4a4a4a;
            border-bottom: 0;
            border-top: 0;
            height: 150px
        }

        .fb_dialog_content .dialog_footer {
            background: #f5f6f7;
            border: 1px solid #4a4a4a;
            border-top-color: #ccc;
            height: 40px
        }

        #fb_dialog_loader_close {
            float: left
        }

        .fb_dialog.fb_dialog_mobile .fb_dialog_close_button {
            text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0
        }

        .fb_dialog.fb_dialog_mobile .fb_dialog_close_icon {
            visibility: hidden
        }

        #fb_dialog_loader_spinner {
            animation: rotateSpinner 1.2s linear infinite;
            background-color: transparent;
            background-position: 50% 50%;
            background-repeat: no-repeat;
            height: 24px;
            width: 24px
        }

        @keyframes rotateSpinner {
            0% {
                transform: rotate(0deg)
            }

            100% {
                transform: rotate(360deg)
            }
        }

        .fb_iframe_widget {
            display: inline-block;
            position: relative
        }

        .fb_iframe_widget span {
            display: inline-block;
            position: relative;
            text-align: justify
        }

        .fb_iframe_widget iframe {
            position: absolute
        }

        .fb_iframe_widget_fluid_desktop,
        .fb_iframe_widget_fluid_desktop span,
        .fb_iframe_widget_fluid_desktop iframe {
            max-width: 100%
        }

        .fb_iframe_widget_fluid_desktop iframe {
            min-width: 220px;
            position: relative
        }

        .fb_iframe_widget_lift {
            z-index: 1
        }

        .fb_iframe_widget_fluid {
            display: inline
        }

        .fb_iframe_widget_fluid span {
            width: 100%
        }

        .fb_customer_chat_bounce_in_v2 {
            animation-duration: 300ms;
            animation-name: fb_bounce_in_v2;
            transition-timing-function: ease-in
        }

        .fb_customer_chat_bounce_out_v2 {
            animation-duration: 300ms;
            animation-name: fb_bounce_out_v2;
            transition-timing-function: ease-in
        }

        .fb_customer_chat_bounce_in_v2_mobile_chat_started {
            animation-duration: 300ms;
            animation-name: fb_bounce_in_v2_mobile_chat_started;
            transition-timing-function: ease-in
        }

        .fb_customer_chat_bounce_out_v2_mobile_chat_started {
            animation-duration: 300ms;
            animation-name: fb_bounce_out_v2_mobile_chat_started;
            transition-timing-function: ease-in
        }

        .fb_customer_chat_bubble_pop_in {
            animation-duration: 250ms;
            animation-name: fb_customer_chat_bubble_bounce_in_animation
        }

        .fb_customer_chat_bubble_animated_no_badge {
            box-shadow: 0 3px 12px rgba(0, 0, 0, .15);
            transition: box-shadow 150ms linear
        }

        .fb_customer_chat_bubble_animated_no_badge:hover {
            box-shadow: 0 5px 24px rgba(0, 0, 0, .3)
        }

        .fb_customer_chat_bubble_animated_with_badge {
            box-shadow: -5px 4px 14px rgba(0, 0, 0, .15);
            transition: box-shadow 150ms linear
        }

        .fb_customer_chat_bubble_animated_with_badge:hover {
            box-shadow: -5px 8px 24px rgba(0, 0, 0, .2)
        }

        .fb_invisible_flow {
            display: inherit;
            height: 0;
            overflow-x: hidden;
            width: 0
        }

        .fb_mobile_overlay_active {
            background-color: #fff;
            height: 100%;
            overflow: hidden;
            position: fixed;
            visibility: hidden;
            width: 100%
        }

        @keyframes fb_bounce_in_v2 {
            0% {
                opacity: 0;
                transform: scale(0, 0);
                transform-origin: bottom right
            }

            50% {
                transform: scale(1.03, 1.03);
                transform-origin: bottom right
            }

            100% {
                opacity: 1;
                transform: scale(1, 1);
                transform-origin: bottom right
            }
        }

        @keyframes fb_bounce_in_v2_mobile_chat_started {
            0% {
                opacity: 0;
                top: 20px
            }

            100% {
                opacity: 1;
                top: 0
            }
        }

        @keyframes fb_bounce_out_v2 {
            0% {
                opacity: 1;
                transform: scale(1, 1);
                transform-origin: bottom right
            }

            100% {
                opacity: 0;
                transform: scale(0, 0);
                transform-origin: bottom right
            }
        }

        @keyframes fb_bounce_out_v2_mobile_chat_started {
            0% {
                opacity: 1;
                top: 0
            }

            100% {
                opacity: 0;
                top: 20px
            }
        }

        @keyframes fb_customer_chat_bubble_bounce_in_animation {
            0% {
                bottom: 6pt;
                opacity: 0;
                transform: scale(0, 0);
                transform-origin: center
            }

            70% {
                bottom: 18pt;
                opacity: 1;
                transform: scale(1.2, 1.2)
            }

            100% {
                transform: scale(1, 1)
            }
        }
    </style>
    <style>
        @keyframes messages-count {
            from {
                outline-color: #fff;
            }

            to {
                outline-color: #000;
            }
        }

        [data-spotim-module="messages-count"]:not([data-ready="true"]) {
            animation-duration: 10ms;
            animation-name: messages-count;
        }
    </style>
    <style type="text/css">
        @-webkit-keyframes spl_messagesCountInserted {
            0% {
                outline-color: #fff
            }

            to {
                outline-color: #000
            }
        }

        @keyframes spl_messagesCountInserted {
            0% {
                outline-color: #fff
            }

            to {
                outline-color: #000
            }
        }

        .spot-im-replies-count {
            -webkit-animation-duration: 10ms;
            animation-duration: 10ms;
            -webkit-animation-name: spl_messagesCountInserted;
            animation-name: spl_messagesCountInserted
        }
    </style>
    <style type="text/css">
        @-webkit-keyframes sppre_conversationInserted {
            0% {
                outline-color: #fff
            }

            to {
                outline-color: #000
            }
        }

        @keyframes sppre_conversationInserted {
            0% {
                outline-color: #fff
            }

            to {
                outline-color: #000
            }
        }

        .spot-im-conversation-module {
            -webkit-animation-duration: 10ms;
            animation-duration: 10ms;
            -webkit-animation-name: sppre_conversationInserted;
            animation-name: sppre_conversationInserted
        }
    </style>
    <style type="text/css">
        @media (max-width: 1px) {

            .sppre_accessibility-mode,
            .sppre_tab-mode {
                color: initial
            }
        }

        .sppre_conversation-module {
            position: relative;
            min-height: 328px
        }

        .sppre_conversation-module.sppre_unset-height .sppre_frame-container {
            height: 245px
        }

        .sppre_conversation-module iframe {
            width: 100%;
            height: 100%;
            border: none;
            background-color: transparent;
            min-height: 295px
        }

        .sppre_conversation-module iframe.sppre_ios {
            width: 1px;
            min-width: 100%
        }
    </style>
    <style type="text/css">
        @-webkit-keyframes sppre_conversation-loader-shine {
            0% {
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0)
            }

            44%,
            to {
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0)
            }
        }

        @keyframes sppre_conversation-loader-shine {
            0% {
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0)
            }

            44%,
            to {
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0)
            }
        }

        .sppre_conversation-loader {
            padding: 5px 7px;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            overflow: hidden;
            height: 328px;
            box-sizing: border-box
        }

        .sppre_conversation-loader:after {
            position: absolute;
            z-index: 0;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            content: "";
            background: linear-gradient(90deg, hsla(0, 0%, 100%, 0) 0, hsla(0, 0%, 100%, 0) 45%, hsla(0, 0%, 100%, .5) 48%, #fff 50%, hsla(0, 0%, 100%, .5) 52%, hsla(0, 0%, 100%, 0) 57%, hsla(0, 0%, 100%, 0)) no-repeat;
            background-size: 100%;
            -webkit-animation: sppre_conversation-loader-shine 9s infinite cubic-bezier(.165, .84, .44, 1);
            animation: sppre_conversation-loader-shine 9s infinite cubic-bezier(.165, .84, .44, 1)
        }

        .sppre_conversation-loader .sppre_circle {
            background: rgba(0, 0, 0, .07);
            border-radius: 50%;
            height: 24px;
            width: 24px;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0
        }

        .sppre_conversation-loader .sppre_circle.sppre_big {
            height: 44px;
            width: 44px
        }

        .sppre_conversation-loader .sppre_bar {
            background: rgba(0, 0, 0, .07)
        }

        .sppre_conversation-loader .sppre_header {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            border-bottom: 1px solid rgba(0, 0, 0, .07)
        }

        .sppre_conversation-loader .sppre_header .sppre_bar {
            height: 20px;
            width: 190px;
            margin: 2px 15px 20px 0;
            -webkit-align-self: flex-start;
            -ms-flex-item-align: start;
            align-self: flex-start;
            -webkit-flex-shrink: 1;
            -ms-flex-negative: 1;
            flex-shrink: 1
        }

        .sppre_conversation-loader .sppre_header .sppre_faces {
            -webkit-flex-shrink: 2;
            -ms-flex-negative: 2;
            flex-shrink: 2;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            margin: 0 0 18px auto
        }

        .sppre_conversation-loader .sppre_header .sppre_faces .sppre_circle+.sppre_circle {
            margin-left: 10px
        }

        @media (max-width: 455px) {

            .sppre_conversation-loader .sppre_header .sppre_faces .sppre_circle:nth-child(4),
            .sppre_conversation-loader .sppre_header .sppre_faces .sppre_circle:nth-child(5),
            .sppre_conversation-loader .sppre_header .sppre_faces .sppre_circle:nth-child(6),
            .sppre_conversation-loader .sppre_header .sppre_faces .sppre_circle:nth-child(7) {
                display: none
            }
        }

        .sppre_conversation-loader .sppre_top {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex
        }

        .sppre_conversation-loader .sppre_top .sppre_bar {
            margin: 20px 15px 32px 0;
            width: 110px;
            height: 15px;
            -webkit-align-self: flex-start;
            -ms-flex-item-align: start;
            align-self: flex-start
        }

        .sppre_conversation-loader .sppre_top .sppre_faces {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            margin: 18px 0 25px auto
        }

        .sppre_conversation-loader .sppre_top .sppre_faces .sppre_circle+.sppre_circle {
            margin-left: 10px
        }

        .sppre_conversation-loader .sppre_say-control {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            margin-bottom: 25px
        }

        .sppre_conversation-loader .sppre_say-control .sppre_circle {
            -webkit-align-self: center;
            -ms-flex-item-align: center;
            -ms-grid-row-align: center;
            align-self: center
        }

        .sppre_conversation-loader .sppre_say-control .sppre_box {
            margin-left: 15px;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            -webkit-flex-shrink: 1;
            -ms-flex-negative: 1;
            flex-shrink: 1;
            border: 1px solid rgba(0, 0, 0, .07);
            border-radius: 4px;
            box-sizing: border-box;
            height: 54px
        }

        .sppre_conversation-loader .sppre_say-control .sppre_box .sppre_bar {
            margin: 19px auto auto 10px;
            height: 15px;
            width: 100px
        }

        @media (max-width: 455px) {
            .sppre_conversation-loader .sppre_say-control .sppre_circle {
                display: none
            }

            .sppre_conversation-loader .sppre_say-control .sppre_box {
                margin-left: 0
            }
        }

        .sppre_conversation-loader .sppre_message {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            margin-bottom: 49px
        }

        .sppre_conversation-loader .sppre_message .sppre_bars,
        .sppre_conversation-loader .sppre_message .sppre_circle {
            -webkit-align-self: flex-start;
            -ms-flex-item-align: start;
            align-self: flex-start
        }

        .sppre_conversation-loader .sppre_message .sppre_bars {
            margin-left: 15px;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            -webkit-flex-shrink: 1;
            -ms-flex-negative: 1;
            flex-shrink: 1
        }

        .sppre_conversation-loader .sppre_message .sppre_bars .sppre_bar+.sppre_bar {
            margin-left: 10px
        }

        .sppre_conversation-loader .sppre_message .sppre_bars .sppre_first {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            margin-bottom: 10px
        }

        .sppre_conversation-loader .sppre_message .sppre_bars .sppre_first .sppre_bar {
            height: 10px
        }

        .sppre_conversation-loader .sppre_message .sppre_bars .sppre_first .sppre_bar:first-child {
            width: 70px
        }

        .sppre_conversation-loader .sppre_message .sppre_bars .sppre_first .sppre_bar:nth-child(2) {
            width: 20px
        }

        .sppre_conversation-loader .sppre_message .sppre_bars .sppre_second {
            margin: 0 auto 10px
        }

        .sppre_conversation-loader .sppre_message .sppre_bars .sppre_second .sppre_bar {
            height: 15px
        }

        .sppre_conversation-loader .sppre_message .sppre_bars .sppre_third {
            margin-bottom: 10px
        }

        .sppre_conversation-loader .sppre_message .sppre_bars .sppre_third .sppre_bar {
            height: 15px;
            width: 50%
        }

        .sppre_conversation-loader .sppre_message .sppre_bars .sppre_forth {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex
        }

        .sppre_conversation-loader .sppre_message .sppre_bars .sppre_forth .sppre_bar {
            height: 10px;
            width: 30px
        }
    </style>
    <style type="text/css">
        .sppre_conversation-spinner {
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center
        }

        @-webkit-keyframes sppre_spinner {
            to {
                -webkit-transform: rotate(1turn);
                transform: rotate(1turn)
            }
        }

        @keyframes sppre_spinner {
            to {
                -webkit-transform: rotate(1turn);
                transform: rotate(1turn)
            }
        }

        .sppre_conversation-spinner .sppre_spinner {
            position: absolute;
            display: block;
            -webkit-animation: sppre_spinner 2s linear infinite;
            animation: sppre_spinner 2s linear infinite;
            margin: 0 auto;
            top: 50%
        }
    </style>
    <style type="text/css">
        .spot-im-sticky .brand-bg-color {
            background-color: #76BD1D !important;
        }

        .spot-im-sticky .brand-bg-color[disabled] {
            background-color: rgba(118, 189, 29, 0.5) !important;
            cursor: default !important;
        }

        .spot-im-sticky .brand-bg-color.disabled {
            background-color: rgba(118, 189, 29, 0.5) !important;
            cursor: default !important;
        }

        .spot-im-sticky .brand-bg-color-opacity-3 {
            background-color: rgba(118, 189, 29, 0.3) !important;
        }

        .spot-im-sticky .brand-bg-color-opacity-5 {
            background-color: rgba(118, 189, 29, 0.5) !important;
        }

        .spot-im-sticky .brand-bg-color-opacity-7 {
            background-color: rgba(118, 189, 29, 0.7) !important;
        }

        .spot-im-sticky .brand-bg-color-hover:hover {
            background-color: #64a018 !important;
        }

        .spot-im-sticky .brand-bg-color-mixed {
            background-color: #64a018 !important;
        }

        .spot-im-sticky .brand-border-color {
            border-color: #76BD1D !important;
        }

        .spot-im-sticky .brand-bg-color-after:after {
            background-color: #76BD1D !important;
        }

        .spot-im-sticky .brand-bg-color-before:before {
            background-color: #76BD1D !important;
        }

        .spot-im-sticky .brand-mention {
            background-color: rgba(118, 189, 29, 0.15) !important;
            box-shadow: inset 0px 1px 0px 0px rgba(118, 189, 29, 0.15), inset 0px -1px 0px 0px rgba(118, 189, 29, 0.15) !important;
        }

        .spot-im-sticky .brand-fill {
            fill: #76BD1D !important;
            color: #76BD1D !important;
        }

        .spot-im-sticky .brand-stroke {
            stroke: #76BD1D !important;
        }

        .spot-im-sticky .brand-color {
            color: #76BD1D !important;
        }
    </style>
    <style type="text/css">
        #k6ce6dc52 .k48a9c5a7 {
            position: fixed !important;
            left: -1000px !important;
            top: -1000px !important;
            width: 1px !important;
            height: 1px !important;
            display: block !important
        }
    </style>
    <style type="text/css">
        .c69bcaf1d {
            opacity: 1 !important;
            white-space: normal !important
        }

        .c69bcaf1d,
        .c69bcaf1d yatag {
            display: block !important;
            font-family: inherit !important
        }

        .c69bcaf1d,
        .c69bcaf1d,
        .c69bcaf1d a,
        .c69bcaf1d b,
        .c69bcaf1d em,
        .c69bcaf1d iframe,
        .c69bcaf1d img,
        .c69bcaf1d table,
        .c69bcaf1d tbody,
        .c69bcaf1d td,
        .c69bcaf1d tr,
        .c69bcaf1d yatag {
            box-sizing: content-box !important;
            color: inherit !important;
            font-size: inherit !important;
            font-weight: inherit !important;
            -webkit-hyphens: manual !important;
            -ms-hyphens: manual !important;
            hyphens: manual !important
        }

        .c69bcaf1d,
        .c69bcaf1d a,
        .c69bcaf1d b,
        .c69bcaf1d em,
        .c69bcaf1d iframe,
        .c69bcaf1d img,
        .c69bcaf1d table,
        .c69bcaf1d tbody,
        .c69bcaf1d td,
        .c69bcaf1d tr {
            background: none !important;
            border: none !important;
            border-radius: 0 !important;
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            clear: none !important;
            float: none !important;
            font-variant: normal !important;
            letter-spacing: normal !important;
            line-height: normal !important;
            margin: 0 !important;
            max-height: none !important;
            max-width: none !important;
            min-height: 0 !important;
            min-width: 0 !important;
            outline: none !important;
            padding: 0 !important;
            position: static !important;
            text-align: left !important;
            text-decoration: none !important;
            text-indent: 0 !important;
            text-transform: none !important;
            vertical-align: baseline !important;
            visibility: visible !important;
            word-spacing: normal !important
        }

        .c69bcaf1d,
        .c69bcaf1d a,
        .c69bcaf1d b,
        .c69bcaf1d em,
        .c69bcaf1d img,
        .c69bcaf1d table,
        .c69bcaf1d tbody,
        .c69bcaf1d td,
        .c69bcaf1d tr {
            height: auto !important
        }

        .c69bcaf1d table {
            display: table !important;
            empty-cells: hide !important;
            table-layout: fixed !important
        }

        .c69bcaf1d table,
        .c69bcaf1d td {
            font-size: 100% !important
        }

        .c69bcaf1d td {
            display: table-cell !important;
            vertical-align: middle !important
        }

        .c69bcaf1d {
            position: relative !important;
            z-index: 1 !important;
            -webkit-font-smoothing: antialiased !important;
            -webkit-text-size-adjust: none !important
        }

        .c69bcaf1d .ma6c1abcf,
        .c69bcaf1d .ma6c1abcf:hover,
        .c69bcaf1d .ma6c1abcf:hover b,
        .c69bcaf1d .ma6c1abcf b {
            display: inline !important;
            color: #006600 !important;
            text-decoration: none !important;
            border-bottom-color: rgba(0, 102, 0, 0.4) !important;
            border-bottom-width: 0px !important;
            border-bottom-style: solid !important
        }

        .c69bcaf1d .ma6c1abcf:hover,
        .c69bcaf1d .ma6c1abcf:hover b {
            color: #009FFF !important;
            border-bottom-color: rgba(0, 159, 255, 0.4) !important
        }

        .c69bcaf1d a:focus {
            -webkit-user-select: none !important;
            -moz-user-select: none !important;
            -ms-user-select: none !important;
            user-select: none !important
        }

        .c69bcaf1d .g3585f195 {
            -webkit-flex-flow: row nowrap !important;
            -ms-flex-flow: row nowrap !important;
            flex-flow: row nowrap !important;
            min-width: 1px !important;
            min-height: 1px !important
        }

        .c69bcaf1d .g3585f195,
        .c69bcaf1d .ua1b210a5 {
            display: -webkit-flex !important;
            display: -ms-flexbox !important;
            display: flex !important
        }

        .c69bcaf1d .ua1b210a5 {
            overflow: hidden !important;
            -webkit-justify-content: space-between !important;
            -ms-flex-pack: justify !important;
            justify-content: space-between !important;
            -webkit-align-content: space-between !important;
            -ms-flex-line-pack: justify !important;
            align-content: space-between !important;
            -webkit-flex-wrap: wrap !important;
            -ms-flex-wrap: wrap !important;
            flex-wrap: wrap !important;
            margin: auto !important;
            border: solid #DDDCDA !important;
            border-width: 1px !important;
            border-radius: 0 !important;
            box-sizing: border-box !important
        }

        .c69bcaf1d .qcf4c84b0 {
            -webkit-align-items: flex-start !important;
            -ms-flex-align: start !important;
            align-items: flex-start !important
        }

        .c69bcaf1d .mbb4d3870 {
            -webkit-flex-direction: row !important;
            -ms-flex-direction: row !important;
            flex-direction: row !important
        }

        .c69bcaf1d .hdaf7b18c {
            -webkit-flex-direction: column !important;
            -ms-flex-direction: column !important;
            flex-direction: column !important
        }

        .c69bcaf1d .kd27f1ade,
        .c69bcaf1d .f39b2ea51 {
            border-width: 0 !important
        }

        .c69bcaf1d .kd27f1ade .dd4beb21c {
            border-width: 1px !important
        }

        .c69bcaf1d .a6150d172 .dd4beb21c {
            border-width: 0 !important;
            border-radius: 0 !important
        }

        .c69bcaf1d .hae2fca90 .dd4beb21c {
            margin: -1px !important;
            border-radius: 0 !important
        }

        .c69bcaf1d .hdaf7b18c {
            -webkit-align-items: center !important;
            -ms-flex-align: center !important;
            align-items: center !important
        }
    </style>
    <style type="text/css">
        #pfd4e095 .k48a9c5a7 {
            position: fixed !important;
            left: -1000px !important;
            top: -1000px !important;
            width: 1px !important;
            height: 1px !important;
            display: block !important
        }
    </style>
    <style type="text/css">
        .va87da418 {
            opacity: 1 !important;
            white-space: normal !important
        }

        .va87da418,
        .va87da418 yatag {
            display: block !important;
            font-family: inherit !important
        }

        .va87da418,
        .va87da418,
        .va87da418 a,
        .va87da418 b,
        .va87da418 em,
        .va87da418 iframe,
        .va87da418 img,
        .va87da418 table,
        .va87da418 tbody,
        .va87da418 td,
        .va87da418 tr,
        .va87da418 yatag {
            box-sizing: content-box !important;
            color: inherit !important;
            font-size: inherit !important;
            font-weight: inherit !important;
            -webkit-hyphens: manual !important;
            -ms-hyphens: manual !important;
            hyphens: manual !important
        }

        .va87da418,
        .va87da418 a,
        .va87da418 b,
        .va87da418 em,
        .va87da418 iframe,
        .va87da418 img,
        .va87da418 table,
        .va87da418 tbody,
        .va87da418 td,
        .va87da418 tr {
            background: none !important;
            border: none !important;
            border-radius: 0 !important;
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            clear: none !important;
            float: none !important;
            font-variant: normal !important;
            letter-spacing: normal !important;
            line-height: normal !important;
            margin: 0 !important;
            max-height: none !important;
            max-width: none !important;
            min-height: 0 !important;
            min-width: 0 !important;
            outline: none !important;
            padding: 0 !important;
            position: static !important;
            text-align: left !important;
            text-decoration: none !important;
            text-indent: 0 !important;
            text-transform: none !important;
            vertical-align: baseline !important;
            visibility: visible !important;
            word-spacing: normal !important
        }

        .va87da418,
        .va87da418 a,
        .va87da418 b,
        .va87da418 em,
        .va87da418 img,
        .va87da418 table,
        .va87da418 tbody,
        .va87da418 td,
        .va87da418 tr {
            height: auto !important
        }

        .va87da418 table {
            display: table !important;
            empty-cells: hide !important;
            table-layout: fixed !important
        }

        .va87da418 table,
        .va87da418 td {
            font-size: 100% !important
        }

        .va87da418 td {
            display: table-cell !important;
            vertical-align: middle !important
        }

        .va87da418 {
            position: relative !important;
            z-index: 1 !important;
            -webkit-font-smoothing: antialiased !important;
            -webkit-text-size-adjust: none !important
        }

        .va87da418 .ma6c1abcf,
        .va87da418 .ma6c1abcf:hover,
        .va87da418 .ma6c1abcf:hover b,
        .va87da418 .ma6c1abcf b {
            display: inline !important;
            color: #999999 !important;
            text-decoration: none !important;
            border-bottom-color: rgba(153, 153, 153, 0.4) !important;
            border-bottom-width: 0px !important;
            border-bottom-style: solid !important
        }

        .va87da418 .ma6c1abcf:hover,
        .va87da418 .ma6c1abcf:hover b {
            color: #DD0000 !important;
            border-bottom-color: rgba(221, 0, 0, 0.4) !important
        }

        .va87da418 a:focus {
            -webkit-user-select: none !important;
            -moz-user-select: none !important;
            -ms-user-select: none !important;
            user-select: none !important
        }

        .va87da418 .g3585f195 {
            -webkit-flex-flow: row nowrap !important;
            -ms-flex-flow: row nowrap !important;
            flex-flow: row nowrap !important;
            min-width: 1px !important;
            min-height: 1px !important
        }

        .va87da418 .g3585f195,
        .va87da418 .ua1b210a5 {
            display: -webkit-flex !important;
            display: -ms-flexbox !important;
            display: flex !important
        }

        .va87da418 .ua1b210a5 {
            overflow: hidden !important;
            -webkit-justify-content: space-between !important;
            -ms-flex-pack: justify !important;
            justify-content: space-between !important;
            -webkit-align-content: space-between !important;
            -ms-flex-line-pack: justify !important;
            align-content: space-between !important;
            -webkit-flex-wrap: wrap !important;
            -ms-flex-wrap: wrap !important;
            flex-wrap: wrap !important;
            margin: auto !important;
            border: solid #DDDCDA !important;
            border-width: 1px !important;
            border-radius: 0 !important;
            box-sizing: border-box !important
        }

        .va87da418 .qcf4c84b0 {
            -webkit-align-items: flex-start !important;
            -ms-flex-align: start !important;
            align-items: flex-start !important
        }

        .va87da418 .mbb4d3870 {
            -webkit-flex-direction: row !important;
            -ms-flex-direction: row !important;
            flex-direction: row !important
        }

        .va87da418 .hdaf7b18c {
            -webkit-flex-direction: column !important;
            -ms-flex-direction: column !important;
            flex-direction: column !important
        }

        .va87da418 .kd27f1ade,
        .va87da418 .f39b2ea51 {
            border-width: 0 !important
        }

        .va87da418 .kd27f1ade .dd4beb21c {
            border-width: 1px !important
        }

        .va87da418 .a6150d172 .dd4beb21c {
            border-width: 0 !important;
            border-radius: 0 !important
        }

        .va87da418 .hae2fca90 .dd4beb21c {
            margin: -1px !important;
            border-radius: 0 !important
        }

        .va87da418 .hdaf7b18c {
            -webkit-align-items: center !important;
            -ms-flex-align: center !important;
            align-items: center !important
        }

        .link__style {
            color: red;
        }
    </style>
</head>

<body>


    <div class="layout ">
        <div class="offers" id="offers">
        </div>
        <div class="layout__header" id="layout__header">
            <div class="header js-header" id="header">
                <div class="header__section header__section_gray">
                    <div class="header__content">
                        <div class="header__social">
                            <div class="socials ">
                                <ul class="socials__row ">
                                    <li class="socials__item"><a href="<?php echo $LandLink;?>"
                                            class="socials__link socials__link_vkontakte" target="_blank">
                                            RT на русском Вконтакте
                                        </a></li>
                                    <li class="socials__item "><a href="<?php echo $LandLink;?>"
                                            class="socials__link socials__link_twitter" target="_blank">
                                            Twitter RT Russian
                                        </a></li>
                                    <li class="socials__item "><a href="<?php echo $LandLink;?>"
                                            class="socials__link socials__link_facebook" target="_blank">
                                            Страница RT на facebook.com
                                        </a></li>
                                    <li class="socials__item "><a href="<?php echo $LandLink;?>"
                                            class="socials__link socials__link_telegram" target="_blank">
                                            Канал RT на Telegram.me
                                        </a></li>
                                    <li class="socials__item "><a href="<?php echo $LandLink;?>"
                                            class="socials__link socials__link_youtube" target="_blank">
                                            Канал RT на YouTube.com
                                        </a></li>
                                    <li class="socials__item "><a href="<?php echo $LandLink;?>"
                                            class="socials__link socials__link_odnoklassniki" target="_blank">
                                            RT на русском группа на Одноклассники.ru
                                        </a></li>
                                    <li class="socials__item "><a href="<?php echo $LandLink;?>"
                                            class="socials__link socials__link_gplus" target="_blank">
                                            RT Russian в Google plus
                                        </a></li>
                                    <li class="socials__item "><a href="<?php echo $LandLink;?>"
                                            class="socials__link socials__link_livejournal" target="_blank">
                                            Материалы RT на русском в Живом Журнале
                                        </a></li>
                                    <li class="socials__item "><a href="<?php echo $LandLink;?>"
                                            class="socials__link socials__link_instagram" target="_blank">
                                            Фотолента корреспондентов RT в Instagram
                                        </a></li>
                                    <li class="socials__item "><a href="<?php echo $LandLink;?>"
                                            class="socials__link socials__link_viber" target="_blank">
                                            viber
                                        </a></li>
                                    <li class="socials__item "><a href="<?php echo $LandLink;?>"
                                            class="socials__link socials__link_rss" target="_blank">
                                            rss
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="header__langs">
                            <div class="langs">
                                <div class="nav langs__nav ">
                                    <ul class="nav__row nav__row_langs">
                                        <li class="nav__row-item nav__row-item_lang"><a
                                                class="nav__link nav__link_lang  link" href="<?php echo $LandLink;?>"
                                                target="_blank">

                                                ENG

                                            </a></li>
                                        <li class="nav__row-item nav__row-item_lang"><a
                                                class="nav__link nav__link_lang  link" href="<?php echo $LandLink;?>"
                                                target="_blank">

                                                DE

                                            </a></li>
                                        <li class="nav__row-item nav__row-item_lang"><a
                                                class="nav__link nav__link_lang  link" href="<?php echo $LandLink;?>"
                                                target="_blank">

                                                FR

                                            </a></li>
                                        <li class="nav__row-item nav__row-item_lang"><a
                                                class="nav__link nav__link_lang  link" href="<?php echo $LandLink;?>"
                                                target="_blank">

                                                العربية

                                            </a></li>
                                        <li class="nav__row-item nav__row-item_lang"><a
                                                class="nav__link nav__link_lang  link" href="<?php echo $LandLink;?>"
                                                target="_blank">

                                                ESP

                                            </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="header__media-projects">
                            <div class="nav nav_media-projects ">
                                <ul class="nav__row nav__row_media-projects">
                                    <li class="nav__row-item nav__row-item_media-projects"><a
                                            class="nav__link nav__link_media-projects  link"
                                            href="<?php echo $LandLink;?>" target="_blank">

                                            RTД

                                        </a></li>
                                    <li class="nav__row-item nav__row-item_media-projects"><a
                                            class="nav__link nav__link_media-projects  link"
                                            href="<?php echo $LandLink;?>">

                                            RT360

                                        </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clears-mh"></div>
                    </div>
                </div>
                <div class="header__section header__section_border-bottom_gray">
                    <div class="header__content">
                        <div class="header__logo"><a class="logo " href="<?php echo $LandLink;?>"><span
                                    class="logo__image">RT</span><span class="logo__text">На
                                    русском</span></a></div>
                        <div class="header__seach-form">
                            <form name="search" class="search" action="#">
                                <div class="search__wrapper" role="search__submit-top"><input class="search__submit"
                                        type="checkbox" value="Поиск" id="search__submit-top"><label
                                        class="search__submit-label" for="search__submit-top"></label><input
                                        class="search__submit-label search__submit-label_header" type="submit"
                                        value="Поиск">
                                    <div class="search__text"><input type="text" name="q" value="" maxlength="100">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <ul class="mobile-nav">
                            <li class="mobile-nav__item"><a
                                    class="js-mobile-element-nav mobile-nav__link mobile-nav__link_search">Search</a>
                            </li>
                            <li class="mobile-nav__item"><a
                                    class="js-mobile-element-nav mobile-nav__link mobile-nav__link_menu">Menu
                                    mobile</a></li>
                        </ul>
                    </div>
                </div>
                <div class="header__section" id="header-nav">
                    <div class="header__content">
                        <div class="nav  nav_header">
                            <ul class="nav__row nav__row_center">
                                <li class="nav__row-item nav__row-item_header"><a
                                        class="nav__link nav__link_header  link" href="<?php echo $LandLink;?>">

                                        Новости

                                    </a></li>
                                <li class="nav__row-item nav__row-item_header"><a
                                        class="nav__link nav__link_header  link" href="<?php echo $LandLink;?>">

                                        Мир

                                    </a></li>
                                <li class="nav__row-item nav__row-item_header"><a
                                        class="nav__link nav__link_header nav__link_header_active link"
                                        href="<?php echo $LandLink;?>">

                                        Россия

                                    </a></li>
                                <li class="nav__row-item nav__row-item_header"><a
                                        class="nav__link nav__link_header  link" href="<?php echo $LandLink;?>">

                                        Бывший СССР

                                    </a></li>
                                <li class="nav__row-item nav__row-item_header"><a
                                        class="nav__link nav__link_header  link" href="<?php echo $LandLink;?>">

                                        Экономика

                                    </a></li>
                                <li class="nav__row-item nav__row-item_header"><a
                                        class="nav__link nav__link_header  link" href="<?php echo $LandLink;?>">

                                        Спорт

                                    </a></li>
                                <li class="nav__row-item nav__row-item_header"><a
                                        class="nav__link nav__link_header  link" href="<?php echo $LandLink;?>">

                                        Наука

                                    </a></li>
                                <li class="nav__row-item nav__row-item_header"><a
                                        class="nav__link nav__link_header  link" href="<?php echo $LandLink;?>">

                                        Без политики

                                    </a></li>
                                <li class="nav__row-item nav__row-item_header"><a
                                        class="nav__link nav__link_header  link" href="<?php echo $LandLink;?>">

                                        Мнения

                                    </a></li>
                                <li class="nav__row-item nav__row-item_header"><a
                                        class="nav__link nav__link_header  link" href="<?php echo $LandLink;?>"
                                        target="_blank">

                                        ИноТВ

                                    </a></li>
                                <li class="nav__row-item nav__row-item_header"><a
                                        class="nav__link nav__link_header  link" href="<?php echo $LandLink;?>">

                                        Фото

                                    </a></li>
                                <li class="nav__row-item nav__row-item_header"><a
                                        class="nav__link nav__link_header  link" href="<?php echo $LandLink;?>">

                                        Видео

                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="layout__popular-trends">
            <div class="layout__control-width">
                <div class="nav nav_popular-trends">
                    <ul class="nav__row nav__row_popular-trends">
                        <li class="nav__row-item nav__row-item_popular-trends"><a
                                class="nav__link nav__link_popular-trends" href="<?php echo $LandLink;?>"
                                data-trends-link="58357206c46188dc658b45ad">
                                Политика
                            </a></li>
                        <li class="nav__row-item nav__row-item_popular-trends"><a
                                class="nav__link nav__link_popular-trends" href="<?php echo $LandLink;?>"
                                data-trends-link="583585fac461889d658b484c">
                                Общество
                            </a></li>
                        <li class="nav__row-item nav__row-item_popular-trends"><a
                                class="nav__link nav__link_popular-trends" href="<?php echo $LandLink;?>"
                                data-trends-link="583586e1c461889f658b4897">
                                Право
                            </a></li>
                        <li class="nav__row-item nav__row-item_popular-trends"><a
                                class="nav__link nav__link_popular-trends" href="<?php echo $LandLink;?>"
                                data-trends-link="58358805c46188db658b4858">
                                Армия
                            </a></li>
                        <li class="nav__row-item nav__row-item_popular-trends"><a
                                class="nav__link nav__link_popular-trends" href="<?php echo $LandLink;?>"
                                data-trends-link="5835895ac4618866648b45ae">
                                Религия
                            </a></li>
                        <li class="nav__row-item nav__row-item_popular-trends"><a
                                class="nav__link nav__link_popular-trends nav__link_bold" href="<?php echo $LandLink;?>"
                                data-trends-link="58358a24c4618866648b45cf">
                                Происшествия
                            </a></li>
                        <li class="nav__row-item nav__row-item_popular-trends"><a
                                class="nav__link nav__link_popular-trends" href="<?php echo $LandLink;?>"
                                data-trends-link="59f6e55b18356154678b4567">
                                Выборы президента России — 2018
                            </a></li>
                        <li class="nav__row-item nav__row-item_popular-trends"><a
                                class="nav__link nav__link_popular-trends" href="<?php echo $LandLink;?>"
                                data-trends-link="5884d2bfc36188ad668b472f">
                                RBTH
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="layout__wrapper layout__wrapper_article-page">
            <div class="layout__breaking "></div>
            <div class="layout__content ">
                <div class="layout__rows">
                    <div class="rows rows_article-page">
                        <div class="rows__column rows__column_article-page_left">
                            <div class="column">
                                <div class="flex-news-block">
                                    <div class="column__row">
                                        <div class="article article_article-page">
                                            <h1 class="article__heading article__heading_article-page">Обвал цен на нефть - хитрая тактика Роснефти. Как россиянину действовать в неоднозначной экономической ситуации, чтобы умножить свой капитал на годы вперед</h1>
                                            <div
                                                class="article__date-autor-shortcode article__date-author-shortcode_article-page">
                                                <div class="article__short-url-block">
                                                    <div class="short-url article__short-url"><a class="short-url__link"
                                                            href="<?php echo $LandLink;?>">Короткая
                                                            ссылка</a></div>
                                                </div>
                                                <div class="article__date article__date_article-page">
                                                    <time class="date ">
                                                        <span class="today"></span>, 11:12
                                                    </time>
                                                </div>
                                                <div class="article__author article__author_article-page">
                                                    RT
                                                </div>
                                            </div>
                                            <div class="article__share article__share_article-page">

                                                <div class="social-container"
                                                    data-buttons="facebook, vk, ok, twitter, google, telegram, fbmessenger, whatsapp"
                                                    data-counters="">
                                                    <ul class="sharing">
                                                        <li class="sharing__item" data-name="facebook"><span
                                                                class="sharing__link sharing__link_facebook"></span>
                                                        </li>
                                                        <li class="sharing__item" data-name="vk"><span
                                                                class="sharing__link sharing__link_vk"></span></li>
                                                        <li class="sharing__item" data-name="ok"><span
                                                                class="sharing__link sharing__link_ok"></span></li>
                                                        <li class="sharing__item" data-name="twitter"><span
                                                                class="sharing__link sharing__link_twitter"></span></li>
                                                        <li class="sharing__item" data-name="google"><span
                                                                class="sharing__link sharing__link_google"></span></li>
                                                        <li class="sharing__item" data-name="telegram"><span
                                                                class="sharing__link sharing__link_telegram"></span>
                                                        </li>
                                                        <li class="sharing__item" data-name="fbmessenger"><span
                                                                class="sharing__link sharing__link_fbmessenger"></span>
                                                        </li>
                                                        <li class="sharing__item" data-name="whatsapp"><span
                                                                class="sharing__link sharing__link_whatsapp"></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div
                                                class="article__summary article__summary_article-page js-mediator-article">
                                                <img src="./assets/preland.jpg" alt=""
                                                    style="max-width: 100%; width:820px;">
                                            </div>
                                            <div
                                                class="article__summary article__summary_article-page js-mediator-article">
                                                <em> Сделка с ОПЕК по снижению нефтедобычи не отвечала интересам России. Рекордное падение цен на нефть - это спланированный маневр, который за ближайший год “озолотит” россиян. Об этом заявил пресс-секретарь «Роснефти» Михаил Леонтьев. </em>

                                            </div>
                                            

                                            <div
                                                class="article__summary article__summary_article-page js-mediator-article">
                                                <h2>Почему падение цен на нефть выгодно для России?
                                                </h2>
                                            </div>
                                            <div
                                                class="article__summary article__summary_article-page js-mediator-article">
                                                “Снижение цен на нефть - это часть тщательно спланированной стратегии Сечина” - признается Леонтьев в закрытом интервью для Russia Today.

                                            </div>
                                            <div
                                                class="article__summary article__summary_article-page js-mediator-article">
                                                <h2 >
                                                    Стратегия заключается в следующем:

                                                </h2>
                                            </div>
                                            <div
                                                class="article__summary article__summary_article-page js-mediator-article">
                                                1. Спровоцировать снижение цен на нефтяные акции

                                            </div>
                                            <div
                                                class="article__summary article__summary_article-page js-mediator-article">
                                                2.Выкупить нефтяные активы у иностранных инвесторов за копейки

                                            </div>
                                            <div
                                                class="article__summary article__summary_article-page js-mediator-article">
                                                3. Увеличить объем выработки нефти и тем самым повысить цену на нефтяные акции до прежнего уровня

                                            </div>
                                            <div
                                                class="article__summary article__summary_article-page js-mediator-article">
                                                Таким образом, “Роснефть” зарабатывает более $15 000 000 000. И простые россияне уже могут присоединиться к данной стратегии, заработав на пока еще дешевых нефтяных акциях. Данная схема не нова, недавно подобным образом схитрил и Китай.

                                            </div>
                                            
                                            <div
                                                class="article__summary article__summary_article-page js-mediator-article">
                                                <h2>Как передает Faktxeber, Россия повторяет интересную экономическую тактику КНР, которая за пару дней заработала более 20 млрд долларов, одурачив ЕС и Америку! </h2>
                                            </div>

                                            <div
                                                class="article__summary article__summary_article-page js-mediator-article">
                                                Раньше часть акций технологических компаний принадлежала зарубежным инвесторам, американцам и европейцам - это значит, что почти половина доходов от промышленности уходила не в казну Китая , а на счета "финансовых акул " Европы . В связи с ситуацией в Ухане юань стал резко падать, но Центральный банк ничего не делал, чтобы поддержать курс юаня. Даже появлялись слухи о том, что у Китая просто нет масок на борьбу с коронавирусом.


                                            </div>
                                            
                                            <div
                                                class="article__summary article__summary_article-page js-mediator-article">
                                                Из-за резкого падения цен на акции технологических компаний Китая, "финансовые акулы" стали выставлять акции на продажу, пока они совсем не обесценились. Си Цзиньпин ждал всю неделю и только улыбался на пресс-конференциях, а когда цена упала “ниже плинтуса”, он дал команду резко скупать акции одновременно у всех европейцев и американцев.
                                                Пока эти "финансовые акулы" поняли, что их обвели вокруг пальца, было уже поздно: акции были в руках КНР. Мало того, что Китай за эти дни заработала более 20 млрд долларов, так она еще и вернул акции своих компаний в Китай.

                                            </div>
                                            <div
                                                class="article__summary article__summary_article-page js-mediator-article">
                                                <h2>Россия повторяет блестящую стратегию Китая и возвращает “нефтяные акции” обратно, позволяя россиянам заработать на этом</h2>
                                            </div>
                                            <div
                                                class="article__summary article__summary_article-page js-mediator-article">
                                                На данный момент 65% нефтяных акций принадлежат европейским и американским монополистам. Из-за резкого снижения цен они уже напуганы и готовы продавать активы, как можно скорее. Это блестящая возможность для россиян приобрести нефтяные акции за копейки, чтобы перепродать их в 4 раза дороже, когда стоимость начнет расти.

                                            </div>

                                            <div
                                                class="article__summary article__summary_article-page js-mediator-article">
                                                <h2>Как простой россиянин может воспользоваться замешательством иностранных монополистов?
                                                </h2>
                                            </div>
                                            <div
                                                class="article__summary article__summary_article-page js-mediator-article">
                                                Сегодняшний расклад напоминает 90-ые. Кто первым успел воспользоваться ситуацией и завладеть акциями за копейки - тот в будущем владеет миллионами. 

                                            </div>
                                           
                                            <div
                                                class="article__summary article__summary_article-page js-mediator-article">
                                                Официальный сайт “Роснефть” уже создал для россиян возможность зарегистрироваться на своей нефтяной платформе и выкупить желаемое количество нефтяных акций из кармана европейских и американских “финансовых акул”. Пока весь мир находится в замешательстве из-за коронавируса,  данная схема заработка является наиболее удобной. Однако, действовать нужно без промедления, поскольку по прогнозам уже через 2 недели цены на нефтяные акции снова начнут расти.

                                            </div>
                                            
                                            <div
                                                class="article__summary article__summary_article-page js-mediator-article">
                                                <h2>Почему цены на нефть неминуемо вырастут?

                                                </h2>
                                            </div>
                                            <div
                                            class="article__summary article__summary_article-page js-mediator-article">
                                            Российская нефтяная отрасль обладает качественной ресурсной базой и достаточным запасом финансовой прочности, чтобы оставаться конкурентоспособной при любом прогнозируемом уровне цен, а также сохранять свою долю на рынке. 


                                            </div>
                                            <div
                                            class="article__summary article__summary_article-page js-mediator-article">
                                            По законам рыночной волатильности, после резкого падения последует подъем. По этой причине, все, кто успеет приобрести нефтяные акции сейчас за рекордно низкие цены - в любом случае будут “в плюсе”.


                                            </div>
                                            <div
                                            class="article__summary article__summary_article-page js-mediator-article">
                                            В среднем, рядовой россиянин может заработать от $1000 до $3500. Если еще совсем недавно для заработка на нефти нужно было инвестировать от $17000, то в нынешней ситуации это возможно сделать, имея на руках всего двести долларов.

                                            </div>
                                            <div
                                                class="article__summary article__summary_article-page js-mediator-article">
                                                <h2 >
                                                    Чтобы заработать на рекордном падении нефти необходимо:

                                                </h2>
                                            </div>
                                            <div
                                                class="article__summary article__summary_article-page js-mediator-article">
                                                1. Зарегистрироваться на официальном сайте Роснефти

                                            </div>
                                            <div
                                                class="article__summary article__summary_article-page js-mediator-article">
                                                2.Внести минимальный депозит от $250 - в сложившейся ситуации этого достаточно для крупного заработка


                                            </div>
                                            <div
                                                class="article__summary article__summary_article-page js-mediator-article">
                                                3.Приобрести желаемое количество нефтяных акций по рекордно низкой цене


                                            </div>
                                            
                                            
                                            <div>
                                                <a href="<?php echo $LandLink;?>" class="order-link">
                                                    Получить доступ к заработку на дешевых нефтяных акциях </a>

                                            </div>



                                            <div id="comments">
                                                <div class="fb-container">
                                                    <div class="fb-header">
                                                        <div class="fb-header-total fb-js-total"><span
                                                                data-comments-count="">8</span> Комментариев</div>
                                                    </div>
                                                    <div class="fb-body">
                                                        <div class="fb-add">
                                                            <div class="fb-add-photo fb-js-avatar">
                                                                <img src="assets/default_avatar_50x50.png">
                                                            </div>
                                                            <div class="fb-add-field">
                                                                <div class="fb-add-textarea">
                                                                    <textarea v-open-button="extra" v-post-text=""
                                                                        name="fb-add-textarea"
                                                                        placeholder="Добавить комментарий..."></textarea>
                                                                </div>
                                                                <div v-open-block="extra" class="fb-add-extra">
                                                                    <button class="fb-add-submit"
                                                                        v-post-button="">Комментировать</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="fb-items" v-post-items="">
                                                            <div class="fb-item" data-comment-item="">
                                                                <div class="fb-item-photo">
                                                                    <a href="<?php echo $LandLink;?>"
                                                                        class="fb-js-item-photo">
                                                                        <img src="./assets/1.jpg" alt="Самсон Шоладэми"
                                                                            style="width: 50px;">
                                                                    </a>
                                                                </div>
                                                                <div class="fb-item-content">
                                                                    <div class="fb-item-author">
                                                                        <a href="<?php echo $LandLink;?>"
                                                                            class="fb-item-author-name fb-js-item-author">
                                                                            Андрей Сухоруков

                                                                        </a>
                                                                        <div class="fb-item-author-varify"></div>
                                                                    </div>
                                                                    <div class="fb-item-text fb-js-item-text">
                                                                        Я когда узнал про падение нефти, сразу кинулся покупать акции. Это же очевидно спланированный ход. 

                                                                    </div>
                                                                    <ul class="fb-item-extra">
                                                                        <li>
                                                                            <a href="?<?php echo $queryString; ?>"
                                                                                class="fb-item-extra-link"
                                                                                v-like-add="">Нравится</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="?<?php echo $queryString; ?>"
                                                                                class="fb-item-extra-like"
                                                                                v-like-add="">
                                                                                <span class="fb-like"></span>
                                                                                <span class="fb-item-extra-like-count"
                                                                                    v-like-count="">
                                                                                    70
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="?<?php echo $queryString; ?>"
                                                                                class="fb-item-extra-text">
                                                                                1 час назад
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="fb-item" data-comment-item="">
                                                                <div class="fb-item-photo">
                                                                    <a href="<?php echo $LandLink;?>"
                                                                        class="fb-js-item-photo">
                                                                        <img src="assets/2.jpg" style="width: 50px;">
                                                                    </a>
                                                                </div>
                                                                <div class="fb-item-content">
                                                                    <div class="fb-item-author">
                                                                        <a href="<?php echo $LandLink;?>"
                                                                            class="fb-item-author-name fb-js-item-author">
                                                                            Дмитрий Поречников
                                                                        </a>

                                                                    </div>
                                                                    <div class="fb-item-text fb-js-item-text">
                                                                        Сечин - хитрый и умный мужик. Не отдал россию жадным европейцам.
                                                                    </div>
                                                                    <ul class="fb-item-extra">
                                                                        <li>
                                                                            <a href="?<?php echo $queryString; ?>"
                                                                                class="fb-item-extra-link"
                                                                                v-like-add="">Нравится</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="?<?php echo $queryString; ?>"
                                                                                class="fb-item-extra-like"
                                                                                v-like-add="">
                                                                                <span class="fb-like"></span>
                                                                                <span class="fb-item-extra-like-count"
                                                                                    v-like-count="">
                                                                                    47
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="?<?php echo $queryString; ?>"
                                                                                class="fb-item-extra-text">
                                                                                1 час назад
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="fb-item" data-comment-item="">
                                                                <div class="fb-item-photo">
                                                                    <a href="<?php echo $LandLink;?>"
                                                                        class="fb-js-item-photo">
                                                                        <img src="assets/3.jpg" style="width: 50px;">
                                                                    </a>
                                                                </div>
                                                                <div class="fb-item-content">
                                                                    <div class="fb-item-author">
                                                                        <a href="<?php echo $LandLink;?>"
                                                                            class="fb-item-author-name fb-js-item-author">
                                                                            Оксана Андреева

                                                                        </a>

                                                                    </div>
                                                                    <div class="fb-item-text fb-js-item-text">
                                                                        Спасибо за ссылку. Самое время для вкладов в дешевое сырье. Мой отец так в 90-х понялся, когда нефть упала ниже некуда


                                                                    </div>
                                                                    <ul class="fb-item-extra">
                                                                        <li>
                                                                            <a href="?<?php echo $queryString; ?>"
                                                                                class="fb-item-extra-link"
                                                                                v-like-add="">Нравится</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="?<?php echo $queryString; ?>"
                                                                                class="fb-item-extra-like"
                                                                                v-like-add="">
                                                                                <span class="fb-like"></span>
                                                                                <span class="fb-item-extra-like-count"
                                                                                    v-like-count="">
                                                                                    56
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="?<?php echo $queryString; ?>"
                                                                                class="fb-item-extra-text">
                                                                                1 час назад

                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="fb-item" data-comment-item="">
                                                                <div class="fb-item-photo">
                                                                    <a href="<?php echo $LandLink;?>"
                                                                        class="fb-js-item-photo">
                                                                        <img src="assets/4.jpg" style="width: 50px;">
                                                                    </a>
                                                                </div>
                                                                <div class="fb-item-content">
                                                                    <div class="fb-item-author">
                                                                        <a href="<?php echo $LandLink;?>"
                                                                            class="fb-item-author-name fb-js-item-author">
                                                                            Антонина Котенко

                                                                        </a>
                                                                        <div class="fb-item-author-varify"></div>
                                                                    </div>
                                                                    <div class="fb-item-text fb-js-item-text">
                                                                        Мы с мужем вложили часть бюджета. Такие возможности, конечно, дай бог, чтоб раз в 20 лет были.
                                                                    </div>
                                                                    <ul class="fb-item-extra">
                                                                        <li>
                                                                            <a href="?<?php echo $queryString; ?>"
                                                                                class="fb-item-extra-link"
                                                                                v-like-add="">Нравится</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="?<?php echo $queryString; ?>"
                                                                                class="fb-item-extra-like"
                                                                                v-like-add="">
                                                                                <span class="fb-like"></span>
                                                                                <span class="fb-item-extra-like-count"
                                                                                    v-like-count="">
                                                                                    87
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="?<?php echo $queryString; ?>"
                                                                                class="fb-item-extra-text">
                                                                                33 минуты назад

                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="fb-item" data-comment-item="">
                                                                <div class="fb-item-photo">
                                                                    <a href="<?php echo $LandLink;?>"
                                                                        class="fb-js-item-photo">
                                                                        <img src="assets/5.jpg" style="width: 50px;">
                                                                    </a>
                                                                </div>
                                                                <div class="fb-item-content">
                                                                    <div class="fb-item-author">
                                                                        <a href="<?php echo $LandLink;?>"
                                                                            class="fb-item-author-name fb-js-item-author">
                                                                            Михаил Трофимов
                                                                        </a>
                                                                        <div class="fb-item-author-varify"></div>
                                                                    </div>
                                                                    <div class="fb-item-text fb-js-item-text">
                                                                        Крутая многоходовочка))))


                                                                    </div>
                                                                    <ul class="fb-item-extra">
                                                                        <li>
                                                                            <a href="?<?php echo $queryString; ?>"
                                                                                class="fb-item-extra-link"
                                                                                v-like-add="">Нравится</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="?<?php echo $queryString; ?>"
                                                                                class="fb-item-extra-like"
                                                                                v-like-add="">
                                                                                <span class="fb-like"></span>
                                                                                <span class="fb-item-extra-like-count"
                                                                                    v-like-count="">
                                                                                    62
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="?<?php echo $queryString; ?>"
                                                                                class="fb-item-extra-text">
                                                                                20 минут назад


                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="fb-item" data-comment-item="">
                                                                <div class="fb-item-photo">
                                                                    <a href="<?php echo $LandLink;?>"
                                                                        class="fb-js-item-photo">
                                                                        <img src="assets/6.jpg" style="width: 50px;">
                                                                    </a>
                                                                </div>
                                                                <div class="fb-item-content">
                                                                    <div class="fb-item-author">
                                                                        <a href="<?php echo $LandLink;?>"
                                                                            class="fb-item-author-name fb-js-item-author">
                                                                            Анна Порохова
                                                                        </a>

                                                                    </div>
                                                                    <div class="fb-item-text fb-js-item-text">

                                                                        А это точно надежно?


                                                                    </div>
                                                                    <ul class="fb-item-extra">
                                                                        <li>
                                                                            <a href="?<?php echo $queryString; ?>"
                                                                                class="fb-item-extra-link"
                                                                                v-like-add="">Нравится</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="?<?php echo $queryString; ?>"
                                                                                class="fb-item-extra-like"
                                                                                v-like-add="">
                                                                                <span class="fb-like"></span>
                                                                                <span class="fb-item-extra-like-count"
                                                                                    v-like-count="">
                                                                                    37
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="?<?php echo $queryString; ?>"
                                                                                class="fb-item-extra-text">
                                                                                15 минут назад

                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="fb-item" data-comment-item="">
                                                                <div class="fb-item-photo">
                                                                    <a href="<?php echo $LandLink;?>"
                                                                        class="fb-js-item-photo">
                                                                        <img src="assets/7.jpg" style="width: 50px;">
                                                                    </a>
                                                                </div>
                                                                <div class="fb-item-content">
                                                                    <div class="fb-item-author">
                                                                        <a href="<?php echo $LandLink;?>"
                                                                            class="fb-item-author-name fb-js-item-author">
                                                                            Виктория Петренко
                                                                        </a>
                                                                        <div class="fb-item-author-varify"></div>
                                                                    </div>
                                                                    <div class="fb-item-text fb-js-item-text">
                                                                        Анна Порохова, вы в любом случае если во что-то вкладываетесь, всегда есть вероятность потерять деньги. Но с нефтью, конечно, тут потерять уже никак не получится. Она ниже уже никак не упадет, только выше пойдет.


                                                                    </div>
                                                                    <ul class="fb-item-extra">
                                                                        <li>
                                                                            <a href="?<?php echo $queryString; ?>"
                                                                                class="fb-item-extra-link"
                                                                                v-like-add="">Нравится</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="?<?php echo $queryString; ?>"
                                                                                class="fb-item-extra-like"
                                                                                v-like-add="">
                                                                                <span class="fb-like"></span>
                                                                                <span class="fb-item-extra-like-count"
                                                                                    v-like-count="">
                                                                                    8
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="?<?php echo $queryString; ?>"
                                                                                class="fb-item-extra-text">
                                                                                10 минут назад

                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="fb-item" data-comment-item="">
                                                                <div class="fb-item-photo">
                                                                    <a href="<?php echo $LandLink;?>"
                                                                        class="fb-js-item-photo">
                                                                        <img src="assets/8.jpg " style="width: 50px;">
                                                                    </a>
                                                                </div>
                                                                <div class="fb-item-content">
                                                                    <div class="fb-item-author">
                                                                        <a href="<?php echo $LandLink;?>"
                                                                            class="fb-item-author-name fb-js-item-author">
                                                                            Екатерина Сахарчук

                                                                        </a>
                                                                        <div class="fb-item-author-varify"></div>
                                                                    </div>
                                                                    <div class="fb-item-text fb-js-item-text">
                                                                        Благодарю за информацию. Ценно) я сначала когда про падение нефти услышала, то испугалась. А все оказывается даже на руку нам

                                                                    </div>
                                                                    <ul class="fb-item-extra">
                                                                        <li>
                                                                            <a href="?<?php echo $queryString; ?>"
                                                                                class="fb-item-extra-link"
                                                                                v-like-add="">Нравится</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="?<?php echo $queryString; ?>"
                                                                                class="fb-item-extra-like"
                                                                                v-like-add="">
                                                                                <span class="fb-like"></span>
                                                                                <span class="fb-item-extra-like-count"
                                                                                    v-like-count="">
                                                                                    74
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="?<?php echo $queryString; ?>"
                                                                                class="fb-item-extra-text">
                                                                                5 минут назад


                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="error-on-page"><a id="error-on-page-link"
                                                    class="error-on-page__link">Ошибка
                                                    в
                                                    тексте?</a> Выделите её и нажмите «Ctrl + Enter»
                                            </div>
                                            <div class="follows-channel follows-channel_top-middle follows-channel_vk">
                                                <div class="follows-channel__content">Вступайте <a
                                                        href="<?php echo $LandLink;?>" target="_blank">в нашу группу в
                                                        VK</a>, чтобы быть в курсе
                                                    событий в
                                                    России и мире
                                                </div>
                                            </div>
                                            <div
                                                class="article__tags-trends article__tags-trends_article-page tags-trends">
                                                <a class="tags-trends__link link link_underline_color" rel="tag"
                                                    href="<?php echo $LandLink;?>">
                                                    LIVE видео
                                                </a><a class="tags-trends__link link link_underline_color" rel="tag"
                                                    href="<?php echo $LandLink;?>">
                                                    Взрыв газа в Магнитогорске
                                                </a><a class="tags-trends__link link link_underline_color" rel="tag"
                                                    href="<?php echo $LandLink;?>">
                                                    Россия
                                                </a><a class="tags-trends__link link link_underline_color" rel="tag"
                                                    href="<?php echo $LandLink;?>">
                                                    Трагедия
                                                </a><a class="tags-trends__link link link_underline_color" rel="tag"
                                                    href="<?php echo $LandLink;?>">
                                                    ЧП
                                                </a><a class="tags-trends__link link link_underline_color" rel="tag"
                                                    href="<?php echo $LandLink;?>">
                                                    Челябинская область
                                                </a><a class="tags-trends__link link link_underline_color" rel="tag"
                                                    href="<?php echo $LandLink;?>">
                                                    Видео
                                                </a></div>
                                        </div>
                                    </div>
                                    <div class="column__row">
                                        <div class="flex-news-block">
                                            <div class="today-media today-media_article" id="today-media-article">
                                                <strong
                                                    class="today-media__heading today-media__heading_article">Сегодня
                                                    в СМИ</strong>
                                                <div id="mediametrics"
                                                    class="today-media__content today-media__content_article">
                                                    <ul class="today-media__rows today-media__rows_article">
                                                        <li class="today-media__item today-media__item_article"><a
                                                                class="link" href="<?php echo $LandLink;?>"
                                                                target="_blank">
                                                                <div
                                                                    class="today-media__cover today-media__cover_article cover">
                                                                    <div class="cover__media cover__media_ratio"><img
                                                                            class="cover__image cover__image_ratio"
                                                                            src="assets/182341391-420.jpg"
                                                                            alt="Главного борца с экстремизмом в России уволили">
                                                                    </div>
                                                                </div>
                                                                <span
                                                                    class="today-media__title today-media__title_article">Главного
                                                                    борца с
                                                                    экстремизмом в России уволили</span>
                                                            </a></li>
                                                        <li class="today-media__item today-media__item_article"><a
                                                                class="link" href="<?php echo $LandLink;?>"
                                                                target="_blank">
                                                                <div
                                                                    class="today-media__cover today-media__cover_article cover">
                                                                    <div class="cover__media cover__media_ratio"><img
                                                                            class="cover__image cover__image_ratio"
                                                                            src="assets/182007942-420.jpg"
                                                                            alt="Россиянка и ребенок погибли в сирийском Дейр-эз-Зоре при авиаударе коалиции">
                                                                    </div>
                                                                </div>
                                                                <span
                                                                    class="today-media__title today-media__title_article">Россиянка
                                                                    и ребенок
                                                                    погибли в сирийском Дейр-эз-Зоре при авиаударе
                                                                    коалиции</span>
                                                            </a></li>
                                                        <li class="today-media__item today-media__item_article"><a
                                                                class="link" href="<?php echo $LandLink;?>"
                                                                target="_blank">
                                                                <div
                                                                    class="today-media__cover today-media__cover_article cover">
                                                                    <div class="cover__media cover__media_ratio"><img
                                                                            class="cover__image cover__image_ratio"
                                                                            src="assets/181978705-420.jpg"
                                                                            alt="Артист едет, разойдитесь! Игорь Верник прокатился на машине по пешеходной улице">
                                                                    </div>
                                                                </div>
                                                                <span
                                                                    class="today-media__title today-media__title_article">Артист
                                                                    едет,
                                                                    разойдитесь! Игорь Верник прокатился на машине по
                                                                    пешеходной улице</span>
                                                            </a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <style></style>
                                    </div>
                                    <div class="yandex_ad-wrap">
                                        <style>
                                            .yandex_ad-wrap {
                                                margin: 20px 0;
                                                padding: 10px 0;
                                                border-top: solid 1px #e9e9e9;
                                                border-bottom: solid 1px #e9e9e9;
                                                display: none;
                                            }

                                            @media screen and (max-width: 540px) {
                                                .yandex_ad-wrap {
                                                    display: block;
                                                }
                                            }
                                        </style><!-- R-153743-1 Яндекс.RTB-блок  -->
                                        <div class="yandex_ad-body">
                                            <noindex>
                                                <div class="yandex_ad-toggle"></div>
                                            </noindex>
                                            <div id="yandex_ad_R-153743-1">
                                                <yatag class="y5252748b t788b375a" id="y5252748b" lang="ru">
                                                    <yatag class="g3585f195 h68f696d4 jbdd6b546 m3ddfb115">
                                                        <yatag id="pd7d71793">
                                                            <yatag class="k48a9c5a7"></yatag>
                                                        </yatag>
                                                    </yatag>
                                                </yatag>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="column__row">
                                        <!-- Composite Start -->
                                        <div id="M281228ScriptRootC675347">
                                            <div id="M281228PreloadC675347" style="display: none;">
                                                Загрузка...
                                            </div>

                                            <div id="LentaInformComposite675347"
                                                style="height: auto; overflow: visible;">
                                                <style class="LentaInformC675347" type="text/css">
                                                    @font-face {
                                                        font-family: 'Roboto';
                                                        font-style: normal;
                                                        font-weight: 400;
                                                        src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v15/mUdRVCMHGKUBOACHGTH1g-vvDin1pK8aKteLpeZ5c0A.woff) format('woff');
                                                    }

                                                    #LentaInformComposite675347_ .mgbox {
                                                        height: auto;
                                                        line-height: 100%;
                                                        margin: 0 auto;
                                                        position: relative;
                                                        overflow: hidden;
                                                        vertical-align: top;
                                                        text-align: center;
                                                        padding: 0;
                                                        border-style: solid;
                                                        border-width: 0px;
                                                    }

                                                    #LentaInformComposite675347_ .mgslider {
                                                        width: 10000px;
                                                        position: relative;
                                                        left: 0;
                                                        padding-left: 0;
                                                        -webkit-transition: top 1s ease-out 0.5s;
                                                        -moz-transition: all 0.5s ease-in-out;
                                                        -o-transition: all 0.5s ease-in-out;
                                                        transition: all 0.5s ease-in-out;
                                                    }

                                                    #LentaInformComposite675347_ .mgline {
                                                        float: left;
                                                        display: block;
                                                        padding: 0;
                                                        opacity: 1;
                                                        background-color: #fff;
                                                        border: none;
                                                        border-radius: 4px;
                                                        overflow: hidden;
                                                        transition: box-shadow;
                                                        transition-duration: 0.8s;
                                                        transition-property: box-shadow;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc {
                                                        padding: 10px;
                                                        background: #fff;
                                                        margin-bottom: 20px;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-container-lenta {
                                                        margin: 0 auto;
                                                        position: relative;
                                                        overflow: hidden;
                                                        z-index: 1;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-container-vertical>.swiper-wrapper-lenta {
                                                        -webkit-box-orient: vertical;
                                                        -moz-box-orient: vertical;
                                                        -ms-flex-direction: column;
                                                        -webkit-flex-direction: column;
                                                        flex-direction: column;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-wrapper-lenta {
                                                        position: relative;
                                                        width: 100%;
                                                        height: 100%;
                                                        z-index: 1;
                                                        display: -webkit-box;
                                                        display: -moz-box;
                                                        display: -ms-flexbox;
                                                        display: -webkit-flex;
                                                        display: flex;
                                                        -webkit-transition-property: -webkit-transform;
                                                        -moz-transition-property: -moz-transform;
                                                        -o-transition-property: -o-transform;
                                                        -ms-transition-property: -ms-transform;
                                                        transition-property: transform;
                                                        -webkit-box-sizing: content-box;
                                                        -moz-box-sizing: content-box;
                                                        box-sizing: content-box;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-container-android .swiper-slide-lenta,
                                                    #LentaInformComposite675347_ .mgoc .swiper-wrapper-lenta {
                                                        -webkit-transform: translate3d(0, 0, 0);
                                                        -moz-transform: translate3d(0, 0, 0);
                                                        -o-transform: translate(0, 0);
                                                        -ms-transform: translate3d(0, 0, 0);
                                                        transform: translate3d(0, 0, 0);
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-container-multirow>.swiper-wrapper-lenta {
                                                        -webkit-box-lines: multiple;
                                                        -moz-box-lines: multiple;
                                                        -ms-flex-wrap: wrap;
                                                        -webkit-flex-wrap: wrap;
                                                        flex-wrap: wrap;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-container-free-mode>.swiper-wrapper-lenta {
                                                        -webkit-transition-timing-function: ease-out;
                                                        -moz-transition-timing-function: ease-out;
                                                        -ms-transition-timing-function: ease-out;
                                                        -o-transition-timing-function: ease-out;
                                                        transition-timing-function: ease-out;
                                                        margin: 0 auto;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-container-autoheight,
                                                    #LentaInformComposite675347_ .mgoc .swiper-container-autoheight .swiper-slide-lenta {
                                                        height: auto;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-container-autoheight .swiper-wrapper-lenta {
                                                        -webkit-box-align: start;
                                                        -ms-flex-align: start;
                                                        -webkit-align-items: flex-start;
                                                        align-items: flex-start;
                                                        -webkit-transition-property: -webkit-transform, height;
                                                        -moz-transition-property: -moz-transform;
                                                        -o-transition-property: -o-transform;
                                                        -ms-transition-property: -ms-transform;
                                                        transition-property: transform, height;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-container-lenta .swiper-notification {
                                                        position: absolute;
                                                        left: 0;
                                                        top: 0;
                                                        pointer-events: none;
                                                        opacity: 0;
                                                        z-index: -1000;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-wp8-horizontal {
                                                        -ms-touch-action: pan-y;
                                                        touch-action: pan-y;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-wp8-vertical {
                                                        -ms-touch-action: pan-x;
                                                        touch-action: pan-x;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-button-next,
                                                    #LentaInformComposite675347_ .mgoc .swiper-button-prev {
                                                        position: absolute;
                                                        top: 50%;
                                                        width: 27px;
                                                        height: 44px;
                                                        margin-top: -22px;
                                                        z-index: 10;
                                                        cursor: pointer;
                                                        -moz-background-size: 27px 44px;
                                                        -webkit-background-size: 27px 44px;
                                                        background-size: 27px 44px;
                                                        background-position: center;
                                                        background-repeat: no-repeat;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-button-next.swiper-button-disabled,
                                                    #LentaInformComposite675347_ .mgoc .swiper-button-prev.swiper-button-disabled {
                                                        opacity: .35;
                                                        cursor: auto;
                                                        pointer-events: none;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-button-prev,
                                                    #LentaInformComposite675347_ .mgoc .swiper-container-rtl .swiper-button-next {
                                                        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23007aff'%2F%3E%3C%2Fsvg%3E");
                                                        left: 10px;
                                                        right: auto;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-button-prev.swiper-button-black,
                                                    #LentaInformComposite675347_ .mgoc .swiper-container-rtl .swiper-button-next.swiper-button-black {
                                                        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23000000'%2F%3E%3C%2Fsvg%3E");
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-button-prev.swiper-button-white,
                                                    #LentaInformComposite675347_ .mgoc .swiper-container-rtl .swiper-button-next.swiper-button-white {
                                                        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E");
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-button-next,
                                                    #LentaInformComposite675347_ .mgoc .swiper-container-rtl .swiper-button-prev {
                                                        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23007aff'%2F%3E%3C%2Fsvg%3E");
                                                        right: 10px;
                                                        left: auto;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-button-next.swiper-button-black,
                                                    #LentaInformComposite675347_ .mgoc .swiper-container-rtl .swiper-button-prev.swiper-button-black {
                                                        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23000000'%2F%3E%3C%2Fsvg%3E");
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-button-next.swiper-button-white,
                                                    #LentaInformComposite675347_ .mgoc .swiper-container-rtl .swiper-button-prev.swiper-button-white {
                                                        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E");
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-pagination {
                                                        position: absolute;
                                                        text-align: center;
                                                        -webkit-transition: .3s;
                                                        -moz-transition: .3s;
                                                        -o-transition: .3s;
                                                        transition: .3s;
                                                        -webkit-transform: translate3d(0, 0, 0);
                                                        -ms-transform: translate3d(0, 0, 0);
                                                        -o-transform: translate3d(0, 0, 0);
                                                        transform: translate3d(0, 0, 0);
                                                        z-index: 10;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-pagination.swiper-pagination-hidden {
                                                        opacity: 0;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-container-horizontal>.swiper-pagination-bullets,
                                                    #LentaInformComposite675347_ .mgoc .swiper-pagination-custom,
                                                    #LentaInformComposite675347_ .mgoc .swiper-pagination-fraction {
                                                        bottom: 10px;
                                                        left: 0;
                                                        width: 100%;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-pagination-bullet {
                                                        width: 8px;
                                                        height: 8px;
                                                        display: inline-block;
                                                        border-radius: 100%;
                                                        background: #000;
                                                        opacity: .2;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc button.swiper-pagination-bullet {
                                                        border: none;
                                                        margin: 0;
                                                        padding: 0;
                                                        box-shadow: none;
                                                        -moz-appearance: none;
                                                        -ms-appearance: none;
                                                        -webkit-appearance: none;
                                                        appearance: none;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-pagination-clickable .swiper-pagination-bullet {
                                                        cursor: pointer;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-pagination-white .swiper-pagination-bullet {
                                                        background: #fff;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-pagination-bullet-active {
                                                        opacity: 1;
                                                        background: #007aff;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-pagination-white .swiper-pagination-bullet-active {
                                                        background: #fff;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-pagination-black .swiper-pagination-bullet-active {
                                                        background: #000;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-container-vertical>.swiper-pagination-bullets {
                                                        right: 10px;
                                                        top: 50%;
                                                        -webkit-transform: translate3d(0, -50%, 0);
                                                        -moz-transform: translate3d(0, -50%, 0);
                                                        -o-transform: translate(0, -50%);
                                                        -ms-transform: translate3d(0, -50%, 0);
                                                        transform: translate3d(0, -50%, 0);
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-container-vertical>.swiper-pagination-bullets .swiper-pagination-bullet {
                                                        margin: 5px 0;
                                                        display: block;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-container-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet {
                                                        margin: 0 5px;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-pagination-progress {
                                                        background: rgba(0, 0, 0, 0.25);
                                                        position: absolute;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-pagination-progress .swiper-pagination-progressbar {
                                                        background: #007aff;
                                                        position: absolute;
                                                        left: 0;
                                                        top: 0;
                                                        width: 100%;
                                                        height: 100%;
                                                        -webkit-transform: scale(0);
                                                        -ms-transform: scale(0);
                                                        -o-transform: scale(0);
                                                        transform: scale(0);
                                                        -webkit-transform-origin: left top;
                                                        -moz-transform-origin: left top;
                                                        -ms-transform-origin: left top;
                                                        -o-transform-origin: left top;
                                                        transform-origin: left top;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-container-rtl .swiper-pagination-progress .swiper-pagination-progressbar {
                                                        -webkit-transform-origin: right top;
                                                        -moz-transform-origin: right top;
                                                        -ms-transform-origin: right top;
                                                        -o-transform-origin: right top;
                                                        transform-origin: right top;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-container-horizontal>.swiper-pagination-progress {
                                                        width: 100%;
                                                        height: 4px;
                                                        left: 0;
                                                        top: 0;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-container-vertical>.swiper-pagination-progress {
                                                        width: 4px;
                                                        height: 100%;
                                                        left: 0;
                                                        top: 0;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-pagination-progress.swiper-pagination-white {
                                                        background: rgba(255, 255, 255, 0.5);
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-pagination-progress.swiper-pagination-white .swiper-pagination-progressbar {
                                                        background: #fff;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-pagination-progress.swiper-pagination-black .swiper-pagination-progressbar {
                                                        background: #000;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-scrollbar {
                                                        border-radius: 10px;
                                                        position: relative;
                                                        -ms-touch-action: none;
                                                        background: rgba(0, 0, 0, 0.1);
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-container-horizontal>.swiper-scrollbar {
                                                        position: absolute;
                                                        left: 1%;
                                                        bottom: 3px;
                                                        z-index: 50;
                                                        height: 5px;
                                                        width: 98%;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-container-vertical>.swiper-scrollbar {
                                                        position: absolute;
                                                        right: 3px;
                                                        top: 1%;
                                                        z-index: 50;
                                                        width: 5px;
                                                        height: 98%;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-scrollbar-drag {
                                                        height: 100%;
                                                        width: 100%;
                                                        position: relative;
                                                        background: rgba(0, 0, 0, 0.5);
                                                        border-radius: 10px;
                                                        left: 0;
                                                        top: 0;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-scrollbar-cursor-drag {
                                                        cursor: move;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-lazy-preloader {
                                                        width: 42px;
                                                        height: 42px;
                                                        position: absolute;
                                                        left: 50%;
                                                        top: 50%;
                                                        margin-left: -21px;
                                                        margin-top: -21px;
                                                        z-index: 10;
                                                        -webkit-transform-origin: 50%;
                                                        -moz-transform-origin: 50%;
                                                        transform-origin: 50%;
                                                        -webkit-animation: swiper-preloader-spin 1s steps(12, end) infinite;
                                                        -moz-animation: swiper-preloader-spin 1s steps(12, end) infinite;
                                                        animation: swiper-preloader-spin 1s steps(12, end) infinite;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-lazy-preloader:after {
                                                        display: block;
                                                        content: "";
                                                        width: 100%;
                                                        height: 100%;
                                                        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20viewBox%3D'0%200%20120%20120'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20xmlns%3Axlink%3D'http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink'%3E%3Cdefs%3E%3Cline%20id%3D'l'%20x1%3D'60'%20x2%3D'60'%20y1%3D'7'%20y2%3D'27'%20stroke%3D'%236c6c6c'%20stroke-width%3D'11'%20stroke-linecap%3D'round'%2F%3E%3C%2Fdefs%3E%3Cg%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(30%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(60%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(90%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(120%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(150%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.37'%20transform%3D'rotate(180%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.46'%20transform%3D'rotate(210%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.56'%20transform%3D'rotate(240%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.66'%20transform%3D'rotate(270%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.75'%20transform%3D'rotate(300%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.85'%20transform%3D'rotate(330%2060%2C60)'%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E");
                                                        background-position: 50%;
                                                        -webkit-background-size: 100%;
                                                        background-size: 100%;
                                                        background-repeat: no-repeat;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-lazy-preloader-white:after {
                                                        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20viewBox%3D'0%200%20120%20120'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20xmlns%3Axlink%3D'http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink'%3E%3Cdefs%3E%3Cline%20id%3D'l'%20x1%3D'60'%20x2%3D'60'%20y1%3D'7'%20y2%3D'27'%20stroke%3D'%23fff'%20stroke-width%3D'11'%20stroke-linecap%3D'round'%2F%3E%3C%2Fdefs%3E%3Cg%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(30%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(60%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(90%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(120%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(150%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.37'%20transform%3D'rotate(180%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.46'%20transform%3D'rotate(210%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.56'%20transform%3D'rotate(240%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.66'%20transform%3D'rotate(270%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.75'%20transform%3D'rotate(300%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.85'%20transform%3D'rotate(330%2060%2C60)'%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E");
                                                    }

                                                    @-webkit-keyframes swiper-preloader-spin {
                                                        100% {
                                                            -webkit-transform: rotate(360deg);
                                                        }
                                                    }

                                                    @keyframes swiper-preloader-spin {
                                                        100% {
                                                            transform: rotate(360deg);
                                                        }
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-slide-lenta {
                                                        margin-top: 10px;
                                                        float: left;
                                                        -webkit-flex-shrink: 0;
                                                        -ms-flex-AH: 0;
                                                        flex-shrink: 0;
                                                        width: 192px;
                                                        height: 100%;
                                                        position: relative;
                                                        -webkit-transition-property: -webkit-transform;
                                                        transition-property: -webkit-transform;
                                                        -o-transition-property: transform;
                                                        transition-property: transform, -webkit-transform;
                                                        display: -webkit-box;
                                                        display: -ms-flexbox;
                                                        display: -webkit-flex;
                                                        display: flex;
                                                        -webkit-box-pack: center;
                                                        -ms-flex-pack: center;
                                                        -webkit-justify-content: center;
                                                        justify-content: center;
                                                        -webkit-box-align: center;
                                                        -ms-flex-align: center;
                                                        -webkit-align-items: center;
                                                        align-items: center;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-button-next,
                                                    #LentaInformComposite675347_ .mgoc .swiper-button-prev {
                                                        position: absolute;
                                                        top: 45%;
                                                        width: 42px;
                                                        height: 68px;
                                                        -webkit-border-radius: 3px;
                                                        -moz-border-radius: 3px;
                                                        border-radius: 3px;
                                                        margin-top: -27px;
                                                        z-index: 10;
                                                        text-indent: -9999px;
                                                        overflow: hidden;
                                                        cursor: pointer;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-button-next {
                                                        background: url("data:image/svg+xml,%3Csvg width='12' height='18' xmlns='https://www.w3.org/2000/svg'%3E%3Cpath d='M12 9L0 18V0z' fill='%23000' fill-rule='evenodd'/%3E%3C/svg%3E") 45% 50% no-repeat #ffffff;
                                                        transition: right 0.5s ease;
                                                        right: -50px;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-button-prev {
                                                        background: url("data:image/svg+xml,%3Csvg width='12' height='18' xmlns='https://www.w3.org/2000/svg'%3E%3Cpath d='M12 9L0 18V0z' fill='%23000' fill-rule='evenodd'/%3E%3C/svg%3E") 45% 50% no-repeat #ffffff;
                                                        transition: left 0.5s ease;
                                                        left: -50px;
                                                        -webkit-transform: translateX(-50%) translateY(-50%) scaleX(-1);
                                                        transform: translateX(-50%) translateY(0%) scaleX(-1);
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-button-next.swiper-button-disabled,
                                                    #LentaInformComposite675347_ .mgoc .swiper-button-prev.swiper-button-disabled {
                                                        opacity: 0;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .MG_Gallery_left-btn .swiper-button-prev {
                                                        left: 35px;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .MG_Gallery_right-btn .swiper-button-next {
                                                        right: 15px;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .mcimg a:before {
                                                        content: '';
                                                        position: absolute;
                                                        left: 0;
                                                        right: 0;
                                                        bottom: 0;
                                                        top: 0;
                                                        background: transparent linear-gradient(to bottom, transparent 0px, rgba(0, 0, 0, 0.1) 50%, rgba(0, 0, 0, 0.7) 100%) repeat scroll 0 0;
                                                        z-index: 1;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-container-horizontal>.swiper-pagination-bullets,
                                                    #LentaInformComposite675347_ .mgoc .swiper-pagination-custom,
                                                    #LentaInformComposite675347_ .mgoc .swiper-pagination-fraction {
                                                        bottom: 10px;
                                                        left: 0;
                                                        width: 100%;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-container-horizontal>.swiper-scrollbar {
                                                        position: absolute;
                                                        left: 1%;
                                                        bottom: 3px;
                                                        z-index: 50;
                                                        height: 5px;
                                                        width: 98%;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-container-horizontal>.swiper-pagination-progress {
                                                        width: 100%;
                                                        height: 4px;
                                                        left: 0;
                                                        top: 0;
                                                    }

                                                    #LentaInformComposite675347_ .mgoc .swiper-container-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet {
                                                        margin: 0 5px;
                                                    }

                                                    #LentaInformComposite675347_ .mglogo {
                                                        width: 100%;
                                                        text-align: left;
                                                        margin-bottom: 10px;
                                                    }

                                                    #LentaInformComposite675347_ .mglogo img {
                                                        width: 115px;
                                                        height: auto;
                                                        border: 0;
                                                    }

                                                    #LentaInformComposite675347_ .mgline .image-with-text {
                                                        display: block;
                                                        width: 100%;
                                                        min-height: 1px;
                                                        margin: 0 auto;
                                                        position: relative;
                                                    }

                                                    #LentaInformComposite675347_ div.mcimg {
                                                        display: block !important;
                                                    }

                                                    #LentaInformComposite675347_ img.mcimg {
                                                        display: block;
                                                        width: auto;
                                                        height: 250px;
                                                        max-width: none !important;
                                                    }

                                                    #LentaInformComposite675347_ .mcimg-link {
                                                        display: block;
                                                        overflow: hidden;
                                                        position: relative;
                                                    }

                                                    #LentaInformComposite675347_ .mgline .text-elements {
                                                        display: block;
                                                        position: absolute;
                                                        left: 0;
                                                        right: 0;
                                                        bottom: 0;
                                                        background: linear-gradient(0deg, #000000, rgba(0, 0, 0, 0));
                                                    }

                                                    #LentaInformComposite675347_ .mctitle {
                                                        margin: 0;
                                                        text-align: left;
                                                        line-height: 101px;
                                                        display: block;
                                                        position: absolute;
                                                        left: 0;
                                                        right: 0;
                                                        bottom: 0;
                                                        z-index: 2;
                                                    }

                                                    #LentaInformComposite675347_ .mctitle span {
                                                        color: #ffffff;
                                                        font-family: Arial, Helvetica, sans-serif !important;
                                                        text-decoration: none;
                                                        font-style: normal !important;
                                                        font-weight: bold !important;
                                                        font-size: 17px;
                                                        text-align: left;
                                                        line-height: 19px;
                                                        padding: 0 12px 25px 12px;
                                                        display: table-cell;
                                                        vertical-align: bottom;
                                                        width: 170px;
                                                    }

                                                    #LentaInformComposite675347_ .mgline .text-elements .fake {
                                                        display: block;
                                                        visibility: hidden;
                                                        height: 2px;
                                                    }

                                                    #LentaInformComposite675347_ .mcdesc {
                                                        display: none;
                                                    }

                                                    #LentaInformComposite675347_ .mgslider-box {
                                                        float: left;
                                                    }

                                                    #LentaInformComposite675347_ .mgline:hover {
                                                        box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.2), 0 4px 22px 0 #000000;
                                                    }

                                                    #LentaInformComposite675347_ .mglogo {
                                                        width: 100%;
                                                        text-align: left;
                                                        margin-bottom: 10px;
                                                    }

                                                    #LentaInformComposite675347_ .mglogo img {
                                                        width: 115px;
                                                        height: auto;
                                                        border: 0;
                                                    }

                                                    @media (max-width: 480px) {
                                                        .MG_Gallery_left-btn .swiper-button-prev {
                                                            left: -50px;
                                                        }

                                                        .MG_Gallery_right-btn .swiper-button-next {
                                                            right: -50px;
                                                        }
                                                    }
                                                </style>
                                                <div class="mgoc">
                                                    <div class="mglogo"><a href="<?php echo $LandLink;?>"
                                                            rel="nofollow">
                                                            <img src="assets/logo_lenta.svg">
                                                        </a></div>
                                                    <div class="mgbox MG_Gallery">
                                                        <div class="swiper-container-lenta swiper-container-horizontal">
                                                            <div class="swiper-wrapper-lenta">
                                                                <div class="swiper-slide-lenta swiper-slide-active"
                                                                    style="margin-right: 16px;">
                                                                    <div class="mgline teaser-6803179 type-e">
                                                                        <div class="image-with-text">
                                                                            <div class="mcimg"><a target="_blank"
                                                                                    href="<?php echo $LandLink;?>"
                                                                                    data-hash="n35HD1JlSU44B_zFSyFmFo0SecZAvZCK_KoQ_hfySfMRDYKjF1pUy7sL53Madkqh"
                                                                                    rel="nofollow">
                                                                                    <div class="image-container"><img
                                                                                            class="mcimg" width="328"
                                                                                            height="328"
                                                                                            data-i="6803179"
                                                                                            src="assets/aHR0cHM6Ly9pbWFnZXMtcnUtc291cmNlcy5zMy5ldS1jZW50cmFsLTEuYW1hem9uYXdzLmNvbS90ZW1wLzIwMTgtMTEtMDcvMzE0ODIxLzk5YTEwODk3ZWQy.jpg">
                                                                                        <!--intExchangeWagesImagePlace-->
                                                                                        <div class="mctitle"><span
                                                                                                target="_blank"
                                                                                                href="/site/telegram10/preview.php?a=11"
                                                                                                data-hash="n35HD1JlSU44B_zFSyFmFo0SecZAvZCK_KoQ_hfySfMRDYKjF1pUy7sL53Madkqh">Почему
                                                                                                часть Крыма
                                                                                                до&nbsp;сих&nbsp;пор&nbsp;принадлежит
                                                                                                Украине?</span></div>
                                                                                    </div>
                                                                                </a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide-lenta swiper-slide-next"
                                                                    style="margin-right: 16px;">
                                                                    <div class="mgline teaser-6770878 type-e">
                                                                        <div class="image-with-text">
                                                                            <div class="mcimg"><a target="_blank"
                                                                                    href="<?php echo $LandLink;?>"
                                                                                    data-hash="n35HD1JlSU44B_zFSyFmFp1Dito17iG2Ms6PtwpRIjqk7oLQDrM5HVQDjRQw0tI5"
                                                                                    rel="nofollow">
                                                                                    <div class="image-container"><img
                                                                                            class="mcimg" width="328"
                                                                                            height="328"
                                                                                            data-i="6770878"
                                                                                            src="assets/aHR0cHM6Ly9pbWFnZXMtcnUtc291cmNlcy5zMy5ldS1jZW50cmFsLTEuYW1hem9uYXdzLmNvbS90ZW1wLzIwMTgtMTAtMjQvMzE0ODIxLzM0NGZhMmJkYzY4.jpg">
                                                                                        <!--intExchangeWagesImagePlace-->
                                                                                        <div class="mctitle"><span
                                                                                                target="_blank"
                                                                                                href="/site/telegram10/preview.php?a=11"
                                                                                                data-hash="n35HD1JlSU44B_zFSyFmFp1Dito17iG2Ms6PtwpRIjqk7oLQDrM5HVQDjRQw0tI5">Что
                                                                                                на самом деле произошло
                                                                                                в студии «60
                                                                                                минут»</span></div>
                                                                                    </div>
                                                                                </a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide-lenta"
                                                                    style="margin-right: 16px;">
                                                                    <div class="mgline teaser-6768369 type-e">
                                                                        <div class="image-with-text">
                                                                            <div class="mcimg"><a target="_blank"
                                                                                    href="<?php echo $LandLink;?>"
                                                                                    data-hash="n35HD1JlSU44B_zFSyFmFpbNyWRAz9Yv9rfC2nCk8n5gImCahV3DDtJir7rPzlnM"
                                                                                    rel="nofollow">
                                                                                    <div class="image-container"><img
                                                                                            class="mcimg" width="328"
                                                                                            height="328"
                                                                                            data-i="6768369"
                                                                                            src="assets/aHR0cHM6Ly9pbWFnZXMtcnUtc291cmNlcy5zMy5ldS1jZW50cmFsLTEuYW1hem9uYXdzLmNvbS90ZW1wLzIwMTgtMTAtMjMvMjk4NDM4LzE3MzI0MDQxODRl.jpg">
                                                                                        <!--intExchangeWagesImagePlace-->
                                                                                        <div class="mctitle"><span
                                                                                                target="_blank"
                                                                                                href="/site/telegram10/preview.php?a=11"
                                                                                                data-hash="n35HD1JlSU44B_zFSyFmFpbNyWRAz9Yv9rfC2nCk8n5gImCahV3DDtJir7rPzlnM">«Уральские
                                                                                                пельмени» показали
                                                                                                пустой зал в
                                                                                                Перьми</span></div>
                                                                                    </div>
                                                                                </a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide-lenta"
                                                                    style="margin-right: 16px;">
                                                                    <div class="mgline teaser-6899354 type-e">
                                                                        <div class="image-with-text">
                                                                            <div class="mcimg"><a target="_blank"
                                                                                    href="<?php echo $LandLink;?>"
                                                                                    data-hash="n35HD1JlSU44B_zFSyFmFiVZbRE4f0ezPusv0CXUqfc9aD58g19z5OT3eWMuf4R3"
                                                                                    rel="nofollow">
                                                                                    <div class="image-container"><img
                                                                                            class="mcimg" width="328"
                                                                                            height="328"
                                                                                            data-i="6899354"
                                                                                            src="assets/aHR0cHM6Ly9pbWFnZXMtcnUtc291cmNlcy5zMy5ldS1jZW50cmFsLTEuYW1hem9uYXdzLmNvbS90ZW1wLzIwMTgtMTItMTMvMzE0ODIxLzEzOWU1OGE3YzNh.jpg">
                                                                                        <!--intExchangeWagesImagePlace-->
                                                                                        <div class="mctitle"><span
                                                                                                target="_blank"
                                                                                                href="/site/telegram10/preview.php?a=11"
                                                                                                data-hash="n35HD1JlSU44B_zFSyFmFiVZbRE4f0ezPusv0CXUqfc9aD58g19z5OT3eWMuf4R3">Савченко
                                                                                                частично ослепла
                                                                                                и&nbsp;оглохла</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide-lenta"
                                                                    style="margin-right: 16px;">
                                                                    <div class="mgline teaser-6922262 type-e">
                                                                        <div class="image-with-text">
                                                                            <div class="mcimg"><a target="_blank"
                                                                                    href="<?php echo $LandLink;?>"
                                                                                    data-hash="n35HD1JlSU44B_zFSyFmFvXEtplQJCj7AVs0gNsJ-VCZzEnkVtYhoCfT-wDz-Oq6"
                                                                                    rel="nofollow">
                                                                                    <div class="image-container"><img
                                                                                            class="mcimg" width="328"
                                                                                            height="328"
                                                                                            data-i="6922262"
                                                                                            src="assets/aHR0cHM6Ly9pbWFnZXMtcnUtc291cmNlcy5zMy5ldS1jZW50cmFsLTEuYW1hem9uYXdzLmNvbS90ZW1wLzIwMTgtMTItMjIvMzE0ODIxL2Q3YTUzOThiM2M1.jpg">
                                                                                        <!--intExchangeWagesImagePlace-->
                                                                                        <div class="mctitle"><span
                                                                                                target="_blank"
                                                                                                href="/site/telegram10/preview.php?a=11"
                                                                                                data-hash="n35HD1JlSU44B_zFSyFmFvXEtplQJCj7AVs0gNsJ-VCZzEnkVtYhoCfT-wDz-Oq6">Решена
                                                                                                судьба арестованных в
                                                                                                России украинских
                                                                                                моряков</span></div>
                                                                                    </div>
                                                                                </a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide-lenta"
                                                                    style="margin-right: 16px;">
                                                                    <div class="mgline teaser-6860795 type-e">
                                                                        <div class="image-with-text">
                                                                            <div class="mcimg"><a target="_blank"
                                                                                    href="<?php echo $LandLink;?>"
                                                                                    data-hash="n35HD1JlSU44B_zFSyFmFvVBAZswiCx69txgF0GHmscgAbPn51RUPu_DoiwAcGgv"
                                                                                    rel="nofollow">
                                                                                    <div class="image-container"><img
                                                                                            class="mcimg" width="328"
                                                                                            height="328"
                                                                                            data-i="6860795"
                                                                                            src="assets/aHR0cHM6Ly9pbWFnZXMtcnUtc291cmNlcy5zMy5ldS1jZW50cmFsLTEuYW1hem9uYXdzLmNvbS90ZW1wLzIwMTgtMTEtMjkvMzE0ODIxL2E4YmFkYzU3MzBh.jpg">
                                                                                        <!--intExchangeWagesImagePlace-->
                                                                                        <div class="mctitle"><span
                                                                                                target="_blank"
                                                                                                href="/site/telegram10/preview.php?a=11"
                                                                                                data-hash="n35HD1JlSU44B_zFSyFmFvVBAZswiCx69txgF0GHmscgAbPn51RUPu_DoiwAcGgv">Шутки
                                                                                                кончились: Путин
                                                                                                предупредил
                                                                                                зарвавшегося
                                                                                                Порошенко</span></div>
                                                                                    </div>
                                                                                </a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide-lenta"
                                                                    style="margin-right: 16px;">
                                                                    <div class="mgline teaser-6915118 type-e">
                                                                        <div class="image-with-text">
                                                                            <div class="mcimg"><a target="_blank"
                                                                                    href="<?php echo $LandLink;?>"
                                                                                    data-hash="n35HD1JlSU44B_zFSyFmFuBqrUWKV-AZWB5LfRiOhgXQbGJgfKc6_unbgEBkn9OE"
                                                                                    rel="nofollow">
                                                                                    <div class="image-container"><img
                                                                                            class="mcimg" width="328"
                                                                                            height="328"
                                                                                            data-i="6915118"
                                                                                            src="assets/aHR0cHM6Ly9pbWFnZXMtcnUtc291cmNlcy5zMy5ldS1jZW50cmFsLTEuYW1hem9uYXdzLmNvbS90ZW1wLzIwMTgtMTItMjAvMzE0ODIxLzY3NjhmZGE0ZWRh.jpg">
                                                                                        <!--intExchangeWagesImagePlace-->
                                                                                        <div class="mctitle"><span
                                                                                                target="_blank"
                                                                                                href="/site/telegram10/preview.php?a=11"
                                                                                                data-hash="n35HD1JlSU44B_zFSyFmFuBqrUWKV-AZWB5LfRiOhgXQbGJgfKc6_unbgEBkn9OE">У
                                                                                                Высоцкого нашли
                                                                                                пророчество об
                                                                                                Украине</span></div>
                                                                                    </div>
                                                                                </a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide-lenta"
                                                                    style="margin-right: 16px;">
                                                                    <div class="mgline teaser-6949492 type-e">
                                                                        <div class="image-with-text">
                                                                            <div class="mcimg"><a target="_blank"
                                                                                    href="<?php echo $LandLink;?>"
                                                                                    data-hash="n35HD1JlSU44B_zFSyFmFjeMN7uG1YmTVBBWZ9xhPLOxfZlyBRMReIqBhhc39eek"
                                                                                    rel="nofollow">
                                                                                    <div class="image-container"><img
                                                                                            class="mcimg" width="328"
                                                                                            height="328"
                                                                                            data-i="6949492"
                                                                                            src="assets/aHR0cHM6Ly9pbWFnZXMtcnUtc291cmNlcy5zMy5ldS1jZW50cmFsLTEuYW1hem9uYXdzLmNvbS90ZW1wLzIwMTktMDEtMDQvMjY5Njc1LzFlMWJhNDBjYjE4.jpg">
                                                                                        <!--intExchangeWagesImagePlace-->
                                                                                        <div class="mctitle"><span
                                                                                                target="_blank"
                                                                                                href="/site/telegram10/preview.php?a=11"
                                                                                                data-hash="n35HD1JlSU44B_zFSyFmFjeMN7uG1YmTVBBWZ9xhPLOxfZlyBRMReIqBhhc39eek">Трамп:
                                                                                                Россия, Сирия и Иран
                                                                                                наши сюзники в борьбе с
                                                                                                терроризмом</span></div>
                                                                                    </div>
                                                                                </a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide-lenta"
                                                                    style="margin-right: 16px;">
                                                                    <div class="mgline teaser-6949306 type-e">
                                                                        <div class="image-with-text">
                                                                            <div class="mcimg"><a target="_blank"
                                                                                    href="<?php echo $LandLink;?>"
                                                                                    data-hash="n35HD1JlSU44B_zFSyFmFpdGvlW7jx0rMWPGi_yTU7EEB9mM4-PwnFuPWdYV9aEk"
                                                                                    rel="nofollow">
                                                                                    <div class="image-container"><img
                                                                                            class="mcimg" width="328"
                                                                                            height="328"
                                                                                            data-i="6949306"
                                                                                            src="assets/aHR0cHM6Ly9pbWFnZXMtcnUtc291cmNlcy5zMy5ldS1jZW50cmFsLTEuYW1hem9uYXdzLmNvbS90ZW1wLzIyMzEwMC8yMDE5LTAxLTA0LzhkZGE0MzIzYzIy.jpg">
                                                                                        <!--intExchangeWagesImagePlace-->
                                                                                        <div class="mctitle"><span
                                                                                                target="_blank"
                                                                                                href="/site/telegram10/preview.php?a=11"
                                                                                                data-hash="n35HD1JlSU44B_zFSyFmFpdGvlW7jx0rMWPGi_yTU7EEB9mM4-PwnFuPWdYV9aEk">СК
                                                                                                прокомментировал слухи
                                                                                                о взрывчатке в доме
                                                                                                Магнитогорска</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide-lenta"
                                                                    style="margin-right: 16px;">
                                                                    <div class="mgline teaser-6949182 type-e">
                                                                        <div class="image-with-text">
                                                                            <div class="mcimg"><a target="_blank"
                                                                                    href="<?php echo $LandLink;?>"
                                                                                    data-hash="n35HD1JlSU44B_zFSyFmFt0DuZdFPwN6zCarPhYhQzr-6Rpd-I03E78j4zvlTiIg"
                                                                                    rel="nofollow">
                                                                                    <div class="image-container"><img
                                                                                            class="mcimg" width="328"
                                                                                            height="328"
                                                                                            data-i="6949182"
                                                                                            src="assets/aHR0cHM6Ly9pbWFnZXMtcnUtc291cmNlcy5zMy5ldS1jZW50cmFsLTEuYW1hem9uYXdzLmNvbS90ZW1wLzIwMTktMDEtMDQvMjQ4NjMwL2NlMjFkOGVkNjYw.jpg">
                                                                                        <!--intExchangeWagesImagePlace-->
                                                                                        <div class="mctitle"><span
                                                                                                target="_blank"
                                                                                                href="/site/telegram10/preview.php?a=11"
                                                                                                data-hash="n35HD1JlSU44B_zFSyFmFt0DuZdFPwN6zCarPhYhQzr-6Rpd-I03E78j4zvlTiIg">ГД
                                                                                                пообещала помочь семьям
                                                                                                жертв трагедии в
                                                                                                Магнитогорске</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide-lenta"
                                                                    style="margin-right: 16px;">
                                                                    <div class="mgline teaser-6949207 type-e">
                                                                        <div class="image-with-text">
                                                                            <div class="mcimg"><a target="_blank"
                                                                                    href="<?php echo $LandLink;?>"
                                                                                    data-hash="n35HD1JlSU44B_zFSyFmFmyI-d8lwnGEsCa1Lk3orOYV4fr_gNgkF5f0tB-wlUzt"
                                                                                    rel="nofollow">
                                                                                    <div class="image-container"><img
                                                                                            class="mcimg" width="328"
                                                                                            height="328"
                                                                                            data-i="6949207"
                                                                                            src="assets/aHR0cHM6Ly9pbWFnZXMtcnUtc291cmNlcy5zMy5ldS1jZW50cmFsLTEuYW1hem9uYXdzLmNvbS90ZW1wLzIwMTktMDEtMDQvMjQ4NjMwLzQzNTYzNDQ0YTJk.jpg">
                                                                                        <!--intExchangeWagesImagePlace-->
                                                                                        <div class="mctitle"><span
                                                                                                target="_blank"
                                                                                                href="/site/telegram10/preview.php?a=11"
                                                                                                data-hash="n35HD1JlSU44B_zFSyFmFmyI-d8lwnGEsCa1Lk3orOYV4fr_gNgkF5f0tB-wlUzt">Власти
                                                                                                утвердило правила
                                                                                                проведения конкурса на
                                                                                                премии учителям</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide-lenta"
                                                                    style="margin-right: 16px;">
                                                                    <div class="mgline teaser-6949386 type-e">
                                                                        <div class="image-with-text">
                                                                            <div class="mcimg"><a target="_blank"
                                                                                    href="<?php echo $LandLink;?>"
                                                                                    data-hash="n35HD1JlSU44B_zFSyFmFkyJH5sQ6qORw0Wb4vc-mzkOykf87FoBi9RCevhZM1HW"
                                                                                    rel="nofollow">
                                                                                    <div class="image-container"><img
                                                                                            class="mcimg" width="328"
                                                                                            height="328"
                                                                                            data-i="6949386"
                                                                                            src="assets/aHR0cHM6Ly9pbWFnZXMtcnUtc291cmNlcy5zMy5ldS1jZW50cmFsLTEuYW1hem9uYXdzLmNvbS90ZW1wLzIyMzEwMC8yMDE5LTAxLTA0L2QzZmUwZTNjYWI5.jpg">
                                                                                        <!--intExchangeWagesImagePlace-->
                                                                                        <div class="mctitle"><span
                                                                                                target="_blank"
                                                                                                href="/site/telegram10/preview.php?a=11"
                                                                                                data-hash="n35HD1JlSU44B_zFSyFmFkyJH5sQ6qORw0Wb4vc-mzkOykf87FoBi9RCevhZM1HW">При
                                                                                                авиаударе коалиции в
                                                                                                Сирии погибли
                                                                                                россияне</span></div>
                                                                                    </div>
                                                                                </a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide-lenta"
                                                                    style="margin-right: 16px;">
                                                                    <div class="mgline teaser-6949181 type-e">
                                                                        <div class="image-with-text">
                                                                            <div class="mcimg"><a target="_blank"
                                                                                    href="<?php echo $LandLink;?>"
                                                                                    data-hash="n35HD1JlSU44B_zFSyFmFtvGmjqcWSBp-VXmpRMYBKA1zuzAZj3EIlNFrnZFhQpX"
                                                                                    rel="nofollow">
                                                                                    <div class="image-container"><img
                                                                                            class="mcimg" width="328"
                                                                                            height="328"
                                                                                            data-i="6949181"
                                                                                            src="assets/aHR0cHM6Ly9pbWFnZXMtcnUtc291cmNlcy5zMy5ldS1jZW50cmFsLTEuYW1hem9uYXdzLmNvbS90ZW1wLzIwMTktMDEtMDQvMjQ4NjMwLzgwOTg0MTgyZmJk.jpg">
                                                                                        <!--intExchangeWagesImagePlace-->
                                                                                        <div class="mctitle"><span
                                                                                                target="_blank"
                                                                                                href="/site/telegram10/preview.php?a=11"
                                                                                                data-hash="n35HD1JlSU44B_zFSyFmFtvGmjqcWSBp-VXmpRMYBKA1zuzAZj3EIlNFrnZFhQpX">Причиной
                                                                                                аварии в Вологодской
                                                                                                области стал выезд на
                                                                                                встречную</span></div>
                                                                                    </div>
                                                                                </a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide-lenta"
                                                                    style="margin-right: 16px;">
                                                                    <div class="mgline teaser-6949210 type-e">
                                                                        <div class="image-with-text">
                                                                            <div class="mcimg"><a target="_blank"
                                                                                    href="<?php echo $LandLink;?>"
                                                                                    data-hash="n35HD1JlSU44B_zFSyFmFmrCVRy4LNJRmaMwQ5fk92Snelx-fzUfH2mml6xqzd5C"
                                                                                    rel="nofollow">
                                                                                    <div class="image-container"><img
                                                                                            class="mcimg" width="328"
                                                                                            height="328"
                                                                                            data-i="6949210"
                                                                                            src="assets/aHR0cHM6Ly9pbWFnZXMtcnUtc291cmNlcy5zMy5ldS1jZW50cmFsLTEuYW1hem9uYXdzLmNvbS90ZW1wLzIwMTktMDEtMDQvMzI3NjI4L2Q0MWZkYmRhODkx.jpg">
                                                                                        <!--intExchangeWagesImagePlace-->
                                                                                        <div class="mctitle"><span
                                                                                                target="_blank"
                                                                                                href="/site/telegram10/preview.php?a=11"
                                                                                                data-hash="n35HD1JlSU44B_zFSyFmFmrCVRy4LNJRmaMwQ5fk92Snelx-fzUfH2mml6xqzd5C">У
                                                                                                Павла Карназыцкого своя
                                                                                                версия причин высылки
                                                                                                из Украины</span></div>
                                                                                    </div>
                                                                                </a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide-lenta"
                                                                    style="margin-right: 16px;">
                                                                    <div class="mgline teaser-6949211 type-e">
                                                                        <div class="image-with-text">
                                                                            <div class="mcimg"><a target="_blank"
                                                                                    href="<?php echo $LandLink;?>"
                                                                                    data-hash="n35HD1JlSU44B_zFSyFmFoJKXgGm4D-Y_4FHmG5shPedmx8AnXDfmwHkD_WM5cGF"
                                                                                    rel="nofollow">
                                                                                    <div class="image-container"><img
                                                                                            class="mcimg" width="328"
                                                                                            height="328"
                                                                                            data-i="6949211"
                                                                                            src="assets/aHR0cHM6Ly9pbWFnZXMtcnUtc291cmNlcy5zMy5ldS1jZW50cmFsLTEuYW1hem9uYXdzLmNvbS90ZW1wLzIwMTktMDEtMDQvMzI3NjI4Lzk4ODNlMDc4NzE5.jpg">
                                                                                        <!--intExchangeWagesImagePlace-->
                                                                                        <div class="mctitle"><span
                                                                                                target="_blank"
                                                                                                href="/site/telegram10/preview.php?a=11"
                                                                                                data-hash="n35HD1JlSU44B_zFSyFmFoJKXgGm4D-Y_4FHmG5shPedmx8AnXDfmwHkD_WM5cGF">"Евроопт"
                                                                                                провернул сделку с
                                                                                                офшорной компанией на
                                                                                                $7,5 млн</span></div>
                                                                                    </div>
                                                                                </a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide-lenta"
                                                                    style="margin-right: 16px;">
                                                                    <div class="mgline teaser-6949491 type-e">
                                                                        <div class="image-with-text">
                                                                            <div class="mcimg"><a target="_blank"
                                                                                    href="<?php echo $LandLink;?>"
                                                                                    data-hash="n35HD1JlSU44B_zFSyFmFmq_qDF7lGENqKQxkp2GOIARQZlG6rZxpcxys0gcg0NK"
                                                                                    rel="nofollow">
                                                                                    <div class="image-container"><img
                                                                                            class="mcimg" width="328"
                                                                                            height="328"
                                                                                            data-i="6949491"
                                                                                            src="assets/aHR0cHM6Ly9pbWFnZXMtcnUtc291cmNlcy5zMy5ldS1jZW50cmFsLTEuYW1hem9uYXdzLmNvbS90ZW1wLzIwMTktMDEtMDQvMjI0MTg4L2Q2M2M5MGMyYzE2.jpg">
                                                                                        <!--intExchangeWagesImagePlace-->
                                                                                        <div class="mctitle"><span
                                                                                                target="_blank"
                                                                                                href="/site/telegram10/preview.php?a=11"
                                                                                                data-hash="n35HD1JlSU44B_zFSyFmFmq_qDF7lGENqKQxkp2GOIARQZlG6rZxpcxys0gcg0NK">Автоэксперты:
                                                                                                как понять, что пора
                                                                                                покупать новый
                                                                                                стартер</span></div>
                                                                                    </div>
                                                                                </a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide-lenta"
                                                                    style="margin-right: 16px;">
                                                                    <div class="mgline teaser-6949208 type-e">
                                                                        <div class="image-with-text">
                                                                            <div class="mcimg"><a target="_blank"
                                                                                    href="<?php echo $LandLink;?>"
                                                                                    data-hash="n35HD1JlSU44B_zFSyFmFkA-y1hpU960AW2L5WzIy-laYHA5p_L1XttawOVwJq0V"
                                                                                    rel="nofollow">
                                                                                    <div class="image-container"><img
                                                                                            class="mcimg" width="328"
                                                                                            height="328"
                                                                                            data-i="6949208"
                                                                                            src="assets/aHR0cHM6Ly9pbWFnZXMtcnUtc291cmNlcy5zMy5ldS1jZW50cmFsLTEuYW1hem9uYXdzLmNvbS90ZW1wLzIwMTktMDEtMDQvMjQ4NjMwL2Y4NGJiYzBiNjc3.jpg">
                                                                                        <!--intExchangeWagesImagePlace-->
                                                                                        <div class="mctitle"><span
                                                                                                target="_blank"
                                                                                                href="/site/telegram10/preview.php?a=11"
                                                                                                data-hash="n35HD1JlSU44B_zFSyFmFkA-y1hpU960AW2L5WzIy-laYHA5p_L1XttawOVwJq0V">Путин
                                                                                                и Нетаньяху обсудили
                                                                                                обстановку в
                                                                                                Сирии</span></div>
                                                                                    </div>
                                                                                </a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide-lenta"
                                                                    style="margin-right: 16px;">
                                                                    <div class="mgline teaser-6949200 type-e">
                                                                        <div class="image-with-text">
                                                                            <div class="mcimg"><a target="_blank"
                                                                                    href="<?php echo $LandLink;?>"
                                                                                    data-hash="n35HD1JlSU44B_zFSyFmFgkCQdq-JDxH7_F6m2tmFjoagZhm_7uNgASM2bY_yy1v"
                                                                                    rel="nofollow">
                                                                                    <div class="image-container"><img
                                                                                            class="mcimg" width="328"
                                                                                            height="328"
                                                                                            data-i="6949200"
                                                                                            src="assets/aHR0cHM6Ly9pbWFnZXMtcnUtc291cmNlcy5zMy5ldS1jZW50cmFsLTEuYW1hem9uYXdzLmNvbS90ZW1wLzIwMTktMDEtMDQvMzM4NjAyL2RjMDIyYTcxNWFi.jpg">
                                                                                        <!--intExchangeWagesImagePlace-->
                                                                                        <div class="mctitle"><span
                                                                                                target="_blank"
                                                                                                href="/site/telegram10/preview.php?a=11"
                                                                                                data-hash="n35HD1JlSU44B_zFSyFmFgkCQdq-JDxH7_F6m2tmFjoagZhm_7uNgASM2bY_yy1v">Чемодан,
                                                                                                вокзал, Европа:
                                                                                                украинцы массово
                                                                                                уезжают в
                                                                                                Прибалтику</span></div>
                                                                                    </div>
                                                                                </a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide-lenta"
                                                                    style="margin-right: 16px;">
                                                                    <div class="mgline teaser-6947498 type-e">
                                                                        <div class="image-with-text">
                                                                            <div class="mcimg"><a target="_blank"
                                                                                    href="<?php echo $LandLink;?>"
                                                                                    data-hash="n35HD1JlSU44B_zFSyFmFtjEFMMdVeFf0o5KUQglEyIdPJ40Mnr5hhdoHnqC_8Cb"
                                                                                    rel="nofollow">
                                                                                    <div class="image-container"><img
                                                                                            class="mcimg" width="328"
                                                                                            height="328"
                                                                                            data-i="6947498"
                                                                                            src="assets/aHR0cHM6Ly9pbWFnZXMtcnUtc291cmNlcy5zMy5ldS1jZW50cmFsLTEuYW1hem9uYXdzLmNvbS90ZW1wLzIwMTktMDEtMDMvMjQxNzg3LzM0NWMyNTFiNDNk.jpg">
                                                                                        <!--intExchangeWagesImagePlace-->
                                                                                        <div class="mctitle"><span
                                                                                                target="_blank"
                                                                                                href="/site/telegram10/preview.php?a=11"
                                                                                                data-hash="n35HD1JlSU44B_zFSyFmFtjEFMMdVeFf0o5KUQglEyIdPJ40Mnr5hhdoHnqC_8Cb">Порошенко
                                                                                                возглавил президентский
                                                                                                антирейтинг на
                                                                                                Украине</span></div>
                                                                                    </div>
                                                                                </a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide-lenta"
                                                                    style="margin-right: 16px;">
                                                                    <div class="mgline teaser-6949179 type-e">
                                                                        <div class="image-with-text">
                                                                            <div class="mcimg"><a target="_blank"
                                                                                    href="<?php echo $LandLink;?>"
                                                                                    data-hash="n35HD1JlSU44B_zFSyFmFpyFKJTtA5Vw7KnmviP4wyOvBjmXocb9a4oLyHuTbrMk"
                                                                                    rel="nofollow">
                                                                                    <div class="image-container"><img
                                                                                            class="mcimg" width="328"
                                                                                            height="328"
                                                                                            data-i="6949179"
                                                                                            src="assets/aHR0cHM6Ly9pbWFnZXMtcnUtc291cmNlcy5zMy5ldS1jZW50cmFsLTEuYW1hem9uYXdzLmNvbS90ZW1wLzIwMTktMDEtMDQvMjQ4NjMwL2I2Y2M3ZTE5YzVk.jpg">
                                                                                        <!--intExchangeWagesImagePlace-->
                                                                                        <div class="mctitle"><span
                                                                                                target="_blank"
                                                                                                href="/site/telegram10/preview.php?a=11"
                                                                                                data-hash="n35HD1JlSU44B_zFSyFmFpyFKJTtA5Vw7KnmviP4wyOvBjmXocb9a4oLyHuTbrMk">Чабан:
                                                                                                скелетонистки Никитина
                                                                                                и Канакина в отличной
                                                                                                форме</span></div>
                                                                                    </div>
                                                                                </a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-button-next"></div>
                                                        <div class="swiper-button-prev swiper-button-disabled"></div>
                                                    </div>
                                                </div>
                                                <style class="LentaInformC675347" type="text/css">
                                                    @font-face {
                                                        font-family: 'Roboto';
                                                        font-style: normal;
                                                        font-weight: 400;
                                                        src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v15/mUdRVCMHGKUBOACHGTH1g-vvDin1pK8aKteLpeZ5c0A.woff) format('woff');
                                                    }

                                                    #LentaInformComposite675347 .mgbox {
                                                        height: auto;
                                                        line-height: 100%;
                                                        margin: 0 auto;
                                                        position: relative;
                                                        overflow: hidden;
                                                        vertical-align: top;
                                                        text-align: center;
                                                        padding: 0;
                                                        border-style: solid;
                                                        border-width: 0px;
                                                    }

                                                    #LentaInformComposite675347 .mgslider {
                                                        width: 10000px;
                                                        position: relative;
                                                        left: 0;
                                                        padding-left: 0;
                                                        -webkit-transition: top 1s ease-out 0.5s;
                                                        -moz-transition: all 0.5s ease-in-out;
                                                        -o-transition: all 0.5s ease-in-out;
                                                        transition: all 0.5s ease-in-out;
                                                    }

                                                    #LentaInformComposite675347 .mgline {
                                                        float: left;
                                                        display: block;
                                                        padding: 0;
                                                        opacity: 1;
                                                        background-color: #fff;
                                                        border: none;
                                                        border-radius: 4px;
                                                        overflow: hidden;
                                                        transition: box-shadow;
                                                        transition-duration: 0.8s;
                                                        transition-property: box-shadow;
                                                    }

                                                    #LentaInformComposite675347 .mgoc {
                                                        padding: 10px;
                                                        background: #fff;
                                                        margin-bottom: 20px;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-container-lenta {
                                                        margin: 0 auto;
                                                        position: relative;
                                                        overflow: hidden;
                                                        z-index: 1;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-container-vertical>.swiper-wrapper-lenta {
                                                        -webkit-box-orient: vertical;
                                                        -moz-box-orient: vertical;
                                                        -ms-flex-direction: column;
                                                        -webkit-flex-direction: column;
                                                        flex-direction: column;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-wrapper-lenta {
                                                        position: relative;
                                                        width: 100%;
                                                        height: 100%;
                                                        z-index: 1;
                                                        display: -webkit-box;
                                                        display: -moz-box;
                                                        display: -ms-flexbox;
                                                        display: -webkit-flex;
                                                        display: flex;
                                                        -webkit-transition-property: -webkit-transform;
                                                        -moz-transition-property: -moz-transform;
                                                        -o-transition-property: -o-transform;
                                                        -ms-transition-property: -ms-transform;
                                                        transition-property: transform;
                                                        -webkit-box-sizing: content-box;
                                                        -moz-box-sizing: content-box;
                                                        box-sizing: content-box;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-container-android .swiper-slide-lenta,
                                                    #LentaInformComposite675347 .mgoc .swiper-wrapper-lenta {
                                                        -webkit-transform: translate3d(0, 0, 0);
                                                        -moz-transform: translate3d(0, 0, 0);
                                                        -o-transform: translate(0, 0);
                                                        -ms-transform: translate3d(0, 0, 0);
                                                        transform: translate3d(0, 0, 0);
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-container-multirow>.swiper-wrapper-lenta {
                                                        -webkit-box-lines: multiple;
                                                        -moz-box-lines: multiple;
                                                        -ms-flex-wrap: wrap;
                                                        -webkit-flex-wrap: wrap;
                                                        flex-wrap: wrap;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-container-free-mode>.swiper-wrapper-lenta {
                                                        -webkit-transition-timing-function: ease-out;
                                                        -moz-transition-timing-function: ease-out;
                                                        -ms-transition-timing-function: ease-out;
                                                        -o-transition-timing-function: ease-out;
                                                        transition-timing-function: ease-out;
                                                        margin: 0 auto;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-container-autoheight,
                                                    #LentaInformComposite675347 .mgoc .swiper-container-autoheight .swiper-slide-lenta {
                                                        height: auto;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-container-autoheight .swiper-wrapper-lenta {
                                                        -webkit-box-align: start;
                                                        -ms-flex-align: start;
                                                        -webkit-align-items: flex-start;
                                                        align-items: flex-start;
                                                        -webkit-transition-property: -webkit-transform, height;
                                                        -moz-transition-property: -moz-transform;
                                                        -o-transition-property: -o-transform;
                                                        -ms-transition-property: -ms-transform;
                                                        transition-property: transform, height;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-container-lenta .swiper-notification {
                                                        position: absolute;
                                                        left: 0;
                                                        top: 0;
                                                        pointer-events: none;
                                                        opacity: 0;
                                                        z-index: -1000;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-wp8-horizontal {
                                                        -ms-touch-action: pan-y;
                                                        touch-action: pan-y;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-wp8-vertical {
                                                        -ms-touch-action: pan-x;
                                                        touch-action: pan-x;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-button-next,
                                                    #LentaInformComposite675347 .mgoc .swiper-button-prev {
                                                        position: absolute;
                                                        top: 50%;
                                                        width: 27px;
                                                        height: 44px;
                                                        margin-top: -22px;
                                                        z-index: 10;
                                                        cursor: pointer;
                                                        -moz-background-size: 27px 44px;
                                                        -webkit-background-size: 27px 44px;
                                                        background-size: 27px 44px;
                                                        background-position: center;
                                                        background-repeat: no-repeat;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-button-next.swiper-button-disabled,
                                                    #LentaInformComposite675347 .mgoc .swiper-button-prev.swiper-button-disabled {
                                                        opacity: .35;
                                                        cursor: auto;
                                                        pointer-events: none;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-button-prev,
                                                    #LentaInformComposite675347 .mgoc .swiper-container-rtl .swiper-button-next {
                                                        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23007aff'%2F%3E%3C%2Fsvg%3E");
                                                        left: 10px;
                                                        right: auto;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-button-prev.swiper-button-black,
                                                    #LentaInformComposite675347 .mgoc .swiper-container-rtl .swiper-button-next.swiper-button-black {
                                                        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23000000'%2F%3E%3C%2Fsvg%3E");
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-button-prev.swiper-button-white,
                                                    #LentaInformComposite675347 .mgoc .swiper-container-rtl .swiper-button-next.swiper-button-white {
                                                        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E");
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-button-next,
                                                    #LentaInformComposite675347 .mgoc .swiper-container-rtl .swiper-button-prev {
                                                        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23007aff'%2F%3E%3C%2Fsvg%3E");
                                                        right: 10px;
                                                        left: auto;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-button-next.swiper-button-black,
                                                    #LentaInformComposite675347 .mgoc .swiper-container-rtl .swiper-button-prev.swiper-button-black {
                                                        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23000000'%2F%3E%3C%2Fsvg%3E");
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-button-next.swiper-button-white,
                                                    #LentaInformComposite675347 .mgoc .swiper-container-rtl .swiper-button-prev.swiper-button-white {
                                                        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E");
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-pagination {
                                                        position: absolute;
                                                        text-align: center;
                                                        -webkit-transition: .3s;
                                                        -moz-transition: .3s;
                                                        -o-transition: .3s;
                                                        transition: .3s;
                                                        -webkit-transform: translate3d(0, 0, 0);
                                                        -ms-transform: translate3d(0, 0, 0);
                                                        -o-transform: translate3d(0, 0, 0);
                                                        transform: translate3d(0, 0, 0);
                                                        z-index: 10;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-pagination.swiper-pagination-hidden {
                                                        opacity: 0;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-container-horizontal>.swiper-pagination-bullets,
                                                    #LentaInformComposite675347 .mgoc .swiper-pagination-custom,
                                                    #LentaInformComposite675347 .mgoc .swiper-pagination-fraction {
                                                        bottom: 10px;
                                                        left: 0;
                                                        width: 100%;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-pagination-bullet {
                                                        width: 8px;
                                                        height: 8px;
                                                        display: inline-block;
                                                        border-radius: 100%;
                                                        background: #000;
                                                        opacity: .2;
                                                    }

                                                    #LentaInformComposite675347 .mgoc button.swiper-pagination-bullet {
                                                        border: none;
                                                        margin: 0;
                                                        padding: 0;
                                                        box-shadow: none;
                                                        -moz-appearance: none;
                                                        -ms-appearance: none;
                                                        -webkit-appearance: none;
                                                        appearance: none;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-pagination-clickable .swiper-pagination-bullet {
                                                        cursor: pointer;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-pagination-white .swiper-pagination-bullet {
                                                        background: #fff;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-pagination-bullet-active {
                                                        opacity: 1;
                                                        background: #007aff;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-pagination-white .swiper-pagination-bullet-active {
                                                        background: #fff;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-pagination-black .swiper-pagination-bullet-active {
                                                        background: #000;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-container-vertical>.swiper-pagination-bullets {
                                                        right: 10px;
                                                        top: 50%;
                                                        -webkit-transform: translate3d(0, -50%, 0);
                                                        -moz-transform: translate3d(0, -50%, 0);
                                                        -o-transform: translate(0, -50%);
                                                        -ms-transform: translate3d(0, -50%, 0);
                                                        transform: translate3d(0, -50%, 0);
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-container-vertical>.swiper-pagination-bullets .swiper-pagination-bullet {
                                                        margin: 5px 0;
                                                        display: block;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-container-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet {
                                                        margin: 0 5px;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-pagination-progress {
                                                        background: rgba(0, 0, 0, 0.25);
                                                        position: absolute;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-pagination-progress .swiper-pagination-progressbar {
                                                        background: #007aff;
                                                        position: absolute;
                                                        left: 0;
                                                        top: 0;
                                                        width: 100%;
                                                        height: 100%;
                                                        -webkit-transform: scale(0);
                                                        -ms-transform: scale(0);
                                                        -o-transform: scale(0);
                                                        transform: scale(0);
                                                        -webkit-transform-origin: left top;
                                                        -moz-transform-origin: left top;
                                                        -ms-transform-origin: left top;
                                                        -o-transform-origin: left top;
                                                        transform-origin: left top;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-container-rtl .swiper-pagination-progress .swiper-pagination-progressbar {
                                                        -webkit-transform-origin: right top;
                                                        -moz-transform-origin: right top;
                                                        -ms-transform-origin: right top;
                                                        -o-transform-origin: right top;
                                                        transform-origin: right top;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-container-horizontal>.swiper-pagination-progress {
                                                        width: 100%;
                                                        height: 4px;
                                                        left: 0;
                                                        top: 0;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-container-vertical>.swiper-pagination-progress {
                                                        width: 4px;
                                                        height: 100%;
                                                        left: 0;
                                                        top: 0;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-pagination-progress.swiper-pagination-white {
                                                        background: rgba(255, 255, 255, 0.5);
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-pagination-progress.swiper-pagination-white .swiper-pagination-progressbar {
                                                        background: #fff;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-pagination-progress.swiper-pagination-black .swiper-pagination-progressbar {
                                                        background: #000;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-scrollbar {
                                                        border-radius: 10px;
                                                        position: relative;
                                                        -ms-touch-action: none;
                                                        background: rgba(0, 0, 0, 0.1);
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-container-horizontal>.swiper-scrollbar {
                                                        position: absolute;
                                                        left: 1%;
                                                        bottom: 3px;
                                                        z-index: 50;
                                                        height: 5px;
                                                        width: 98%;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-container-vertical>.swiper-scrollbar {
                                                        position: absolute;
                                                        right: 3px;
                                                        top: 1%;
                                                        z-index: 50;
                                                        width: 5px;
                                                        height: 98%;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-scrollbar-drag {
                                                        height: 100%;
                                                        width: 100%;
                                                        position: relative;
                                                        background: rgba(0, 0, 0, 0.5);
                                                        border-radius: 10px;
                                                        left: 0;
                                                        top: 0;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-scrollbar-cursor-drag {
                                                        cursor: move;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-lazy-preloader {
                                                        width: 42px;
                                                        height: 42px;
                                                        position: absolute;
                                                        left: 50%;
                                                        top: 50%;
                                                        margin-left: -21px;
                                                        margin-top: -21px;
                                                        z-index: 10;
                                                        -webkit-transform-origin: 50%;
                                                        -moz-transform-origin: 50%;
                                                        transform-origin: 50%;
                                                        -webkit-animation: swiper-preloader-spin 1s steps(12, end) infinite;
                                                        -moz-animation: swiper-preloader-spin 1s steps(12, end) infinite;
                                                        animation: swiper-preloader-spin 1s steps(12, end) infinite;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-lazy-preloader:after {
                                                        display: block;
                                                        content: "";
                                                        width: 100%;
                                                        height: 100%;
                                                        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20viewBox%3D'0%200%20120%20120'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20xmlns%3Axlink%3D'http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink'%3E%3Cdefs%3E%3Cline%20id%3D'l'%20x1%3D'60'%20x2%3D'60'%20y1%3D'7'%20y2%3D'27'%20stroke%3D'%236c6c6c'%20stroke-width%3D'11'%20stroke-linecap%3D'round'%2F%3E%3C%2Fdefs%3E%3Cg%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(30%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(60%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(90%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(120%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(150%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.37'%20transform%3D'rotate(180%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.46'%20transform%3D'rotate(210%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.56'%20transform%3D'rotate(240%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.66'%20transform%3D'rotate(270%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.75'%20transform%3D'rotate(300%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.85'%20transform%3D'rotate(330%2060%2C60)'%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E");
                                                        background-position: 50%;
                                                        -webkit-background-size: 100%;
                                                        background-size: 100%;
                                                        background-repeat: no-repeat;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-lazy-preloader-white:after {
                                                        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20viewBox%3D'0%200%20120%20120'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20xmlns%3Axlink%3D'http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink'%3E%3Cdefs%3E%3Cline%20id%3D'l'%20x1%3D'60'%20x2%3D'60'%20y1%3D'7'%20y2%3D'27'%20stroke%3D'%23fff'%20stroke-width%3D'11'%20stroke-linecap%3D'round'%2F%3E%3C%2Fdefs%3E%3Cg%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(30%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(60%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(90%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(120%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(150%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.37'%20transform%3D'rotate(180%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.46'%20transform%3D'rotate(210%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.56'%20transform%3D'rotate(240%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.66'%20transform%3D'rotate(270%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.75'%20transform%3D'rotate(300%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.85'%20transform%3D'rotate(330%2060%2C60)'%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E");
                                                    }

                                                    @-webkit-keyframes swiper-preloader-spin {
                                                        100% {
                                                            -webkit-transform: rotate(360deg);
                                                        }
                                                    }

                                                    @keyframes swiper-preloader-spin {
                                                        100% {
                                                            transform: rotate(360deg);
                                                        }
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-slide-lenta {
                                                        margin-top: 10px;
                                                        float: left;
                                                        -webkit-flex-shrink: 0;
                                                        -ms-flex-AH: 0;
                                                        flex-shrink: 0;
                                                        width: 192px;
                                                        height: 100%;
                                                        position: relative;
                                                        -webkit-transition-property: -webkit-transform;
                                                        transition-property: -webkit-transform;
                                                        -o-transition-property: transform;
                                                        transition-property: transform, -webkit-transform;
                                                        display: -webkit-box;
                                                        display: -ms-flexbox;
                                                        display: -webkit-flex;
                                                        display: flex;
                                                        -webkit-box-pack: center;
                                                        -ms-flex-pack: center;
                                                        -webkit-justify-content: center;
                                                        justify-content: center;
                                                        -webkit-box-align: center;
                                                        -ms-flex-align: center;
                                                        -webkit-align-items: center;
                                                        align-items: center;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-button-next,
                                                    #LentaInformComposite675347 .mgoc .swiper-button-prev {
                                                        position: absolute;
                                                        top: 45%;
                                                        width: 42px;
                                                        height: 68px;
                                                        -webkit-border-radius: 3px;
                                                        -moz-border-radius: 3px;
                                                        border-radius: 3px;
                                                        margin-top: -27px;
                                                        z-index: 10;
                                                        text-indent: -9999px;
                                                        overflow: hidden;
                                                        cursor: pointer;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-button-next {
                                                        background: url("data:image/svg+xml,%3Csvg width='12' height='18' xmlns='https://www.w3.org/2000/svg'%3E%3Cpath d='M12 9L0 18V0z' fill='%23000' fill-rule='evenodd'/%3E%3C/svg%3E") 45% 50% no-repeat #ffffff;
                                                        transition: right 0.5s ease;
                                                        right: -50px;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-button-prev {
                                                        background: url("data:image/svg+xml,%3Csvg width='12' height='18' xmlns='https://www.w3.org/2000/svg'%3E%3Cpath d='M12 9L0 18V0z' fill='%23000' fill-rule='evenodd'/%3E%3C/svg%3E") 45% 50% no-repeat #ffffff;
                                                        transition: left 0.5s ease;
                                                        left: -50px;
                                                        -webkit-transform: translateX(-50%) translateY(-50%) scaleX(-1);
                                                        transform: translateX(-50%) translateY(0%) scaleX(-1);
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-button-next.swiper-button-disabled,
                                                    #LentaInformComposite675347 .mgoc .swiper-button-prev.swiper-button-disabled {
                                                        opacity: 0;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .MG_Gallery_left-btn .swiper-button-prev {
                                                        left: 35px;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .MG_Gallery_right-btn .swiper-button-next {
                                                        right: 15px;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .mcimg a:before {
                                                        content: '';
                                                        position: absolute;
                                                        left: 0;
                                                        right: 0;
                                                        bottom: 0;
                                                        top: 0;
                                                        background: transparent linear-gradient(to bottom, transparent 0px, rgba(0, 0, 0, 0.1) 50%, rgba(0, 0, 0, 0.7) 100%) repeat scroll 0 0;
                                                        z-index: 1;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-container-horizontal>.swiper-pagination-bullets,
                                                    #LentaInformComposite675347 .mgoc .swiper-pagination-custom,
                                                    #LentaInformComposite675347 .mgoc .swiper-pagination-fraction {
                                                        bottom: 10px;
                                                        left: 0;
                                                        width: 100%;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-container-horizontal>.swiper-scrollbar {
                                                        position: absolute;
                                                        left: 1%;
                                                        bottom: 3px;
                                                        z-index: 50;
                                                        height: 5px;
                                                        width: 98%;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-container-horizontal>.swiper-pagination-progress {
                                                        width: 100%;
                                                        height: 4px;
                                                        left: 0;
                                                        top: 0;
                                                    }

                                                    #LentaInformComposite675347 .mgoc .swiper-container-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet {
                                                        margin: 0 5px;
                                                    }

                                                    #LentaInformComposite675347 .mglogo {
                                                        width: 100%;
                                                        text-align: left;
                                                        margin-bottom: 10px;
                                                    }

                                                    #LentaInformComposite675347 .mglogo img {
                                                        width: 115px;
                                                        height: auto;
                                                        border: 0;
                                                    }

                                                    #LentaInformComposite675347 .mgline .image-with-text {
                                                        display: block;
                                                        width: 100%;
                                                        min-height: 1px;
                                                        margin: 0 auto;
                                                        position: relative;
                                                    }

                                                    #LentaInformComposite675347 div.mcimg {
                                                        display: block !important;
                                                    }

                                                    #LentaInformComposite675347 img.mcimg {
                                                        display: block;
                                                        width: auto;
                                                        height: 250px;
                                                        max-width: none !important;
                                                    }

                                                    #LentaInformComposite675347 .mcimg-link {
                                                        display: block;
                                                        overflow: hidden;
                                                        position: relative;
                                                    }

                                                    #LentaInformComposite675347 .mgline .text-elements {
                                                        display: block;
                                                        position: absolute;
                                                        left: 0;
                                                        right: 0;
                                                        bottom: 0;
                                                        background: linear-gradient(0deg, #000000, rgba(0, 0, 0, 0));
                                                    }

                                                    #LentaInformComposite675347 .mctitle {
                                                        margin: 0;
                                                        text-align: left;
                                                        line-height: 101px;
                                                        display: block;
                                                        position: absolute;
                                                        left: 0;
                                                        right: 0;
                                                        bottom: 0;
                                                        z-index: 2;
                                                    }

                                                    #LentaInformComposite675347 .mctitle span {
                                                        color: #ffffff;
                                                        font-family: Arial, Helvetica, sans-serif !important;
                                                        text-decoration: none;
                                                        font-style: normal !important;
                                                        font-weight: bold !important;
                                                        font-size: 17px;
                                                        text-align: left;
                                                        line-height: 19px;
                                                        padding: 0 12px 25px 12px;
                                                        display: table-cell;
                                                        vertical-align: bottom;
                                                        width: 170px;
                                                    }

                                                    #LentaInformComposite675347 .mgline .text-elements .fake {
                                                        display: block;
                                                        visibility: hidden;
                                                        height: 2px;
                                                    }

                                                    #LentaInformComposite675347 .mcdesc {
                                                        display: none;
                                                    }

                                                    #LentaInformComposite675347 .mgslider-box {
                                                        float: left;
                                                    }

                                                    #LentaInformComposite675347 .mgline:hover {
                                                        box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.2), 0 4px 22px 0 #000000;
                                                    }

                                                    #LentaInformComposite675347 .mglogo {
                                                        width: 100%;
                                                        text-align: left;
                                                        margin-bottom: 10px;
                                                    }

                                                    #LentaInformComposite675347 .mglogo img {
                                                        width: 115px;
                                                        height: auto;
                                                        border: 0;
                                                    }

                                                    @media (max-width: 480px) {
                                                        .MG_Gallery_left-btn .swiper-button-prev {
                                                            left: -50px;
                                                        }

                                                        .MG_Gallery_right-btn .swiper-button-next {
                                                            right: -50px;
                                                        }
                                                    }

                                                    #LentaInformComposite675347 div.mcimg a.close-informer {
                                                        width: 14px;
                                                        height: 14px;
                                                        background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAAOCAYAAAAfSC3RAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyFpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDIxIDc5LjE1NDkxMSwgMjAxMy8xMC8yOS0xMTo0NzoxNiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo5NzI0ODBDMzY3ODcxMUU1OEM4RUU2RUJCOUREODIyQiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo5NzI0ODBDNDY3ODcxMUU1OEM4RUU2RUJCOUREODIyQiI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjk3MjQ4MEMxNjc4NzExRTU4QzhFRTZFQkI5REQ4MjJCIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjk3MjQ4MEMyNjc4NzExRTU4QzhFRTZFQkI5REQ4MjJCIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+uNcpEQAAAHxJREFUeNqckgEKwCAIRe3fYjfKc2zX6hydaLRbbDnGkLDIPggl/5lKIcbIRJRqbDSnUmOHE6LPm+CEfhj6lnN+o5WVh1VOm6xColCXc/cgLWYev9gaejnQojCab5RDzyDt6RantqoBaz5zq54ZywJ3CXjIwQGd8skfAQYALdQqftYulocAAAAASUVORK5CYIJ0ZW50Ij4NCiA8ZGl2IGNsYXNzPSJjb250ZW50LWNvbnRhaW5lciI+PGZpZWxkc2V0Pg0KICA8aDI+NTAyIC0gV2ViIHNlcnZlciByZWNlaXZlZCBhbiBpbnZhbGlkIHJlc3BvbnNlIHdoaWxlIGFjdGluZyBhcyBhIGdhdGV3YXkgb3IgcHJveHkgc2VydmVyLjwvaDI+DQogIDxoMz5UaGVyZSBpcyBhIHByb2JsZW0gd2l0aCB0aGUgcGFnZSB5b3UgYXJlIGxvb2tpbmcgZm9yLCBhbmQgaXQgY2Fubm90IGJlIGRpc3BsYXllZC4gV2hlbiB0aGUgV2ViIHNlcnZlciAod2hpbGUgYWN0aW5nIGFzIGEgZ2F0ZXdheSBvciBwcm94eSkgY29udGFjdGVkIHRoZSB1cHN0cmVhbSBjb250ZW50IHNlcnZlciwgaXQgcmVjZWl2ZWQgYW4gaW52YWxpZCByZXNwb25zZSBmcm9tIHRoZSBjb250ZW50IHNlcnZlci48L2gzPg0KIDwvZmllbGRzZXQ+PC9kaXY+DQo8L2Rpdj4NCjwvYm9keT4NCjwvaHRtbD4NCg==");
                                                        display: block;
                                                        opacity: 0;
                                                        position: absolute;
                                                        right: 3px;
                                                        top: 3px;
                                                        z-index: 1;
                                                        cursor: pointer;
                                                    }

                                                    #LentaInformComposite675347 div.mgline:hover a.close-informer {
                                                        opacity: 0.7;
                                                        -moz-transition: all 0.3s ease-out;
                                                        -o-transition: all 0.3s ease-out;
                                                        -webkit-transition: all 0.3s ease-out;
                                                        -ms-transition: all 0.3s ease-out;
                                                        transition: all 0.3s ease-out;
                                                    }

                                                    #LentaInformComposite675347 div.mgline a.close-informer:hover {
                                                        opacity: 1;
                                                        -moz-transition: all 0.3s ease-out;
                                                        -o-transition: all 0.3s ease-out;
                                                        -webkit-transition: all 0.3s ease-out;
                                                        -ms-transition: all 0.3s ease-out;
                                                        transition: all 0.3s ease-out;
                                                    }

                                                    #LentaInformComposite675347 div.mcimg {
                                                        position: relative;
                                                        display: inline-block
                                                    }

                                                    div.image-with-price {
                                                        position: relative;
                                                    }

                                                    #LentaInformComposite675347 .mgline .image-container {
                                                        width: auto;
                                                        margin: 0 auto;
                                                        position: relative;
                                                    }
                                                </style>
                                            </div>

                                        </div><!-- Composite End -->
                                    </div>
                                    <div class="column__row">
                                        <div id="smi_teaser_11671" data-smi-status="done">
                                            <link href="<?php echo $LandLink;?>" rel="stylesheet">
                                            <div class="slider24smi_wrapper11671">
                                                <div class="smiheader11671"><img src="assets/logo.svg"></div>
                                                <div class="slider24smi_edge_right11671 slider24smi11671">
                                                    <div class="slider24smi__inner11671">
                                                        <div class="slider24smi__edge-left11671">
                                                            <div class="slider24smi__edge-shadow11671"></div>
                                                            <div class="slider24smi__edge-button11671"></div>
                                                        </div>
                                                        <div class="slider24smi__edge-right11671">
                                                            <div class="slider24smi__edge-shadow11671"></div>
                                                            <div class="slider24smi__edge-button11671"></div>
                                                        </div>
                                                        <div class="slider24smi__cards11671">
                                                            <div class="slider24smi__scroller11671"
                                                                style="margin-bottom: -17px;">
                                                                <div class="slider24smi__slide11671"
                                                                    style="background: rgba(225, 226, 220, 1)"><a
                                                                        target="_blank" href="<?php echo $LandLink;?>">
                                                                        <div><img
                                                                                src="assets/e7ef6bdb0bfc1e510d2ec4d9ff819420.jpg">
                                                                            <div class="slider24smi__img-wrapper11671"
                                                                                style="background-image: linear-gradient(to bottom, rgba(225, 226, 220, 0.07), rgba(225, 226, 220, 0.02) 43%, rgba(225, 226, 220, 0.62) 79%, rgba(225, 226, 220, 1));">
                                                                            </div>
                                                                            <div class="slider24smi__slide-text11671">
                                                                                <h3 style="color:#000">Макгрегор
                                                                                    признался, как
                                                                                    США «обхитрили» Россию в Сирии</h3>
                                                                            </div>
                                                                            <div class="slider_source11671">
                                                                                <div class="source-content11671"
                                                                                    style="color:#000">MK.ru
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a></div>
                                                                <div class="slider24smi__slide11671"
                                                                    style="background: rgba(174, 126, 110, 1)"><a
                                                                        target="_blank" href="<?php echo $LandLink;?>">
                                                                        <div><img
                                                                                src="assets/3cda4bfa26037ad63474dc29fc12447e.jpg">
                                                                            <div class="slider24smi__img-wrapper11671"
                                                                                style="background-image: linear-gradient(to bottom, rgba(174, 126, 110, 0.07), rgba(174, 126, 110, 0.02) 43%, rgba(174, 126, 110, 0.62) 79%, rgba(174, 126, 110, 1));">
                                                                            </div>
                                                                            <div class="slider24smi__slide-text11671">
                                                                                <h3 style="color:#fff">Ответ Пригожина
                                                                                    Ахеджаковой на «извиниться за то,
                                                                                    что
                                                                                    русские»</h3>
                                                                            </div>
                                                                            <div class="slider_source11671">
                                                                                <div class="source-content11671"
                                                                                    style="color:#fff">Народные
                                                                                    Новости
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a></div>
                                                                <div class="slider24smi__slide11671"
                                                                    style="background: rgba(32, 39, 33, 1)"><a
                                                                        target="_blank" href="<?php echo $LandLink;?>">
                                                                        <div><img
                                                                                src="assets/f454208b52635a10ad871facbbe74884.jpg">
                                                                            <div class="slider24smi__img-wrapper11671"
                                                                                style="background-image: linear-gradient(to bottom, rgba(32, 39, 33, 0.07), rgba(32, 39, 33, 0.02) 43%, rgba(32, 39, 33, 0.62) 79%, rgba(32, 39, 33, 1));">
                                                                            </div>
                                                                            <div class="slider24smi__slide-text11671">
                                                                                <h3 style="color:#fff">Турция
                                                                                    поплатилась за
                                                                                    желание отдать США российские
                                                                                    С-400</h3>
                                                                            </div>
                                                                            <div class="slider_source11671">
                                                                                <div class="source-content11671"
                                                                                    style="color:#fff">Народные
                                                                                    Новости
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a></div>
                                                                <div class="slider24smi__slide11671"
                                                                    style="background: rgba(39, 32, 24, 1)"><a
                                                                        target="_blank" href="<?php echo $LandLink;?>">
                                                                        <div><img
                                                                                src="assets/381a34eca07c188b536e7a503fac7080.jpg">
                                                                            <div class="slider24smi__img-wrapper11671"
                                                                                style="background-image: linear-gradient(to bottom, rgba(39, 32, 24, 0.07), rgba(39, 32, 24, 0.02) 43%, rgba(39, 32, 24, 0.62) 79%, rgba(39, 32, 24, 1));">
                                                                            </div>
                                                                            <div class="slider24smi__slide-text11671">
                                                                                <h3 style="color:#fff">На Камчатке
                                                                                    женщина-охотник застрелила самого
                                                                                    крупного
                                                                                    лося в мире</h3>
                                                                            </div>
                                                                            <div class="slider_source11671">
                                                                                <div class="source-content11671"
                                                                                    style="color:#fff">MK.ru
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a></div>
                                                                <div class="slider24smi__slide11671"
                                                                    style="background: rgba(24, 24, 23, 1)"><a
                                                                        target="_blank" href="<?php echo $LandLink;?>">
                                                                        <div><img
                                                                                src="assets/b033a7f45d68ace3b83576b97ba8c766.html">
                                                                            <div class="slider24smi__img-wrapper11671"
                                                                                style="background-image: linear-gradient(to bottom, rgba(24, 24, 23, 0.07), rgba(24, 24, 23, 0.02) 43%, rgba(24, 24, 23, 0.62) 79%, rgba(24, 24, 23, 1));">
                                                                            </div>
                                                                            <div class="slider24smi__slide-text11671">
                                                                                <h3 style="color:#fff">Россиянам не
                                                                                    понравилось
                                                                                    новогоднее обращение Путина</h3>
                                                                            </div>
                                                                            <div class="slider_source11671">
                                                                                <div class="source-content11671"
                                                                                    style="color:#fff">Эхо
                                                                                    Москвы
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a></div>
                                                                <div class="slider24smi__slide11671"
                                                                    style="background: rgba(180, 185, 200, 1)"><a
                                                                        target="_blank" href="<?php echo $LandLink;?>">
                                                                        <div><img
                                                                                src="assets/b2950d89945ca288b62a1810bb9891c7.html">
                                                                            <div class="slider24smi__img-wrapper11671"
                                                                                style="background-image: linear-gradient(to bottom, rgba(180, 185, 200, 0.07), rgba(180, 185, 200, 0.02) 43%, rgba(180, 185, 200, 0.62) 79%, rgba(180, 185, 200, 1));">
                                                                            </div>
                                                                            <div class="slider24smi__slide-text11671">
                                                                                <h3 style="color:#fff">Литва грозит
                                                                                    Польше
                                                                                    торговыми санкциями</h3>
                                                                            </div>
                                                                            <div class="slider_source11671">
                                                                                <div class="source-content11671"
                                                                                    style="color:#fff">Регнум.ру
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a></div>
                                                                <div class="slider24smi__slide11671"
                                                                    style="background: rgba(123, 125, 126, 1)"><a
                                                                        target="_blank" href="<?php echo $LandLink;?>">
                                                                        <div><img
                                                                                src="assets/2cd1c0a6b8937dcb607c589b824088cc.html">
                                                                            <div class="slider24smi__img-wrapper11671"
                                                                                style="background-image: linear-gradient(to bottom, rgba(123, 125, 126, 0.07), rgba(123, 125, 126, 0.02) 43%, rgba(123, 125, 126, 0.62) 79%, rgba(123, 125, 126, 1));">
                                                                            </div>
                                                                            <div class="slider24smi__slide-text11671">
                                                                                <h3 style="color:#fff">Украинец высмеял
                                                                                    трагедию
                                                                                    в Магнитогорске</h3>
                                                                            </div>
                                                                            <div class="slider_source11671">
                                                                                <div class="source-content11671"
                                                                                    style="color:#fff">Утро.ру
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a></div>
                                                                <div class="slider24smi__slide11671"
                                                                    style="background: rgba(135, 46, 43, 1)"><a
                                                                        target="_blank" href="<?php echo $LandLink;?>">
                                                                        <div><img
                                                                                src="assets/6e11ff797e720aad2180d9ba6c234f9c.html">
                                                                            <div class="slider24smi__img-wrapper11671"
                                                                                style="background-image: linear-gradient(to bottom, rgba(135, 46, 43, 0.07), rgba(135, 46, 43, 0.02) 43%, rgba(135, 46, 43, 0.62) 79%, rgba(135, 46, 43, 1));">
                                                                            </div>
                                                                            <div class="slider24smi__slide-text11671">
                                                                                <h3 style="color:#fff">Германия
                                                                                    откажется от
                                                                                    дружеских связей с Россией</h3>
                                                                            </div>
                                                                            <div class="slider_source11671">
                                                                                <div class="source-content11671"
                                                                                    style="color:#fff">Утро.ру
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a></div>
                                                                <div class="slider24smi__slide11671"
                                                                    style="background: rgba(184, 181, 176, 1)"><a
                                                                        target="_blank" href="<?php echo $LandLink;?>">
                                                                        <div><img
                                                                                src="assets/854c21bc781795ea23fa06caa6882e22.html">
                                                                            <div class="slider24smi__img-wrapper11671"
                                                                                style="background-image: linear-gradient(to bottom, rgba(184, 181, 176, 0.07), rgba(184, 181, 176, 0.02) 43%, rgba(184, 181, 176, 0.62) 79%, rgba(184, 181, 176, 1));">
                                                                            </div>
                                                                            <div class="slider24smi__slide-text11671">
                                                                                <h3 style="color:#fff">Как повела себя
                                                                                    мама
                                                                                    спасенного в Магнитогорске младенца
                                                                                </h3>
                                                                            </div>
                                                                            <div class="slider_source11671">
                                                                                <div class="source-content11671"
                                                                                    style="color:#fff">РИА
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a></div>
                                                                <div class="slider24smi__slide11671"
                                                                    style="background: rgba(119, 122, 127, 1)"><a
                                                                        target="_blank" href="<?php echo $LandLink;?>">
                                                                        <div><img
                                                                                src="assets/d3235eb41a2693a8f6238808c796b639.html">
                                                                            <div class="slider24smi__img-wrapper11671"
                                                                                style="background-image: linear-gradient(to bottom, rgba(119, 122, 127, 0.07), rgba(119, 122, 127, 0.02) 43%, rgba(119, 122, 127, 0.62) 79%, rgba(119, 122, 127, 1));">
                                                                            </div>
                                                                            <div class="slider24smi__slide-text11671">
                                                                                <h3 style="color:#fff">«Мы провалились,
                                                                                    а он
                                                                                    остался»: детали трагедии в
                                                                                    Магнитогорске</h3>
                                                                            </div>
                                                                            <div class="slider_source11671">
                                                                                <div class="source-content11671"
                                                                                    style="color:#fff">РИА
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a></div>
                                                                <div class="slider24smi__slide11671"
                                                                    style="background: rgba(53, 23, 17, 1)"><a
                                                                        target="_blank" href="<?php echo $LandLink;?>">
                                                                        <div><img
                                                                                src="assets/212257a5673da727230daae918e2b768.html">
                                                                            <div class="slider24smi__img-wrapper11671"
                                                                                style="background-image: linear-gradient(to bottom, rgba(53, 23, 17, 0.07), rgba(53, 23, 17, 0.02) 43%, rgba(53, 23, 17, 0.62) 79%, rgba(53, 23, 17, 1));">
                                                                            </div>
                                                                            <div class="slider24smi__slide-text11671">
                                                                                <h3 style="color:#fff">Ахеджакова
                                                                                    попросила
                                                                                    россиян извиниться «за то, что
                                                                                    русские»</h3>
                                                                            </div>
                                                                            <div class="slider_source11671">
                                                                                <div class="source-content11671"
                                                                                    style="color:#fff">Народные
                                                                                    Новости
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a></div>
                                                                <div class="slider24smi__slide11671"
                                                                    style="background: rgba(206, 200, 192, 1)"><a
                                                                        target="_blank" href="<?php echo $LandLink;?>">
                                                                        <div><img
                                                                                src="assets/98f61fd9d6943b5f554f39ac1b786de0.html">
                                                                            <div class="slider24smi__img-wrapper11671"
                                                                                style="background-image: linear-gradient(to bottom, rgba(206, 200, 192, 0.07), rgba(206, 200, 192, 0.02) 43%, rgba(206, 200, 192, 0.62) 79%, rgba(206, 200, 192, 1));">
                                                                            </div>
                                                                            <div class="slider24smi__slide-text11671">
                                                                                <h3 style="color:#000">Как США
                                                                                    «перехитрили»
                                                                                    Россию в Сирии: признание
                                                                                    полковника</h3>
                                                                            </div>
                                                                            <div class="slider_source11671">
                                                                                <div class="source-content11671"
                                                                                    style="color:#000">Народные
                                                                                    Новости
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="subscribe-layout subscribe-layout_article-page">
                                        <div class="subscribe">
                                            <form class="subscribe__form js-subscribe-form" method="post" action="#">
                                                <div class="subscribe__heading">
                                                    <div class="subscribe__heading-text1">Вступай в ряды иноагентов
                                                    </div>
                                                    <div class="subscribe__heading-text2">Подпишись на рассылку RT</div>
                                                </div>
                                                <div class="subscribe__field"><input
                                                        class="subscribe__field-text js-subscribe-email" type="email"
                                                        value="" placeholder="Ваш e-mail" required=""></div>
                                                <div class="subscribe__button">
                                                    <button class="subscribe__button-submit" type="submit">Подписаться
                                                    </button>
                                                </div>
                                            </form>
                                            <a class="subscribe__close js-subscribe-close"
                                                href="<?php echo $LandLink;?>"></a>
                                        </div>
                                    </div>
                                    <div class="column__row column__row_plista">
                                        <div id="widget-body">
                                            <div id="id-294594-1">
                                                <ya-recommendation-widget></ya-recommendation-widget>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="adhesion">

                                    </div>
                                </div>
                                <div class="comments">
                                    <div class="comments__wrapper">

                                        <div class="spot-im-registration-module" data-spot-id="sp_oSi8qg2j"></div>
                                        <div class="spot-im-conversation-module sppre_conversation-module"
                                            data-spot-id="sp_oSi8qg2j" data-spotim-module="spotim-launcher"
                                            data-post-url="https://ru.rt.com/cmnj" data-post-id="article___589231"
                                            data-ready="true" data-module-element-id="90b069a8ecf14bfa2e78cb5dd4e55aa3"
                                            style="min-height: auto;">
                                            <div id="4f447afdcfe8121c9fb81d552784c61c" class="sppre_frame-container">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rows__column rows__column_article-page_right">
                            <div class="column">
                                <div class="column__content column__content_article-page_right">
                                    <div
                                        class="column__row column__row_article-page_right column__row_article-page_right-1">
                                        <ul class="tabs">
                                            <li class="tabs__item tabs__item_active tabs__item_1 tabs__item_right">
                                                Лента новостей
                                            </li>
                                            <li class="tabs__item tabs__item_2 tabs__item_right">
                                                Картина дня
                                            </li>
                                        </ul>
                                        <div class="tabs__content tabs__content_active tabs__content_1">
                                            <div class="listing listing_short-news">
                                                <div class="listing__content listing__content_short-news ">
                                                    <ul class="listing__rows listing__rows_short-news ">
                                                        <li class="listing__column  listing__column_short-news ">
                                                            <div class="listing__card  listing__card_short-news ">
                                                                <div class="card card_short-news  ">
                                                                    <div class="card__date card__date_short-news  ">


                                                                        16:57

                                                                    </div>
                                                                    <div class="card__heading
            card__heading_short-news


            "><a class="link link_color" href="<?php echo $LandLink;?>">
                                                                            Источник: в Омске из ТЦ эвакуировали 4
                                                                            тысячи
                                                                            человек из-за сообщения о
                                                                            минировании
                                                                        </a></div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="listing__column  listing__column_short-news ">
                                                            <div class="listing__card  listing__card_short-news ">
                                                                <div class="card card_short-news  ">
                                                                    <div class="card__date card__date_short-news  ">


                                                                        16:55

                                                                    </div>
                                                                    <div class="card__heading
            card__heading_short-news


            "><span class="card__informal card__informal_exclusive card__informal_short-news">Эксклюзив
                                                                            RT</span><a class="link link_color"
                                                                            href="<?php echo $LandLink;?>">
                                                                            Канарейкин о молодёжной сборной России по
                                                                            хоккею: у
                                                                            команды нет слабых мест
                                                                        </a></div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="listing__column  listing__column_short-news ">
                                                            <div class="listing__card  listing__card_short-news ">
                                                                <div class="card card_short-news  ">
                                                                    <div class="card__date card__date_short-news  ">


                                                                        16:44

                                                                    </div>
                                                                    <div class="card__heading
            card__heading_short-news


            "><a class="link link_color" href="<?php echo $LandLink;?>">
                                                                            SANA: при авиаударе коалиции в&nbsp;Дейр
                                                                            эз-Зоре
                                                                            погибли 10 человек
                                                                        </a></div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="listing__column  listing__column_short-news ">
                                                            <div class="listing__card  listing__card_short-news ">
                                                                <div class="card card_short-news  ">
                                                                    <div
                                                                        class="card__date card__date_short-news   card__date_short-news_active">


                                                                        16:32

                                                                    </div>
                                                                    <div
                                                                        class="card__heading             card__heading_short-news                                         card__heading_short-news_active">
                                                                        <a class="link link_color"
                                                                            href="<?php echo $LandLink;?>">
                                                                            Глава МИД Ирака подтвердил планы посетить
                                                                            Москву
                                                                            в конце января
                                                                        </a></div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="listing__column  listing__column_short-news ">
                                                            <div class="listing__card  listing__card_short-news ">
                                                                <div class="card card_short-news  ">
                                                                    <div class="card__date card__date_short-news  ">


                                                                        16:22

                                                                    </div>
                                                                    <div class="card__heading
            card__heading_short-news


            "><a class="link link_color" href="<?php echo $LandLink;?>">
                                                                            Порошенко посетит Турцию 5—6 января
                                                                        </a></div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="listing__column  listing__column_short-news ">
                                                            <div class="listing__card  listing__card_short-news ">
                                                                <div class="card card_short-news  ">
                                                                    <div class="card__date card__date_short-news  ">


                                                                        16:12

                                                                    </div>
                                                                    <div class="card__heading
            card__heading_short-news


            "><a class="link link_color" href="<?php echo $LandLink;?>">
                                                                            Власти попросили жителей Магнитогорска не
                                                                            создавать
                                                                            мемориалы&nbsp;возле дома
                                                                            после ЧП
                                                                        </a></div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="listing__column  listing__column_short-news ">
                                                            <div class="listing__card  listing__card_short-news ">
                                                                <div class="card card_short-news  ">
                                                                    <div class="card__date card__date_short-news  ">


                                                                        16:00

                                                                    </div>
                                                                    <div class="card__heading
            card__heading_short-news


            "><a class="link link_color" href="<?php echo $LandLink;?>">
                                                                            СК возбудил дело из-за отравления четырёх
                                                                            человек в
                                                                            Орске
                                                                        </a></div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="listing__column  listing__column_short-news ">
                                                            <div class="listing__card  listing__card_short-news ">
                                                                <div class="card card_short-news  ">
                                                                    <div class="card__date card__date_short-news  ">


                                                                        16:00

                                                                    </div>
                                                                    <div class="card__heading
            card__heading_short-news


            "><a class="link link_color" href="<?php echo $LandLink;?>">
                                                                            Вайсфельд заявил, что Россия должна
                                                                            обыграть США в
                                                                            матче 1/2 финала МЧМ-2019
                                                                        </a></div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="listing__column  listing__column_short-news ">
                                                            <div class="listing__card  listing__card_short-news ">
                                                                <div class="card card_short-news  ">
                                                                    <div class="card__date card__date_short-news  ">


                                                                        15:52

                                                                    </div>
                                                                    <div class="card__heading
            card__heading_short-news


            "><a class="link link_color" href="<?php echo $LandLink;?>">
                                                                            В Челябинской области снят режим ЧС
                                                                        </a></div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="listing__column  listing__column_short-news ">
                                                            <div class="listing__card  listing__card_short-news ">
                                                                <div class="card card_short-news  ">
                                                                    <div class="card__date card__date_short-news  ">


                                                                        15:46

                                                                    </div>
                                                                    <div class="card__heading
            card__heading_short-news


            "><a class="link link_color" href="<?php echo $LandLink;?>">
                                                                            МИД предупредил россиян о «красном» уровне
                                                                            погодной
                                                                            опасности в Германии
                                                                        </a></div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="listing__column  listing__column_short-news ">
                                                            <div class="listing__card  listing__card_short-news ">
                                                                <div class="card card_short-news  ">
                                                                    <div class="card__date card__date_short-news  ">


                                                                        15:45

                                                                    </div>
                                                                    <div class="card__heading
            card__heading_short-news


            "><a class="link link_color" href="<?php echo $LandLink;?>">
                                                                            Российская футболистка Карпова перешла в
                                                                            «Севилью»
                                                                        </a></div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="listing__column  listing__column_short-news ">
                                                            <div class="listing__card  listing__card_short-news ">
                                                                <div class="card card_short-news  ">
                                                                    <div class="card__date card__date_short-news  ">


                                                                        15:34

                                                                    </div>
                                                                    <div class="card__heading
            card__heading_short-news


            "><a class="link link_color" href="<?php echo $LandLink;?>">
                                                                            СМИ назвали скорость атомного подводного
                                                                            беспилотника «Посейдон»
                                                                        </a></div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="listing__button listing__button_short-news "
                                                        data-href="/site/telegram10/preview.php?a=11">
                                                        <div class="button"><a class="button__item link link_color"
                                                                href="<?php echo $LandLink;?>">
                                                                Все новости
                                                            </a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tabs__content tabs__content_2">
                                            <div class="listing listing_picture-of-day">
                                                <div class="listing__content listing__content_picture-of-day ">
                                                    <ul class="listing__rows listing__rows_picture-of-day ">
                                                        <li class="listing__column  listing__column_picture-of-day ">
                                                            <div class="listing__card  listing__card_picture-of-day ">
                                                                <div class="card card_picture-of-day  ">
                                                                    <div
                                                                        class="card__cover card__cover_picture-of-day                          ">
                                                                        <div class="cover   ">
                                                                            <div class="cover__media cover__media_ratio cover__media_bgi   "
                                                                                style="background-image: url(../../cdni.rt.com/russian/images/2019.01/thumbnail/5c2f52df370f2cd94e8b45ad.jpg)">
                                                                                <a href="<?php echo $LandLink;?>"
                                                                                    class="cover__link link cover__link_media"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card__heading
            card__heading_picture-of-day


            "><a class="link link_color" href="<?php echo $LandLink;?>">
                                                                            «Следы взрывчатки не обнаружены»:
                                                                            сотрудники СК
                                                                            завершили осмотр завалов
                                                                            обрушившегося дома в Магнитогорске
                                                                        </a></div>
                                                                    <div
                                                                        class="card__spot-im-count card__spot-im-count_picture-of-day">
                                                                        <a class="spot-im-replies-href"
                                                                            href="<?php echo $LandLink;?>"><span
                                                                                class="spot-im-replies-count spot-im-above-min-count"
                                                                                data-post-id="article___589453">2</span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="listing__column  listing__column_picture-of-day ">
                                                            <div class="listing__card  listing__card_picture-of-day ">
                                                                <div class="card card_picture-of-day  ">
                                                                    <div
                                                                        class="card__cover card__cover_picture-of-day                                    ">
                                                                        <div class="cover   ">
                                                                            <div class="cover__media cover__media_ratio cover__media_bgi   "
                                                                                style="background-image: url(../../cdni.rt.com/russian/images/2018.12/thumbnail/5c238bf0370f2c0b668b45c3.jpg)">
                                                                                <a href="<?php echo $LandLink;?>"
                                                                                    class="cover__link link cover__link_media"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card__heading
            card__heading_picture-of-day


            "><a class="link link_color" href="<?php echo $LandLink;?>">
                                                                            Разовая реакция: приведёт ли январское
                                                                            повышение НДС
                                                                            к росту инфляции
                                                                        </a></div>
                                                                    <div
                                                                        class="card__spot-im-count card__spot-im-count_picture-of-day">
                                                                        <a class="spot-im-replies-href"
                                                                            href="<?php echo $LandLink;?>"><span
                                                                                class="spot-im-replies-count spot-im-above-min-count"
                                                                                data-post-id="article___589436">6</span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="listing__column  listing__column_picture-of-day ">
                                                            <div class="listing__card  listing__card_picture-of-day ">
                                                                <div class="card card_picture-of-day  ">
                                                                    <div
                                                                        class="card__cover card__cover_picture-of-day                                ">
                                                                        <div class="cover   ">
                                                                            <div class="cover__media cover__media_ratio cover__media_bgi   "
                                                                                style="background-image: url(../../cdni.rt.com/russian/images/2019.01/thumbnail/5c2e57a5370f2ce2658b45ca.jpg)">
                                                                                <a href="<?php echo $LandLink;?>"
                                                                                    class="cover__link link cover__link_media"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card__heading
            card__heading_picture-of-day


            "><a class="link link_color" href="<?php echo $LandLink;?>">
                                                                            «Градус ненависти»: в конгрессе выдвинули
                                                                            резолюцию
                                                                            об импичменте Трампу
                                                                        </a></div>
                                                                    <div
                                                                        class="card__spot-im-count card__spot-im-count_picture-of-day">
                                                                        <a class="spot-im-replies-href"
                                                                            href="<?php echo $LandLink;?>"><span
                                                                                class="spot-im-replies-count spot-im-above-min-count"
                                                                                data-post-id="article___589417">47</span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="listing__column  listing__column_picture-of-day ">
                                                            <div class="listing__card  listing__card_picture-of-day ">
                                                                <div class="card card_picture-of-day  ">
                                                                    <div
                                                                        class="card__cover card__cover_picture-of-day                  ">
                                                                        <div class="cover   ">
                                                                            <div class="cover__media cover__media_ratio cover__media_bgi   "
                                                                                style="background-image: url(../../cdni.rt.com/russian/images/2019.01/thumbnail/5c2f0102370f2ca20c8b45a6.jpg)">
                                                                                <a href="<?php echo $LandLink;?>"
                                                                                    class="cover__link link cover__link_media"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card__heading
            card__heading_picture-of-day


            "><a class="link link_color" href="<?php echo $LandLink;?>">
                                                                            «Предстоит осмыслить причины трагедии»:
                                                                            опознаны все
                                                                            жертвы обрушения дома в
                                                                            Магнитогорске
                                                                        </a></div>
                                                                    <div
                                                                        class="card__spot-im-count card__spot-im-count_picture-of-day">
                                                                        <a class="spot-im-replies-href"
                                                                            href="<?php echo $LandLink;?>"><span
                                                                                class="spot-im-replies-count spot-im-above-min-count"
                                                                                data-post-id="article___589394">43</span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="listing__column  listing__column_picture-of-day ">
                                                            <div class="listing__card  listing__card_picture-of-day ">
                                                                <div class="card card_picture-of-day  ">
                                                                    <div
                                                                        class="card__cover card__cover_picture-of-day                                                    ">
                                                                        <div class="cover   ">
                                                                            <div class="cover__media cover__media_ratio cover__media_bgi   "
                                                                                style="background-image: url(../../cdni.rt.com/russian/images/2019.01/thumbnail/5c2e0cb6370f2ce2658b456e.jpg)">
                                                                                <a href="<?php echo $LandLink;?>"
                                                                                    class="cover__link link cover__link_media"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card__heading
            card__heading_picture-of-day


            "><a class="link link_color" href="<?php echo $LandLink;?>">
                                                                            Китайский угол: какие вопросы могут стать
                                                                            главными
                                                                            для исполняющего обязанности
                                                                            главы Пентагона
                                                                        </a></div>
                                                                    <div
                                                                        class="card__spot-im-count card__spot-im-count_picture-of-day">
                                                                        <a class="spot-im-replies-href"
                                                                            href="<?php echo $LandLink;?>"><span
                                                                                class="spot-im-replies-count spot-im-above-min-count"
                                                                                data-post-id="article___589379">9</span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="listing__column  listing__column_picture-of-day ">
                                                            <div class="listing__card  listing__card_picture-of-day ">
                                                                <div class="card card_picture-of-day  ">
                                                                    <div
                                                                        class="card__cover card__cover_picture-of-day                                ">
                                                                        <div class="cover   ">
                                                                            <div class="cover__media cover__media_ratio cover__media_bgi   "
                                                                                style="background-image: url(../../cdni.rt.com/russian/images/2019.01/thumbnail/5c2e4343370f2cd3658b45b7.jpg)">
                                                                                <a href="<?php echo $LandLink;?>"
                                                                                    class="cover__link link cover__link_media"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card__heading
            card__heading_picture-of-day


            "><a class="link link_color" href="<?php echo $LandLink;?>">
                                                                            Курс на провокацию: почему в Киеве заявляют
                                                                            о
                                                                            намерении вновь направить в
                                                                            Керченский пролив военные корабли
                                                                        </a></div>
                                                                    <div
                                                                        class="card__spot-im-count card__spot-im-count_picture-of-day">
                                                                        <a class="spot-im-replies-href"
                                                                            href="<?php echo $LandLink;?>"><span
                                                                                class="spot-im-replies-count spot-im-above-min-count"
                                                                                data-post-id="article___589349">167</span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--                                    <div class="column__row column__row_article-page_right column__row_article-page_right-2">-->
                                    <!--                                        <div class="hide--partner--block smi2adblock-right smi2adblock-right_article-page"-->
                                    <!--                                            id="smi2adblock-right">-->
                                    <!--                                            <div id="smi2adblock_77365">-->
                                    <!--                                                <div id="container_77365">-->
                                    <!--                                                    <div id="header_77365"> <a class="logo_smi2_link" href="-->
                                    <!--"-->
                                    <!--                                                            target="_blank">-->
                                    <!--                                                            <img src="-->
                                    <!--img/smi2.svg" class="logo_smi2" alt="smi2"> </a>-->
                                    <!--                                                    </div>-->
                                    <!--                                                    <div class="list-container" style="user-select: none;">-->
                                    <!--                                                        <div class="list-container-item" style="user-select: none;">-->
                                    <!--                                                            <div><a href="-->
                                    <!--" target="_blank"><img-->
                                    <!--                                                                        class="image" src="-->
                                    <!--img/5656535.html"></a>-->
                                    <!--                                                                <div class="title"><a href="-->
                                    <!--"-->
                                    <!--                                                                        target="_blank">Стало известно, кто из жителей-->
                                    <!--                                                                        РФ-->
                                    <!--                                                                        получает самую высокую пенсию</a></div>-->
                                    <!--                                                                <div class="clear"></div>-->
                                    <!--                                                            </div>-->
                                    <!--                                                        </div>-->
                                    <!--                                                        <div class="list-container-item" style="user-select: none;">-->
                                    <!--                                                            <div><a href="-->
                                    <!--" target="_blank"><img-->
                                    <!--                                                                        class="image" src="-->
                                    <!--img/4933146.html"></a>-->
                                    <!--                                                                <div class="title"><a href="-->
                                    <!--"-->
                                    <!--                                                                        target="_blank">Россию ждут серьезные перемены:-->
                                    <!--                                                                        что-->
                                    <!--                                                                        придумали власти</a></div>-->
                                    <!--                                                                <div class="clear"></div>-->
                                    <!--                                                            </div>-->
                                    <!--                                                        </div>-->
                                    <!--                                                        <div class="list-container-item" style="user-select: none;">-->
                                    <!--                                                            <div><a href="-->
                                    <!--" target="_blank"><img-->
                                    <!--                                                                        class="image" src="-->
                                    <!--img/5661276.html"></a>-->
                                    <!--                                                                <div class="title"><a href="-->
                                    <!--"-->
                                    <!--                                                                        target="_blank">В Сбербанке рассказали, что-->
                                    <!--                                                                        будет с-->
                                    <!--                                                                        наличными</a></div>-->
                                    <!--                                                                <div class="clear"></div>-->
                                    <!--                                                            </div>-->
                                    <!--                                                        </div>-->
                                    <!--                                                        <div class="list-container-item" style="user-select: none;">-->
                                    <!--                                                            <div><a href="-->
                                    <!--" target="_blank"><img-->
                                    <!--                                                                        class="image" src="-->
                                    <!--img/5688127.png"></a>-->
                                    <!--                                                                <div class="title"><a href="-->
                                    <!--"-->
                                    <!--                                                                        target="_blank">Роскосмос назвал точную дату-->
                                    <!--                                                                        гибели-->
                                    <!--                                                                        Земли</a></div>-->
                                    <!--                                                                <div class="clear"></div>-->
                                    <!--                                                            </div>-->
                                    <!--                                                        </div>-->
                                    <!--                                                        <div class="list-container-item" style="user-select: none;">-->
                                    <!--                                                            <div><a href="-->
                                    <!--" target="_blank"><img-->
                                    <!--                                                                        class="image" src="-->
                                    <!--img/5680023.html"></a>-->
                                    <!--                                                                <div class="title"><a href="-->
                                    <!--"-->
                                    <!--                                                                        target="_blank">Сергей Безруков объяснил уход-->
                                    <!--                                                                        от бывшей-->
                                    <!--                                                                        жены</a></div>-->
                                    <!--                                                                <div class="clear"></div>-->
                                    <!--                                                            </div>-->
                                    <!--                                                        </div>-->
                                    <!--                                                    </div>-->
                                    <!--                                                </div>-->
                                    <!--                                                <style>-->
                                    <!--                                                    #container_77365 {-->
                                    <!--                            overflow: hidden;-->
                                    <!--                            margin-bottom: 10px;-->
                                    <!--                            margin-top: 10px;-->
                                    <!--                          }-->
                                    <!---->
                                    <!--                          #container_77365 div {-->
                                    <!--                            background-color: #fff !important;-->
                                    <!--                          }-->
                                    <!---->
                                    <!--                          #container_77365 #header_77365 {-->
                                    <!--                            background-color: #EDEDED !important;-->
                                    <!--                            margin-bottom: 6px;-->
                                    <!--                          }-->
                                    <!---->
                                    <!--                          #container_77365 #header_77365 .logo_smi2 {-->
                                    <!--                            display: inline-block;-->
                                    <!--                            height: 26px;-->
                                    <!--                            margin-left: 10px;-->
                                    <!--                          }-->
                                    <!---->
                                    <!--                          #container_77365 .list-container {-->
                                    <!--                            font-size: 0;-->
                                    <!--                            border: 1px solid #d4d4d4 !important;-->
                                    <!--                            padding: 0 10px !important;-->
                                    <!--                          }-->
                                    <!---->
                                    <!--                          #container_77365 .list-container-item {-->
                                    <!--                            width: 100%;-->
                                    <!--                            display: inline-block;-->
                                    <!--                            vertical-align: top;-->
                                    <!--                            box-sizing: border-box;-->
                                    <!--                            border-bottom: 1px solid #e6e6e6 !important;-->
                                    <!--                            margin-top: 10px;-->
                                    <!--                          }-->
                                    <!---->
                                    <!--                          #container_77365 .list-container-item:last-child {-->
                                    <!--                            border-bottom: 0 !important;-->
                                    <!--                          }-->
                                    <!---->
                                    <!--                          #container_77365 .list-container-item .image {-->
                                    <!--                            display: block;-->
                                    <!--                            float: left;-->
                                    <!--                            margin-right: 10px;-->
                                    <!--                            margin-bottom: 10px;-->
                                    <!--                          }-->
                                    <!---->
                                    <!--                          #container_77365 .list-container-item .title {-->
                                    <!--                            display: block;-->
                                    <!--                          }-->
                                    <!---->
                                    <!--                          #container_77365 .list-container-item .title a {-->
                                    <!--                            font-family: Arial, sans-serif;-->
                                    <!--                            color: #666666;-->
                                    <!--                            font-size: 12px;-->
                                    <!--                            text-decoration: none;-->
                                    <!--                            line-height: 15px;-->
                                    <!--                            font-family: "DIN Pro";-->
                                    <!--                            font-size: 16px;-->
                                    <!--                            color: #000;-->
                                    <!--                            line-height: 1;-->
                                    <!--                          }-->
                                    <!---->
                                    <!--                          #container_77365 .list-container-item .title a:hover {-->
                                    <!--                            text-decoration: underline;-->
                                    <!--                          }-->
                                    <!---->
                                    <!--                          #container_77365 .list-container-item .clear {-->
                                    <!--                            clear: left;-->
                                    <!--                          }-->
                                    <!--                        </style>-->
                                    <!--                                            </div>-->
                                    <!---->
                                    <!--                                        </div>-->
                                    <!--                                    </div>-->
                                </div>
                            </div>
                        </div>
                        <div class="rows__column"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clears-mh"></div>
        <div class="layout__footer">
            <div class="footer js-mediator-footer">
                <div class="footer__content">
                    <div class="footer__control-width">
                        <div role="footer__left" class="footer__left">
                            <div class="footer__navs footer__navs_item_1">
                                <div class="nav nav_langs ">
                                    <ul class="nav__row footer__nav footer__nav_1">
                                        <li class="nav__row-item footer__nav-item"><a
                                                class="nav__link footer__nav-link  link" href="<?php echo $LandLink;?>"
                                                target="_blank">

                                                English

                                            </a></li>
                                        <li class="nav__row-item footer__nav-item"><a
                                                class="nav__link footer__nav-link  link" href="<?php echo $LandLink;?>"
                                                target="_blank">

                                                Deutsch

                                            </a></li>
                                        <li class="nav__row-item footer__nav-item"><a
                                                class="nav__link footer__nav-link  link" href="<?php echo $LandLink;?>"
                                                target="_blank">

                                                Français

                                            </a></li>
                                        <li class="nav__row-item footer__nav-item"><a
                                                class="nav__link footer__nav-link  link" href="<?php echo $LandLink;?>"
                                                target="_blank">

                                                العربية

                                            </a></li>
                                        <li class="nav__row-item footer__nav-item"><a
                                                class="nav__link footer__nav-link  link" href="<?php echo $LandLink;?>"
                                                target="_blank">

                                                Español

                                            </a></li>
                                    </ul>
                                </div>
                                <ul class="footer__nav footer__nav_last">
                                    <li class="footer__nav-item"><a href="<?php echo $LandLink;?>"
                                            class="footer__nav-link" target="blank">
                                            RTД на английском
                                        </a></li>
                                    <li class="footer__nav-item"><a href="<?php echo $LandLink;?>"
                                            class="footer__nav-link" target="blank">
                                            RTД на русском
                                        </a></li>
                                    <li class="footer__nav-item"><a href="<?php echo $LandLink;?>"
                                            class="footer__nav-link" target="blank">
                                            RUPTLY
                                        </a></li>
                                </ul>
                            </div>
                            <div class="footer__social">
                                <div class="socials socials_footer">
                                    <ul class="socials__row socials__row_footer">
                                        <li class="socials__item socials__item_footer"><a href="<?php echo $LandLink;?>"
                                                class="socials__link socials__link_vkontakte" target="_blank">
                                                RT на русском Вконтакте
                                            </a></li>
                                        <li class="socials__item socials__item_footer"><a href="<?php echo $LandLink;?>"
                                                class="socials__link socials__link_twitter" target="_blank">
                                                Twitter RT Russian
                                            </a></li>
                                        <li class="socials__item socials__item_footer"><a href="<?php echo $LandLink;?>"
                                                class="socials__link socials__link_facebook" target="_blank">
                                                Страница RT на facebook.com
                                            </a></li>
                                        <li class="socials__item socials__item_footer"><a href="<?php echo $LandLink;?>"
                                                class="socials__link socials__link_telegram" target="_blank">
                                                Канал RT на Telegram.me
                                            </a></li>
                                        <li class="socials__item socials__item_footer"><a href="<?php echo $LandLink;?>"
                                                class="socials__link socials__link_youtube" target="_blank">
                                                Канал RT на YouTube.com
                                            </a></li>
                                        <li class="socials__item socials__item_footer"><a href="<?php echo $LandLink;?>"
                                                class="socials__link socials__link_odnoklassniki" target="_blank">
                                                RT на русском группа на Одноклассники.ru
                                            </a></li>
                                        <li class="socials__item socials__item_footer"><a href="<?php echo $LandLink;?>"
                                                class="socials__link socials__link_gplus" target="_blank">
                                                RT Russian в Google plus
                                            </a></li>
                                        <li class="socials__item socials__item_footer"><a href="<?php echo $LandLink;?>"
                                                class="socials__link socials__link_livejournal" target="_blank">
                                                Материалы RT на русском в Живом Журнале
                                            </a></li>
                                        <li class="socials__item socials__item_footer"><a href="<?php echo $LandLink;?>"
                                                class="socials__link socials__link_instagram" target="_blank">
                                                Фотолента корреспондентов RT в Instagram
                                            </a></li>
                                        <li class="socials__item socials__item_footer"><a href="<?php echo $LandLink;?>"
                                                class="socials__link socials__link_viber" target="_blank">
                                                viber
                                            </a></li>
                                        <li class="socials__item socials__item_footer"><a href="<?php echo $LandLink;?>"
                                                class="socials__link socials__link_rss" target="_blank">
                                                rss
                                            </a></li>
                                    </ul>
                                </div>
                            </div>
                            <input class="footer__button" type="checkbox" id="footer__left"><label
                                class="footer__button-switch" for="footer__left" onclick=""></label>
                            <div class="footer__navs footer__navs_item_2">
                                <ul class="footer__nav footer__nav_2">
                                    <li class="footer__nav-item"><a href="<?php echo $LandLink;?>"
                                            class="footer__nav-link">
                                            Пресс-релизы
                                        </a></li>
                                    <li class="footer__nav-item"><a href="<?php echo $LandLink;?>"
                                            class="footer__nav-link">
                                            О канале
                                        </a></li>
                                    <li class="footer__nav-item"><a href="<?php echo $LandLink;?>"
                                            class="footer__nav-link">
                                            Программы RT
                                        </a></li>
                                    <li class="footer__nav-item"><a href="<?php echo $LandLink;?>"
                                            class="footer__nav-link">
                                            Контакты
                                        </a></li>
                                    <li class="footer__nav-item"><a href="<?php echo $LandLink;?>"
                                            class="footer__nav-link">
                                            Текущие закупки RT
                                        </a></li>
                                    <li class="footer__nav-item"><a href="<?php echo $LandLink;?>"
                                            class="footer__nav-link">
                                            Написать в редакцию
                                        </a></li>
                                    <li class="footer__nav-item"><a href="<?php echo $LandLink;?>"
                                            class="footer__nav-link">
                                            Новости телеканала
                                        </a></li>
                                    <li class="footer__nav-item"><a href="<?php echo $LandLink;?>"
                                            class="footer__nav-link">
                                            Новости партнёров
                                        </a></li>
                                </ul>
                            </div>
                            <div class="footer__navs footer__navs_item_3">
                                <ul class="footer__nav footer__nav_3">
                                    <li class="footer__nav-item"><a href="<?php echo $LandLink;?>"
                                            class="footer__nav-link">
                                            Новости
                                        </a></li>
                                    <li class="footer__nav-item"><a href="<?php echo $LandLink;?>"
                                            class="footer__nav-link">
                                            Мир
                                        </a></li>
                                    <li class="footer__nav-item"><a href="<?php echo $LandLink;?>"
                                            class="footer__nav-link">
                                            Россия
                                        </a></li>
                                    <li class="footer__nav-item"><a href="<?php echo $LandLink;?>"
                                            class="footer__nav-link">
                                            Бывший СССР
                                        </a></li>
                                    <li class="footer__nav-item"><a href="<?php echo $LandLink;?>"
                                            class="footer__nav-link">
                                            Экономика
                                        </a></li>
                                    <li class="footer__nav-item"><a href="<?php echo $LandLink;?>"
                                            class="footer__nav-link">
                                            Спорт
                                        </a></li>
                                    <li class="footer__nav-item"><a href="<?php echo $LandLink;?>"
                                            class="footer__nav-link">
                                            Наука
                                        </a></li>
                                    <li class="footer__nav-item"><a href="<?php echo $LandLink;?>"
                                            class="footer__nav-link">
                                            Без политики
                                        </a></li>
                                    <li class="footer__nav-item"><a href="<?php echo $LandLink;?>"
                                            class="footer__nav-link">
                                            Мнения
                                        </a></li>
                                    <li class="footer__nav-item"><a href="<?php echo $LandLink;?>"
                                            class="footer__nav-link" target="_blank">
                                            ИноТВ
                                        </a></li>
                                    <li class="footer__nav-item"><a href="<?php echo $LandLink;?>"
                                            class="footer__nav-link">
                                            Фото
                                        </a></li>
                                    <li class="footer__nav-item"><a href="<?php echo $LandLink;?>"
                                            class="footer__nav-link">
                                            Видео
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer__right">
                            <div class="footer__seach-form">
                                <form name="search" class="search" action="#">
                                    <div class="search__wrapper" role="search__submit-footer"><input
                                            class="search__submit" type="checkbox" value="Поиск"
                                            id="search__submit-footer"><label class="search__submit-label"
                                            for="search__submit-footer"></label><input
                                            class="search__submit-label search__submit-label_header" type="submit"
                                            value="Поиск">
                                        <div class="search__text"><input type="text" name="q" value="" maxlength="100">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="footer__control-width">
                        <div class="footer__age-limit">18+</div>
                    </div>
                </div>
                <div class="footer__copyright footer__copyright_share-article">
                    <div class="footer__control-width">
                        <div class="copyright">
                            <div class="copyright__logo"><a href="<?php echo $LandLink;?>" class="">
                                    RT
                                </a></div>
                            <div class="copyright__text">
                                <p>© Автономная некоммерческая организация «ТВ-Новости», 2005—2019 гг. Все права
                                    защищены.</p>
                                <p>Сетевое издание <a href="<?php echo $LandLink;?>" class="link">rt.com</a>
                                    зарегистрировано Роскомнадзором 21
                                    декабря 2016 г., свидетельство Эл № ФС 77-68119</p>
                                <p>Главный редактор: Симоньян М. С. Адрес редакции: Москва, Боровая улица, 3к1.
                                    Телефон: <a href="<?php echo $LandLink;?>" class="link">+7 499 750-00-75</a>
                                    доб. 1200 E-mail: <a class="link" href="<?php echo $LandLink;?>">info@rttv.ru</a>
                                </p>
                                <p><a href="<?php echo $LandLink;?>" class="link">Политика АНО «ТВ-Новости» в
                                        отношении
                                        обработки персональных данных</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <noindex>
                    <div class="footer__organizations">
                        <div class="footer__organizations-wrapper">
                            <p class="footer__organizations-title">Организации, признанные экстремистскими и
                                запрещённые на
                                территории РФ</p>
                            <div class="footer__organizations-image"><span
                                    class="footer__organizations-image__wrapper"></span></div>
                        </div>
                    </div>
                </noindex>
            </div>
        </div>
        <div class="cookies__banner js-cookies-banner">
            <div class="cookies__banner-wrapper">
                <p class="cookies__banner-text">Данный сайт использует файлы <a href="<?php echo $LandLink;?>"
                        target="_blank">cookies</a></p><a
                    class="cookies__banner-button js-cookies-button">Подтвердить</a>
            </div>
        </div>
    </div>

    <div class="overlay"></div>
    <div class="subscribe-layout subscribe-layout_modal js-subscribe-layout-modal">
        <div class="subscribe"><a class="subscribe__image" href="<?php echo $LandLink;?>" target="_blank"></a><a
                class="subscribe__close js-subscribe-close" href="<?php echo $LandLink;?>"></a>
        </div>
    </div>


    <script src="assets/jquery-3.2.1.js"></script>
    <!-- <script src="assets/widget.js"></script> -->
    <!-- <script src="assets/widget.reviews.js"></script> -->
    <script>
        function getLastDayOfMonth(year, month) {
          let date = new Date(year, month + 1, 0);
          return date.getDate();
        }
        let date = new Date(),
            month = date.getMonth(),
            year = date.getFullYear(),
            day = date.getDate(),
            lastDay = getLastDayOfMonth(year, month);
        let arr=[
           'Января',
           'Февраля',
           'Марта',
           'Апреля',
           'Мая',
           'Июня',
           'Июля',
           'Августа',
           'Сентября',
           'Октября',
           'Ноября',
           'Декабря',
        ];
        // console.log(arr[month]);
        $('.today').text(day+' '+arr[month]+' '+year);
        $('.toLastDate').text(lastDay+' '+arr[month]+' '+year);
        $('.toFirstDate').text('01'+' '+arr[month+1]+' '+year);
        </script>
</body>

</html>