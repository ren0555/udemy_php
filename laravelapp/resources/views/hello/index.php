<?php
/*
----------------------------------------------------------------------------------------
<html>
<head>
<title>Hello/Index</title>
<style>
body {front-size:16pt; color:#999;}
h1 { font-size:100pt; text-align:right; color:#eee;margin:-40px 0px -50px 0px;}
</style>
</head>
<body>
    <h1>Index</h1>
    <p><?php echo $msg; ?></p>
    <p><?php echo date("Y年n月j日"); ?></p>
</body>
</html>



global $head, $style, $body, $end;

$head = '<html><head>';
$style = <<<EOF
<style>
body {front-size:16pt; color:#999;}
h1 { font-size:100pt; text-align:right; color:#eee;margin:-40px 0px -50px 0px;}
</style>
EOF;
$body = '</head><body>';
$end = '</body></html>';

function tag($tag, $txt){
    return "<{$tag}>" . $txt . "</{$tag}>";
}

class HelloController extends Controller
{
    public function index(){
        global $head, $style, $body, $end;
        
        $html = $head . tag('title','Hello/Index') . $style .$body. tag('h1','Index').tag('p','this is Index page').'<a href="/hello/other">go to other page</a>'. $end;
        return $html;
    }
    public function other(){
        global $head, $style, $body, $end;
        
        $html = $head . tag('title','Hello/Other') . $style .$body. tag('h1','Other').tag('p','this is Other page').$end;
        return $html;
    }
}
*/