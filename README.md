# lg-cloud
Upload files to LiveGore Cloud with ease! [LiveGore](https://www.livegore.com) generously offers a permanent, unlimited file storage cloud for all the users who carried out the herculean task of making it to 1000 points. Indeed, the great traffick boost 1000-point users bring to the vibrant LiveGore community warrants nothing less than unlimited cloud storage (which can even be used as a CDN for your cringe tranime homepage!)

## How to use
1. Append the contents of [.bashrc](https://github.com/zhang-et-al/lg-cloud/blob/main/.bashrc) to your ~/.bashrc
2. Put [lg-cloud.php](https://github.com/zhang-et-al/lg-cloud/blob/main/lg-cloud.php) anywhere you want. Fill in your email and password. Make sure you have LGBot.php in the same directory.
And you're good to go! Use
```
$ livepic <image1> <image2> ...
```
to upload a PNG, GIF or JPG, and
```livefile <file1> <file2> ...```
to post anything else (albeit all files will be served with `video/mp4` mimetype)
