<?php
/*

TODO:

If your system has PHP installed, you can easily test this script by using PHP's
built-in web server:

$ php -S localhost:8000 -t src/php/

You can then fetch() this script in JavaScript with the following URL:
http://localhost:8000/webservice.php

*/

$jsonData = '{
  "nodes": [
    {
      "id": 0,
      "name": "Node 0",
      "thumbnail": {
        "description": "Random Picture",
        "href": "https://picsum.photos/200/200/?random&a"
      },
      "parent": null
    },
    {
      "id": 1,
      "name": "Node 1",
      "thumbnail": {
        "description": "Another Random Picture",
        "href": "https://picsum.photos/200/200/?random&b"
      },
      "parent": 0
    },
    {
      "id": 2,
      "name": "Node 2",
      "thumbnail": {
        "description": "A Picture Is Random",
        "href": "https://picsum.photos/200/200/?random&c"
      },
      "parent": null
    },
    {
      "id": 3,
      "name": "Node 3",
      "thumbnail": {
        "description": "Picture, Random",
        "href": "https://picsum.photos/200/200/?random&d"
      },
      "parent": 1
    },
    {
      "id": 4,
      "name": "Node 4",
      "thumbnail": {
        "description": "rand(pix)",
        "href": "https://picsum.photos/200/200/?random&e"
      },
      "parent": 5
    },
    {
      "id": 5,
      "name": "Node 5",
      "thumbnail": {
        "description": "pickPix <- rand",
        "href": "https://picsum.photos/200/200/?random&f"
      },
      "parent": null,
      "collapsed": true
    }
  ],
  "settings": [
    {
      "id": 0,
      "name": "Dark Mode",
      "value": false
    }
  ]
}';

$decodedData = json_decode($jsonData, true);

$response = json_encode($decodedData);

echo $response

?>
