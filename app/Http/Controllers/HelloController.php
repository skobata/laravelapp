<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

global $head, $style, $body, $end;
$head = '<html><head>';
$style = <<<EOF
    <style>
        body {font-size: 16pt; color: #999;}
        h1 {font-size: 100pt; text-align: right; color: #eee; margin: -40px 0 -50px 0;}
    </style>
EOF;
$body = '</head><body>';
$end = '</body></html>';

function tag($tag, $txt) {
    return "<{$tag}>{$txt}</{$tag}>";
}

class HelloController extends Controller
{
    //
    public function index() {
        global $head, $style, $body, $end;
        return $head
            . tag('title', 'Hello/index')
            . $style
            . $body
            . tag('h1', 'index')
            . tag('p', 'this is Index page.')
            . '<a href="/hello/other">go to Other page</a>'
            . $end;
    }

    public function other() {
        global $head, $style, $body, $end;
        return $head
            . tag('title', 'Hello/Other')
            . $style
            . $body
            . tag('h1', 'Other')
            . tag('p', 'this is Other page')
            . '<a href="/hello">go to Index page</a>'
            . $end;
    }
}
