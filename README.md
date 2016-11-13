# First steps on a fresh server
I hope i don't need this for a while ;-)
## Create Users
* create main user
* create emergency user ( if i break login things with my main user )
* block root login
 ```vim /etc/ssh/sshd_config```
 ```PermiitRootLogin no```

# setup ssh

## localy 
* create localy a key
```ssh-keygen -t rsa -b 4096 -C "mail@lala.com"```
* copy public key

## on server(as main user):
* go to home folder
* ```mkdir .ssh```
* ```chmod 700 .ssh```
* ```vi .ssh/authorized_keys```
* paste pub-key
* ```chmod 644 .ssh/authorized_keys```

## on server ( as root )

### adapt sshd config
* ```vim /etc/ssh/sshd_config```
* ```RSAAuthentication yes```
* ```PubkeyAuthentication yes```

### sshd reload and boot-settings of service
* systemctl reload sshd
* ja wie war das??
