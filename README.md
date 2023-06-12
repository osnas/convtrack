# convtrack
convert track data from LiveTrack (SailfishOS) to Trackserver (WordPress)

Some time ago I wanted to use LiveTrack with the Trackserver (v4.3.2) WordPress plugin which didn’t work. I wrote the php script to modify the LiveTrack data to an acceptable format.

First it takes the parameters from LiveTrack and creates a link (variable $buildedlink) which “visits” with curl. If you have basic php (or any other scripting/programming language) it is very easy to adjust to your needs. Of course it needs a web server with php support.

Enjoy
