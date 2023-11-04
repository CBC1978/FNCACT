name: Deploy

# Trigger the workflow on push and
# pull request events on the master branch
on:
push:
branches: ["main"]

# Authenticate to the the server via ssh
# and run our deployment script
jobs:
deploy:
runs-on: ubuntu-latest
steps:
- uses: actions/checkout@v3
- name: Deploy to Server
uses: appleboy/ssh-action@master
with:
host: ${{ secrets.HOST }}
username: ${{ secrets.USERNAME }}
port: ${{ secrets.PORT }}
key: ${{ secrets.SSHKEY }}
passphrase: ""
script: "cd /var/www/html/fncact && ./.scripts/deploy.sh"
