<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller{
    public function index(Request $request)
    {
        return view ('hello.index',['data'=>$request->data]);
    }

}

/*
class HelloController extends Controller{
    public function index()
    {
        return view ('hello.index',['message'=>'Hello!']);
    }

}

class HelloController extends Controller{
    public function index()
    {
        $data = ['one','two','three','four','five'];
        return view ('hello.index',['data'=>$data]);
    }

}

class HelloController extends Controller{
    public function index()
    {
        return view('hello.index');
    }
    public function post(Request $request)
    {
        return view('hello.index',['msg'=>$request->msg]);
    }

}


class HelloController extends Controller{
    public function index(Request $request,Response $response){
$html = <<<EOF
<html>
<head>
<title>Hello/Index</title>
<style>
body {front-size:16pt; color:#999;}
h1 { font-size:100pt; text-align:right; color:#eee;margin:-40px 0px -50px 0px;}
</style>
</head>
<body>
    <h1>Hello</h1>
    <h3>Request</h3>
    <pre>{$request}</pre>
    <h3>Response</h3>
    <pre>{$response}</pre>
</body>
</html>
EOF;
        $response->setContent($html);
        return $response;
    }
}

/*
----------------------------------------------------------------------------------------

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