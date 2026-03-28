livepic() {
    php /home/user/Desktop/bot/lg-cloud.php "$@" --image 
}
livefile() {
    php /home/user/Desktop/bot/lg-cloud.php "$@"
}

alias livetroll='for i in {0..100}; do curl https://xxx.livegore.com/sitemap.xml & disown; sleep 0.125; done'
