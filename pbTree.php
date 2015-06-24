<?php
    
?>

<html>
<head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
    
    <title>Testing</title>
    
    <link rel="stylesheet" type="text/css" href="/jsPlugins/reset.css"/> <!-- Reset for all browsers -->
    <link rel="stylesheet" type="text/css" href="/jsPlugins/pbTree/pbTree.min.css"/> <!-- Treeview -->
    <!--<link rel="stylesheet" type="text/css" href="/jsPlugins/multiboard/multiboard.css"/>  Multi-Language Keyboard -->
    <style>
        html, body
        {
            height: 100%;
            background-color: #eeeeee;
            overflow: hidden;
        }
        
        h1
        {
            font-size: 32px;
        }
        
        #pageWrapper
        {
            position: relative;
            padding: 10px;
            width: 80%;
            height: 100%;
            margin: 0 auto;
            border: 1px solid black;
            background-color: #ffffff;
        }
        
        #wrap-pbTree
        {
            width: 80%;
            margin: 0 auto;
            height: 500px;
            border: 1px solid green;
            background-color: #ffffff;
        }
        
        #treeWrapper
        {
            position: relative;
            display: inline-block;
            width: 100%;
            height: 100%;
            left: 0;
            overflow: scroll;
            white-space: nowrap;
            z-index: 1002;
            background-color: #ffffff;
        }
        
        #treeSearch
        {
            position: relative;
            display: inline-block;
            margin-left: 153px;
            width: 200px;
            height: 24px;
        }
        
    </style>
</head>

<body>
<div id="pageWrapper">
    <div>
        <input id="treeSearch" type="text" />
    </div>
    <br />
    <div id="wrap-pbTree">
        <div id="treeWrapper">
            <ul>
                <li class="tab1">tab1</li>
                <li class="tab2">tab2</li>
                <li class="tab3">tab3
                    <ul>
                        <li class="tab3a">tab3a</li>
                        <li class="tab3b">tab3b
                            <ul>
                                <li class="tab3b1">tab3b1
                                    <ul>
                                        <li><a href="#">This is a link</a></li>
                                        <li><a href="#">This is a link</a></li>
                                        <li><a href="#">This is a link</a></li>
                                        <li><a href="#">This is a link</a></li>
                                        <li><a href="#">This is a link</a></li>
                                    </ul>
                                </li>
                                <li class="tab3b2">tab3b2</li>
                            </ul>
                        </li>
                        <li class="tab3c">tab3c</li>
                    </ul>
                </li>
                <li class="tab4">tab4</li>
                <li class="tab5">tab5</li>
                <li class="tab6">tab6
                <ul>
                    <li class="tab6a">tab6a</li>
                    <li class="tab6b">tab6b</li>
                </ul></li>
                <li class="tab7">tab7</li>
                <li class="tab8">tab8</li>
                <li class="tab4">tab4</li>
                <li class="tab5">tab5</li>
                <li class="tab6">tab6
                <ul>
                    <li class="tab6a">tab6a</li>
                    <li class="tab6b">tab6b</li>
                </ul></li>
                <li class="tab7">tab7</li>
                <li class="tab8">tab8</li>
                <li class="tab4">tab4</li>
                <li class="tab5">tab5</li>
                <li class="tab6">tab6
                <ul>
                    <li class="tab6a">tab6a</li>
                    <li class="tab6b">tab6b</li>
                </ul></li>
                <li class="tab7">tab7</li>
                <li class="tab8">tab8</li>
                <li class="tab4">tab4</li>
                <li class="tab5">tab5</li>
                <li class="tab6">tab6
                <ul>
                    <li class="tab6a">tab6a</li>
                    <li class="tab6b">tab6b</li>
                </ul></li>
                <li class="tab7">tab7</li>
                <li class="tab8">tab8</li>
                <li class="tab4">tab4</li>
                <li class="tab5">tab5</li>
                <li class="tab6">tab6
                <ul>
                    <li class="tab6a">tab6a</li>
                    <li class="tab6b">tab6b</li>
                </ul></li>
                <li class="tab7">tab7</li>
                <li class="tab8">tab8</li>
                <li class="tab4">tab4</li>
                <li class="tab5">tab5</li>
                <li class="tab6">tab6
                <ul>
                    <li class="tab6a">tab6a</li>
                    <li class="tab6b">tab6b</li>
                </ul></li>
                <li class="tab7">tab7</li>
                <li class="tab8">tab8</li>
                <li class="tab4">tab4</li>
                <li class="tab5">tab5</li>
                <li class="tab6">tab6
                <ul>
                    <li class="tab6a">tab6a</li>
                    <li class="tab6b">tab6b</li>
                </ul></li>
                <li class="tab7">tab7</li>
                <li class="tab8">tab8</li>
                <li class="tab4">tab4</li>
                <li class="tab5">tab5</li>
                <li class="tab6">tab6
                <ul>
                    <li class="tab6a">tab6a</li>
                    <li class="tab6b">tab6b</li>
                </ul></li>
                <li class="tab7">tab7</li>
                <li class="tab8">tab8</li>
                <li class="tab4">tab4</li>
                <li class="tab5">tab5</li>
                <li class="tab6">tab6
                <ul>
                    <li class="tab6a">tab6a</li>
                    <li class="tab6b">tab6b</li>
                </ul></li>
                <li class="tab7">tab7</li>
                <li class="tab8">tab8</li>
            </ul>
        </div>
    </div>
</div>
</body>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="pbTree/pbTree.js"></script>

<script>
(function($)
{
    $("#treeWrapper").pbTree({
        showall: false,
        
        // "Expand/Collapse" all nodes
        ecButtons: { enable: true },
        
        // Indicate that the node has a child
        showoccupied: { enable: true },
        
        // Add a tooltip to hover above the mouse
        tooltip: {
            enable: true,
            offsetX: 10,
            offsetY: 10
        },
        
        // Add a hover indicator
        hover: { enable: true },
        
        search: {
            enable: true,
            selector: '#treeSearch',
            callback: function(results, count, total)
            {
                console.log(results);
                console.log(count);
                console.log(total);
            }
        },
        
        // Add a selected indicator
        select: { enable: true }
    });
}(jQuery));
</script>

</html>